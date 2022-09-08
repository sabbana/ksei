<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use App\Models\KseiOutgoingLogs;
use Validator;

class KseiController extends Controller
{
	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index(Request $request) {
		$data = KseiOutgoingLogs::all();
		return 'Index ksei logs';
	}

	public function outgoingMessage(Request $request) {
		$payload = $request->data;
		$method = $request->function;
		$type = $request->type;
		$validator = Validator::make($request->all(), [
			'function' => 'required',
			'type' => 'required|in:incomingMessage,OutgoingMessage',
			'data' => 'required|array',
		]);
		if ($validator->fails()) {
			return response()->json(response_meta(400, false, "Invalid parameter", $validator->messages()));
		}
		$sdiExt = 'sdi';
		if ($method == 'StaticDataInvestorAccountCreation') {
			$sdiExt = 'sdia';
		}
		$stringMessage = $this->generateXMLMessage($payload, $method, $type);
		$stringMessageSdi = $this->generateXMLMessage($payload, $method, $type, $sdiExt);
		$host = config('ksei.outgoingIp');
		$port = config('ksei.outgoingPort');
		$timeout = config('ksei.timeout');
		$suffix = config('ksei.suffix');
		$message = $stringMessage.$suffix;
		$noCiff = $this->getcif($payload);
		$extReff = $this->getExternalReference($payload);
		
		// generate xml file
		$filename = $method.'_'.($extReff ?? date('YmdHis'));
		$filenameSdi = 'CREATION_001-'.($noCiff ?? date('YmdHis'));

		$dataLogs = [
			'msg_id' => (string) Str::uuid(),
			'method_ksei' => $method,
			'json_request' => json_encode($request->all()),
			'xml_request' => $stringMessage,
			'no_cif' => $noCiff,
			'external_reference' => $extReff,
			'created_at' => date('Y-m-d H:i:s')
		];
		KseiOutgoingLogs::create($dataLogs);
		try {
			$xmlFile = $this->createFile($stringMessage, $filename);
			$sdiFile = $this->createFile($stringMessageSdi, $filenameSdi, $sdiExt);
			$sk = fsockopen($host, $port, $errnum, $errstr, $timeout);
			if (!is_resource($sk)) {
				return response()->json(response_meta(400, false, 'Connection fail: '.$errnum.' => '.$errstr));
			} else {
				$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
				$conn = socket_connect($socket, $host, $port);
				$sending = socket_send ( $socket , $message, strlen($message) , 0);
				if(!$sending) {
					$errorcode = socket_last_error();
					$errormsg = socket_strerror($errorcode);
					socket_close($socket);
					return response()->json(response_meta(400, false, 'Could not send data: '.$errorcode.' => '.$errormsg));
				}
				socket_close($socket);
			}
			return response()->json(response_detail(['xml_file' => $xmlFile, 'sdi_file' => $sdiFile], 'Success'));
		} catch (\Exception $e) {
			return response()->json(response_meta(400, false, 'Connection failed: '.$e->getMessage()));
		}
	}

	/**
	 * Generate Message XML Data to be sent to KSEI
	 * params: 
	 *      payload data,  key value KSEI Attribute
	 *      name, KSEI method
	 *      type, message type default OutgoingMessage
	 */
	private function generateXMLMessage($payload, $name, $type, $ext = null) {
		$messageData = '';
		if (!empty($payload)) {
			foreach ($payload as $item) {
				if ($ext && in_array($ext, ['sdi', 'sdia'])) {
					if ($item['field'] !== 'externalReference') {
						if ($item['value']) { $messageData .= '<Field name="'.trim($item['field']).'">'.trim($item['value']).'</Field>'; } 
						else { $messageData .= '<Field name="'.trim($item['field']).'"></Field>'; }
					}
				} else {
					if ($item['value']) { $messageData .= '<Field name="'.trim($item['field']).'">'.trim($item['value']).'</Field>'; } 
					else { $messageData .= '<Field name="'.trim($item['field']).'"/>'; }
				}
			}
		}
		if ($ext && in_array($ext, ['sdi', 'sdia'])) {
			return '<Message><Record name="data">'.$messageData.'</Record></Message>';
		}
		return '<Message name="'.$name.'" type="'.$type.'"><Record name="data">'.$messageData.'</Record></Message>';
	}


	/**
	 * Create file txt message sent
	 * params: messageStringXml, filename
	 */

	private function createFile($message, $filename, $ext = 'xml') {
		$fileLocation = storage_path('app/public/xml/'.$filename.'.'.$ext);
		if ($ext != 'xml') {
			$fileLocation = storage_path('app/public/sdi/'.$filename.'.'.$ext);
		}
		$myfile = fopen($fileLocation, "w");
		fwrite($myfile, $message);
		fclose($myfile);
		return $fileLocation;
	}

	/**
	 * Get cif attribute from outgoingMessage
	 */
	private function getCif($payload) {
		$res = null;
		if (!empty($payload)) {
			foreach($payload as $item) {
				if ($item['field'] == 'accountClientCode') {
					$res = $item['value'];
					break;
				}
			}
		}
		return $res;
	}

	/**
	 * Get externalReference attribute from outgoingMessage
	 */
	private function getExternalReference($payload) {
		$res = null;
		if (!empty($payload)) {
			foreach($payload as $item) {
				if ($item['field'] == 'externalReference') {
					$res = $item['value'];
					break;
				}
			}
		}
		return $res;
	}


}

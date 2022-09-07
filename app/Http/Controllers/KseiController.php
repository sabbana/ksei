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
		$stringMessage = $this->generateXMLMessage($payload, $method, $type);
		$host = config('ksei.outgoingIp');
		$port = config('ksei.outgoingPort');
		$timeout = config('ksei.timeout');
		$suffix = config('ksei.suffix');
		$message = $stringMessage.$suffix;
		
		// generate xml file
		$filename = $method.'_'.date('YmdHis');
		if (!empty($payload)) {
			$filename = $method.'_'.$payload[0]['value'];
		}
		$dataLogs = [
			'msg_id' => (string) Str::uuid(),
			'method_ksei' => $method,
			'json_request' => json_encode($request->all()),
			'xml_request' => $stringMessage,
			'response' => null, 
			'status' => 1,
			'no_cif' => $this->getcif($payload),
			'external_reference' => $this->getExternalReference($payload),
			'created_at' => date('Y-m-d H:i:s')
		];
		try {
			$xmlFile = $this->createFile($stringMessage, $filename);
			$sk = fsockopen($host, $port, $errnum, $errstr, $timeout);
			if (!is_resource($sk)) {
				$dataLogs['status'] = 2;
				$dataLogs['response'] = $errnum.":".$errstr;
				KseiOutgoingLogs::create($dataLogs);
				return response()->json(response_meta(400, false, 'Connection fail: '.$errnum.' => '.$errstr));
			} else {
				$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
				$conn = socket_connect($socket, $host, $port);
				$sending = socket_send ( $socket , $message, strlen($message) , 0);
				if(!$sending) {
					$errorcode = socket_last_error();
					$errormsg = socket_strerror($errorcode);
					socket_close($socket);
					$dataLogs['status'] = 2;
					$dataLogs['response'] = $errorcode.":".$errormsg;
					KseiOutgoingLogs::create($dataLogs);
					return response()->json(response_meta(400, false, 'Could not send data: '.$errorcode.' => '.$errormsg));
				}
				socket_close($socket);
				// store logs
				KseiOutgoingLogs::create($dataLogs);
			}
			return response()->json(response_detail(['sent_message_location' => $xmlFile], 'Success'));
		} catch (\Exception $e) {
			$dataLogs['status'] = 2;
			$dataLogs['response'] = $e->getMessage();
			KseiOutgoingLogs::create($dataLogs);
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
	private function generateXMLMessage($payload, $name, $type) {
		$messageData = '';
		if (!empty($payload)) {
			foreach ($payload as $item) {
				if ($item['value']) { $messageData .= '<Field name="'.trim($item['field']).'">'.trim($item['value']).'</Field>'; } 
				else { $messageData .= '<Field name="'.trim($item['field']).'"/>'; }
			}
		}
		return '<Message name="'.$name.'" type="'.$type.'"><Record name="data">'.$messageData.'</Record></Message>';
	}


	/**
	 * Create file txt message sent
	 * params: messageStringXml, filename
	 */

	private function createFile($message, $filename) {
		$fileLocation = storage_path('app/public/xml/'.$filename.'.xml');
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

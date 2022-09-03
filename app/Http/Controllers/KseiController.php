<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Validator;

class KseiController extends Controller
{
	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index(Request $request) {
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
        try {
            $sk = fsockopen($host, $port, $errnum, $errstr, $timeout);
            if (!is_resource($sk)) {
                return response()->json(response_meta(400, false, 'Connection fail: '.$errnum.' => '.$errstr));
            } else {
                $message = $stringMessage.$suffix;
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
            return response()->json(response_detail(['messageXML' => $message], 'Success'));
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
    private function generateXMLMessage($payload, $name, $type) {
        $messageData = '';
        if (!empty($payload)) {
            foreach ($payload as $item) {
                if ($item['value']) { 
                    $messageData .= '<Field name="'.trim($item['field']).'">'.trim($item['value']).'</Field>'; 
                } else {
                    $messageData .= '<Field name="'.trim($item['field']).'/">'; 
                }
            }
        }
        return '<Message name="'.$name.'" type="'.$type.'"><Record name="data">'.$messageData.'</Record></Message>';
    }
}

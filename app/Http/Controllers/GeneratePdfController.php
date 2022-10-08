<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use App\Models\AkunNasabah;
use PDF;
use View;

class GeneratePdfController extends Controller {
	
    /**
	 * Display a listing of the resource.
	 * @return Response
	 */

	public function index(Request $request) {
        echo "index";
    }

    public function fpre(Request $request, $id) {
		$dataNasabah = $this->getDetailNasabah($id);
		$data = [];
		if (!empty($dataNasabah)) {
			$data = $dataNasabah;
		}
		// return response()->json(response_detail($data, 'Success'));
        $filename = 'fpre.pdf';
		$sourcePath = storage_path('app/public/pdf/');
		$fileLocation = $sourcePath.$filename;
		$pdf = PDF::loadView('pdf.fpre', $data)->setPaper(array(0,0,770,1120));
		$pdf->save($fileLocation);
		$fileUrl = config('app.url').'storage/pdf/'.$filename;
        $res['url'] = $fileUrl;
        return response()->json(response_detail($res, 'Success'));
    }

    public function rdn(Request $request, $id) {
        $dataNasabah = $this->getDetailNasabah($id);
		$data = [];
		if (!empty($dataNasabah)) {
			$data = $dataNasabah;
		}
        $filename = 'rdn.pdf';
		$sourcePath = storage_path('app/public/pdf/');
		$fileLocation = $sourcePath.$filename;
		// $pdf = PDF::loadView('pdf.rdn', $data)->setPaper(array(0,0,770,1120));
		$pdf = PDF::loadView('pdf.rdn', $data)->setPaper('A4');
		$pdf->save($fileLocation);
		$fileUrl = config('app.url').'storage/pdf/'.$filename;
        $res['url'] = $fileUrl;
        return response()->json(response_detail($res, 'Success'));
    }

	/**
	 * Get detail nasabah by ID nasabah
	 * @param ID
	 * @return json
	 */
	private function getDetailNasabah($id) {
		$token = 'gFAJtJ4iZkKbnn_wivo1lyp2VcO4C6m3CkS_NZTXQloE2jCorYO8iWPJvvprxxzJVeBu6WF1wjYy';
		$url = 'https://lbfpre.bcasekuritas.co.id/api/detail-account/'.$id;
		$data = Curl::to($url)
			->withContentType('application/json')
			->withHeaders([
				'app_token: ' . $token,
			])->asJson(true)->get();
		if (!empty($data) && $data['response_schema']['response_code'] == "200") {
			return $data['response_output']['data'];
		}
		return false;
	}

	/**
	 * Get image nasabah
	 * @param ID
	 * @return json
	 */
	private function getImage($path) {
		$token = 'gFAJtJ4iZkKbnn_wivo1lyp2VcO4C6m3CkS_NZTXQloE2jCorYO8iWPJvvprxxzJVeBu6WF1wjYy';
		$url = 'https://lbfpre.bcasekuritas.co.id/api/detail-account/'.$id;
		$data = Curl::to($url)
			->withContentType('application/json')
			->withHeaders([
				'app_token: ' . $token,
			])->asJson(true)->get();
		if (!empty($data) && $data['response_schema']['response_code'] == "200") {
			return $data['response_output']['data'];
		}
		return false;
	}
}

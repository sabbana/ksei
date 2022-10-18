<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Storage;
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
		if (isset($data['tanda_tangan']['path_ttd']) && $data['tanda_tangan']['path_ttd']) {
			$ttdPath = str_replace('./asset/', '', $data['tanda_tangan']['path_ttd']);
			$path = public_path('storage/'.$ttdPath);
			$type = pathinfo($path, PATHINFO_EXTENSION);
			$image = file_get_contents($path);
			$base64 = 'data:image/' . $type . ';base64,' . base64_encode($image);
			$data['tanda_tangan']['path_ttd'] = $base64;
		}
		$filename = 'FPRE.pdf';
		if (!Storage::exists('public/document-nasabah/'.$id)) {
			Storage::makeDirectory('public/document-nasabah/'.$id);
		}
		$sourcePath = storage_path('app/public/document-nasabah/'.$id.'/');
		$fileLocation = $sourcePath.$filename;
		$pdf = PDF::loadView('pdf.fpre', $data)->setPaper(array(0,0,770,1120));
		$pdf->save($fileLocation);
		$fileUrl = config('app.url').'storage/document-nasabah/'.$id.'/'.$filename;
		$res['url'] = $fileUrl;
		$res['file_path'] = $fileLocation;
		return response()->json(response_detail($res, 'Success'));
	}

	public function rdn(Request $request, $id) {
		$dataNasabah = $this->getDetailNasabah($id);
		$data = [];
		if (!empty($dataNasabah)) {
			$data = $dataNasabah;
		}
		if (isset($data['tanda_tangan']['path_ttd']) && $data['tanda_tangan']['path_ttd']) {
			$ttdPath = str_replace('./asset/', '', $data['tanda_tangan']['path_ttd']);
			$path = public_path('storage/'.$ttdPath);
			$type = pathinfo($path, PATHINFO_EXTENSION);
			$image = file_get_contents($path);
			$base64 = 'data:image/' . $type . ';base64,' . base64_encode($image);
			$data['tanda_tangan']['path_ttd'] = $base64;
		}
		$filename = 'Formulir Pembukaan RDN.pdf';
		if (!Storage::exists('public/document-nasabah/'.$id)) {
			Storage::makeDirectory('public/document-nasabah/'.$id);
		}
		$sourcePath = storage_path('app/public/document-nasabah/'.$id.'/');
		$fileLocation = $sourcePath.$filename;
		$pdf = PDF::loadView('pdf.rdn', $data)->setPaper(array(0,0,700,1100));
		$pdf->save($fileLocation);
		$fileUrl = config('app.url').'storage/document-nasabah/'.$id.'/'.$filename;
		$res['url'] = $fileUrl;
		$res['file_path'] = $fileLocation;
		return response()->json(response_detail($res, 'Success'));
	}

	/**
	 * Get detail nasabah by ID nasabah
	 * @param ID
	 * @return json
	 */
	private function getDetailNasabah($id) {
		$url = config('app.api_url').'detail-account/'.$id;
		$data = Curl::to($url)
			->withContentType('application/json')
			->withHeaders([
				'app_token: ' . config('ksei.appToken'),
			])->asJson(true)->get();
		if (!empty($data) && $data['response_schema']['response_code'] == "200") {
			return $data['response_output']['data'];
		}
		return false;
	}

}

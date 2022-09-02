<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function fpre() {
        $data = [];
        $filename = mt_rand(0,9999).'fpre.pdf';
		$sourcePath = storage_path('app/public/pdf/');
		$fileLocation = $sourcePath.$filename;
		$pdf = PDF::loadView('pdf.fpre', $data)->setPaper('A4');
		$pdf->save($fileLocation);
		$fileUrl = config('app.url').'/storage/pdf/'.$filename;
		if (config('app.is_share_asset')) {
			$destinationPath = config('app.asset_path').'public/pdf/';
			$this->windowsSync($sourcePath, $destinationPath, $filename);
			$fileUrl = config('app.asset_url').'public/pdf/'.$filename;
		}
        $data['url'] = $fileUrl;
        return response()->json(response_detail($data, 'Success'));
    }

    public function rdn() {
        echo "RDN";
    }
}

<?php
namespace App\Http\Controllers;
use App\Detai;

class ModelController extends Controller {
public function getDetai() {
	$detai = Detai::getDetai();
	$view = array('ten_de_tai' => $detai);
	return view('list-subject', compact('detai'));
}
}
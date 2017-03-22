<?php
namespace App;
use Illuminate\Support\Facades\DB;

class Detai {
public static function getDetai() {
	$value=DB::table('detai')->orderBy('id', 'asc')->get();
	return $value;
}}
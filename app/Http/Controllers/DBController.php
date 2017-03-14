<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

/**
 * Description of DBController
 *
 * @author prince
 */
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DBController extends Controller {

    //put your code here
    public function index() {
        $users = DB::select('select * from users', [1]);
        return view('user.index', ['users' => $users]);
    }

}

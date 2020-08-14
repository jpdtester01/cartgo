<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function index(Request $req){
    	$req->session()->flush();
    	return redirect('/');
    }
}

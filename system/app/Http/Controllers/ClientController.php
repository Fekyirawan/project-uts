<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

class ClientController extends Controller{

function client(){
		return view('client.index');
	}

	function blog(){
		return view('client.blog');
	}

}
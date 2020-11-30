<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

	function base(){
		return view('template.base');
	}

	function showproduk(){
		return view('template.produk');
	}


	function client(){
		return view('client.client');
	}

		function test($produk){
			echo "Nama produk $produk";
	
	}


}
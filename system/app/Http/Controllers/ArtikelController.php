<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

class ArtikelController extends Controller{

	function index(){
		$user = request()->user();
		$data['list_artikel'] = $user->artikel;
		
		return view('artikel.index', $data);
	}
	function create(){
		return view('artikel.create');
	}
	function store(){
		$artikel = new Artikel;
		$artikel->id_user = request()->user()->id;
		$artikel->nama = request('nama');
		$artikel->stok = request('stok');
		$artikel->harga = request('harga');
		$artikel->berat = request('berat');
		$artikel->deskripsi = request('deskripsi');
		
		$artikel->save();

		return redirect('artikel')->with('success', 'Data Berhasil Ditambahkan');
		
	}

	function show(Artikel $artikel){
		$data['artikel'] = artikel;
		return view('artikel.show', $data);
	}

	function edit(Artikel $artikel){
		$data['artikel'] = $artikel;
		return view('artikel.edit', $data);
	}

	function update(Artikel $artikel){
		$artikel->nama = request('nama');
		$artikel->stok = request('stok');
		$artikel->harga = request('harga');
		$artikel->berat = request('berat');
		$artikel->deskripsi = request('deskripsi');
		
		$artikel->save();

		return redirect('artikel')->with('warning', 'Data Berhasil Diupdate');	
	}

	function destroy(Artikel $artikel){
		$artikel->delete();

		return redirect('artikel')->with('danger', 'Data Berhasil Dihapus');	
	}

}


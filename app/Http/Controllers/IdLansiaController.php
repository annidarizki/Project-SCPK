<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IdLansiaController extends Controller
{
    public function indexlansia(){
    	$identitaslansia = DB::table('identitas_lansia')->get();

    	return view('indexlansia',['identitas_lansia' => $identitaslansia]);

    }

    public function tambahlansia(){
    	return view ('tambahlansia');
    }

    public function storelansia(Request $request){
    	DB::table('identitas_lansia')->insert([
    	'nama' => $request->nama,
    	'tgl_lahir' => $request->tgl_lahir,
    	'tempat_lahir' => $request->tempat_lahir,
    	'alamat' => $request->alamat,
    	'jenis_kelamin' => $request->jenis_kelamin,
    	'no_telp' => $request->no_telp
    ]);
    	return redirect('/idlansia');
    }


    // method untuk edit data pegawai
	public function editlansia($id)
	{
	// mengambil data pegawai berdasarkan id yang dipilih
	$identitas_lansia = DB::table('identitas_lansia')->where('id_lansia',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editlansia',['identitas_lansia' => $identitas_lansia]);
	}


    public function updatelansia(Request $request){
    	DB::table('identitas_lansia')->where('id_lansia',$request->id)->update([
    	'nama' => $request->nama,
    	'tgl_lahir' => $request->tgl_lahir,
    	'tempat_lahir' => $request->tempat_lahir,
    	'alamat' => $request->alamat,
    	'jenis_kelamin' => $request->jenis_kelamin,
    	'no_telp' => $request->no_telp
    ]);
    	return redirect('/idlansia');
    }

    public function hapuslansia($id){
    	DB::table('identitas_lansia')->where('id_lansia',$id)->delete();
    	return redirect('/idlansia');
    }

}

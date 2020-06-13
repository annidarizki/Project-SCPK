<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IdKaderController extends Controller
{
    public function indexkader(){
    	$identitaskader = DB::table('identitas_kader')->get();

    	return view('indexkader',['identitas_kader' => $identitaskader]);

    }

    public function tambahkader(){
    	return view ('tambahkader');
    }

    public function storekader(Request $request){
    	DB::table('identitas_kader')->insert([
    	'nama' => $request->nama,
    	'ttl_kader' => $request->ttl_kader,
    	'jenis_kelamin' => $request->jenis_kelamin,
    	'umur' => $request->umur,
    	'alamat' => $request->alamat,
    	'no_telp' => $request->no_telp
    ]);
    	return redirect('/idkader');
    }


    // method untuk edit data pegawai
	public function editkader($id)
	{
	// mengambil data pegawai berdasarkan id yang dipilih
	$identitas_kader = DB::table('identitas_kader')->where('id_kader',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editkader',['identitas_kader' => $identitas_kader]);
	}


    public function updatekader(Request $request){
    	DB::table('identitas_kader')->where('id_kader',$request->id)->update([
    	'nama' => $request->nama,
    	'ttl_kader' => $request->ttl_kader,
    	'jenis_kelamin' => $request->jenis_kelamin,
    	'umur' => $request->umur,
    	'alamat' => $request->alamat,
    	'no_telp' => $request->no_telp
    ]);
    	return redirect('/idkader');
    }

    public function hapuskader($id){
    	DB::table('identitas_kader')->where('id_kader',$id)->delete();
    	return redirect('/idkader');
    }

}

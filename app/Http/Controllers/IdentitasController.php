<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IdentitasController extends Controller
{
    public function index(){
    	$identitaspendamping = DB::table('identitas_pendamping')->get();

    	return view('index',['identitas_pendamping' => $identitaspendamping]);

    }

    public function tambah(){
    	return view ('tambah');
    }

    public function store(Request $request){
    	DB::table('identitas_pendamping')->insert([
    		'nama' => $request->nama
    	]);
    	return redirect('/identitas');
    }


    // method untuk edit data pegawai
	public function edit($id)
	{
	// mengambil data pegawai berdasarkan id yang dipilih
	$identitas_pendamping = DB::table('identitas_pendamping')->where('id_pendamping',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['identitas_pendamping' => $identitas_pendamping]);

}


    public function update(Request $request){
    	DB::table('identitas_pendamping')->where('id_pendamping',$request->id)->update([
    	'nama' => $request->nama
    ]);
    	return redirect('/identitas');
    }

    public function hapus($id){
    	DB::table('identitas_pendamping')->where('id_pendamping',$id)->delete();
    	return redirect('/identitas');
    }

    
}

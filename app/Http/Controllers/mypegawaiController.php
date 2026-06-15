<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mypegawaiController extends Controller
{
    public function indexMypegawai()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); --> JIKA TIDAK PAKAI PAGINATE
        $mypegawai = DB::table('mypegawai')->get();

    	// mengirim data pegawai ke view index
    	return view('index_mypegawai', ['mypegawai' => $mypegawai]);

    }

    // method untuk menampilkan view form tambah pegawai
	public function tambahMypegawai()
	{

		// memanggil view tambah
		return view('tambah_mypegawai');

	}

	// method untuk insert data ke table pegawai
	public function storeMypegawai(Request $request)
	{
		// insert data ke table pegawai
		DB::table('mypegawai')->insert([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
            'departemen' => $request->departemen,
		]);
		// alihkan halaman ke halaman keranjang
		return redirect('/eas');

	}

    //method untuk view record
    public function viewMypegawai($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
		$mypegawai = DB::table('mypegawai')->where('kodepegawai',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('view_mypegawai',['mypegawai' => $mypegawai]);
    }

}

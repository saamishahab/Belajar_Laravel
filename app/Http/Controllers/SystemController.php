<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index(){
        $nama = "Founder : Muhamad Saami";
        $program = ["Java","Android","PHP","Laravel","Web","FullStack"];
        return view('codefee',['nama'=>$nama, 'prog'=>$program]);
    }

    public function penjumlahan() {
        $angka1 = "5";
        $angka2 = "7";
        $hasil = $angka1 + $angka2;

        return view('codefee',['hasil'=>$hasil]);
    }

    public function request($nama){
        return $nama;
    }

    public function inputdata(){
        return view('input');
    }

    public function proses(Request $request) {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $program = $request->input('program');
        $belajar = $request->input('belajar');
        return "Nama : ".$nama.", Alamat : ".$alamat.", Bahasa program yang dikuasai : ".$program.", Saat ini sedang belajar : ".$belajar;
    }

}

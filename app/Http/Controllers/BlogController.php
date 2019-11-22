<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
        //
    public function home(){
        return view('master_home');
    }

    public function tentang(){
        return view('master_tentang');
    }

    public function kontak(){
        return view('master_kontak');
    }

    public function produk(){
        return view('master_product');
    }

    public function service(){
        return view('master_service');
    }
    
    public function get_admin(){
        $admin = DB::table('admin')->paginate(10);

        return view('master_data_admin',['data_admin'=>$admin]);
    }

    public function tambah_admin(){
        return view('master_data_tambah_admin');
    }

    public function process_simpan_admin(Request $request){
        DB::table('admin')->insert([
            'nama'=> $request->nama_admin,
            'email'=> $request->email_admin,
            'telp'=> $request->telp_admin,
            'image'=> "0",
            'username'=>$request->username_admin,
            'password'=>$request->pass_admin
        ]);
        return redirect('/blog/admin');
    }

    public function edit_admin($id){
        $admin = DB::table('admin')->where('id',$id)->get();
        return view('master_data_edit_admin',['data_admin' =>$admin]);
    }

    public function update_admin(Request $request){
        DB::table('admin')->where('id',$request->id)->update([
            'nama'=> $request->nama_admin,
            'email'=> $request->email_admin,
            'telp'=> $request->telp_admin,
            'image'=> "0",
            'username'=>$request->username_admin,
            'password'=>$request->pass_admin
        ]);

        return redirect('/blog/admin');
    }

    public function hapus_admin($id)
        {
            // menghapus data pegawai berdasarkan id yang dipilih
            DB::table('admin')->where('id',$id)->delete();
                
            // alihkan halaman ke halaman pegawai
            return redirect('/blog/admin');
        }

        
    public function cari_admin(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$admin = DB::table('admin')
		->where('nama','like',"%".$cari."%")
		->paginate(100);
 
    		// mengirim data pegawai ke view index
		return view('master_data_admin',['data_admin' => $admin]);
 
	}

}

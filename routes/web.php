<?php

//Group memanggil View

Route::get('/', 'BlogController@home');
Route::get('/Salam',function() {
    return "Halo, Codefee disini , Selamat belajar Laravel";
});
Route::get('/Codefee', function(){
    return view('codefee');
});

// Group memanggil Controller
Route::get('/Index','SystemController@index');
Route::get('/Penjumlahan','SystemController@penjumlahan');
Route::get('/nama_lengkap/{nama_lengkap}','SystemController@request');
Route::get('/input_data','SystemController@inputdata');
Route::post('/input_data/proses','SystemController@proses');

Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang','BlogController@tentang');
Route::get('/blog/kontak','BlogController@kontak');
Route::get('/blog/service','BlogController@service');
Route::get('/blog/product','BlogController@produk');

//crud
Route::get('/blog/admin','BlogController@get_admin'); // get admin
Route::get('/blog/tambah_admin','BlogController@tambah_admin'); //tambah admin
Route::post('/admin/process','BlogController@process_simpan_admin'); // proces tambah admin
Route::get('/blog/edit_admin/{id}','BlogController@edit_admin'); //edit admin
Route::post('/admin/update','BlogController@update_admin'); //proces update admin
Route::get('/admin/hapus/{id}','BlogController@hapus_admin'); //proces hapus admin
Route::get('/admin/cari','BlogController@cari_admin'); //proces cari admin
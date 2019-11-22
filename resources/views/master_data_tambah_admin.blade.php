@extends('master')

@section('judul_halaman','Tambah Admin')

@section('konten')

<p> Tambah Admin </p>

<br/>
<form action="/admin/process" method="post">

    {{ csrf_field() }}
    <input class="form-control form-control-sm" placeholder="Nama" type="text" name="nama_admin" required="required"><br/>
    <input class="form-control form-control-sm" placeholder="Email" type="email" name="email_admin" required="required"><br/>
    <input class="form-control form-control-sm" placeholder="No Handphone" type="number" name="telp_admin" required="required"><br/>
    <input class="form-control form-control-sm" placeholder="Username" type="text" name="username_admin" required="required"><br/>
    <input class="form-control form-control-sm" placeholder="Password" type="password" name="pass_admin" required="required"><br/>
    <input class="btn btn-success" type="submit" value="Simpan">
    <a class="btn btn-danger" href="/blog/admin"> Kembali</a>
</form>

    
@endsection
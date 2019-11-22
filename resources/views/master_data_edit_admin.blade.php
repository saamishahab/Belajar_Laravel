@extends('master')

@section('judul_halaman','Tambah Admin')

@section('konten')

<p> Tambah Admin </p>

<br/>

@foreach ($data_admin as $item)
<form action="/admin/update" method="post">

    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$item->id}}"><br/>
    <input class="form-control form-control-sm" placeholder="Nama" type="text" name="nama_admin" required="required" value="{{$item->nama}}"><br/>
    <input class="form-control form-control-sm" placeholder="Email" type="email" name="email_admin" required="required" value="{{$item->email}}"><br/>
    <input class="form-control form-control-sm" placeholder="No Handphone" type="text" name="telp_admin" required="required" value="{{$item->telp}}"><br/>
    <input class="form-control form-control-sm" placeholder="Username" type="text" name="username_admin" required="required" value="{{$item->username}}"><br/>
    <input class="form-control form-control-sm" placeholder="Password" type="password" name="pass_admin" required="required" value="{{$item->password}}"><br/>
    <input class="btn btn-success" type="submit" value="Simpan">
    <a class="btn btn-danger" href="/blog/admin"> Kembali</a>
</form>
@endforeach

    
@endsection
@extends('master')

@section('judul_halaman','Data Admin')

@section('konten')
<br/>
	<form action="/admin/cari" method="GET" class="form-inline justify-content-end">
		<input class="form-control" type="text" name="cari" placeholder="Cari Admin .." value="{{ old('cari') }}">
		<input class="btn btn-primary ml-3" type="submit" value="CARI">
	</form>
		
	<br/>

<a class="btn btn-success btn-sm" href="/blog/tambah_admin"> Tambah Admin Baru</a><br/><br/>

<table class="table table-hover">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>No Handphone</th>
        <th>Action</th>
    </tr>
    @foreach ($data_admin as $item)

    <tr>

        <td>{{$item->nama}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->telp}}</td>

        <td>
        <a class="btn btn-primary btn-sm" href="/blog/edit_admin/{{$item->id}}">Edit</a>
        
        <a class="btn btn-danger btn-sm" href="/admin/hapus/{{$item->id}}" onclick="return confirm('Are you sure?')">Hapus</a>
        </td>
    </tr>
        
    @endforeach
</table>

<br/>
	<!-- Halaman : {{ $data_admin->currentPage() }} <br/> -->
	Jumlah Data : {{ $data_admin->total() }} <br/><br/>
	<!-- Data Per Halaman : {{ $data_admin->perPage() }} <br/>  -->
	

  <ul class="pagination justify-content-end">
  {{ $data_admin->links() }}
  </ul>

@endsection
@extends('layouts.app')

@section('content')
<center><h1 class="mb-5">TABLE MAHASISWA</h1></center>
<a href="" class="btn btn-primary mb-2">+Tambah Data</a>
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Npm</th>
        <th scope="col">Alamat</th>
        <th scope="col">Fakultas</th>
        <th>Aksi</th>
      </tr>
    </thead>
    @foreach ($mahasiswas as $mahasiswa)
      <tbody>
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$mahasiswa->name}}</td>
          <td>{{$mahasiswa->npm}}</td>
          <td>{{$mahasiswa->alamat}}</td>
          <td>{{$mahasiswa->fakultas->name}}</td>
          <td>
            <a href="" class="btn btn-warning">Edit</a>
            <form action="" class="d-inline">
              <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
          </td>
        </tr>
      </tbody>
    @endforeach
  </table>
@endsection
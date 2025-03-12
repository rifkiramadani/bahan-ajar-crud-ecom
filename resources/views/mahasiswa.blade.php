@extends('layouts.app')

@section('content')
<h1>TABLE MAHASISWA</h1>
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Npm</th>
        <th scope="col">Alamat</th>
        <th scope="col">Fakultas</th>
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
        </tr>
      </tbody>
    @endforeach
  </table>
@endsection
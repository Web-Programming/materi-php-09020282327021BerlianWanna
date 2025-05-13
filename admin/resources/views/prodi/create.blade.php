@extends('layout.master')

@section('title', 'Tambah Program Studi')

@section('content')
   <form method="post" action="{{ url(path: 'post') }}">
  @csrf
  <div class="mb-3">
    <label>Nama Prodi</label>
    <input type="text" name="nama_prodi" class="form-control">
  </div>
  <div class="mb-3">
    <label>Kode Prodi</label>
    <input type="text" name="kode_prodi" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection

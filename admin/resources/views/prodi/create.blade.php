@extends('layout.master')

@section('title', 'Tambah Program Studi')

@section('content')
    <form action="{{ route('prodi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_prodi">Nama Prodi</label>
            <input type="text" name="nama_prodi" id="nama_prodi" class="form-control" placeholder="Masukkan nama prodi">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

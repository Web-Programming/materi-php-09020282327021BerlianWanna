@extends('layout.master')

@section('title', 'Program Studi')

@section('content')
    <p>Ini Halaman Prodi</p>
     <a href="{{url('prodi/create')}}" class="btn btn-success">+ add prodi</a>
    <table class="table table-bordered mt-3">
        
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Prodi</th>
                <th>Kode Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
           
            <br>
            
            @foreach ($listprodi as $prodi )
            

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $prodi->nama}}</td>
                    <td>{{ $prodi->kode_prodi }}</td>
                    <td>
                        <a href="{{ route('prodi.edit', $prodi->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('prodi.destroy', $prodi->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

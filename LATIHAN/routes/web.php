<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login', ['name' => 'berlian wanna',
                          'email' => 'berlian.wanna@gmail.com',
                          'alamat' => 'RamaKasih IV'
]
);
});
Route::get('/berita/{id}/{judul?}', function ($id, $judul = judul) {
    return view('berita', ['id' => $id, 'judul' => $judul]);
});

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

# KATEGORI
Route::get('kategori-produk', 'KategoriProdukController@index');
Route::get('kategori-produk/tambah', 'KategoriProdukController@tambah');
Route::post('kategori-produk/simpan', 'KategoriProdukController@simpan');
Route::get('kategori-produk/ubah/{id}', 'KategoriProdukController@ubah');
Route::put('kategori-produk/perbarui/{id}', 'KategoriProdukController@perbarui');
Route::get('kategori-produk/hapus/{id}', 'KategoriProdukController@hapus');

# PRODUK
Route::get('produk', 'ProdukController@index');
Route::get('produk/tambah', 'ProdukController@tambah');
Route::post('produk/simpan', 'ProdukController@simpan');
Route::get('produk/ubah/{id}', 'ProdukController@ubah');
Route::put('produk/perbarui/{id}', 'ProdukController@perbarui');
Route::get('produk/hapus/{id}', 'ProdukController@hapus');

# TRANSAKSI
Route::get('transaksi', 'TransaksiController@index');
Route::get('transaksi/tambah', 'TransaksiController@tambah');
Route::post('transaksi/simpan', 'TransaksiController@simpan');
Route::get('transaksi/ubah/{id}', 'TransaksiController@ubah');
Route::put('transaksi/perbarui/{id}', 'TransaksiController@perbarui');
Route::get('transaksi/hapus/{id}', 'TransaksiController@hapus');

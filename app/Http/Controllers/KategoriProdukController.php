<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;

class KategoriProdukController extends Controller
{

    /**
     * Menampilkan halaman kategori produk
     */
    public function index()
    {
        $dataKategori = KategoriProduk::all();
        return view('kategori-produk.index', [
            'dataKategori' => $dataKategori
        ]);
    }

    /**
     * Menampilkan halaman tambah kategori produk
     */
    public function tambah()
    {
        return view('kategori-produk.tambah');
    }

    /**
     * Menyimpan data kategori ke database
     */
    public function simpan()
    {
        $namaKategori = request('nama_kategori');
        KategoriProduk::create([
            'nama_kategori' => $namaKategori
        ]);
        return redirect('kategori-produk');
    }

    /**
     * Menampilkan halaman ubah kategori produk
     */
    public function ubah($id)
    {
        $kategoriProduk = KategoriProduk::where('id', $id)->first();
        return view('kategori-produk.ubah', [
            'kategoriProduk' => $kategoriProduk,
        ]);
    }

    /**
     * Memperbarui data kategori produk ke database
     */
    public function perbarui($id)
    {
        $namaKategori = request('nama_kategori');
        KategoriProduk::where('id', $id)->update([
            'nama_kategori' => $namaKategori
        ]);
        return redirect('kategori-produk');
    }

    /**
     * Menghapus data kategori produk dari database
     */
    public function hapus($id)
    {
        KategoriProduk::where('id', $id)->delete();
        return redirect('kategori-produk');
    }
}

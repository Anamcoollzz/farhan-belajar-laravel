@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">
          Ubah kategori produk
        </h4>
        <a href="{{ url('kategori-produk') }}" class="btn btn-primary float-right">Lihat Data</a>
      </div>
      <div class="card-body">
        <form action="{{ url('kategori-produk/perbarui/'.$kategoriProduk->id) }}" method="POST">
          @csrf
          @method('put')
          <div class="form-group">
            <label for="namaKategori">Nama Kategori</label>
            <input value="{{ $kategoriProduk->nama_kategori }}" type="text" name="nama_kategori" placeholder="Nama Kategori" id="namaKategori" class="form-control">
          </div>

          <button type="submit" class="btn btn-primary">Perbarui</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

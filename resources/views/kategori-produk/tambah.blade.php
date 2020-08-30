@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">
          Tambah kategori produk
        </h4>
        <a href="{{ url('kategori-produk') }}" class="btn btn-primary float-right">Lihat Data</a>
      </div>
      <div class="card-body">
        <form action="{{ url('kategori-produk/simpan') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="namaKategori">Nama Kategori</label>
            <input type="text" name="nama_kategori" placeholder="Nama Kategori" id="namaKategori" class="form-control">
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

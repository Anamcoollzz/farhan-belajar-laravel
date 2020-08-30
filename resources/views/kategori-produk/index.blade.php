@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">
          Data kategori produk
        </h4>
        <a href="{{ url('kategori-produk/tambah') }}" class="btn btn-primary float-right">Tambah</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hovered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($dataKategori as $dk)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dk->nama_kategori  }}</td>
                <td>
                  <a href="{{ url('kategori-produk/ubah/'.$dk->id) }}" class="btn btn-primary">Ubah</a>
                  <a href="{{ url('kategori-produk/hapus/'.$dk->id) }}" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

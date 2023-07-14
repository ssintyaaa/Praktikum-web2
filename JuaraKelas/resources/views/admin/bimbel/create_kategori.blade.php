@extends('admin.layout.app')
@section('content')

<h2 class="text-center p-3">Form Tambah Data Kategori Produk</h2>
<form method="POST" action="{{ url('admin/kategori/store') }}">
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="nama_kategori" class="col-4 col-form-label">Nama Kategori</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-address-card"></i>
            </div>
          </div>
          <input id="nama_kategori" name="nama_kategori" placeholder="Masukan Nama Kategori" type="text" class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
@endsection
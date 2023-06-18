@extends('admin.layout.app')
@section('content')

<h2 class="text-center p-3">Form Edit Data Kategori Produk</h2>

@foreach ($kategori_produk as $value)


<form method="POST" action="{{ url('admin/kategori/update/'. $value->id) }}">
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama</label>
      <div class="col-8">
          <input id="nama" name="nama" placeholder="Masukan Nama Kategori" value="{{ $value->nama }}" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Edit</button>
      </div>
    </div>
  </form>
  @endforeach
@endsection
@extends('admin.layout.app')
@section('content')
<!-- Simpan kode form disini -->
@foreach($materi as $value)
<form method="POST" action="{{ url('admin/bimbel/update_materi/'.$value->id ) }}">
    {{ csrf_field() }}
    <h4 style="text-align: center">Form Edit Data Materi</h4>
    <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" type="text" class="form-control" value="{{ $value->kode }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama_materi" class="col-4 col-form-label">Nama Materi</label> 
    <div class="col-8">
      <input id="nama_materi" name="nama_materi" type="text" class="form-control" value="{{ $value->nama_materi }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">deskripsi</label> 
    <div class="col-8">
      <input id="deskripsi" name="deskripsi" type="text" class="form-control" value="{{ $value->deskripsi }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="durasi_jam" class="col-4 col-form-label">Durasi Jam</label> 
    <div class="col-8">
      <input id="durasi_jam" name="durasi_jam" type="text" class="form-control" value="{{ $value->durasi_jam }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="biaya" class="col-4 col-form-label">Biaya</label> 
    <div class="col-8">
      <input id="biaya" name="biaya" type="text" class="form-control" value="{{ $value->biaya }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="kategori_kursus_id" class="col-4 col-form-label">Kategori Kursus</label> 
    <div class="col-8">
      <select id="kategori_kursus_id" name="kategori_kursus_id" class="custom-select">
      @foreach ($kategori_kursus as $value)
      <option value="{{$value->id}}">{{$value->nama_kategori}}</option>
      @endforeach
      </select>
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
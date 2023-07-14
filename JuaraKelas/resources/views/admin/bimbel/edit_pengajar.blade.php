@extends('admin.layout.app')
@section('content')
<!-- Simpan kode form disini -->
@foreach($pengajar as $value)
<form method="POST" action="{{ url('admin/bimbel/update_pengajar/'. $value->id) }}">
    {{ csrf_field() }}
    <h4 style="text-align: center">Form Edit Pengajar</h4>
    <div class="form-group row">
    <label for="nip" class="col-4 col-form-label">NIP</label> 
    <div class="col-8">
      <input id="nip" name="nip" type="text" class="form-control" value="{{ $value->nip }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pengajar</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" value="{{ $value->nama }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-4 col-form-label">Gender</label> 
    <div class="col-8">
      <input id="gender" name="gender" type="text" class="form-control" value="{{ $value->gender }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="hp" class="col-4 col-form-label">No Handphone</label> 
    <div class="col-8">
      <input id="hp" name="hp" type="text" class="form-control" value="{{ $value->hp }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control" value="{{ $value->email }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <input id="alamat" name="alamat" type="text" class="form-control" value="{{ $value->alamat }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endforeach
@endsection
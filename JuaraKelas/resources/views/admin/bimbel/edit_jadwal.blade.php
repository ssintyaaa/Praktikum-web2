@extends('admin.layout.app')
@section('content')
<!-- Simpan kode form disini -->
@foreach($penjadwalan as $value)
<form method="POST" action="{{ url('admin/bimbel/update_jadwal/'. $value->id) }}">
    {{ csrf_field() }}
    <h4 style="text-align: center">Form Tambah Data</h4>
    <div class="form-group row">
    <label for="kode_kelas" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode_kelas" name="kode_kelas" type="text" class="form-control" value="{{ $value->kode_kelas }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="kelas" class="col-4 col-form-label">Kelas</label> 
    <div class="col-8">
      <input id="kelas" name="kelas" type="text" class="form-control" value="{{ $value->kelas }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="hari" class="col-4 col-form-label">Hari</label> 
    <div class="col-8">
      <input id="hari" name="hari" type="text"  class="form-control" value="{{ $value->hari }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_mulai" class="col-4 col-form-label">Tanggal Mulai</label> 
    <div class="col-8">
      <input id="tgl_mulai" name="tgl_mulai" type="date" class="form-control" value="{{ $value->tgl_mulai }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_akhir" class="col-4 col-form-label">Tanggal Akhir</label> 
    <div class="col-8">
      <input id="tgl_akhir" name="tgl_akhir" type="date" class="form-control" value="{{ $value->tgl_akhir }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="jam_mulai" class="col-4 col-form-label">Jam Mulai</label> 
    <div class="col-8">
      <input id="jam_mulai" name="jam_mulai" type="time" class="form-control" value="{{ $value->jam_mulai }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="jam_akhir" class="col-4 col-form-label">Jam Akhir</label> 
    <div class="col-8">
      <input id="jam_akhir" name="jam_akhir" type="time" class="form-control" value="{{ $value->jam_akhir }}" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="materi_kursus_id" class="col-4 col-form-label">ID Materi</label> 
    <div class="col-8">
      <select id="materi_kursus_id" name="materi_kursus_id" class="custom-select">
      @foreach ($materi as $value)
        <option value="{{ $value->id }}">{{ $value->nama_materi }}</option>
      @endforeach
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="pengajar_id" class="col-4 col-form-label">ID Pengajar</label> 
    <div class="col-8">
      <select id="pengajar_id" name="pengajar_id" class="custom-select">
      @foreach ($pengajar as $value)
        <option value="{{ $value->id }}">{{ $value->nama }}</option>
      @endforeach
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="peserta_id" class="col-4 col-form-label">ID Peserta</label> 
    <div class="col-8">
      <select id="peserta_id" name="peserta_id" class="custom-select">
      @foreach ($peserta as $value)
        <option value="{{ $value->id }}">{{ $value->nama }}</option>
      @endforeach
      </select>
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
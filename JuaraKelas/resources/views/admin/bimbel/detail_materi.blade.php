@extends('admin.layout.app')
@section('content')

<h2>Detail Materi</h2>
<ul>
    <li>Kode : {{ $materi->kode }}</li>
    <li>Nama Materi : {{ $materi->nama_materi }}</li>
    <li>Deskripsi : {{ $materi->deskripsi }}</li>
    <li>Durasi Jam : {{ $materi->durasi_jam }}</li>
    <li>Biaya : {{ $materi->biaya }}</li>
    <li>Kategori Kursus : {{ $materi->kategori_kursus_id }}</li>
</ul>
<a class="btn btn-outline-dark mt-auto" href="{{ url('admin/materi') }}">
<i class="fa-solid fa-backward fa-fade" style="color: #5F9EA0"></i></a>

@endsection
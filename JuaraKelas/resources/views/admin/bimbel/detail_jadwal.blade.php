@extends('admin.layout.app')
@section('content')

<h2>Detail Penjadwalan Kelas</h2>
<ul>
@foreach ($penjadwalan as $value)
    <li>Kode Kelas : {{ $value->kode_kelas }}</li>
    <li>Kelas : {{ $value->kelas }}</li>
    <li>Hari : {{ $value->hari }}</li>
    <li>Tanggal Mulai : {{ $value->tgl_mulai }}</li>
    <li>Tanggal Akhir : {{ $value->tgl_akhir }}</li>
    <li>Jam Mulai : {{ $value->jam_mulai }}</li>
    <li>Jam Akhir : {{ $value->jam_akhir }}</li>
    <li>Materi Kursus : {{ $value->nama_mtr }}</li>
    <li>Pengajar : {{ $value->nama_pengajar }}</li>
    <li>Peserta : {{ $value->nama_peserta }}</li>
    @endforeach
</ul>
<a class="btn btn-outline-dark mt-auto" href="{{ url('admin/penjadwalan') }}">
<i class="fa-solid fa-backward fa-fade" style="color: #5F9EA0"></i></a>

@endsection

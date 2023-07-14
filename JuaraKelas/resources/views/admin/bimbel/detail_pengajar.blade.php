@extends('admin.layout.app')
@section('content')

<h2>Detail Pengajar</h2>
<ul>
    <li>NIP : {{ $pengajar->nip }}</li>
    <li>Nama Pengajar : {{ $pengajar->nama }}</li>
    <li>Gender : {{ $pengajar->gender }}</li>
    <li>No Handphone : {{ $pengajar->hp }}</li>
    <li>Email : {{ $pengajar->email }}</li>
    <li>Alamat : {{ $pengajar->alamat }}</li>
</ul>
<a class="btn btn-outline-dark mt-auto" href="{{ url('admin/pengajar') }}">
<i class="fa-solid fa-backward fa-fade" style="color: #5F9EA0"></i></a>

@endsection

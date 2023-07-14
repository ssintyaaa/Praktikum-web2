@extends('admin.layout.app')
@section('content')

<h2>Detail Peserta</h2>
<ul>
    <li>Nama Peserta : {{ $peserta->nama }}</li>
    <li>Gender : {{ $peserta->gender }}</li>
    <li>No Handphone : {{ $peserta->hp }}</li>
    <li>Email : {{ $peserta->email }}</li>
    <li>Alamat : {{ $peserta->alamat }}</li>
</ul>
<a class="btn btn-outline-dark mt-auto" href="{{ url('admin/peserta') }}">
<i class="fa-solid fa-backward fa-fade" style="color: #5F9EA0"></i></a>

@endsection

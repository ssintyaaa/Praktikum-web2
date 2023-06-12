@extends('admin.layout.app')
@section('content')
{{-- ini adalah halaman pesanan --}}
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pesanan
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat Pemesan</th>
                        <th>Nomor HP</th>
                        <th>email</th>
                        <th>Jumlah Pesanan</th>
                        <th>Deskripsi</th>
                        <th>Nama Produk</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($pesanan as $value)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $value->tanggal }}</td>
                        <td>{{ $value->nama_pemesan }}</td>
                        <td>{{ $value->alamat_pemesan }}</td>
                        <td>{{ $value->no_hp }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->jumlah_pesanan }}</td>
                        <td>{{ $value->deskripsi }}</td>
                        <td>{{ $value->nama_produk }}</td>
                    </tr>

                    @php
                        $no++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
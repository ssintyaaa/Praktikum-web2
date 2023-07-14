@extends('admin.layout.app')
@section('content')
@if (Auth::user()->role != 'peserta')
<!-- ini content halaman dashboard -->
<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Materi Kursus</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        @if (Auth::user()->role == 'admin')
        <a href="{{ url('admin/materi/create_materi') }}" class="btn btn-primary">Tambah Data</a>
        @endif
    </div>
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Produk
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Materi</th>
                    <th>Deskripsi</th>
                    <th>Durasi Jam</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($materi as $prod)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $prod->kode }}</td>
                    <td>{{ $prod->nama_materi }}</td>
                    <td>{{ $prod->deskripsi }}</td>
                    <td>{{ $prod->durasi_jam }}</td>
                    <td>
                        <a class="btn btn-outline-warning mt-auto"
                            href="{{ url('admin/bimbel/edit_materi/'. $prod->id) }}">
                            <i class="fa-solid fa-pencil"></i></a>
                        <a class="btn btn-outline-primary mt-auto"
                            href="{{ url('admin/bimbel/detail_materi/'. $prod->id) }}">
                            <i class="fa-solid fa-eye"></i></a>
                        @if (Auth::user()->role == 'admin')
                        <a class="btn btn-outline-danger mt-auto"
                            onclick="return confirm('Anda yakin ingin menghapus ??')"
                            href="{{ url('admin/bimbel/delete_materi/'. $prod->id) }}">
                            <i class="fa-solid fa-trash-can" style="color: #f00"></i>
                            @endif
                    </td>
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
@endif
@endsection

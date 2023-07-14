@extends('admin.layout.app')
@section('content')
@if (Auth::user()->role != 'peserta')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Kategori Kursus</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            @if (Auth::user()->role == 'admin')
            <a class="btn btn-primary" href="{{ url('admin/kategori/create_kategori') }}">Tambah Kategori
                @endif
            </a>
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Kategori Kursus
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori Kursus</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($kategori as $value)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $value->nama_kategori }}</td>
                        <td>
                            <a class="btn btn-outline-warning mt-auto"
                                href="{{ url('admin/bimbel/edit_kategori/'. $value->id) }}">
                                <i class="fa-solid fa-pencil"></i></a>
                            @if (Auth::user()->role == 'admin')
                            <a class="btn btn-outline-danger mt-auto"
                                onclick="return confirm('Anda yakin ingin menghapus ??')"
                                href="{{ url('admin/bimbel/delete_kategori/'. $value->id) }}">
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

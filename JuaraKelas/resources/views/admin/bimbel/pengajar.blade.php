@extends('admin.layout.app')
@section('content')
@if (Auth::user()->role != 'peserta')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pengajar</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            @if (Auth::user()->role == 'admin')
            <a class="btn btn-primary" href="{{ url('admin/pengajar/create_pengajar') }}">Tambah Pengajar</a>
            @endif
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pengajar
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($pengajar as $value)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $value->nip }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->gender }}</td>
                        <td>{{ $value->alamat }}</td>
                        <td>
                            <a class="btn btn-outline-warning mt-auto"
                                href="{{ url('admin/bimbel/edit_pengajar/'. $value->id) }}">
                                <i class="fa-solid fa-pencil"></i></a>
                            <a class="btn btn-outline-primary mt-auto"
                                href="{{ url('admin/bimbel/detail_pengajar/'. $value->id) }}">
                                <i class="fa-solid fa-eye"></i></a>
                            @if (Auth::user()->role == 'admin')
                            <a class="btn btn-outline-danger mt-auto"
                                onclick="return confirm('Anda yakin ingin menghapus ??')"
                                href="{{ url('admin/bimbel/delete_pengajar/'. $value->id) }}">
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

@extends('admin.layout.app')
@section('content')
@if (Auth::user()->role != 'peserta')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Penjadwalan Kelas</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            @if (Auth::user()->role == 'admin')
            <a class="btn btn-primary" href="{{ url('admin/penjadwalan/create_jadwal') }}">Tambah Data</a>
            @endif
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Penjadwalan Kelas
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Kelas</th>
                        <th>Kelas</th>
                        <th>Hari</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Akhir</th>
                        <th>Jam Mulai</th>
                        <th>Jam AKhir</th>
                        <th>Materi Kursus</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($penjadwalan as $value)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $value->kode_kelas }}</td>
                        <td>{{ $value->kelas }}</td>
                        <td>{{ $value->hari }}</td>
                        <td>{{ $value->tgl_mulai }}</td>
                        <td>{{ $value->tgl_akhir }}</td>
                        <td>{{ $value->jam_mulai }}</td>
                        <td>{{ $value->jam_akhir }}</td>
                        <td>{{ $value->nama_mtr }}</td>
                        <td>
                            <a class="btn btn-outline-warning mt-auto"
                                href="{{ url('admin/bimbel/edit_jadwal/'. $value->id) }}">
                                <i class="fa-solid fa-pencil"></i></a>
                            <a class="btn btn-outline-primary mt-auto"
                                href="{{ url('admin/bimbel/detail_jadwal/'. $value->id) }}">
                                <i class="fa-solid fa-eye"></i></a>
                            @if (Auth::user()->role == 'admin')
                            <a class="btn btn-outline-danger mt-auto"
                                onclick="return confirm('Anda yakin ingin menghapus ??')"
                                href="{{ url('admin/bimbel/delete_jadwal/'. $value->id) }}">
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

@extends('admin.layout.app')
@section('content')
    {{-- ini adalah halaman dashboard --}}
   
    <div style="display: flex; margin-top: 50px; margin-right: 10px; margin-left: 10px; margin-bottom: 50px;">
            <div>
            <img style="margin-right: 20px;" width="255" height="250" src="{{ asset('admin/assets/1.JPG') }}" title="foto s" frameborder="1">
            <img style="margin-right: 20px;" width="330" height="250" src="{{ asset('admin/assets/2.JPG') }}" title="foto s" frameborder="1">
            <img style="margin-right: 20px;" width="300" height="250" src="{{ asset('admin/assets/3.JPG') }}" title="foto s" frameborder="1">
            <img style="margin-right: 20px;" width="300" height="250" src="{{ asset('admin/assets/4.JPG') }}" title="foto s" frameborder="1">
            </div>
    </div>
@endsection
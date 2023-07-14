@extends('frontend.layout.app')
    
@section('content')
<!-- ini content halaman about -->
<section class="bg-light py-2">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Materi Kursus</span></h2>
                    <div class="container">
                    <section class="container py-5 ">
                        <div class="px-4 px-lg-5 mt-5 bg-white pt-3">
                            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                            @foreach($materi as $value)    
                            <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Product image-->
                                        <img class="card-img-top" src="{{ asset('admin/assets/1.jpg') }}" alt="..." />
                                        <!-- Product details-->
                                        <div class="card-body p-7">
                                            <div class="text-center">
                                                <!-- Product name-->
                                                <h5 class="fw-bolder">{{ $value->nama_materi }}</h5>
                                                <!-- kode -->
                                                {{ $value->kode }}
                                                <!-- Product price-->
                                                Rp.{{ $value->biaya }}
                                            </div>
                                            <a href="{{ route('detail.materi', $value->id )}}" class="btn btn-outline-primary mt-auto">Detail</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
</div>
</div>
</div>
</div>
</section>

@endsection

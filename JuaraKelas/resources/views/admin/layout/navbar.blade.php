<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>JuaraKelas</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ url('landingpage/assets/favicon.jpg') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php?hal=home">JuaraKelas.id</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" aria-current="page"
                            href="{{ url('admin/dashboard') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page"
                            href="{{ url('admin/kategori') }}">Kategori Kursus</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page"
                            href="{{ url('admin/pengajar') }}">Pengajar</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page"
                            href="{{ url('admin/peserta') }}">Peserta</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page"
                            href="{{ url('admin/materi') }}">Materi</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page"
                            href="{{ url('admin/penjadwalan') }}">Jadwal</a></li>
                            <li class="nav-item"><a class="nav-link" aria-current="page"
                            href="{{ url('frontend/etalase') }}">Etalase</a></li>
                    <li style="color: #808080" class="navbar-item"><a class="nav-link" aria-current="page"  href="#">{{ Auth::user()->role}}</a></li>
                    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Settings</a></li>
                                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>

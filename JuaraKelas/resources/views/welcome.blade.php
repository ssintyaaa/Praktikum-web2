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
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ url('landingpage/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#">JuaraKelas.id</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <div>
                        @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                            <a href="{{ url('/home') }}">Home</a>
                            @else
                            <a style="color: white" href="{{ route('login') }}">Log in</a>

                            @if (Route::has('register'))
                            <a style="color: white" href="{{ route('register') }}">Register</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang di JuaraKelas.id</div>
            <div class="masthead-heading text-uppercase">Bimbel IT Favorit</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tentang Kami</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">In House Training</h4>
                    <p class="text-muted">Pelatihan IT di lokasi peserta dengan
                        Pengajar yang kompeten dan ter sertifikasi
                        dari lembaga sertifikasi profesi</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Private Class</h4>
                    <p class="text-muted">Pelatihan IT di lokasi bimbel JuaraKelas
                        dengan fasilitas ruang private, full ac,
                        koneksi internet, dan snack</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Public Class</h4>
                    <p class="text-muted">Pelatihan IT di JuaraKelas, dengan maksimal jumlah peserta
                        30 orang untuk tiap materi</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Portfolio</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url('landingpage/assets/img/portfolio/1.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Literasi Desain Grafis</div>
                            <div class="portfolio-caption-subheading text-muted">GIMP, Inscape, Canva</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url('landingpage/assets/img/portfolio/2.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Pemrograman</div>
                            <div class="portfolio-caption-subheading text-muted">Web Application</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url('landingpage/assets/img/portfolio/3.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">IT Training</div>
                            <div class="portfolio-caption-subheading text-muted">Web Programming</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url('landingpage/assets/img/portfolio/4.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Web Developer</div>
                            <div class="portfolio-caption-subheading text-muted">Frontend & Backend</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url('landingpage/assets/img/portfolio/5.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Networking</div>
                            <div class="portfolio-caption-subheading text-muted">MAN</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url('landingpage/assets/img/portfolio/6.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">BasisData</div>
                            <div class="portfolio-caption-subheading text-muted">Perancangan Databases</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ url('landingpage/assets/img/about/1.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Awal Berdiri</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Bimbel JuaraKelas di dirikan pada tanggal 13 Juli 2013 oleh Reva Aulia
                                Faradilah, Rika Rahma, Sintia Sari dan St. Nurmuhsina yang berlokasi di Jakarta Selatan
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ url('landingpage/assets/img/about/2.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Tujuan di Dirikan</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Tujuan di dirikan nya JuaraKelas untuk menyediakan dan memperluas
                                pendidikan berkualitas melalui pemanfaatan perkembangan teknologi</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ url('landingpage/assets/img/about/3.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Visi</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">VIsi JuaraKelas yaitu untuk menjadi bimbel yang terbesar, berkualitas,
                                professional, amanah dan diterima seluruh masyarakat Indonesia</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ url('landingpage/assets/img/about/4.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Misi</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Misi JuaraKelas yaitu untuk memberikan layanan belajar bermutu dengan
                                harga terjangkau dan memaksimalkan mutu untuk mewujudkan lapangan kerja bagi tenga
                                pendidik</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Team JuaraKelas.id</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ url('landingpage/assets/img/team/1.jpg') }}"
                            alt="..." />
                        <h4>Reva Aulia Faradilah</h4>
                        <p class="text-muted">0110222145 - TI08</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/revaaulia"
                            aria-label="Reva Github Profile"><i class="fab fa-github"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/revaaf_/"
                            aria-label="Reva Instagram Profile"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/reva-aulia-faradilah-5a7a84212/" 
                        aria-label="Reva LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ url('landingpage/assets/img/team/2.jpg') }}"
                            alt="..." />
                        <h4>Rika Rahma</h4>
                        <p class="text-muted">0110222134 - TI08</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/rikaaarahma"
                            aria-label="Rika Github Profile"><i class="fab fa-github"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/rikaarahmaa26/"
                            aria-label="Rika Instagram Profile"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/rika-rahma-48a212251/"
                            aria-label="Rika LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ url('landingpage/assets/img/team/3.jpg') }}"
                            alt="..." />
                        <h4>Sintia Sari</h4>
                        <p class="text-muted">0110222135 - TI08</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/ssintyaaa"
                            aria-label="Sintia Github Profile"><i class="fab fa-github"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/_ssintyaaa/"
                            aria-label="Sintia Facebook Profile"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2"
                            href="https://www.linkedin.com/in/sintia-sari-862a19251/"
                            aria-label="Sintia LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <center>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ url('landingpage/assets/img/team/4.jpg') }}"
                                alt="..." />
                        <h4>St. Nurmuhsina</h4>
                        <p class="text-muted">0110222271 - TI08</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/naadflwrx" 
                            aria-label="Nurmushina Github Profile"><i class="fab fa-github"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/zxvnaaa/"
                            aria-label="Nurmushina Facebook Profile"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/st-nurmuhsina-146639251/"    
                            aria-label="Nurmushina LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
            </div>
            </center>
        </div>
    </section>
    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                   
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Your Message *"
                                data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a
                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled"
                        id="submitButton" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Team 5 TI08</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/SintiaS20536595?t=H1B46_RiLnGwhfi-cDS5Cg&s=08" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://web.facebook.com/profile.php?id=100079609266558" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/sintia-sari-862a19251/" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img
                        src="{{ url('landingpage/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Literasi Desain Grafis</h2>
                                <p class="item-intro text-muted">Merancang dan menyampaikan pesan melalui media visual
                                    seperti poster, brosur, logo, website, dan lainnya</p>
                                <img class="img-fluid d-block mx-auto"
                                    src="{{ url('landingpage/assets/img/portfolio/1.jpg') }}" alt="..." />
                                <p>Literasi desain grafis merujuk pada kemampuan seseorang untuk memahami,
                                    mengapresiasi, dan menggunakan prinsip-prinsip desain grafis dalam konteks kreatif
                                    dan komunikatif. Literasi desain grafis melibatkan pemahaman tentang elemen-elemen
                                    desain, prinsip-prinsip desain, serta penggunaan alat dan teknik desain grafis.!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Umum
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Desain
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img
                        src="{{ url('landingpage/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Pemrograman</h2>
                                <p class="item-intro text-muted">Membuat situs web statis yang sederhana atau aplikasi
                                    web yang kompleks dengan fitur interaktif dan fungsionalitas yang lebih canggih</p>
                                <img class="img-fluid d-block mx-auto"
                                    src="{{ url('landingpage/assets/img/portfolio/2.jpg') }}" alt="..." />
                                <p>Pemrograman web adalah proses membuat, membangun, dan memelihara situs web atau
                                    aplikasi web menggunakan bahasa pemrograman khusus yang dirancang untuk pengembangan
                                    web. Pemrograman web melibatkan penggunaan bahasa pemrograman seperti HTML
                                    (Hypertext Markup Language), CSS (Cascading Style Sheets), dan JavaScript untuk
                                    membuat halaman web yang interaktif dan dinamis.
                                    Selain itu, pemrograman web juga melibatkan pemahaman tentang penggunaan database,
                                    pengelolaan server, keamanan web, dan optimisasi kinerja untuk memastikan bahwa
                                    situs web atau aplikasi web berfungsi dengan baik dan memberikan pengalaman yang
                                    baik kepada pengguna.
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Umum
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Web
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img
                        src="{{ url('landingpage/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">IT Training</h2>
                                <p class="item-intro text-muted">Peningkatan keterampilan teknis, pemahaman tentang
                                    teknologi terkini, peningkatan daya saing dalam industri, peningkatan peluang karir,
                                    dan kemampuan untuk menyesuaikan diri dengan perubahan teknologi yang cepat</p>
                                <img class="img-fluid d-block mx-auto"
                                    src="{{ url('landingpage/assets/img/portfolio/3.jpg') }}" alt="..." />
                                <p>IT Training (pelatihan teknologi informasi) merujuk pada proses pembelajaran dan
                                    pengembangan keterampilan dalam bidang teknologi informasi. Ini melibatkan
                                    program-program pelatihan yang dirancang untuk meningkatkan pengetahuan, pemahaman,
                                    dan keterampilan individu dalam berbagai aspek teknologi informasi.

                                    Tujuan dari IT Training adalah untuk membekali peserta dengan pengetahuan dan
                                    keterampilan yang diperlukan untuk bekerja di bidang teknologi informasi. Pelatihan
                                    ini dapat mencakup berbagai topik, termasuk pemrograman, pengembangan aplikasi,
                                    pengelolaan jaringan, keamanan informasi, desain web, analisis data, kecerdasan
                                    buatan (AI), dan banyak lagi.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Umum
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Training
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img
                        src="{{ url('landingpage/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Web Developer</h2>
                                <p class="item-intro text-muted">Kemampuan untuk bekerja dengan basis data, memahami
                                    prinsip-prinsip desain web, dan memiliki pemahaman yang kuat tentang pengalaman
                                    pengguna (user experience) juga merupakan keuntungan yang besar</p>
                                <img class="img-fluid d-block mx-auto"
                                    src="{{ url('landingpage/assets/img/portfolio/4.jpg') }}" alt="..." />
                                <p>Web developer adalah seorang profesional yang terlibat dalam pembuatan, pengembangan,
                                    dan pemeliharaan situs web atau aplikasi web. Mereka menggunakan berbagai bahasa
                                    pemrograman, teknologi, dan alat untuk menciptakan pengalaman web yang interaktif
                                    dan berfungsi. Selain itu, web developer juga dapat memiliki spesialisasi tambahan,
                                    seperti pengembang front-end yang fokus pada aspek visual dan interaktif situs web,
                                    pengembang back-end yang berkonsentrasi pada pemrograman sisi server, atau
                                    pengembang full-stack yang memiliki pengetahuan dan keterampilan di kedua bidang
                                    tersebut.
                                    Keterampilan yang penting bagi seorang web developer meliputi pemahaman tentang
                                    bahasa pemrograman web seperti HTML, CSS, JavaScript, serta kerangka kerja
                                    (framework) dan perpustakaan (library) terkait.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Umum
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Web
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img
                        src="{{ url('landingpage/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Networking</h2>
                                <p class="item-intro text-muted">Informasi penting untuk memungkinkan pertukaran data, berbagi sumber daya, dan akses ke layanan di dalam jaringan. Hal ini juga memfasilitasi kolaborasi, komunikasi, dan konektivitas yang efisien antara pengguna, perangkat, dan sistem yang terhubung</p>
                                <img class="img-fluid d-block mx-auto"
                                    src="{{ url('landingpage/assets/img/portfolio/5.jpg') }}" alt="..." />
                                <p>Networking mengacu pada praktik atau proses menjalin dan membangun hubungan dengan orang lain dalam konteks profesional atau sosial. Dalam konteks teknologi informasi, networking merujuk pada penghubungan dan interkoneksi perangkat, sistem, atau jaringan komputer untuk berbagi sumber daya dan informasi. Dalam konteks teknologi informasi, networking juga mencakup aspek-aspek seperti protokol jaringan, keamanan jaringan, administrasi jaringan, dan desain jaringan. Pengelolaan jaringan memastikan ketersediaan, keamanan, dan kinerja yang baik dari infrastruktur jaringan, termasuk pengaturan router, switch, firewall, dan perangkat jaringan lainnya.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Umum
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Networking
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img
                        src="{{ url('landingpage/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">BasisData</h2>
                                <p class="item-intro text-muted">Database digunakan dalam berbagai bidang seperti bisnis, e-commerce, perbankan, sumber daya manusia, logistik, dan banyak lagi</p>
                                <img class="img-fluid d-block mx-auto"
                                    src="{{ url('landingpage/assets/img/portfolio/6.jpg') }}" alt="..." />
                                <p>Database adalah kumpulan terstruktur dari data yang disimpan secara sistematis dalam satu lokasi yang dapat diakses, dikelola, dan diperbarui dengan mudah. Database digunakan untuk menyimpan informasi yang terkait dan memungkinkan pengguna untuk mengakses dan memanipulasi data dengan efisien. Penggunaan database sangat penting dalam berbagai aplikasi dan sistem informasi. Mereka memungkinkan organisasi untuk menyimpan, mengelola, dan mengambil data dengan efisien, dan memfasilitasi keamanan data, konsistensi, dan integritas. </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Umum
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Databases
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ url('landingpage/js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>

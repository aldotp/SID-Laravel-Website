<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MPP | Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href="{{ asset('assets-user/img/testimonials-bg.jpg') }}" rel="icon">
    <link href="{{ asset('assets-user/img/testimonials-bg.jpg') }}" rel="apple-touch-icon">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


    <link href="{{ asset('assets-user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-user/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-user/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-user/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-user/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-user/vendor/aos/aos.css') }}" rel="stylesheet">


    <link href="{{ asset('assets-user/css/main.css') }}" rel="stylesheet">

</head>

<body>


    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">

                <h1>MPP</h1>
            </a>

            @if(Auth::check() && auth()->user()->is_admin == 0)
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/" class="active">Beranda</a></li>
                    <li><a href="/pelayanan">Pelayanan</a></li>
                    <li><a class="get-a-quote" href="/sesi/logout">Keluar</a></li>
                    <li class="dropdown"><a href="#"><span>{{ Auth::user()->name}}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="/user/profil">Profil</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            @else
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/" class="active">Beranda</a></li>
                    <li><a href="/pelayanan">Pelayanan</a></li>
                    <li><a class="get-a-quote" href="/login">Masuk</a></li>
                </ul>
            </nav>
            @endif

        </div>
    </header>


    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    @if(Auth::check() && auth()->user()->is_admin == 0)
                    <h2 data-aos="fade-up">Selamat Datang, {{ Auth::user()->name}} <br>di Mal Pelayanan Publik</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Tenpat berlangsungnya kegiatan atau aktivitas penyelenggaraan pelayanan public atas barang, jasa dan/atau pelayanan administrasi yang merupakan perluasan fungsi pelayanan terpadu baik pusat maupun daerah serta pelayanan Badan Usaha Milik Negara /Badan usaha Milik Daerah dan Swasta dalam rangka menyediakan pelayanan yang cepat, mudah, terjangkau, aman dan nyaman.</p>
                    <a href="/pengajuan" class="btn btn-primary" data-aos="fade-up" data-aos-delay="200">Pengajuan</a>
                    @else
                    <h2 data-aos="fade-up">Selamat Datang di<br>Mal Pelayanan Publik</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Tenpat berlangsungnya kegiatan atau aktivitas penyelenggaraan pelayanan public atas barang, jasa dan/atau pelayanan administrasi yang merupakan perluasan fungsi pelayanan terpadu baik pusat maupun daerah serta pelayanan Badan Usaha Milik Negara /Badan usaha Milik Daerah dan Swasta dalam rangka menyediakan pelayanan yang cepat, mudah, terjangkau, aman dan nyaman.</p>
                    @endif

                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{ asset('assets-user/img/hero-img.svg') }}" class="img-fluid mb-3 mb-lg-0" alt="">
                </div>

            </div>
        </div>
    </section>

    <main id="main">


        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="section-header">
                    <span>Template Surat Pengajuan Izin</span>
                    <h2>Template Surat Pengajuan Izin</h2>
                </div>

                <div class="row gy-4 mt-3">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <h4 class="title">Pengajuan Izin contoh</h4>
                            <p class="description">Berikut adalah template surat pengajuan izin. SIlahkan unduh dibawah ini.</p>
                            <a href="/" class="readmore stretched-link"><span>Unduh</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <h4 class="title">Pengajuan Izin contoh</h4>
                            <p class="description">Berikut adalah template surat pengajuan izin. SIlahkan unduh dibawah ini.</p>
                            <a href="/" class="readmore stretched-link"><span>Unduh</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <h4 class="title">Pengajuan Izin contoh</h4>
                            <p class="description">Berikut adalah template surat pengajuan izin. SIlahkan unduh dibawah ini.</p>
                            <a href="/" class="readmore stretched-link"><span>Unduh</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <h4 class="title">Pengajuan Izin contoh</h4>
                            <p class="description">Berikut adalah template surat pengajuan izin. SIlahkan unduh dibawah ini.</p>
                            <a href="/" class="readmore stretched-link"><span>Unduh</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <h4 class="title">Pengajuan Izin contoh</h4>
                            <p class="description">Berikut adalah template surat pengajuan izin. SIlahkan unduh dibawah ini.</p>
                            <a href="/" class="readmore stretched-link"><span>Unduh</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <h4 class="title">Pengajuan Izin contoh</h4>
                            <p class="description">Berikut adalah template surat pengajuan izin. SIlahkan unduh dibawah ini.</p>
                            <a href="/" class="readmore stretched-link"><span>Unduh</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <h4 class="title">Pengajuan Izin contoh</h4>
                            <p class="description">Berikut adalah template surat pengajuan izin. SIlahkan unduh dibawah ini.</p>
                            <a href="/" class="readmore stretched-link"><span>Unduh</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <h4 class="title">Pengajuan Izin contoh</h4>
                            <p class="description">Berikut adalah template surat pengajuan izin. SIlahkan unduh dibawah ini.</p>
                            <a href="/" class="readmore stretched-link"><span>Unduh</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <h4 class="title">Pengajuan Izin contoh</h4>
                            <p class="description">Berikut adalah template surat pengajuan izin. SIlahkan unduh dibawah ini.</p>
                            <a href="/" class="readmore stretched-link"><span>Unduh</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Jenis pelayanan yang dapat diakses masyarakat</span>
                    <h2>Jenis pelayanan yang dapat diakses masyarakat</h2>
                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-10">

                        <div class="accordion accordion-flush" id="faqlist">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Dinas Dukcapil
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Dokumen kependudukan</li>
                                        <li>Pencatatan Sipil</li>
                                        <li>Konsolidasi data</li>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Bappenda
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Local tax</li>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Bank Jateng
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Payment Point</li>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Kesbangpol + Bappeda
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        <li>Rekomendasi izin penilitian</li>
                                        <li>Izin penelitian</li>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        BPJS Kesehatan
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Pendaftaran</li>
                                        <li>Perubahan data</li>
                                        <li>Informasi</li>
                                        <li>Penanganan Pengaduan</li>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        BPJS Ketenagakerjaan
                                    </button>
                                </h3>
                                <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <li>Pendaftaran (perusahaan, informasi, jasa konstruksi)</li>
                                        <li>Pembinaan</li>
                                        <li>Informasi</li>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <section id="call-to-action" class="call-to-action">
                    <div class="container" data-aos="zoom-out">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
                                <a class="cta-btn" href="/pelayanan">Selengkapnya</a>
                            </div>
                        </div>

                    </div>
                </section>

            </div>
        </section>


    </main>

    <footer id="footer" class="footer">

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>MPP</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by MPP Group</a>
            </div>
        </div>

    </footer>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>


    <script src="{{ asset('assets-user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-user/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets-user/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets-user/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets-user/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets-user/vendor/php-email-form/validate.js') }}"></script>


    <script src="{{ asset('assets-user/js/main.js') }}"></script>

</body>

</html>
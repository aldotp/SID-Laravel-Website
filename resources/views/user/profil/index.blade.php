<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MPP | Profil</title>
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
                    <li><a class="get-a-quote" href="/sesi/logout">Keluar</a></li>
                </ul>
            </nav>

            @else
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/" class="active">Beranda</a></li>
                    <li><a class="get-a-quote" href="/register">Daftar</a></li>
                </ul>
            </nav>
            @endif

        </div>
    </header>


    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">

                    <h2 data-aos="fade-up">Lengkapi Data Diri</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Silahkan melengkapi data diri Anda dengan mengisi alamat Anda dan nomor telepon.</p>

                    @foreach ($data as $item)
                    <form action="{{'profil/'.$item->id }}" method="POST" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                        @csrf
                        @method('PUT')
                        <input type="text" class="form-control" id="nama" placeholder="Name" name="name" value="{{ $item->name }}">
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="{{ $item->alamat }}">
                        {{-- <textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="{{ $item->alamat }}"></textarea> --}}
                        <input type="text" class="form-control" id="no_telp" placeholder="Nomer Telepon" name="no_telp" value="{{ $item->no_telp }}">
                        <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                    @endforeach

                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{ asset('assets-user/img/hero-img.svg') }}" class="img-fluid mb-3 mb-lg-0" alt="">
                </div>

            </div>
        </div>
    </section>

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
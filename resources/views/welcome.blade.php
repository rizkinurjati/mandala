<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Power - Bootstrap HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
Power Template 
https://templatemo.com/tm-508-power
-->
    @stack('before-style')
    @include('includes.frontend.style')
    @stack('after-style')
</head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->


        <div class="site-main" id="sTop">
            <div class="site-header">
                <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row">
                                <nav class="navbar navbar-inverse" role="navigation">
                                    <div class="navbar-header">
                                        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a href="#top" class="navbar-brand">Mandala</a>
                                        <div id="main-nav" class="collapse navbar-collapse">
                                            <ul class="menu-first nav navbar-nav" style="margin-right: 20px;">
                                                <li class="active"><a href="#">Home</a></li>
                                                <li><a href="#about">About Us</a></li>
                                                <li><a href="#portfolio">Our Works</a></li>
                                                <li><a href="#contact-us">Contact</a></li>                                 
                                            </ul>                                    
                                        </div> <!-- /.main-menu -->
                                    </div>
                                </nav>
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->                        
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
        </div> <!-- /.site-main -->


        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="banner-content">
                            <img src="{{ asset('frontend/images/logo mandala.png')}}" alt="" srcset="" width="200px" class="mb-4">
                            <h2>Course & IT Consultant</h2>
                            <ul class="buttons">
                                <li>
                                    <div class="primary-button">
                                        <a href="#about">Get Started</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="secondary-button">
                                        <a href="#portfolio">Contact Us</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Services, Networking &amp; Web Development!</h4>
                        <h6>Jasa pembuatan website, perbaikan Laptop/Komputer dan Maintenance Jaringan</h6>
                        <div class="border-button"><a href="#portfolio">Discover More</a></div>
                    </div>
                </div>
            </div>
        </div>


        <section id="about" class="page-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-item first-service">
                            <i class="fa fa-business-time fa-4x" style="color: #ffffff"></i>
                            <h4> Kredibel & Terpercaya</h4>
                            <p>
                                Kami dipercaya oleh banyak client dari perorangan ataupun instansi sejak tahun 2000. Kepercayaan dan servis yang terbaik menjadi kunci kami berkembang sampai sekarang
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item second-service">
                            <i class="fa fa-coins fa-4x" style="color: #ffffff"></i> 
                            <h4>Harga Hemat & Pengerjaan yang Maksimal</h4>
                            <p>
                                Sebagai yang terbaik di Cianjur kami memberikan pelayanan yang maksimal dan fleksibel serta harga yang bersaing
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item third-service">
                            <i class="fa fa-graduation-cap fa-4x" style="color: #ffffff"></i>
                            <h4>Kursus dan Magang Terbaik</h4>
                            <p>
                                Dengan materi pembekalan skill yang tepat sasaran dan bermanfaat, membuat kami dipercaya oleh banyak Instansi Pendidikan khususnya di Kota Cianjur
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="second-tabs-content what-we-do">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h4>Produk Mandala Computer</h4>
                            <p>
                                Mandala Computer didirikan tahun 2000. Kami bergerak dibidang jasa pelayanan IT baik hardware ataupun software. Seiring berjalanan nya waktu kami membuka fasilitas Magang dan PKL untuk SMK ataupun Kuliah.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="wrapper">
                        <div class="col-md-12">
                            <div class="row">
                                <ul class="tabs clearfix" data-tabgroup="second-tab-group">
                                    <li class="col-md-15 col-sm-12 col-xs-12">
                                        <a href="#unique" class="active">
                                            <div class="list-item">
                                                <div class="icon">
                                                    <img src="{{ asset('frontend/images/network-wired-solid.svg')}}" alt="" width="70px">
                                                </div>
                                                <h4>Maintenance Jaringan</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-md-15 col-sm-12 col-xs-12">
                                        <a href="#theme">
                                            <div class="list-item">
                                                <div class="icon">
                                                    <img src="{{ asset('frontend/images/code-solid.svg') }}" alt="" width="70px">
                                                </div>
                                                <h4>SEO & Web Development</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-md-15 col-sm-12 col-xs-12">
                                        <a href="#translation">
                                            <div class="list-item">
                                                <div class="icon">
                                                    <img src="{{ asset('frontend/images/screwdriver-wrench-solid.svg') }}" alt="" width="70px">
                                                </div>
                                                <h4>
                                                    Servis Laptop & Komputer
                                                </h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-md-15 col-sm-12 col-xs-12">
                                        <a href="#event">
                                            <div class="list-item">
                                                <div class="icon">
                                                    <img src="{{ asset('frontend/images/graduation-cap-solid.svg') }}" alt="" width="70px">
                                                </div>
                                                <h4>
                                                    Kursus - Magang & PKL 
                                                </h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-md-15 col-sm-12 col-xs-12">
                                        <a href="#photo">
                                            <div class="list-item">
                                                <div class="icon">
                                                    <img src=" {{ asset('frontend/images/laptop-solid.svg') }} " alt="" width="70px">
                                                </div>
                                                <h4>
                                                    Jual Beli Laptop dan Komputer
                                                </h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <section id="second-tab-group" class="tabgroup">
                                <div id="unique">
                                    <div class="row">
                                        <div class="tab-content-services">
                                            <div class="col-md-6">
                                                <div class="left-text">
                                                    <h4>Maintenance Jaringan</h4>
                                                    <p>Mandala Computer hadir sebagai solusi masalah jaringan yang Anda miliki. Optimalkan performa jaringan perusahaan Anda bersama kami
                                                    <br><br>
                                                    Kami menawarkan layanan jasa jaringan yang dapat meningkatkan dan mengoptimalkan performa jaringan di perusahaan maupun bisnis Anda.
                                                    Siapa yang membutuhkan jasa kami? Solusi yang kami tawarkan sangat cocok untuk kantor, sekolah, pondok pesantren, instansi, hotel, dll.    
                                                    
                                                </p>
                                                    <div class="primary-button">
                                                        <a href="https://api.whatsapp.com/send?phone=6281322371072&text=Halo%20Admin%20Saya%20Mau%20Maintenance%20Jaringan">Hubungi Sekarang</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-image">
                                                    <img src="img/right-side-image_1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="theme">
                                    <div class="row">
                                        <div class="tab-content-services">
                                            <div class="col-md-6">
                                                <div class="left-text">
                                                    <h4>SEO & Web Development</h4>
                                                    <p>
                                                        Pentingnya punya Website Terbaik untuk Bisnis!
                                                        Di era digital, mencari informasi produk & jasa sudah biasa dilakukan melalui internet. Bisnis yang memiliki website akan lebih mudah ditemukan oleh konsumen, karena website ibarat sebuah toko/kantor online yang dapat melayani pelanggan selama 24 jam.
                                                        <br>
                                                        Website dapat memudahkan aktifitas perkantoran dan administrasi perusahaan kita. Hubungi kami segera untuk mendapatkan penawaran terbaik!
                                                    </p>
                                                    <div class="primary-button">
                                                        <a href="https://api.whatsapp.com/send?phone=6281322371072&text=Halo%20Admin%20Saya%20Mau%20Menanyakan%20Web%20Development">Hubungi Sekarang</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-image">
                                                    <img src="{{ asset('frontnend/libraries/img/right-side-image_2.jpg')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="translation">
                                    <div class="row">
                                        <div class="tab-content-services">
                                            <div class="col-md-6">
                                                <div class="left-text">
                                                    <h4>Servis Laptop dan Komputer</h4>
                                                    <p>
                                                        Anda sedang menghadapi masalah dengan komputer atau laptop yang bermasalah. Seperti : terkena virus, windows hang, perlu instal ulang windows, backup data ataupun masalah lainnya. Kami Mandala Computer siap membantu masalah Anda. Dibantu oleh teknisi kami yang professional dan terpercaya.
                                                    </p>
                                                    <div class="primary-button">
                                                        <a href="https://api.whatsapp.com/send?phone=6281322371072&text=Halo%20Admin%20Saya%20Mau%20Servis%20Laptop">Hubungi Sekarang</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-image">
                                                    <img src="img/right-side-image_3.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="event">
                                    <div class="row">
                                        <div class="tab-content-services">
                                            <div class="col-md-6">
                                                <div class="left-text">
                                                    <h4>Program pendidikan penunjang</h4>
                                                    <p>
                                                        Kami membuka kelas untuk IT Consultant, Networking & Web Developer. Kami dipercaya oleh banyak Instansi Pendidikan terutama di Kota Cianjur sebagai tenaga pendidik untuk Magang dan PKL.
                                                        <br><br>
                                                        Dengan materi kami yang tepat sasaran memberikan peserta didik skill yang relevan di dunia kerja saat ini. 
                                                    </p>
                                                    <div class="primary-button">
                                                        <a href="https://api.whatsapp.com/send?phone=6281322371072&text=Halo%20Admin%20Saya%20Mau%20Menanyakan%20Program%20PKL%20atau%20Kursus">Hubingi Sekarang</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-image">
                                                    <img src="" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="photo">
                                    <div class="row">
                                        <div class="tab-content-services">
                                            <div class="col-md-6">
                                                <div class="left-text">
                                                    <h4>Jual Beli Laptop & Computer</h4>
                                                    <p>
                                                        Mandala Computer Cianjur melayani JUAL BELI TUKAR TAMBAH Laptop area Cianjur dan sekitarnya. Selain Jual Beli Laptop di Mandala Computer anda juga dapat membeli aneka Aksesoris, sparepart laptop dengan harga terjangkau. Kedepannya Mandala Computer akan melayani penjualan Laptop Baru.
                                                    </p>
                                                    <div class="primary-button">
                                                        <a href="https://api.whatsapp.com/send?phone=6281322371072&text=Halo%20Admin%20Saya%20Mau%20Menanyakan%20Jual%20Beli%20Laptop%20DLL">Hubungi Sekarang</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="right-image">
                                                    <img src="img/right-side-image_5.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section id="portfolio" class="portfolio-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h4>Gallery Portofolio</h4>
                            <p>
                                Beberapa Gallery kegiatan di Mandala Computer 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="owl-portfolio" class="owl-carousel owl-theme imageGallery1">
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="{{ asset('frontend/images/BG1.png')}}" title=""><img src="{{ asset('frontend/images/BG1.png')}}" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="{{ asset('frontend/images/BG2.png')}}" title=""><img src="{{ asset('frontend/images/BG2.png')}}" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="{{ asset('frontend/images/BG3.png')}}" title=""><img src="{{ asset('frontend/images/BG3.png')}}" alt="Gallery image 1" /></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="{{ asset('frontend/images/BG4.jpg')}}" title=""><img src="{{ asset('frontend/images/BG4.jpg')}}" alt="Gallery image 1" height="213px"/></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="{{ asset('frontend/images/bg5.jpg')}}" data-lightbox="image-1"><img src="{{ asset('frontend/images/bg5.jpg')}}" ></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="{{ asset('frontend/images/BG6.jpg')}}" title=""><img src="{{ asset('frontend/images/BG6.jpg')}}" alt="Gallery image 1" height="213px"/></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="portfolio-item">
                                <a href="{{ asset('frontend/images/BG7.jpg')}}" title=""><img src="{{ asset('frontend/images/BG7.jpg')}}" alt="Gallery image 1" height="213px"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="comment" class="codmment-section">
            <div class="container">
                <h4 class="text-center">Testimoni & Komentar</h4>
                <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="row">
                        @foreach ($data as $key => $item)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <div class="col-xl-3 col-md-6 mb-4 py-4">
                            <div class="card text-center text-white mx-2" style="border-color:#ad8989; background-color:transparent">
                                @if ( $item->foto)
                                <img class="rounded-circle  mx-auto py-2" src="{{ Storage::url($item->foto) }}" alt="" srcset="" width="100px" height="100px">
                                @else
                                <img class="rounded-circle  mx-auto py-2" src="{{ asset('frontend/images/5856.jpg') }}" alt="" srcset="" width="100px" height="100px">
                                @endif
                                <h6 class="h6-content pt-2"> {{ $item->nama_lengkap }} </h6>
                                <p style="margin-top:-10px;font-size: 11px; color:#ddc5c5;">{{ $item->pekerjaan }} - {{ $item->instansi }} </p>
                                <p style="font-weight: bold; color:#FCFF7D">Terbaik <i class="fas fa-thumbs-up"></i> +{{$item->rate}} </p>
                                <p style="font-size: 12px;">
                                    {{ $item->komentar }}
                                </p>
                            </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>

        <section id="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h4>Contact Us</h4>
                            <p>
                                Hubungi kami sekarang jika ada yang ini ditanyakan!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form id="contact" action="{{ route('store.testimoni') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    {{-- <span>Upload Foto :</span> --}}
                                    <fieldset>
                                        <input name="foto" type="file" class="form-control" id="subject" placeholder="Foto" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="pekerjaan" type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="instansi" type="text" class="form-control" id="instansi" placeholder="Instansi..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                      <select name="rate" type="text" class="form-control" id="rate" placeholder="Instansi..." required="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    </fieldset>
                                  </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="komentar" rows="6" class="form-control" id="komentar" placeholder="Komentar..." required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Tulis Komentar</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div id="map">
	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe src="https://maps.google.com/maps?q=mandala%20computer%20cianjur&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 480px; height: 420px;"></iframe><style>.mapouter{position:relative;height:420px;width:480px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:420px;width:480px}.gmap_canvas iframe{position:relative;z-index:2}</style>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                            <p>
                            +62 813-2237-1072 ( Apep Bahtiar ) <br><br> Copyright &copy; 2023 Mandala Computer <br> 
                            Developed by Rizki Saeful Nurjati</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/profile.php?id=100015351767116">Facebook</a></li>
                            <li><a href="#">Linkedin</a></li>
                            <li><a href="https://www.instagram.com/mandalakomputercianjur">Instagram</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-md-offset-2 col-sm-12">
                        <div class="back-to-top">
                            <a href="#top">
                                <i class="fa fa-angle-up"></i>
                                back to top
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{ asset('frontend/libraries/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js')}}"></script>
        <script src="{{ asset('frontend/libraries/js/vendor/jquery-1.11.0.min.js')}}"></script>
        <script>window.jQuery || document.write('<script src="{{ asset('frontend/libraries/js/vendor/jquery-1.11.0.min.js')}}"><\/script>')</script>
        <script src="{{ asset('frontend/libraries/js/bootstrap.js')}}"></script>
        <script src="{{ asset('frontend/libraries/js/plugins.js')}}"></script>
        <script src="{{ asset('frontend/libraries/js/main.js')}}"></script>

        <!-- Google Map -->
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="{{ asset('frontend/libraries/js/vendor/jquery.gmap3.min.js')}}"></script>

        <script type="text/javascript">
        $(document).ready(function() {
            
            // mobile nav toggle
            $('#nav-toggle').on('click', function (event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        </script>
        
    
    
    </body>

    @push('after-script')
    <script>
    $('#recipeCarousel').carousel({
        interval :2000
        });

        $('.carousel .carousel-item').each(function(){
            var next = $(this).next();
            if (!next.length) {
            next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
            
            for (var i=0;i<2;i++) {
                next=next.next();
                if (!next.length) {
                next = $(this).siblings(':first');
                }
                
                next.children(':first-child').clone().appendTo($(this));
            }
        });
    </script>
    @endpush
</html>
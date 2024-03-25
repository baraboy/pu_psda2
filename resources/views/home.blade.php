@php

$gallery = get_gallery()

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Hidrologi & Kualitas Air</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicons.png" rel="icon">
  <link href="assets/img/apple-touch-icons.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <img src="assets/img/logo.png" class="image-fluid" alt="" width="165" height="40">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/home">Home</a></li>
          <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Curah Hujan</a></li>
              <li><a href="#">Klimatologi</a></li>
              <li><a href="/data">Tinggi Muka Air</a></li>
              <li><a href="#">Kekeringan</a></li>
              <li><a href="#">Kualitas Air</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Peta</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/maps/maps_ch">Curah Hujan</a></li>
              <li><a href="/maps/maps_tma">Tinggi Muka Air</a></li>
              <li><a href="#">Kualitas Air</a></li>
              <li><a href="#">Sebaran Hujan Harian</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Publikasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Majalah Siklus</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#team">Permohonan Informasi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Sistem Informasi<br>Hidrologi & Kualitas Air</h1>
          <h2>Balai Wilayah Sungai Nusa Tenggara I</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-image.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row content">
          <div class="col-lg-4 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/feature.png" class="img-fluid" alt="">
          </div>
  
          <div class="col-lg-8 pt-4 pt-lg-0">
            <div class="content">
              <h3>Fitur Website</h3>
            </div>
            <p>
              Website sistem informasi hidrologi dan kualitas air Balai Wilayah Sungai Nusa Tenggara I<br>menyediakan data-data seperti :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Data Curah Hujan.</li>
              <li><i class="ri-check-double-line"></i> Data Klimatologi.</li>
              <li><i class="ri-check-double-line"></i> Data Tinggi Muka Air.</li>
              <li><i class="ri-check-double-line"></i> Data Kekeringan.</li>
              <li><i class="ri-check-double-line"></i> Data Kualitas Air.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Data Terkini</h2>
        </div>

        <div class="row justify-content-center">
          <div class="row aos-init aos-animate" data-aos="fade-up">
            <div class="col-md-3">
              <h2 class="text-center mb-4">Cuaca saat ini</h2>
          
              @if(isset($weatherData['current']))
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-6">
                                  <h5 class="card-title">{{ $weatherData['location']['name'] }}</h5>
                              </div>
                              <div class="col-md-6" style="text-align: right;">
                                  <p class="card-text">{{ explode(' ', $weatherData['current']['last_updated'])[1] }}</p>
                              </div>
                              <!-- Displaying the weather icon -->
                              @if(isset($weatherData['current']['condition']['icon']))
                              <div class="col-md-12 text-center">
                                <img src="{{ $weatherData['current']['condition']['icon'] }}" alt="Weather Icon" class="img-fluid mb-2 max-width-100">
                              </div>
                              @endif
                          </div>
                          <!-- Displaying the weather description -->
                          <p class="card-text text-center"><strong>{{ $weatherData['current']['condition']['text'] }}</strong></p>
          
                          <!-- UV Index and Temperature in the same row -->
                          <div class="row">
                              <div class="col-md-8">
                                  <p class="card-text">Kelembaban: {{ $weatherData['current']['humidity'] }}%</p>
                              </div>
                              <div class="col-md-4" style="text-align: right;">
                                  <p class="card-text">{{ $weatherData['forecast']['forecastday'][0]['day']['mintemp_c'] }}-{{ $weatherData['forecast']['forecastday'][0]['day']['maxtemp_c'] }}°C</p>
                              </div>
                          </div>
                      </div>
                  </div>
              @else
                  <p class="text-center">No current weather data available.</p>
              @endif
            </div>
          
      
            <div class="col-md-9">
              <h2 class="text-center mb-4">Prakiraan Cuaca 5 Hari ke Depan</h2>
              <div class="card">
                <div class="card-body">

                  @if(isset($weatherData['forecast']['forecastday']))
                      <div class="row text-center">
                          @foreach($weatherData['forecast']['forecastday'] as $forecast)
                              <div class="col-sm">
                                  {{ \Carbon\Carbon::createFromFormat('Y-m-d', $forecast['date'])->format('d M') }}<br>
                                  <!-- Displaying the weather icon -->
                                  @if(isset($forecast['day']['condition']['icon']))
                                      <img src="{{ $forecast['day']['condition']['icon'] }}" alt="Weather Icon" class="img-fluid mb-1">
                                  @endif
                                  <!-- Displaying the weather description -->
                                  <br>
                                  <strong>{{ $forecast['day']['condition']['text'] }}</strong><br><br>
                                  <!-- Displaying the min-max temperature -->
                                  {{ $forecast['day']['mintemp_c'] }}-{{ $forecast['day']['maxtemp_c'] }}°C
                              </div>
                          @endforeach
                      </div>
                  @else
                      <p class="text-center">No forecast data available.</p>
                  @endif

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Statistik Pengunjung</h2>
        </div>

        <div class="row">
          <div class="row aos-init aos-animate" data-aos="fade-up">
            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
              <div class="count-box">
                <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter">724</span>
                <p>Pengunjung Hari Ini</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
              <div class="count-box">
                <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter">8482</span>
                <p>Total Pengunjung Bulan Ini</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter">19</span>
                <p>Pengunjung Online</p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <span data-purecounter-start="0" data-purecounter-end="2024" data-purecounter-duration="1" class="purecounter">Klik Disini</span>
                <p>Halaman Sering dikunjungi Hari Ini</p>
              </div>
            </div>
  
          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita Video</h2>
        </div>
        <div class="row justify-content-lg-center">
          <div class="col-lg-5">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/G9MlqfKwWmU?si=BPLXuzkBbU6-Yo4v" title="PENGAMBILAN DATA LOGGER POS ARL BELANTING" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            
          </div>
         </div>         
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kegiatan Terkini</h2>
        </div>  

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @php
          $i=1;
          @endphp
          @foreach ($gallery as $item)
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="{{ Storage::url($item->photo) }}" class="img-fluid" alt="{{ $item->title }}"></div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri Kegiatan Unit Hidrologi</h2>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak Kami</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Airlangga, Punia, Kec. Mataram, Kota Mataram,<br>Nusa Tenggara Barart. 83112</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>(0370) 627231</p>
              </div>
              <div class="fax">
                <i class="bi bi-printer"></i>
                <h4>Faks:</h4>
                <p>(0370) 627231</p>
              </div>
            </div>
          </div>

          <div class="col-lg-7 d-flex align-items-stretch">
            <div class="info">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0541656140736!2d116.09727837596475!3d-8.590790987215708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf9ac666926f%3A0x4d870f46e5cb09bb!2skantor%20Penatagunaan%20Sumber%20Daya%20Air%20BWS%20Nusa%20Tenggara%20I!5e0!3m2!1sid!2sid!4v1710049428830!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
              
          </div>  
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Unit Hidrologi & Kualitas Air</span></strong>. BWS Nusa Tenggara I
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
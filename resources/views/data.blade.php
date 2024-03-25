<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data Tinggi Muka Air | Sistem Informasi Hidrologi & Kualitas Air</title>
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
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

  <style>
    #map { height: 675px; }
  </style>

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
          <li><a class="nav-link scrollto" href="/home">Home</a></li>
          <li class="dropdown"><a class="nav-link scrollto active" href="#"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Curah Hujan</a></li>
              <li><a href="#">Klimatologi</a></li>
              <li><a href="/data">Tinggi Muka Air</a></li>
              <li><a href="#">Kekeringan</a></li>
              <li><a href="#">Kualitas Air</a></li>
              <li><a href="#">Onlimo Debit</a></li>
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
<!-- End Hero -->

  <main id="main" class="top-down-padding">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-md-12"> 
                <div class="section-title">
                    <h2>Data Tinggi Muka Air</h2>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Position</th>
                            <th>Longitude</th>
                            <th>Latitude</th>
                            <th>WL</th>
                            <th>RR</th>
                            <th>TT AVG</th>
                            <th>Batt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($weatherCondition as $item)
                        <tr>
                            <td>{{ $item['ID'] }}</td>
                            <td>{{ $item['POS'] }}</td>
                            <td>{{ $item['longitude'] }}</td>
                            <td>{{ $item['latitude'] }}</td>
                            <td>{{ $item['wl'] }}</td>
                            <td>{{ $item['rr'] }}</td>
                            <td>{{ $item['tt_avg'] }}</td>
                            <td>{{ $item['batt'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- {{ $weatherCondition['data']['Balai Wilayah Sungai Nusa Tenggara I']['hardware'][0]['hardware_code']}}
                <p>{{ $weatherCondition['data']['Balai Wilayah Sungai Nusa Tenggara I']['hardware'][0]['location']}}</p>
                <p>{{ $weatherCondition['data']['Balai Wilayah Sungai Nusa Tenggara I']['hardware'][0]['latitude']}}</p>
                <p>{{ $weatherCondition['data']['Balai Wilayah Sungai Nusa Tenggara I']['hardware'][0]['longitude']}}</p>
                <p>{{ $weatherCondition['data']['Balai Wilayah Sungai Nusa Tenggara I']['hardware'][0]['last_sending']}}</p>
                <p>{{ $weatherCondition['data']['Balai Wilayah Sungai Nusa Tenggara I']['hardware'][0]['sensor']['Curah Hujan']['alarm_level']}}</p> --}}
                {{-- <p>{{ $weatherCondition['data']['Balai Wilayah Sungai Nusa Tenggara I']['hardware']['']}}</p> --}}

                {{-- @if(isset($weatherCondition['current']))
                <p>{{ $weatherCondition['location']['name'] }}, {{ \Carbon\Carbon::parse($weatherCondition['current']['last_updated'])->format('d M Y') }}</p>
                <p>Last Update : {{ \Carbon\Carbon::parse($weatherCondition['current']['last_updated'])->format('H:i') }}</p>
                    <table class="table">
                            <thead>
                                <tr>
                                    <th>Suhu (°C)</th>
                                    <th>Kondisi Cuaca</th>
                                    <th>Kecepatan Angin (km/h)</th>
                                    <th>Arah Angin</th>
                                    <th>Kelembaban (%)</th>
                                    <th>Persepsi Suhu (°C)</th>
                                    <th>Jarak Pandang (km)</th>
                                    <th>UV Index</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>{{ $weatherCondition['current']['temp_c'] }}</td>
                                <td>{{ $weatherCondition['current']['condition']['text'] }}</td>
                                <td>{{ $weatherCondition['current']['wind_kph'] }}</td>
                                <td>{{ $weatherCondition['current']['wind_dir'] }}</td>
                                <td>{{ $weatherCondition['current']['humidity'] }}</td>
                                <td>{{ $weatherCondition['current']['feelslike_c'] }}</td>
                                <td>{{ $weatherCondition['current']['vis_km'] }}</td>
                                <td>{{ $weatherCondition['current']['uv'] }}</td>
                            </tbody>
                    </table>
                @else
                    <p class="text-center">No current weather data available.</p>
                @endif --}}
            </div>
        </div>
      </div> 
      
        
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="fixed-bottom">
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
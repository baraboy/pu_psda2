<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Peta Curah Hujan | Sistem Informasi Hidrologi & Kualitas Air</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicons.png" rel="icon">
  <link href="/assets/img/apple-touch-icons.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
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

      <img src="/assets/img/logo.png" class="image-fluid" alt="" width="165" height="40">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/home">Home</a></li>
          <li class="dropdown"><a href="#"><span>Data</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Curah Hujan</a></li>
              <li><a href="#">Klimatologi</a></li>
              <li><a href="/data">Tinggi Muka Air</a></li>
              <li><a href="#">Kekeringan</a></li>
              <li><a href="#">Kualitas Air</a></li>
              <li><a href="#">Onlimo Debit</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link scrollto active" href="#"><span>Peta</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/maps/curahhujan">Curah Hujan</a></li>
              <li><a href="/maps/tinggimukaair">Tinggi Muka Air</a></li>
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
                    <h2>Peta Curah Hujan</h2>
                </div>
                <div id="map"></div>
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
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  <script>

    const map = L.map('map').setView([-8.7,117.5], 9);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var weatherData = {!! json_encode($weatherCondition) !!};

    var pos_on = L.icon({
        iconUrl: '{{ asset('assets/img/icon_obs_green.png') }}',
        iconSize:     [15, 15]
      });

    var markersLayer = new L.layerGroup();
    map.addLayer(markersLayer);
    // Iterasi melalui data cuaca
    weatherData.forEach(item => {
        var latitude = parseFloat(item.latitude);
        var longitude = parseFloat(item.longitude);

        if (!isNaN(latitude) && !isNaN(longitude)) {
            // Cek apakah memiliki nilai tinggi muka air
            if (item.rr !== null) {
                var popupContent = '<b>' + item.POS + '</b><br>' +
                    'Id Station: ' + item.ID + '<br>' +
                    'Time: ' + item.DATE_UTC + '<br>' +
                    'Latitude : ' + latitude + '<br>' +
                    'Longitude : ' + longitude + '<br>' +
                    'Curah Hujan: ' + item.rr + ' m <br>';

                // Tambahkan marker ke layerGroup
                var marker = L.marker([latitude, longitude], {icon: pos_on}).bindPopup(popupContent).bindTooltip(item.POS, {permanent: false, direction: 'right'});
                markersLayer.addLayer(marker);
            }
        }
    });
  </script>

</body>

</html>
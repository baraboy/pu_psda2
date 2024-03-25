<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Peta Tinggi Muka Air | Sistem Informasi Hidrologi & Kualitas Air</title>
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
                    <h2>Peta Tinggi Muka Air</h2>
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

        var utcDate = new Date(item.DATE_UTC);
        var witaDate = new Date(utcDate.getTime() + (8 * 60 * 60 * 1000));

        var options = {
          day: 'numeric',
          month: 'short',
          year: 'numeric',
          hour: 'numeric',
          minute: 'numeric',
          second: 'numeric'
        };

        var formattedDate = witaDate.toLocaleString('id-ID', options);
        // Cek apakah memiliki nilai tinggi muka air
        if (item.wl !== null) {
          var popupContent = '<b>' + item.POS + '</b><br>' +
              'Id Station: ' + item.ID + '<br>' +
              'Time: ' + formattedDate + '<br>' +
              'Latitude : ' + latitude + '<br>' +
              'Longitude : ' + longitude + '<br>' +
              'Tinggi Muka Air: ' + item.wl + ' m <br>';

          // Tambahkan marker ke layerGroup
          var marker = L.marker([latitude, longitude], {icon: pos_on}).bindPopup(popupContent).bindTooltip(item.POS, {permanent: false, direction: 'right'});
          markersLayer.addLayer(marker);
        }
      }
    });
  </script>
  {{-- <script>
    const map = L.map('map').setView([-8.7,117.5], 9);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var pos_on = L.icon({
        iconUrl: '{{ asset('assets/img/icon_obs_green.png') }}',
        iconSize:     [15, 15]
    });

    var pos_on = L.icon({
        iconUrl: '{{ asset('assets/img/icon_obs_green.png') }}',
        iconSize:     [15, 15]
    });

    var markerSTA3001=L.marker([-8.46857,118.74495], {icon: pos_on}).addTo(map).bindPopup("<b>AAWS Mande</b><br/>ID : STA3001<br>n/a");
    markerSTA3001.bindTooltip('AAWS Mande', {permanent: false,direction: 'right'});
    var markerSTA0101=L.marker([-8.706117,116.3086], {icon: pos_on}).addTo(map).bindPopup("<b>AAWS Jontlak (ARR)</b><br/>ID : STA0101<br>n/a");
    markerSTA0101.bindTooltip('AAWS Jontlak (ARR)', {permanent: false,direction: 'right'});
    var markerSTA0006=L.marker([-8.52719722,116.27500000], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Jurang Malang</b><br/>ID : STA0006<br>n/a");
    markerSTA0006.bindTooltip('ARR Jurang Malang', {permanent: false,direction: 'right'});
    var markerSTA0005=L.marker([-8.538772,118.4438], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Dompu</b><br/>ID : STA0005<br>n/a");
    markerSTA0005.bindTooltip('ARR Dompu', {permanent: false,direction: 'right'});
    var markerSMG0002=L.marker([-8.913161,117.224], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Lunyuk (Bendung Plara)</b><br/>ID : SMG0002<br>n/a");
    markerSMG0002.bindTooltip('ARR Lunyuk (Bendung Plara)', {permanent: false,direction: 'right'});
    var markerSMG0001=L.marker([-8.558489,116.333], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Batukliang Utara</b><br/>ID : SMG0001<br>n/a");
    markerSMG0001.bindTooltip('ARR Batukliang Utara', {permanent: false,direction: 'right'});
    var markerMTR0037=L.marker([ -8.615963,119.000430], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Sumi</b><br/>ID : MTR0037<br>n/a");
    markerMTR0037.bindTooltip('ARR Sumi', {permanent: false,direction: 'right'});
    var markerMTR0036=L.marker([ -8.705137,117.405542], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Rea Atas</b><br/>ID : MTR0036<br>n/a");
    markerMTR0036.bindTooltip('ARR Rea Atas', {permanent: false,direction: 'right'});
    var markerMTR0035=L.marker([ -8.334884,118.925631], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Tawali</b><br/>ID : MTR0035<br>n/a");
    markerMTR0035.bindTooltip('ARR Tawali', {permanent: false,direction: 'right'});
    var markerMTR0034=L.marker([-8.753779,118.577257], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Paradowane</b><br/>ID : MTR0034<br>n/a");
    markerMTR0034.bindTooltip('ARR Paradowane', {permanent: false,direction: 'right'});
    var markerMTR0033=L.marker([ -8.558246,116.625561], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Pringgabaya</b><br/>ID : MTR0033<br>n/a");
    markerMTR0033.bindTooltip('ARR Pringgabaya', {permanent: false,direction: 'right'});
    var markerMTR0032=L.marker([ -8.778983,115.921283], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Pelangan</b><br/>ID : MTR0032<br>n/a");
    markerMTR0032.bindTooltip('ARR Pelangan', {permanent: false,direction: 'right'});
    var markerMTR0031=L.marker([ -8.713117,116.406619], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Loang Make</b><br/>ID : MTR0031<br>n/a");
    markerMTR0031.bindTooltip('ARR Loang Make', {permanent: false,direction: 'right'});
    var markerMTR0030=L.marker([ -8.550478,116.390177], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Perian</b><br/>ID : MTR0030<br>n/a");
    markerMTR0030.bindTooltip('ARR Perian', {permanent: false,direction: 'right'});
    var markerMTR0029=L.marker([ -8.508102,116.147131], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Bukit Tinggi</b><br/>ID : MTR0029<br>n/a");
    markerMTR0029.bindTooltip('ARR Bukit Tinggi', {permanent: false,direction: 'right'});
    var markerMTR0028=L.marker([ -8.278466,116.417259], {icon: pos_on}).addTo(map).bindPopup("<b>AAWS Sopak</b><br/>ID : MTR0028<br>n/a");
    markerMTR0028.bindTooltip('AAWS Sopak', {permanent: false,direction: 'right'});
    var markerMTR0027=L.marker([ -8.562499,118.662752], {icon: pos_on}).addTo(map).bindPopup("<b>AAWS Godo</b><br/>ID : MTR0027<br>n/a");
    markerMTR0027.bindTooltip('AAWS Godo', {permanent: false,direction: 'right'});
    var markerMTR0024=L.marker([ -8.776117,118.017631], {icon: pos_on}).addTo(map).bindPopup("<b>AWLR  Empang</b><br/>ID : MTR0024<br>n/a");
    markerMTR0024.bindTooltip('AWLR  Empang', {permanent: false,direction: 'right'});
    var markerMTR0023=L.marker([-8.549063,116.111671], {icon: pos_on}).addTo(map).bindPopup("<b>AWLR Belencong</b><br/>ID : MTR0023<br>n/a");
    markerMTR0023.bindTooltip('AWLR Belencong', {permanent: false,direction: 'right'});
    var markerMTR0022=L.marker([ -8.592011,116.098936], {icon: pos_on}).addTo(map).bindPopup("<b>ARR KR.Jangkong / Airlangga</b><br/>ID : MTR0022<br>n/a");
    markerMTR0022.bindTooltip('ARR KR.Jangkong / Airlangga', {permanent: false,direction: 'right'});
    var markerMTR0021=L.marker([ -8.744099,116.464206], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Sepit</b><br/>ID : MTR0021<br>n/a");
    markerMTR0021.bindTooltip('ARR Sepit', {permanent: false,direction: 'right'});
    var markerMTR0020=L.marker([-8.59502778,116.16990000], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Bertais</b><br/>ID : MTR0020<br>n/a");
    markerMTR0020.bindTooltip('ARR Bertais', {permanent: false,direction: 'right'});
    var markerMTR0019=L.marker([-8.488146,118.769965], {icon: pos_on}).addTo(map).bindPopup("<b>AWLR Kumbe</b><br/>ID : MTR0019<br>n/a");
    markerMTR0019.bindTooltip('AWLR Kumbe', {permanent: false,direction: 'right'});
    var markerMTR0018=L.marker([ -8.487200,118.769470], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Kumbe</b><br/>ID : MTR0018<br>n/a");
    markerMTR0018.bindTooltip('ARR Kumbe', {permanent: false,direction: 'right'});
    var markerMTR0017=L.marker([-8.18255595186361,117.75790854607656], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Kadindi</b><br/>ID : MTR0017<br>n/a");
    markerMTR0017.bindTooltip('ARR Kadindi', {permanent: false,direction: 'right'});
    var markerMTR0016=L.marker([-8.769954,117.938612], {icon: pos_on}).addTo(map).bindPopup("<b>ARR GAPIT</b><br/>ID : MTR0016<br>n/a");
    markerMTR0016.bindTooltip('ARR GAPIT', {permanent: false,direction: 'right'});
    var markerMTR0015=L.marker([ -8.493109,116.554767], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Sapit</b><br/>ID : MTR0015<br>n/a");
    markerMTR0015.bindTooltip('ARR Sapit', {permanent: false,direction: 'right'});
    var markerMTR0014=L.marker([-8.809300,116.223794], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Mangkung</b><br/>ID : MTR0014<br>n/a");
    markerMTR0014.bindTooltip('ARR Mangkung', {permanent: false,direction: 'right'});
    var markerMTR0013=L.marker([-8.846278,116.289763], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Rembitan</b><br/>ID : MTR0013<br>n/a");
    markerMTR0013.bindTooltip('ARR Rembitan', {permanent: false,direction: 'right'});
    var markerMTR0012=L.marker([-8.659259,117.524013], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Pungkit Atas</b><br/>ID : MTR0012<br>n/a");
    markerMTR0012.bindTooltip('ARR Pungkit Atas', {permanent: false,direction: 'right'});
    var markerMTR0011=L.marker([ -8.321111,116.290833], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Santong</b><br/>ID : MTR0011<br>n/a");
    markerMTR0011.bindTooltip('ARR Santong', {permanent: false,direction: 'right'});
    var markerMTR0010=L.marker([-8.553157,116.516291], {icon: pos_on}).addTo(map).bindPopup("<b>AWLR Aikmel</b><br/>ID : MTR0010<br>n/a");
    markerMTR0010.bindTooltip('AWLR Aikmel', {permanent: false,direction: 'right'});
    var markerMTR0009=L.marker([ -8.893946,116.299362], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Sirkuit Mandalika</b><br/>ID : MTR0009<br>n/a");
    markerMTR0009.bindTooltip('ARR Sirkuit Mandalika', {permanent: false,direction: 'right'});
    var markerMTR0008=L.marker([ -8.720403,116.067814], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Serumbung</b><br/>ID : MTR0008<br>n/a");
    markerMTR0008.bindTooltip('ARR Serumbung', {permanent: false,direction: 'right'});
    var markerMTR0007=L.marker([-8.53202,116.23791], {icon: pos_on}).addTo(map).bindPopup("<b>AWLR Aiknyet</b><br/>ID : MTR0007<br>n/a");
    markerMTR0007.bindTooltip('AWLR Aiknyet', {permanent: false,direction: 'right'});
    var markerMTR0006=L.marker([-8.53446,116.23571], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Sesaot</b><br/>ID : MTR0006<br>n/a");
    markerMTR0006.bindTooltip('ARR Sesaot', {permanent: false,direction: 'right'});
    var markerMTR0005=L.marker([-8.75270356596,116.193343865], {icon: pos_on}).addTo(map).bindPopup("<b>AAWS Pengga</b><br/>ID : MTR0005<br>n/a");
    markerMTR0005.bindTooltip('AAWS Pengga', {permanent: false,direction: 'right'});
    var markerMTR0004=L.marker([-8.539681739648971,116.0991093879007], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Gunung Sari</b><br/>ID : MTR0004<br>n/a");
    markerMTR0004.bindTooltip('ARR Gunung Sari', {permanent: false,direction: 'right'});
    var markerMTR0003=L.marker([-8.67956,116.32863], {icon: pos_on}).addTo(map).bindPopup("<b>ARR Pengadang</b><br/>ID : MTR0003<br>n/a");
    markerMTR0003.bindTooltip('ARR Pengadang', {permanent: false,direction: 'right'});
    var markerMTR0002=L.marker([-8.32888909622,116.296388889], {icon: pos_on}).addTo(map).bindPopup("<b>AWLR Santong</b><br/>ID : MTR0002<br>n/a");
    markerMTR0002.bindTooltip('AWLR Santong', {permanent: false,direction: 'right'});
    var markerMTR0001=L.marker([-8.57272248592,116.466944414], {icon: pos_on}).addTo(map).bindPopup("<b>AWLR Tempasan</b><br/>ID : MTR0001<br>n/a");
    markerMTR0001.bindTooltip('AWLR Tempasan', {permanent: false,direction: 'right'});	

  </script> --}}

</body>

</html>
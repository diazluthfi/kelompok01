<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Surabaya</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- header starts -->

    <header class="header">

        <nav class="navbar">
    
        <a href="#" class="logo">
            <img src="assets/images/logo/img-logo-sparkling.png" alt="">
        </a>
    
        <div class="links">
          <a href="{{route('home')}}">Beranda</a>
          <a href="{{route('pagedestinasi')}}">Destinasi</a>
          <a href="kuliner.html">Kuliner</a>
          <a href="{{route('login')}}">Login</a>
          <a href="{{route('register')}}">Sign Up</a>
            
        </div>
        
        <div id="menu-btn" class="fa fa-bars"></div>
    
        </nav>
    
    </header>

    <!-- header ends -->

    <!-- beranda starts -->

    <section class="home" id="home">

        <div class="content">
            <h3>Welcome <br><span>to  Surabaya .</span></h3>
            <p>Nikmati berbagai keindahan yang terkenal dengan sebutan kota pahlawan serta kunjungi berbagai tempat bersantai dengan teman dan keluarga.</p>
            
         </div>

    </section>

    <!-- beranda ends -->

    <!-- feature starts -->

    <section class="feature">

        <h1 class="heading">Tourism <span>Feature</span></h1>

        <div class="box-container">

            <div class="box">
                <a href="{{route('pagedestinasi')}}">
                    <img src="assets/images/icon/destination.png" alt="">
                    <h3>Destinasi Wisata</h3>
                    <p>Klik untuk rekomendasi destinasi wisata Surabaya</p>
                </a>
            </div>

            <div class="box">
                <a href="kuliner.html">
                    <img src="assets/images/icon/fork.png" alt="">
                    <h3>Kuliner Surabaya</h3>
                    <p>Klik untuk rekomendasi kuliner di Surabaya</p>
                </a>
            </div>

            <div class="box">
                <a href="https://tourism.surabaya.go.id/map">
                    <img src="assets/images/icon/map.png" alt="">
                    <h3>Peta Digital</h3>
                    <p>Klik untuk melihat peta digital Surabaya</p>
                </a>
            </div>

        </div>

    </section>

    <!-- feature ends -->

    <!-- news starts -->

    <section class="news">
        <!-- <div class="heading"> -->
            <h1 class="heading">Tourism <span>Feature</span></h1>
        <!-- </div> -->

        <div class="grid">

            <!-- right image -->
            <div class="content">
                <h3>Konser Tulus Tur Manusia 2023</h3>
                <p>
                    Tulus - Tur Manusia 2023 merupakan roadshow konser tunggal dari penyanyi hits Indonesia, Tulus. Tour di 11 Kota ini akan singgah ke Surabaya pada 12 Februari 2023 di Jatim Expo
                </p>
                <button class="btn">baca lebih lanjut</button>
            </div>

            <div class="image">
                <img src="assets/images/news/news-1.jpeg" alt="">
            </div>

            <!-- left image -->
            <div class="image">
                <img src="assets/images/news/news-2.jfif" alt="">
            </div>

            <div class="content">
                <h3>Kembang Jepun CHUNJIE FEST 2023</h3>
                <p>
                    Semarak perayaan tahun baru imlek di Kembang Jepun, kawasan pecinan legendaris di Kota Surabaya. Nikmati berbagai tampilan seni budaya tionghoa sembari mencicipi beragam sajian kuliner pecinan di Kya Kya Kembang Jepun
                </p>
                <button class="btn">baca lebih lanjut</button>
            </div>

            <!-- right image -->
            <div class="content">
                <h3>Lomba Perahu Layar</h3>
                <p>
                    Lomba Perahu Layar diadakan di Pantai Kenjeran setiap satu tahun sekali. Para peserta mempercantik perahunya dengan kreasi corak layar warna-warni yang beraneka. Tahun ini dipilih bulan Mei dengan jadwal tentative menyesuaikan kondisi cuaca dan angin
                </p>
                <button class="btn">baca lebih lanjut</button>
            </div>

            <div class="image">
                <img src="assets/images/news/news-3.jpg" alt="">
            </div>

            <!-- left image -->
            <div class="image">
                <img src="assets/images/news/news-4.jpg" alt="">
            </div>

            <div class="content">
                <h3>International Cat Show</h3>
                <p>
                    Buat pecinta kucing, bisa menyaksikan perlombaan kucing tingkat internasional pada event kali ini. Bermacam-macam kuring berbagai ras dilombakan untuk memenangkan kucing terbaiknya. Lokasi event ini berada di Chameleon Hall TP 6 lantai 5.
                </p>
                <button class="btn">baca lebih lanjut</button>
            </div>

        </div>
        

    </section>

    <!-- news ends -->

    <!-- footer section starts -->
  <footer class="footer">

    <section class="box-container">

      <div class="box">
        <h3>Call to Action Links</h3>
        <a href="index.html">beranda</a>
        <a href="destinasi.html">destinasi</a>
        <a href="kuliner.html">kuliner</a>
        <a href="login.html">login</a>
        <a href="signup.html">sign up</a>
      </div>

      <div class="box">
        <h3>Contact Us</h3>
        <a href="#"></i>031-5318409</a>
        <a href="map">Jl. Tunjungan No.1-3 Kelurahan Genteng
            Kecamatan Genteng, Kota Surabaya
            Jawa Timur, Indonesia, 60275</a>
      </div>

      <div class="box">
        <h3>Social Media</h3>
        <a href="#">facebook</a>
        <a href="#">instagram</a>
      </div>

    </section>

    <div class="credit"> 
        <img src="assets/images/logo/img-logo-sparkling.png" alt="">
    </div>
  </footer>
  <!-- footer section ends -->
    














    <!-- JS -->
    <script src="assets/js/app.js"></script>
    
</body>
</html>
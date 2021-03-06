<?php 

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Theme Made By www.w3schools.com -->
    <title>Tempellemahbang</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lato"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      .fa {
        padding: 20px;
        font-size: 30px;
        width: 50px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
      }

      .fa:hover {
        opacity: 0.7;
      }
      body {
        font: 400 15px Lato, sans-serif;
        line-height: 1.8;
        color: #818181;
      }
      div.isi_berita {
        white-space: nowrap; 
        width: 100%; 
        overflow: hidden;
        text-overflow: ellipsis;
        padding: 5px;
      }
      h2 {
        font-size: 24px;
        text-transform: uppercase;
        color: #303030;
        font-weight: 600;
        margin-bottom: 30px;
      }
      h4 {
        font-size: 19px;
        line-height: 1.375em;
        color: #303030;
        font-weight: 400;
        margin-bottom: 30px;
      }
      .iframecontainer {
        margin: auto;
        position: relative;
        overflow: hidden;
        width: 80%;
        padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
      }

      /* Then style the iframe to fit in the container div with full height and width */
      .responsive-iframe {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
      }
      .jumbotron {
        background-image: url("img/bg-home.jpg");
        color: #fff;
        padding: 100px 25px;
        font-family: Montserrat, sans-serif;
      }
      .container-fluid {
        padding: 60px 50px;
      }
      .bg-grey {
        background-color: #f6f6f6;
      }
      .logo-small {
        color: #072227;
        font-size: 50px;
      }
      .logo {
        color: #072227;
        font-size: 200px;
      }
      .thumbnail {
        padding: 0 0 15px 0;
        border: none;
        border-radius: 0;
      }
      .thumbnail img {
        width: 100%;
        height: 100%;
        margin-bottom: 10px;
      }
      .carousel-control.right,
      .carousel-control.left {
        background-image: none;
        color: #072227;
      }
      .carousel-indicators li {
        border-color: #072227;
      }
      .carousel-indicators li.active {
        background-color: #072227;
      }
      .item h4 {
        font-size: 19px;
        line-height: 1.375em;
        font-weight: 400;
        font-style: italic;
        margin: 70px 0;
      }
      .item span {
        font-style: normal;
      }
      .panel {
        border: 1px solid #072227;
        border-radius: 0 !important;
        transition: box-shadow 0.5s;
      }
      .panel:hover {
        box-shadow: 5px 0px 40px rgba(0, 0, 0, 0.2);
      }
      .panel-footer .btn:hover {
        border: 1px solid #072227;
        background-color: #fff !important;
        color: #072227;
      }
      .panel-heading {
        color: #fff !important;
        background-color: #072227 !important;
        padding: 25px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
      }
      .panel-footer {
        background-color: white !important;
      }
      .panel-footer h3 {
        font-size: 32px;
      }
      .panel-footer h4 {
        color: #aaa;
        font-size: 14px;
      }
      .panel-footer .btn {
        margin: 15px 0;
        background-color: #072227;
        color: #fff;
      }
      .navbar {
        margin-bottom: 0;
        background-color: #072227;
        z-index: 9999;
        border: 0;
        font-size: 12px !important;
        line-height: 1.42857143 !important;
        letter-spacing: 4px;
        border-radius: 0;
        font-family: Montserrat, sans-serif;
      }
      .navbar li a,
      .navbar .navbar-brand {
        color: #fff !important;
      }
      .navbar-nav li a:hover,
      .navbar-nav li.active a {
        color: #072227 !important;
        background-color: #fff !important;
      }
      .navbar-default .navbar-toggle {
        border-color: transparent;
        color: #fff !important;
      }
      footer .glyphicon {
        font-size: 20px;
        margin-bottom: 20px;
        color: #072227;
      }
      .slideanim {
        visibility: hidden;
      }
      .slide {
        animation-name: slide;
        -webkit-animation-name: slide;
        animation-duration: 1s;
        -webkit-animation-duration: 1s;
        visibility: visible;
      }
      @keyframes slide {
        0% {
          opacity: 0;
          transform: translateY(70%);
        }
        100% {
          opacity: 1;
          transform: translateY(0%);
        }
      }
      @-webkit-keyframes slide {
        0% {
          opacity: 0;
          -webkit-transform: translateY(70%);
        }
        100% {
          opacity: 1;
          -webkit-transform: translateY(0%);
        }
      }
      @media screen and (max-width: 768px) {
        .col-sm-4 {
          text-align: center;
          margin: 25px 0;
        }
        .btn-lg {
          width: 100%;
          margin-bottom: 35px;
        }
      }
      @media screen and (max-width: 480px) {
        .logo {
          font-size: 150px;
        }
      }
    </style>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target="#myNavbar"
          >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#myPage">Tempelemahbang</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="#home">HOME</a></li> -->
            <li><a href="#tentang">TENTANG</a></li>
            <li><a href="#berita">BERITA</a></li>
            <li><a href="#video">VIDEO</a></li>
            <li><a href="#galeri">GALERI</a></li>
            <li><a href="#pemesanan">PEMESANAN</a></li>
            <li><a href="#kontak">KONTAK</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron text-center">
      <h1>Tempelemahbang</h1>
      <p>Desa Wisata Kekinian</p>
    </div>

    <!-- Container (Tentang Section) -->
    <div id="tentang" class="container-fluid text-center">
      <div class="row">
        <div class="col-sm-12">
          <h2>Tentang Tempelemahbang</h2>
          <br />
          <h4>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
          </h4>
          <br />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat
            non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.
          </p>
        </div>
        <!-- <div class="col-sm-4">
          <span>Bisa di isi gambar nih</span>
        </div> -->
      </div>
    </div>

    <!-- Container (Berita Section) -->
    <div id="berita" class="container-fluid text-center bg-grey">
      <h2>Berita</h2>
      <br />
      <h4>3 Berita terbaru dari Desa Tempellemahbang</h4>

      <div class='row text-center slideanim'>
        <?php 

        $load_berita = mysqli_query($connect, "SELECT * FROM  berita");
        
        if (mysqli_num_rows($load_berita) == 1) {
          for ($i = 0; $i< 1; $i++) {
            $result = mysqli_fetch_array($load_berita);
            $id = $result['id_berita'];
            $gambar = $result['gambar'];
            $judul = $result['judul'];
            $isi = $result['isi'];
            echo "<div class='col-sm-4'></div>
                  <div class='col-sm-4'>
                    <a href='berita.php?id=$id'>
                      <div class='thumbnail'>
                        <img src='./img/berita/$gambar' width='400' height='300' />
                        <p><strong>$judul</strong></p>
                        <div class='isi_berita'>$isi</div>
                      </div>
                    </a>
                  </div>";
          }
        } else if (mysqli_num_rows($load_berita) == 2) {

          echo "<div class='col-sm-2'></div>";

          for ($i = 0; $i< 2; $i++) {
            $result = mysqli_fetch_array($load_berita);
            $id = $result['id_berita'];
            $gambar = $result['gambar'];
            $judul = $result['judul'];
            $isi = $result['isi'];
            echo "<div class='col-sm-4'>
                    <a href='berita.php?id=$id'>
                      <div class='thumbnail'>
                        <img src='./img/berita/$gambar' width='400' height='300' />
                        <p><strong>$judul</strong></p>
                        <div class='isi_berita'>$isi</div>
                      </div>
                    </a>
                  </div>";
          }
        } else if (mysqli_num_rows($load_berita) >= 3) {
          for ($i = 0; $i< 3; $i++) {
            $result = mysqli_fetch_array($load_berita);
            $id = $result['id_berita'];
            $gambar = $result['gambar'];
            $judul = $result['judul'];
            $isi = $result['isi'];
            echo "<div class='col-sm-4'>
                    <a href='berita.php?id=$id'>
                      <div class='thumbnail'>
                        <img src='./img/berita/$gambar' width='400' height='300' />
                        <p><strong>$judul</strong></p>
                        <div class='isi_berita'>$isi</div>
                      </div>
                    </a>
                  </div>";
          }
        }

        ?>
      </div>

    </div>


    <!-- Container (Video Section) -->
    <div id="video" class="container-fluid">
      <div class="text-center">
        <h2>Video</h2>
      </div>
      <div
        id="videoCarousel"
        class="carousel slide text-center"
        data-ride="carousel"
      >
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <?php 
          
          $load_video = mysqli_query($connect, "SELECT * FROM video");
          if (mysqli_num_rows($load_video) > 0) {
            $row = mysqli_fetch_assoc($load_video);
            $i = 1;
            echo "<li data-target='#videoCarousel' data-slide-to='0' class='active'></li>";
            while ($row = mysqli_fetch_array($load_video)) {
              echo "<li data-target='#videoCarousel' data-slide-to='$i'></li>";
              $i ++;
            }
          }

          ?>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <?php 
            
            $load_video = mysqli_query($connect, "SELECT * FROM video");
            if (mysqli_num_rows($load_video) > 0) {
              $row = mysqli_fetch_assoc($load_video);
              $link = $row['link'];
              echo "<div class='item active'>
                      <div class='iframecontainer'>
                        <iframe
                          class='responsive-iframe'
                          src='$link'
                          title='YouTube video player'
                          frameborder='0'
                          allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                          allowfullscreen
                        >
                        </iframe>
                      </div>
                    </div>";
              while ($row = mysqli_fetch_array($load_video)) {
                $link = $row['link'];
                echo "<div class='item'>
                        <div class='iframecontainer'>
                          <iframe
                            class='responsive-iframe'
                            src='$link'
                            title='YouTube video player'
                            frameborder='0'
                            allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                            allowfullscreen
                          >
                          </iframe>
                        </div>
                      </div>";
              }
            }

            ?>
        </div>

        <!-- Left and right controls -->
        <a
          class="left carousel-control"
          href="#videoCarousel"
          role="button"
          data-slide="prev"
        >
          <span
            class="glyphicon glyphicon-chevron-left"
            aria-hidden="true"
          ></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="right carousel-control"
          href="#videoCarousel"
          role="button"
          data-slide="next"
        >
          <span
            class="glyphicon glyphicon-chevron-right"
            aria-hidden="true"
          ></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- Container (Galeri Section) -->
    <div id="galeri" class="container-fluid bg-grey">
      <div class="text-center">
        <h2>Galeri</h2>
      </div>
      <div
        id="galeriCarousel"
        class="carousel slide text-center"
        data-ride="carousel"
      >
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <?php 

            $load_foto = mysqli_query($connect, "SELECT * FROM galeri");
            if (mysqli_num_rows($load_foto) >0) {
              $row = mysqli_fetch_array($load_foto);
              $i = 1;
              echo "<li data-target='#galeriCarousel' data-slide-to='0' class='active'></li>";
              while ($row = mysqli_fetch_array($load_foto)) {
                echo "<li data-target='#galeriCarousel' data-slide-to='$i'></li>";
                $i ++;
              }

            }

          ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        <?php 

          $load_foto = mysqli_query($connect, "SELECT * FROM galeri");
          if (mysqli_num_rows($load_foto) >0) {
            $row = mysqli_fetch_array($load_foto);
            $gambar = $row['gambar'];
            echo "<div class='item active'>
                  <div>
                    <img
                    src='img/galeri/$gambar'
                    alt=''
                    style='width: 80%; margin: auto'
                    />
                  </div>
                </div>";
            while ($row = mysqli_fetch_array($load_foto)) {
              $gambar = $row['gambar'];
              echo "<div class='item'>
                      <div>
                        <img
                        src='img/galeri/$gambar'
                        alt=''
                        style='width: 80%; margin: auto'
                        />
                      </div>
                    </div>";
            }

          }

        ?>

        <!-- Left and right controls -->
        <a
          class="left carousel-control"
          href="#galeriCarousel"
          role="button"
          data-slide="prev"
        >
          <span
            class="glyphicon glyphicon-chevron-left"
            aria-hidden="true"
          ></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="right carousel-control"
          href="#galeriCarousel"
          role="button"
          data-slide="next"
        >
          <span
            class="glyphicon glyphicon-chevron-right"
            aria-hidden="true"
          ></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- Container (Pemesanan Section) -->
    <div id="pemesanan" class="container-fluid">
      <div class="text-center">
        <h2>Paket Wisata</h2>
        <h4>Pilih paket wisatanya, bersenang-senang di Tempellemahbang !</h4>
      </div>
      <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h1>Paket A</h1>
              <h4 style="color: white">Waduk Seloparang</h4>
            </div>
            <div class="panel-body">
              <p>Jasa Pemandu</p>
              <p>Peralatan</p>
              <p>Asuransi</p>
              <p>Transportasi</p>
            </div>
            <div class="panel-footer">
              <h3>Rp 75.000</h3>
              <h4>per orang</h4>
              <a class="btn btn-lg" href="pesan.php?paket=a">Pesan</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h1>Paket B</h1>
              <h4 style="color: white">Budaya dan Kerajinan</h4>
            </div>
            <div class="panel-body">
              <p>Jasa Pemandu</p>
              <p>Peralatan</p>
              <p>Asuransi</p>
              <p>Transportasi</p>
            </div>
            <div class="panel-footer">
              <h3>Rp 75.000</h3>
              <h4>per orang</h4>
              <a class="btn btn-lg" href="pesan.php?paket=b">Pesan</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h1>Paket C</h1>
              <h4 style="color: white">Flying Fox Seloparang</h4>
            </div>
            <div class="panel-body">
              <p>Jasa Pemandu</p>
              <p>Peralatan</p>
              <p>Asuransi</p>
              <p>Transportasi</p>
            </div>
            <div class="panel-footer">
              <h3>Rp 65.000</h3>
              <h4>per orang</h4>
              <a class="btn btn-lg" href="pesan.php?paket=c">Pesan</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Container (Kontak Section) -->
    <div id="kontak" class="container-fluid bg-grey">
      <h2 class="text-center">Kontak</h2>
      <div class="row">
        <div class="col-sm-5">
          <p>Silahkan hubungi kami di kontak berikut :</p>
          <p>
            <span class="glyphicon glyphicon-map-marker"></span> Jawa Tengah,
            Indonesia
          </p>
          <p>
            <span class="glyphicon glyphicon-phone"></span> +62 111202012497
          </p>
          <p>
            <span class="glyphicon glyphicon-envelope"></span>
            admin@tempellemanbang.
          </p>
        </div>
        <div class="col-sm-7 slideanim">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input
                class="form-control"
                id="name"
                name="name"
                placeholder="Name"
                type="text"
                required
              />
            </div>
            <div class="col-sm-6 form-group">
              <input
                class="form-control"
                id="email"
                name="email"
                placeholder="Email"
                type="email"
                required
              />
            </div>
          </div>
          <textarea
            class="form-control"
            id="comments"
            name="comments"
            placeholder="Comment"
            rows="5"
          ></textarea
          ><br />
          <div class="row">
            <div class="col-sm-12 form-group">
              <button class="btn btn-default pull-right" type="submit">
                Send
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Container (Komentar Section) -->
    <div class="container-fluid text-center">
      <h2>Komentar</h2>
      <div
        id="komentarCarousel"
        class="carousel slide text-center"
        data-ride="carousel"
      >
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <?php 
            $load_komentar = mysqli_query($connect, "SELECT * FROM komentar");
            if (mysqli_num_rows($load_komentar) > 0) {
              $row = mysqli_fetch_array($load_komentar);
              $i = 1;
              echo "<li data-target='#komentarCarousel' data-slide-to='0' class='active'></li>";
              while ($row = mysqli_fetch_array($load_komentar)) {
                echo "<li data-target='#komentarCarousel' data-slide-to='$i'></li>";
                $i ++;
              }
            }

          ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <?php 
            $load_komentar = mysqli_query($connect, "SELECT * FROM komentar");
            if (mysqli_num_rows($load_komentar) > 0) {
              $row = mysqli_fetch_array($load_komentar);
              $nama = $row['nama'];
              $komentar = $row['komentar'];
              echo "<div class='item active'>
                    <h4>
                      ''$komentar''<br /><span
                        >$nama</span
                      >
                    </h4>
                  </div>";
              while ($row = mysqli_fetch_array($load_komentar)) {
                $nama = $row['nama'];
                $komentar = $row['komentar'];
                echo "<div class='item'>
                      <h4>
                        ''$komentar''<br /><span
                          >$nama</span
                        >
                      </h4>
                    </div>";
              }
            }

          ?>
        </div>

        <!-- Left and right controls -->
        <a
          class="left carousel-control"
          href="#komentarCarousel"
          role="button"
          data-slide="prev"
        >
          <span
            class="glyphicon glyphicon-chevron-left"
            aria-hidden="true"
          ></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="right carousel-control"
          href="#komentarCarousel"
          role="button"
          data-slide="next"
        >
          <span
            class="glyphicon glyphicon-chevron-right"
            aria-hidden="true"
          ></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <footer class="container-fluid text-center">
      <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a>
      <p>
        Bootstrap Theme Made By
        <a href="https://www.w3schools.com" title="Visit w3schools"
          >www.w3schools.com</a
        >
      </p>
      <p>Customized by Dimas Saputro</p>
      <a href="https://instagram.com/dimassdoubles?utm_medium=copy_link" class="fa fa-instagram"></a>
      <a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile&lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_self_edit_contact_info%3BX0WRlLlCQGqZA2itD8itow%3D%3D" class="fa fa-linkedin"></a>
      <a href="https://github.com/dimassdoubles/ti3-pbw-uas.git" class="fa fa-github"></a>
    </footer>

    <script>
      $(document).ready(function () {
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on("click", function (event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $("html, body").animate(
              {
                scrollTop: $(hash).offset().top,
              },
              900,
              function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              }
            );
          } // End if
        });

        $(window).scroll(function () {
          $(".slideanim").each(function () {
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
          });
        });
      });
    </script>
  </body>
</html>

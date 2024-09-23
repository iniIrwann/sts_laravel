@extends('main')

@section('layout')

<!-- ***** Main Banner Area Start ***** -->
 <style>
  .irwan{
    transition-property: width;
    font-weight: bold;
    }
  .irwan:hover{
    font-size: 20px;
    transition: 0.5s;
    transition-timing-function: ease-in-out;

  }
 </style>
<section class="main-banner" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="header-text">
          <h6>Welcome to My Personal Website<br><span class="irwan">Irwan Akhmad Zaini</span>, Siswa SMK jurusan</h6>
          <h2>Rekayasa Perangkat Lunak <em>(RPL)</em></h2>
          <div class="main-button-gradient">
            <div class="scroll-to-section"><a href="about">About Me</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="right-image">
          <img src="assets/images/Desain_tanpa_judul__4_-removebg-preview.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Main Banner Area End ***** -->
<section class="simple-cta">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 offset-lg-1">
        <div class="left-image">
          <img src="assets/images/project_unggulan.png" alt="">
        </div>
      </div>
      <div class="col-lg-5 align-self-center">
        <h6>Project Unggulan</h6>
        <h4>Peminjaman Barang</h4>
        <p>Sebuah website inovatif muncul, memfasilitasi peminjaman barang antar pengguna. Dengan sistem yang mudah,
          warga bisa saling membantu, mengurangi biaya, dan memperkuat komunitas secara online.</p>
        <div class="white-button">
          <a href="project">More Project</a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-12">
      <ul class="social-icons">
        <!-- <li><a href="https://web.facebook.com/login/"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li> -->
      </ul>
    </div>
    <div class="col-lg-12 justify-content-center d-flex">
      <div class="main-button-gradient">
        <div class="scroll-to-section"><a href="contact">Contact Me</a></div>
      </div>

    </div>
    <div class="col-lg-12">
      <p class="copyright" style="color: black;">Copyright ©2024 All right deserverd </p>
    </div>
  </div>
</div>



<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>


@endsection
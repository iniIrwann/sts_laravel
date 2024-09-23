@extends('main')

@section('layout')
<section class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="header-text">
          <h4>Say Hello Irwan</h4>
          <h1><b>Contact Us</b></h1>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<section class="contact-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
        <div class="row">
          <div class="col-lg-4 offset-lg-1">
            <div class="contact-info">
              <div class="icon">
                <i class="fa fa-phone"></i>
              </div>
              <h4>Phone</h4>
              <span>0895396799752</span>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="contact-info">
              <div class="icon">
                <i class="fa fa-phone"></i>
              </div>
              <h4>Email</h4>
              <span>irwanakhmadzainni@gmail.com</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h6>Contact us</h6>
                <h4>Say <em>Hello</em></h4>
                <p></p>
              </div>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" id="message" placeholder="Your Message"></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="main-gradient-button">Send Message</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-12">
        <ul class="social-icons">
          <li><a href="https://web.facebook.com/login/"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
      <div class="col-lg-12">
        <p class="copyright">Copyright ©2024 All right deserverd
      </div>
    </div>
  </div>
  <?php
// if (isset($_POST['masuk'])) {
//   $name = $_POST['name'];
//   $email = $_POST['email'];
//   $massage = $_POST['massage'];
//   $sql = mysqli_query($conn, "INSERT INTO massage (id,name,email,massage) VALUE(null,'$name','$email','$massage')");

// }
?>


</section>

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
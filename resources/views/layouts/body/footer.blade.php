@php
$SocialMedia = App\Models\Social_media::get()
@endphp
<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Company</h3>
          <p>
            15 mayo block 23<br> no 9 , Cairo Egypt<br><br>
            <strong>Phone:</strong> +01000 93 20 55<br>
            <strong>Phone:</strong> +011 485 480 29<br>


            <strong>Email:</strong>lighthouselighthouse2<br>
          </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Join Our Light House</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="{{route('contact')}}" method="get">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        &copy; Copyright <strong><span>ad4sas</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
        Designed by <a href="https://ad4sas.com/">HATEM</a>
      </div>
    </div>


@if(count($SocialMedia) >0)

    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="{{$SocialMedia[0]->twitter}}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="{{$SocialMedia[0]->facebook}}" target="_blank" class="facebook" ><i class="bx bxl-facebook"></i></a>
      <a href="{{$SocialMedia[0]->Instagram}}" target="_blank" class="Instagram"><i class="bx bxl-instagram"></i></a>
      <a href="{{$SocialMedia[0]->skype}}" target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="{{$SocialMedia[0]->youtube}}" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
    </div>

@else

<div class="alert alert-danger" style="text-align: center" role="alert">
  <strong>{{__('company.placeEmpty')}}</strong>!
</div>

@endif


  </div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

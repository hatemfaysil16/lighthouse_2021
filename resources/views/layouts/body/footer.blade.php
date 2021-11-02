@php
$SocialMedia = App\Models\Social_media::get();
$info = App\Models\Info::all();

@endphp
<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">


        @if (App::getLocale() == 'en')


        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>{{__('footer.company')}}</h3>
          <p>
            @if(count($info) >0)
            {{$info[0]->address}}<br>
            <strong>{{__('footer.phone')}}:</strong> {{$info[0]->phone_one}}<br>
            <strong>{{__('footer.phone')}}:</strong> {{$info[0]->phone_two}}<br>
            <strong>{{__('footer.email')}}:</strong><br>{{$info[0]->email}}
            @endif
          </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>{{__('footer.Links')}}</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">{{__('navbar.Home')}}</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{route('HomeAbout')}}">{{__('navbar.About')}}</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{route('services')}}">{{__('navbar.services')}}</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{route('Pricing')}}">{{__('navbar.pricing')}}</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{route('contact')}}">{{__('navbar.contact')}}</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>{{__('navbar.services')}}</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">{{__('footer.webDesign')}}</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">{{__('footer.webDevelopment')}}</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">{{__('footer.account_program')}}</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">{{__('footer.account_system')}}</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">{{__('footer.general_programmer')}}</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>{{__('footer.header')}}</h4>
          <p>{{__('company.video_paragraph')}}</p>
          <form action="{{route('contact')}}" method="get">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>

@else
  



        <div class="col-lg-2 col-md-6 footer-links">
          <h4>{{__('footer.Links')}}</h4>
          <ul>
            <li> <a href="{{url('/')}}">{{__('navbar.Home')}}</a><i class="bx bx-chevron-left"></i></li>
            <li> <a href="{{route('HomeAbout')}}">{{__('navbar.About')}}</a><i class="bx bx-chevron-left"></i></li>
            <li> <a href="{{route('services')}}">{{__('navbar.services')}}</a><i class="bx bx-chevron-left"></i></li>
            <li> <a href="{{route('Pricing')}}">{{__('navbar.pricing')}}</a><i class="bx bx-chevron-left"></i></li>
            <li> <a href="{{route('contact')}}">{{__('navbar.contact')}}</a><i class="bx bx-chevron-left"></i></li>
          </ul>
        </div>


        <div class="col-lg-3 col-md-6 footer-links">
          <h4>{{__('navbar.services')}}</h4>
          <ul>
            <li> <a href="#">{{__('footer.webDesign')}}</a><i class="bx bx-chevron-left"></i></li>
            <li> <a href="#">{{__('footer.webDevelopment')}}</a><i class="bx bx-chevron-left"></i></li>
            <li> <a href="#">{{__('footer.account_program')}}</a><i class="bx bx-chevron-left"></i></li>
            <li> <a href="#">{{__('footer.account_system')}}</a><i class="bx bx-chevron-left"></i></li>
            <li> <a href="#">{{__('footer.general_programmer')}}</a><i class="bx bx-chevron-left"></i></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>{{__('footer.company')}}</h3>
          <p>
            @if(count($info) >0)
            {{__('footer.address_one')}}<br> {{__('footer.address_two')}}<br><br>
            <strong>{{__('footer.phone')}}:</strong> {{$info[0]->phone_one}}<br>
            <strong>{{__('footer.phone')}}:</strong> {{$info[0]->phone_two}}<br>
            <strong style="margin-left: 3rem">{{__('footer.email')}}:</strong><br><span style="margin-right: 4rem">{{$info[0]->email}}</span>
            @endif
          </p>
        </div>


        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>{{__('footer.header')}}</h4>
          <p>{{__('company.video_paragraph')}}</p>
          <form action="{{route('contact')}}" method="get">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>

@endif


      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        @if(count($info) >0)
        &copy; Copyright <strong><span>{{$info[0]->link_site}}</span></strong>. All Rights Reserved
        @endif
      </div>
      <div class="credits">

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


@endif


  </div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

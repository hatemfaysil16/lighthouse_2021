@php
$SocialMedia = App\Models\Social_media::get();
$info = App\Models\Info::all();

$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();


@endphp


<!-- ======= Header ======= -->
<header id="header" class="fixed-top">

  <div class="container d-flex align-items-center">
    @if(count($info) >0)
    <h1 class="logo mr-auto"><a href="{{url('/')}}"><img src="{{asset($info[0]->logo_img)}}" alt=""></h1>
    @endif
    {{--  <!-- Uncomment below if you prefer to use an image logo -->  --}}
   {{--  <a href="{{url('/')}}" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>  --}}

    <nav class="nav-menu d-none d-lg-block">
      <ul>


        <li class="{{ ($route == '/')?'active':'' }}"><a href="{{url('/')}}">{{__('navbar.Home')}}</a></li>


        <li class="drop-down {{ ($route == 'HomeAbout')?'active':'' }}"><a href="{{route('HomeAbout')}}">{{__('navbar.About')}}</a>
          <ul>
            <li class="{{ ($route == 'HomeAbout')?'active':'' }}"><a href="{{route('HomeAbout')}}">{{__('navbar.About')}}</a></li>
            <li><a href="">{{__('footer.webDesign')}}</a></li>
            <li><a href="">{{__('footer.webDevelopment')}}</a></li>
            <li><a href="">{{__('footer.account_program')}}</a></li>
            <li><a href="">{{__('footer.account_system')}}</a></li>
            <li><a href="">{{__('footer.general_programmer')}}</a></li>
          </ul>
        </li>

        <li class="{{ ($route == 'services')?'active':'' }}"><a href="{{route('services')}}">{{__('navbar.services')}}</a></li>
        <li class="{{ ($route == 'portfolio')?'active':'' }}"><a href="{{route('portfolio')}}">{{__('navbar.portfolio')}}</a></li>
        <li class="{{ ($route == 'Pricing')?'active':'' }}"><a href="{{route('Pricing')}}">{{__('navbar.pricing')}}</a></li>
        <li  style="display: none"><a href="{{'blog'}}">{{__('navbar.Blog')}}</a></li>
        <li class="{{ ($route == 'contact')?'active':'' }}"><a href="{{'contact'}}">{{__('navbar.contact')}}</a></li>
        <li><a href="{{url('login')}}" target="_blank">{{__('navbar.login')}}</a></li>

                  {{-- <!-- language --> --}}
                  <li class="github-link mr-3">
                    <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown"   aria-haspopup="true" aria-expanded="false">
                      @if (App::getLocale() == 'ar')
                          ?????????? ?????????????? - AR
                      @else
                          {{--  {{ LaravelLocalization::getCurrentLocaleName() }}  --}}
                          English - EN
                      @endif
                  </button>
                  <div class="dropdown-menu">
                      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                          <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                              {{ $properties['native'] }}
                          </a>
                      @endforeach
                  </div>

                  </li>

      </ul>
    </nav><!-- .nav-menu -->

    <div class="header-social-links">


@if(count($SocialMedia) >0)

      <a href="{{$SocialMedia[0]->youtube}}" class="youtube" target="_blank"><i class="icofont-youtube"></i></a>
      <a href="{{$SocialMedia[0]->facebook}}" class="facebook" target="_blank"><i class="icofont-facebook"></i></a>
      <a href="{{$SocialMedia[0]->Instagram}}" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
      <a href="{{$SocialMedia[0]->linkedIn}}" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></i></a>


@endif



    </div>

  </div>
</header>
 {{--  End Header  --}}

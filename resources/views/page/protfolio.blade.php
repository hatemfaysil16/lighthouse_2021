@extends('layouts.master_home')
@section('home_content')


<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><strong style="font-weight: bold">{{__('navbar.portfolio')}}</strong></h2>
      <ol>
        @if (App::getLocale() == 'ar')
        <li><strong style="font-weight: bold">{{__('navbar.portfolio')}}</strong></li>
        <li><strong style="font-weight: bold"><a href="{{url('/')}}">{{__('navbar.Home')}}</strong></a></li>
        @else
        <li><strong style="font-weight: bold"><a href="{{url('/')}}">{{__('navbar.Home')}}</strong></a></li>
        <li><strong style="font-weight: bold">{{__('navbar.portfolio')}}</strong></li>
        @endif
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="row" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">
        
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up">

    @foreach($images as $img)
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="{{ asset($img->image) }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 1</h4>
          <p>App</p>
          <a href="{{ asset($img->image) }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
          {{--  $img->image  --}}
        </div>
      </div>
      @endforeach

     

    </div>

  </div>
</section><!-- End Portfolio Section -->

<!-- ======= video ======= -->


@include('page.layouts.video')


        
<!-- ======= video ======= -->


@endsection
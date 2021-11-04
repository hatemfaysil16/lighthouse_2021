@extends('layouts.master_home')

@section('home_content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><strong style="font-weight: bold">{{__('navbar.About')}}</strong></h2>
          <ol>

           @if (App::getLocale() == 'ar')

           <li><strong style="font-weight: bold">{{__('navbar.About')}}</strong></li>
            <li><a href="{{url('/')}}"><strong style="font-weight: bold">{{__('navbar.Home')}}</strong></a></li>
            @else
            <li><a href="{{url('/')}}"><strong style="font-weight: bold">{{__('navbar.Home')}}</strong></a></li>
            <li><strong style="font-weight: bold">{{__('navbar.About')}}</strong></li>
            @endif
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    @include('page.layouts.about')



    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">
        @foreach ($teams as $team) 
        <div class="section-title" data-aos="fade-up">
          <h2>{{$team->title}}</h2>
          <p>{{$team->desc}}</p>
        </div>
        @endforeach


        <div class="row">

@if(count($About_title_description) >0)

@foreach ($About_title_description as $item)
              
<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
  <div class="member" data-aos="fade-up">
    <div class="member-img">
      <img src="{{asset($item->img)}}" class="img-fluid" alt="">
      

      <div class="social">
        <a href="{{$item->youtube}}" target="__blank"><i class="icofont-youtube"></i></a>
        <a href="{{$item->facebook}}" target="__blank"><i class="icofont-facebook"></i></a>
        <a href="{{$item->Instagram}}" target="__blank"><i class="icofont-instagram"></i></a>
        <a href="{{$item->skype}}" target="__blank"><i class="icofont-skype"></i></a>
      </div>
    </div>
    <div class="member-info">
      <h4>{{$item->title}}</h4>
      <span>{{$item->description}}</span>
    </div>
  </div>
</div>

@endforeach


@endif




 
          

        </div>

      </div>
    </section><!-- End Our Team Section -->



    <!-- ======= Our Clients Section ======= -->

    @include('page.layouts.clients')

  
    <!-- ======= Our Clients Section ======= -->

  </main><!-- End #main -->


@endsection
@extends('layouts.master_home')
@section('home_content')

@include('layouts.body.slider')


    <!-- ======= About Us Section ======= -->

    @include('page.layouts.about')

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{__('company.Services')}}</strong></h2>
          <p>{{__('company.services_header')}}</p>
        </div>
        
        <div class="row">



          @foreach ($Blocks as $Block)
              
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                   
                </svg>
                <i class="{{$Block->class_i}}"></i>
              </div>
              <h4><a href="">{{$Block->title}}</a></h4>
              <p>{{$Block->list}}</p>
            </div>
          </div>
          @endforeach


        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>{{__('company.portfolio')}}</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
             
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

         @foreach($images as $img)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset($img->image)  }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="{{ asset($img->image)  }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"> </a>
            </div>
          </div>
          @endforeach

          
 

        </div>

      </div>
    </section><!-- End Portfolio Section -->


<!-- ======= video ======= -->

@include('page.layouts.video')


        
<!-- ======= video ======= -->

  <!-- ======= Our Clients Section ======= -->
  @include('page.layouts.clients')


  <!-- ======= Our Clients Section ======= -->




  @endsection














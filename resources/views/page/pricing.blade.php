

@extends('layouts.master_home')

@section('home_content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><strong style="font-weight: bold">{{__('navbar.pricing')}}</strong></h2>
          <ol>
            @if (App::getLocale() == 'ar')
            <li><strong style="font-weight: bold">{{__('navbar.pricing')}}</strong></li>
            <li><strong style="font-weight: bold"><a href="{{url('/')}}">{{__('navbar.Home')}}</strong></a></strong></li>
            @else
            <li><strong style="font-weight: bold"><a href="{{url('/')}}">{{__('navbar.Home')}}</strong></a></li>
            <li><strong style="font-weight: bold">{{__('navbar.pricing')}}</strong></li>
            @endif
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">


              
      {{--  <th scope="col" width="25%">title</th>
      <th scope="col" width="25%">title_two</th>
      <th scope="col" width="25%">pricing</th>
      <th scope="col" width="25%">month</th>
      <th scope="col" width="25%">currency</th>
      <th scope="col" width="25%">pricing_desc</th>
      <th scope="col" width="25%">button</th>  --}}
      
      


      @foreach($pricingBlog as $about) 

          <div class="col-lg-3 col-md-6">
            <div class="box">
              <h3>{{($about->title)}}</h3>
              <span>{{($about->title_two)}}</span>
              <h4><sup>{{($about->currency)}}</sup>{{($about->pricing)}}<span> / {{($about->month)}}</span></h4>
              <ul>
                <?php
                $a = $about->pricing_desc;
                $c=json_decode($a);  
                ?>
                
          
                <li> @foreach ($c as $item)
                  {{$item}}<br><br>
                  @endforeach </li>
              </ul>
              <div class="btn-wrap">
                <a href="contact" onclick="" class="btn-buy">{{($about->button)}}</a>
              </div>
            </div>
          </div>
          
        @endforeach



        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{__('company.Frequently')}}</h2>
        </div>

        <div class="faq-list">
          <ul>

            @foreach ($pricing as $item)
                
            
            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-{{$item->id}}" class="collapsed">{{$item->title}} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-{{$item->id}}" class="collapse" data-parent=".faq-list">
                <p>
                  {{$item->description}}
                </p>
              </div>
            </li>
            @endforeach      


          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->




  
@endsection




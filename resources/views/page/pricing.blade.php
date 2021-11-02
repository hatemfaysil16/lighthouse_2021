@extends('layouts.master_home')

@section('home_content')


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

          <div class="col-lg-3 col-md-6">
            <div class="box">
              <h3>Free</h3>
              {{--  'month' => 'month',
              'list_one'=>'Aida dere',
              'list_two'=>'Nec feugiat nisl',
              'list_three'=>'Nulla at volutpat dola',
              'list_foure'=>'Pharetra massa',
              'list_five'=>'Massa ultricies mi',  --}}
          
              <h4><sup>$</sup>0<span> / {{__('pricing.month')}}</span></h4>
              <ul>
                <li>{{__('pricing.list_one')}}</li>
                <li>{{__('pricing.list_two')}}</li>
                <li>{{__('pricing.list_three')}}</li>
                <li class="na">{{__('pricing.list_foure')}}</li>
                <li class="na">{{__('pricing.list_five')}}</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / {{__('pricing.month')}}</span></h4>
              <ul>
                <li>{{__('pricing.list_one')}}</li>
                <li>{{__('pricing.list_two')}}</li>
                <li>{{__('pricing.list_three')}}</li>
                <li>{{__('pricing.list_foure')}}</li>
                <li class="na">{{__('pricing.list_five')}}</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / {{__('pricing.month')}}</span></h4>
              <ul>
                <li>{{__('pricing.list_one')}}</li>
                <li>{{__('pricing.list_two')}}</li>
                <li>{{__('pricing.list_three')}}</li>
                <li>{{__('pricing.list_foure')}}</li>
                <li>{{__('pricing.list_five')}}</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / {{__('pricing.month')}}</span></h4>
              <ul>
                <li>{{__('pricing.list_one')}}</li>
                <li>{{__('pricing.list_two')}}</li>
                <li>{{__('pricing.list_three')}}</li>
                <li>{{__('pricing.list_foure')}}</li>
                <li>{{__('pricing.list_five')}}</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

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
@extends('layouts.master_home')

@section('home_content')


    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">



        <div class="d-flex justify-content-between align-items-center">
          <h2><strong style="font-weight: bold">{{__('navbar.contact')}}</strong></h2>
          <ol>
            @if (App::getLocale() == 'ar')
            <li><strong style="font-weight: bold">{{__('navbar.contact')}}</strong></li>
            <li><strong style="font-weight: bold"><a href="{{url('/')}}">{{__('navbar.Home')}}</a></strong></li>
            @else
            <li><strong style="font-weight: bold"><a href="{{url('/')}}">{{__('navbar.Home')}}</a></strong></li>
            <li><strong style="font-weight: bold">{{__('navbar.contact')}}</strong></li>
            @endif
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


    @if(session('success'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}</strong>  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
   </div>
   @endif

    <!-- ======= Contact Section ======= -->

    <!-- ======= Contact map ======= -->

    @include('page.layouts.map')

    <!-- ======= Contact map ======= -->


    <!-- ======= Contact  ======= -->

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            @if(empty($contacts))

            <div class="alert alert-danger" style="text-align: center" role="alert">
              <strong>{{__('company.placeEmpty')}}</strong>!
            </div>
  
            @else

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>{{__('company.Location')}}</h4>
                  <p> {{ $contacts->address }}</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>{{__('company.Email')}}</h4>
                  <p>{{ $contacts->email }}</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>{{__('company.Call')}}</h4>
                  <p>{{ $contacts->phone }}</p>
                </div>
              </div>
            </div>
            
            @endif



          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="{{ route('contact.form') }}" method="post" >
              @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control"   placeholder="Your Name"   />
                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control"  value="{{$email}}" name="email"  placeholder="Your Email"   />
                  @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"   />
                @error('subject')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5"   placeholder="Message"></textarea>
                @error('message')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
     <button class="btn btn-success" type="submit">Send Message</button>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact  ======= -->


@endsection
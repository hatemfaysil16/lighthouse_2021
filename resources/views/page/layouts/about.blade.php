<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2> {{__('company.AboutUs')}}</strong></h2>
    </div>

    {{--  @php
        dd($about);
    @endphp  --}}
@if(count($about) >0)

      <div class="row content">
      <div class="col-lg-6" data-aos="fade-right">

        


        <h2>{{$about[0]->title}}</h2>

        <h3>{{$about[0]->short_dis}}</h3>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
        <p>
          {{$about[0]->long_dis}}
        </p>
        <ul>
          @foreach ($about as $item)
          <li><i class="ri-check-double-line"></i> {{$item->pointe}}</li>

          @endforeach
        </ul>
        <p class="font-italic">
          {{$about[0]->list}}
        </p>
      </div>
    </div>

@else

<div class="alert alert-danger" style="text-align: center" role="alert">
  <strong>{{__('company.placeEmpty')}}</strong>!
</div>

@endif

  </div>
</section><!-- End About Us Section -->


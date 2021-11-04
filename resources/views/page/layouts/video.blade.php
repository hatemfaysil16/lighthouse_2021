<!-- ======= video ======= -->
@php
$video =App\Models\Video::all();
$SocialMedia =App\Models\Social_media::all();

@endphp


<section id="video" class="video">
  <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>{{__('company.Program_definition')}}</h2>
      </div>
      @if(count($video) >0)
      <div class="card"  >
          <div class="video_card">
        <iframe src="{{$video[0]->video_iframe}}" class="card-img-top" title="YouTube video" allowfullscreen frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
        <h5 class="card-title">{{$video[0]->title}}</h5>
        <p class="card-text">{{$video[0]->desc}}</p>
        @endif

        @if(count($SocialMedia) >0)

        <a target="__blank" href="{{$SocialMedia[0]->youtube}}"class="btn btn-primary"><strong>YouTube<i class="icofont-youtube"></i></strong></a>

        @endif
</div>
        </div>
      </div>



  </div>
</section>


        
<!-- ======= video ======= -->
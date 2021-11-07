
@php
$maps = App\Models\Map::all();
@endphp

<div class="map-section" >
  @foreach ($maps as $map)
    <iframe style="border:0; width: 100%; height: 350px;" src="{{$map->map}}" frameborder="0" allowfullscreen></iframe>
  @endforeach
  </div>

  <script>

    </script>
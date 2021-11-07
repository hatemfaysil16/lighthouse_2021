@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Create HomeAbout</h2>
     </div>
     <div class="card-body">
     <form action="{{ route('map.update',$map->id) }}" method="POST">
          @csrf

<div class="form-group">
     <label for="exampleFormControlInput1"> map </label>
     <input type="text" name="map" value="{{$map->map}}" class="form-control" id="exampleFormControlInput1" placeholder="map">
     @error('map')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>












               </div>
                



               <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    
               </div>
          </form>
     </div>
</div>
 


@endsection

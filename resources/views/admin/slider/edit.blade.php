@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Create Slider</h2>
     </div>
     <div class="card-body">
     <form action="{{ route('update.store',$slider->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
               <div class="form-group">
          <label for="exampleFormControlInput1">Slider Title </label>
  <input type="text" value="{{$slider->title}}" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Slider Title">
  @error('title')
  <div class="alert alert-danger">{{ $message }}</div>
  @enderror    
               </div>
                
               
                
               <div class="form-group">
                    <label for="exampleFormControlTextarea1">Slider Description</label>
 <textarea class="form-control" value="{{$slider->description}}" id="exampleFormControlTextarea1" rows="3" name="description">
{{$slider->description}}
 </textarea>
 @error('description')
 <div class="alert alert-danger">{{ $message }}</div>
 @enderror   
               </div>
               <div class="form-group">
                    <label for="exampleFormControlFile1">Slider Image</label>
                    <div class="card" style="width: 18rem;">
                         <img src="{{asset($slider->image)}}" class="card-img-top" alt="...">
                    </div>
                    <input type="hidden" name="old_image" value="{{$slider->image}}">
  <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
               </div>
               <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    
               </div>
          </form>
     </div>
</div>
 


@endsection

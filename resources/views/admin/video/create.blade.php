@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Create HomeAbout</h2>
     </div>
     <div class="card-body">
     <form action="{{ route('video.store') }}" method="POST">
          @csrf

<div class="form-group">
     <label for="exampleFormControlInput1"> video_iframe </label>
     <input type="text" name="video_iframe" class="form-control" id="exampleFormControlInput1" placeholder="video_iframe">
     @error('video_iframe')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>



<div class="form-group">
     <label for="exampleFormControlInput1"> title </label>
     <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder=" Title">
     en
     @error('title')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>

<div class="form-group">
     <input type="text" name="title_ar" class="form-control" id="exampleFormControlInput1" placeholder=" title_ar">
     ar
     @error('title_ar')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>


<div class="form-group">
<label for="exampleFormControlTextarea1"> desc</label>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc">

</textarea>
en
@error('desc')
<div class="alert alert-danger">{{ $message }}</div>
@enderror 
</div>

<div class="form-group">
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc_ar">

</textarea>
ar
@error('desc_ar')
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

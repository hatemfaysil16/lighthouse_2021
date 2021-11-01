@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Edit HomeAbout</h2>
     </div>
     <div class="card-body">
     <form action="{{ route('store.about.update',$homeAbout->id) }}" method="POST">
          @csrf
               <div class="form-group">
          <label for="exampleFormControlInput1">About Title </label>
  <input type="text" name="title" value="{{$homeAbout->title}}" class="form-control" id="exampleFormControlInput1" placeholder="Slider Title">
  @error('title')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
     
               </div>
                
               
                
               <div class="form-group">
                    <label for="exampleFormControlTextarea1">Short Description</label>
 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$homeAbout->short_dis}}"  name="short_dis">
     {{$homeAbout->short_dis}}
 </textarea>
 @error('short_dis')
 <div class="alert alert-danger">{{ $message }}</div>
@enderror  


               </div>

               <div class="form-group">
                    <label for="exampleFormControlTextarea1">Long Description</label>
 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$homeAbout->long_dis}}"  name="long_dis">
     {{$homeAbout->long_dis}}
 </textarea>
 @error('long_dis')
 <div class="alert alert-danger">{{ $message }}</div>
@enderror  
<label for="exampleFormControlInput1">pointe  </label>
<input type="text" name="pointe"  value="{{$homeAbout->pointe}}" class="form-control" id="exampleFormControlInput1" placeholder="Slider Title">
@error('pointe')
<div class="alert alert-danger">{{ $message }}</div>
@enderror 


<br>

<label for="exampleFormControlInput1">list  </label>
<input type="text" name="list"  value="{{$homeAbout->list}}" class="form-control" id="exampleFormControlInput1" placeholder="Slider Title">
@error('list')
<div class="alert alert-danger">{{ $message }}</div>
@enderror 



 
               </div>
                



               <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">update</button>
                    
               </div>
          </form>
     </div>
</div>
 


@endsection

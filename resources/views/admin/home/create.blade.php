@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Create HomeAbout</h2>
     </div>
     <div class="card-body">
     <form action="{{ route('store.about') }}" method="POST">
          @csrf
               <div class="form-group">
          <label for="exampleFormControlInput1">About Title </label>
  <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Slider Title">en
  @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <input type="text" name="title_ar" class="form-control" id="exampleFormControlInput1" placeholder="Slider Title">ar
  @error('title_ar')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror   
               </div>
                
               
                
               <div class="form-group">
                    <label for="exampleFormControlTextarea1">Short Description</label>
 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_dis">

 </textarea>en
 @error('short_dis')
 <div class="alert alert-danger">{{ $message }}</div>
@enderror 
 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_dis_ar">

</textarea>ar
@error('short_dis_ar')
<div class="alert alert-danger">{{ $message }}</div>
@enderror 
               </div>

               <div class="form-group">
                    <label for="exampleFormControlTextarea1">Long Description</label>
 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="long_dis">

 </textarea>en
 @error('long_dis')
<div class="alert alert-danger">{{ $message }}</div>
@enderror 

 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="long_dis_ar">

</textarea>ar
@error('long_dis_ar')
<div class="alert alert-danger">{{ $message }}</div>
@enderror 
<br>
<label for="exampleFormControlInput1">pointe  </label>
<input type="text" name="pointe" class="form-control" id="exampleFormControlInput1" placeholder="Slider Title">
en
@error('pointe')
<div class="alert alert-danger">{{ $message }}</div>
@enderror 

<input type="text" name="pointe_ar" class="form-control" id="exampleFormControlInput1" placeholder="Slider Title">ar
@error('pointe_ar')
<div class="alert alert-danger">{{ $message }}</div>
@enderror 

<br>

<label for="exampleFormControlInput1">list  </label>
<input type="text" name="list" class="form-control" id="exampleFormControlInput1" placeholder="Slider Title">en
@error('list')
<div class="alert alert-danger">{{ $message }}</div>
@enderror 

<input type="text" name="list_ar" class="form-control" id="exampleFormControlInput1" placeholder="Slider Title">ar
@error('list_ar')
<div class="alert alert-danger">{{ $message }}</div>
@enderror 
               </div>
                



               <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    
               </div>
          </form>
     </div>
</div>
 


@endsection

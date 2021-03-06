@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Create Contact</h2>
     </div>
     <div class="card-body">

          
     <form action="{{ route('update.content',$message->id) }}" method="POST">
          @csrf
               <div class="form-group">
          <label for="exampleFormControlInput1">Contact Email </label>
  <input type="email" name="email" value="{{$message->email}}" class="form-control" id="exampleFormControlInput1" placeholder="Contact Email">
  @error('email')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror                
               </div>

               <div class="form-group">
          <label for="exampleFormControlInput1">Contact Phone </label>
  <input type="text" name="phone" value="{{$message->phone}}" class="form-control" id="exampleFormControlInput1" placeholder="Contact Phone">
  @error('phone')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror                
               </div>
                
               
                
               <div class="form-group">
                    <label for="exampleFormControlTextarea1">Contact Adress</label>
 <textarea class="form-control" value="{{$message->address}}" id="exampleFormControlTextarea1" rows="3" name="address">
     {{$message->address}}
 </textarea>
 @error('address')
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

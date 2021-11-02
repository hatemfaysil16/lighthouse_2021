@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Edit info</h2>
     </div>
     <div class="card-body">
     <form action="{{ route('info.update',$infos->id) }}" method="POST" enctype="multipart/form-data">
          @csrf

<div class="form-group">
     <label for="exampleFormControlInput1"> address </label>
     <input type="text" value="{{$infos->address}}" name="address" class="form-control" id="exampleFormControlInput1" placeholder="address">
     @error('address')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>



<div class="form-group">
     <label for="exampleFormControlInput1"> phone_one </label>
     <input type="number" value="{{$infos->phone_one}}" name="phone_one" class="form-control" id="exampleFormControlInput1" placeholder="phone_one">
     @error('phone_one')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>



<div class="form-group">
     <label for="exampleFormControlInput1"> phone_two </label>
     <input type="number" value="{{$infos->phone_two}}" name="phone_two" class="form-control" id="exampleFormControlInput1" placeholder="phone_two">
     @error('phone_two')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>



<div class="form-group">
     <label for="exampleFormControlInput1"> email </label>
     <input type="email" value="{{$infos->email}}" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
     @error('email')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>




<div class="form-group">
     <label for="exampleFormControlInput1"> link_site </label>
     <input type="text" value="{{$infos->link_site}}" name="link_site" class="form-control" id="exampleFormControlInput1" placeholder="link_site">
     @error('link_site')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>




<div class="form-group">
     <label for="exampleFormControlTextarea1">logo_text</label>
     <textarea class="form-control" value="{{$infos->logo_text}}" id="exampleFormControlTextarea1" rows="3" name="logo_text">
          {{$infos->logo_text}}
     </textarea>en
     @error('logo_text')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror 
</div>



<input type="hidden" name="oldImg" value="{{$infos->logo_img}}">
<img src="{{asset($infos->logo_img)}}" alt="" style="width: 50%;height:7rem"> <

<div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">logo_img</label>
     <input type="file" class="form-control" name="logo_img" id="exampleInputEmail1" aria-describedby="emailHelp">

       @error('logo_img')
           <span class="text-danger">{{$message}}</span>
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

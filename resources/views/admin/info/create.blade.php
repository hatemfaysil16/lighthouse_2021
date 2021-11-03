@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Create info</h2>
     </div>
     <div class="card-body">
     <form action="{{ route('info.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

<div class="form-group">
     <label for="exampleFormControlInput1"> address </label>
     <input type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder="address">en
     @error('address')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> address_ar </label>
     <input type="text" name="address_ar" class="form-control" id="exampleFormControlInput1" placeholder="address_ar">ar
     @error('address_ar')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> phone_one </label>
     <input type="number" name="phone_one" class="form-control" id="exampleFormControlInput1" placeholder="phone_one">en
     @error('phone_one')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>



<div class="form-group">
     <label for="exampleFormControlInput1"> phone_two </label>
     <input type="number" name="phone_two" class="form-control" id="exampleFormControlInput1" placeholder="phone_two">en
     @error('phone_two')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>



<div class="form-group">
     <label for="exampleFormControlInput1"> email </label>
     <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email">en
     @error('email')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>




<div class="form-group">
     <label for="exampleFormControlInput1"> link_site </label>
     <input type="text" name="link_site" class="form-control" id="exampleFormControlInput1" placeholder="link_site">en
     @error('link_site')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>




<div class="form-group">
     <label for="exampleFormControlTextarea1">logo_text</label>
     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="logo_text">

     </textarea>en
     @error('logo_text')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror 
</div>

<div class="form-group">
     <label for="exampleFormControlTextarea1">logo_text_ar</label>
     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="logo_text_ar">

     </textarea>ar
     @error('logo_text_ar')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror 
</div>

<div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">logo_img</label>
     <input type="file" class="form-control" name="logo_img" id="exampleInputEmail1" aria-describedby="emailHelp">

       @error('logo_img')
           <span class="text-danger">{{$message}}</span>
       @enderror
</div>


<div class="form-group">
     <label for="exampleFormControlInput1"> text_footer </label>
     <input type="text" name="text_footer" class="form-control" id="exampleFormControlInput1" placeholder="text_footer">en
     @error('text_footer')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> text_footer_ar </label>
     <input type="text" name="text_footer_ar" class="form-control" id="exampleFormControlInput1" placeholder="text_footer_ar">ar
     @error('text_footer_ar')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>


<div class="form-group">
     <label for="exampleFormControlInput1"> desc_footer </label>
     <input type="text" name="desc_footer" class="form-control" id="exampleFormControlInput1" placeholder="desc_footer">en
     @error('desc_footer')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>


<div class="form-group">
     <label for="exampleFormControlInput1"> desc_footer_ar </label>
     <input type="text" name="desc_footer_ar" class="form-control" id="exampleFormControlInput1" placeholder="desc_footer_ar">ar
     @error('desc_footer_ar')
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

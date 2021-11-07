@extends('admin.admin_master')

@section('admin')


<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>edit pricingBlog</h2>
     </div>
     <div class="card-body">
     <form action="{{route('pricingBlog.update',$pricingBlog->id)}}" method="POST">
          @csrf
   



<div class="form-group">
     <label for="exampleFormControlInput1"> title </label>
     <input type="text" name="title" value="{{$pricingBlog->title}}" class="form-control" id="exampleFormControlInput1" placeholder="title"> 
     @error('title')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> title_two </label>
     <input type="text" name="title_two" value="{{$pricingBlog->title_two}}" class="form-control" id="exampleFormControlInput1" placeholder="title_two"> 
     @error('title_two')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>


<div class="form-group">
     <label for="exampleFormControlInput1"> pricing </label>
     <input type="text" name="pricing" value="{{$pricingBlog->pricing}}" class="form-control" id="exampleFormControlInput1" placeholder="pricing"> 
     @error('pricing')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>


<div class="form-group">
     <label for="exampleFormControlInput1"> month </label>
     <input type="text" name="month" value="{{$pricingBlog->month}}" class="form-control" id="exampleFormControlInput1" placeholder="month"> 
     @error('month')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>


<div class="form-group">
     <label for="exampleFormControlInput1"> currency </label>
     <input type="text" name="currency" value="{{$pricingBlog->currency}}" class="form-control" id="exampleFormControlInput1" placeholder="currency"> 
     @error('currency')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>



      
<?php
$a = $pricingBlog->pricing_desc;
$c=json_decode($a); 
?>

<div class="form-group">
     <label for="exampleFormControlInput1"> pricing_desc </label>

     <input type="text"  value="@foreach ($c as $item) {{$item.','}} @endforeach"  name="pricing_desc" class="form-control" value="" data-role="tagsinput" id="exampleFormControlInput1" placeholder="pricing_desc"> en
     @error('pricing_desc')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>



<div class="form-group">
     <label for="exampleFormControlInput1"> button </label>
     <input type="text" name="button" value="{{$pricingBlog->button}}" class="form-control" id="exampleFormControlInput1" placeholder="button"> 
     @error('button')
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

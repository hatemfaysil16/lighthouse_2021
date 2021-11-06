@extends('admin.admin_master')

@section('admin')


<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Create pricingBlog</h2>
     </div>
     <div class="card-body">
     <form action="{{ route('pricingBlog.store') }}" method="POST">
          @csrf
   

          

<div class="form-group">
     <label for="exampleFormControlInput1"> title </label>
     <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="title"> en
     @error('title')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
     <input type="text" name="title_ar" class="form-control" id="exampleFormControlInput1" placeholder="title_ar"> 
     ar  
     @error('title_ar')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> title_two </label>
     <input type="text" name="title_two" class="form-control" id="exampleFormControlInput1" placeholder="title_two"> en
     @error('title_two')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
     <input type="text" name="title_two_ar" class="form-control" id="exampleFormControlInput1" placeholder="title_two_ar"> 
     ar  
     @error('title_two_ar')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>


<div class="form-group">
     <label for="exampleFormControlInput1"> pricing </label>
     <input type="number" name="pricing" class="form-control" id="exampleFormControlInput1" placeholder="pricing"> 
     @error('pricing')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>


<div class="form-group">
     <label for="exampleFormControlInput1"> month </label>
     <input type="text" name="month" class="form-control" id="exampleFormControlInput1" placeholder="month"> en
     @error('month')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
     <input type="text" name="month_ar" class="form-control" id="exampleFormControlInput1" placeholder="month_ar"> 
     ar  
     @error('month_ar')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>


<div class="form-group">
     <label for="exampleFormControlInput1"> currency </label>
     <input type="text" name="currency" class="form-control" id="exampleFormControlInput1" placeholder="currency"> en
     @error('currency')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
     <input type="text" name="currency_ar" class="form-control" id="exampleFormControlInput1" placeholder="currency_ar"> 
     ar  
     @error('currency_ar')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>


<div class="form-group">
     <label for="exampleFormControlInput1"> pricing_desc </label>

     <input type="text" name="pricing_desc" class="form-control" value="" data-role="tagsinput" id="exampleFormControlInput1" placeholder="pricing_desc"> en
     @error('pricing_desc')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
     <input type="text" name="pricing_desc_ar" class="form-control" value="" data-role="tagsinput" id="exampleFormControlInput1" placeholder="pricing_desc_ar"> 
     ar  
     @error('pricing_desc_ar')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> button </label>
     <input type="text" name="button" class="form-control" id="exampleFormControlInput1" placeholder="button"> en
     @error('button')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
     <input type="text" name="button_ar" class="form-control" id="exampleFormControlInput1" placeholder="button_ar"> 
     ar  
     @error('button_ar')
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

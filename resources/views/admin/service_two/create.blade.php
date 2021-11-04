@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Create service</h2>
     </div>
     <div class="card-body">
     <form action="{{ route('service_two.store') }}" method="POST">
          @csrf
   


<div class="form-group">
     <label for="exampleFormControlInput1"> title </label>
     <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="title">   
     @error('title')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror

     <label for="exampleFormControlInput1"> title_ar </label>
     <input type="text" name="title_ar" class="form-control" id="exampleFormControlInput1" placeholder="title_ar">   
     @error('title_ar')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror

</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> desc </label>
     <input type="text" name="desc" class="form-control" id="exampleFormControlInput1" placeholder="desc">en
     @error('desc')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror

     <label for="exampleFormControlInput1"> desc_ar </label>
     <input type="text" name="desc_ar" class="form-control" id="exampleFormControlInput1" placeholder="desc_ar">en
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

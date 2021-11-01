@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Create service</h2>
     </div>
     <div class="card-body">
     <form action="{{ route('services.store') }}" method="POST">
          @csrf



<div class="form-group">
     <label for="exampleFormControlInput1"> list </label>
     <input type="text" name="list" class="form-control" id="exampleFormControlInput1" placeholder="list">
     
     @error('list')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> title </label>
     <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="title">en
     @error('title')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
     <input type="text" name="title_ar" class="form-control" id="exampleFormControlInput1" placeholder="title_ar">ar

     @error('title_ar')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> short_dis </label>
     <input type="text" name="short_dis" class="form-control" id="exampleFormControlInput1" placeholder="short_dis">en
     @error('short_dis')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
     <input type="text" name="short_dis_ar" class="form-control" id="exampleFormControlInput1" placeholder="short_dis_ar">ar
     
     @error('short_dis_ar')
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

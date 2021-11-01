@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Edit service</h2>
     </div>
     <div class="card-body">
     <form action="{{ route('services.update',$Service->id) }}" method="POST">
          @csrf



<div class="form-group">
     <label for="exampleFormControlInput1"> list </label>
     <input type="text" value="{{$Service->list}}" name="list" class="form-control" id="exampleFormControlInput1" placeholder="list">
     
     @error('list')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror

</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> title </label>
     <input type="text" name="title" value="{{$Service->title}}" class="form-control" id="exampleFormControlInput1" placeholder="title">
     @error('title')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror

</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> short_dis </label>
     <input type="text" name="short_dis" value="{{$Service->short_dis}}" class="form-control" id="exampleFormControlInput1" placeholder="short_dis">
     @error('short_dis')
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

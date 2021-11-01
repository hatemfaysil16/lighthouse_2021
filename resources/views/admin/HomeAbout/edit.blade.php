@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Edit Contact</h2>
     </div>
     <div class="card-body">
     <form action="{{ route('AboutHome.update',$editAbout->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
               <div class="form-group">
          <label for="exampleFormControlInput1">title </label>
  <input type="text" value="{{$editAbout->title}}" name="title" class="form-control" id="exampleFormControlInput1" placeholder="title">
                    

               </div>

               <div class="form-group">
          <label for="exampleFormControlInput1"> description </label>
  <input type="text" value="{{$editAbout->description}}" name="description" class="form-control" id="exampleFormControlInput1" placeholder="description">
       
               </div>
                
               
               <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">brand Image</label>
                    <input type="file" class="form-control" name="img" id="exampleInputEmail1" aria-describedby="emailHelp">
              
                      @error('img')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                  </div>

                  <input type="hidden" name="old_image" value="{{$editAbout->img}}">
                  <td><img src="{{asset($editAbout->img)}}"alt="" style="width: 50%;height:7rem"></td>

                  

                 

               <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    
               </div>
          </form>
     </div>
</div>
 


@endsection

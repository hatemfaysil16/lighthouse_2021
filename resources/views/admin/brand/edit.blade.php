@extends('admin.admin_master')


@section('admin')


@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>{{ session('success') }}</strong>  
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif


    <div class="py-12">
        <div class="container">
            <div class="row">
              <div class="col-md-12">

                </div>
              </div>
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">Add brand</div>
                  <div class="card-body">

                    <form action="{{route('update.brand',$brand)}}" method="Post" enctype="multipart/form-data">
                        @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">update brand Name</label>
                      <input type="text" class="form-control" name="brand_name" value="{{$brand->brand_name}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                
                        @error('brand_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">brand Image</label>
                      <input type="file" class="form-control" name="brand_image" id="exampleInputEmail1" aria-describedby="emailHelp">
                
                        @error('brand_image')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <input type="hidden" name="old_image" value="{{$brand->brand_image}}">
                    <td><img src="{{asset($brand->brand_image)}}"alt=""></td>

                    <input type="hidden" value="{{$brand->brand_image}}" name="old_image">
                    
                    <button type="submit" class="btn btn-primary">update brand</button>
                  </form>
                </div>
                  
                </div>
              </div>

            </div>
        </div>
    </div>

@endsection

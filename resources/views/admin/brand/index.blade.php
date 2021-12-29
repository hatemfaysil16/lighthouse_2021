@extends('admin.admin_master')


@section('admin')



    <div class="py-12">
        <div class="container">
            <div class="row">
              <div class="col-md-8">
                <div class="card">


                  @if(session('success'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{session('success')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                  @endif

                  <div class="card-header">All brand</div>




                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">SL NO</th>
                        <th scope="col">Brand Name</th>
                        <th scope="col">Brand Image</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach ($brands as $brand)
                      <tr>
                        <td scope="row">{{$brands->firstItem()+$loop->index}}</td>
                        <td>{{$brand->brand_name}}</td>
                        <td><img src="{{asset($brand->brand_image)}}" alt="" style="width: 50%;height:7rem"></td>
                        @if($brand->created_at == null)
                          <td><span class="text-danger">NO DATA SET</span></td>
                        @else
                        <td>{{Carbon\Carbon::parse($brand->created_at)->diffForHumans()}}</td>
                        @endif
                        <td>
                          <a href="{{route('edit.brand',$brand->id)}}" class="btn btn-info">Edit</a>
                          <a href="{{route('delete.brand',$brand->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                        </td>

                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                  {{$brands->links()}}


                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">Add brand</div>
                  <div class="card-body">

                  <form action="{{route('store.brand')}}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">brand Name</label>
                      <input type="text" class="form-control" name="brand_name" id="exampleInputEmail1" aria-describedby="emailHelp">

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


                    <button type="submit" class="btn btn-primary">Add brand</button>
                  </form>
                </div>

                </div>
              </div>

            </div>
        </div>
    </div>
    @endsection





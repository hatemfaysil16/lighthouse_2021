@extends('admin.admin_master')

@section('admin')

    <div class="py-12"> 
   <div class="container">
    <div class="row">

<h4>  service </h4>
    <a href="{{ route('services.create') }}"> <button class="btn btn-info">Add service</button>  </a>
<br><br>


    <div class="col-md-12">
     <div class="card">


     @if(session('success'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}</strong>  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
   </div>
   @endif


          <div class="card-header"> All service </div>
    

    <table class="table">
  <thead>
    <tr>

      <th scope="col" width="5%">SL </th>
      <th scope="col" width="15%">list</th>
      <th scope="col" width="15%">title	</th>
      <th scope="col" width="15%">short_dis</th>



    </tr>
  </thead>
  <tbody>
          @php($i = 1)
        @foreach($services as $service) 
    <tr>

      <th style="max-width: 8rem" scope="row"> {{ $i++  }} </th>
      <td style="max-width: 8rem"> {{ $service->list }} </td>
      <td style="max-width: 8rem"> {{ $service->title }} </td>
      <td style="max-width: 8rem"> {{ $service->short_dis }} </td>


       
       <td> 
       <a href="{{ route('services.edit',$service->id) }}" class="btn btn-info">Edit</a>
       <a href="{{ route('services.delete',$service->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
      </td> 


    </tr> 
    @endforeach


  </tbody>
</table>
 
  
       </div>
    </div>

 


    </div>
  </div> 

 


    </div>
 @endsection

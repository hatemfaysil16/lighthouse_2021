@extends('admin.admin_master')

@section('admin')

    <div class="py-12"> 
   <div class="container">
    <div class="row">

<h4>  pricing </h4>
    <a href="{{ route('pricing.create') }}"> <button class="btn btn-info">Add pricing</button>  </a>
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


          <div class="card-header"> All pricing </div>
    

    <table class="table">
  <thead>
    <tr>

      <th scope="col" width="5%">SL </th>
      <th scope="col" width="15%">title	</th>
      <th scope="col" width="15%">description</th>




    </tr>
  </thead>
  <tbody>
          @php($i = 1)
        @foreach($pricing as $item) 
    <tr>

      <th style="max-width: 8rem" scope="row"> {{ $i++  }} </th>
      <td style="max-width: 8rem"> {{ $item->title }} </td>
      <td style="max-width: 8rem"> {{ $item->description	 }} </td>


       
       <td> 
       <a href="{{ route('pricing.edit',$item->id) }}" class="btn btn-info">Edit</a>
       <a href="{{ route('pricing.delete',$item->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
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

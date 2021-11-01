@extends('admin.admin_master')

@section('admin')

    <div class="py-12"> 
   <div class="container">
    <div class="row">

<h4> Contact page </h4>
    <a href="{{ route('createAbout') }}"> <button class="btn btn-info">Add Contact</button>  </a>
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


          <div class="card-header"> All Contact  </div>
    

    <table class="table">
  <thead>
    <tr>

      <th scope="col" width="5%">SL </th>
      <th scope="col" width="15%"> title </th>
      <th scope="col" width="25%"> description</th>
      <th scope="col" width="25%"> img</th>

      <th scope="col" width="15%">Action</th>
    </tr>
  </thead>
  <tbody>
          @php($i = 1)
        @foreach($AllAbout as $about) 
    <tr>
      <th scope="row"> {{ $i++  }} </th>
      <td> {{ $about->title }} </td>
      <td> {{ $about->description }} </td>
      <td> <img src="{{asset($about->img)}}" alt="" style="width: 50%;height:7rem"> </td>

      

      
       
       <td> 
       <a href="{{ route('About.edit',$about->id) }}" class="btn btn-info">Edit</a>
       <a href="{{ route('About.delete',$about->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
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

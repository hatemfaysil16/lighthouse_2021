@extends('admin.admin_master')

@section('admin')

    <div class="py-12"> 
   <div class="container">
    <div class="row">

<h4>  Info </h4>
    <a href="{{ route('add.info') }}"> <button class="btn btn-info">Add Info</button>  </a>
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


          <div class="card-header">  Info </div>
    

    <table class="table">
  <thead>
    <tr>

      <th scope="col" width="5%">SL </th>
      <th scope="col" width="5%">address</th>
      <th scope="col" width="5%">phone_one</th>
      <th scope="col" width="5%">phone_two</th>
      <th scope="col" width="5%">email</th>
      <th scope="col" width="5%">link_site</th>
      <th scope="col" width="5%">logo_text</th>
      <th scope="col" width="5%">logo_img</th>
      <th scope="col" width="5%">action</th>




    </tr>
  </thead>
  <tbody>
          @php($i = 1)
        @foreach($infos as $info) 
    <tr>
      <th scope="row"> {{ $i++  }} </th>
      <td> {{ $info->address }} </td>
      <td> {{ $info->phone_one }} </td>
      <td> {{ $info->phone_two }} </td>
      <td> {{ $info->email }} </td>
      <td> {{ $info->link_site }} </td>
      <td> {{ $info->logo_text }} </td>

<td> <img src="{{asset($info->logo_img)}}" alt="" style="width: 100%;height:7rem"> </td>


       
       <td> 
       <a href="{{ route('info.edit',$info->id) }}" class="btn btn-info">Edit</a>
       <a href="{{ route('info.delete',$info->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
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

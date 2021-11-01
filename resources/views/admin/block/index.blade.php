@extends('admin.admin_master')

@section('admin')

    <div class="py-12"> 
   <div class="container">
    <div class="row">

<h4>  block </h4>
    <a href="{{ route('add.block') }}"> <button class="btn btn-info">Add block</button>  </a>
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


          <div class="card-header"> All block </div>
    

    <table class="table">
  <thead>
    <tr>

      <th scope="col" width="5%">SL </th>
      <th scope="col" width="15%">class_i</th>
      <th scope="col" width="15%">title</th>
      <th scope="col" width="15%">list</th>
      <th scope="col" width="15%">action</th>


    </tr>
  </thead>
  <tbody>
          @php($i = 1)
        @foreach($blocks as $block) 
    <tr>
      <th scope="row"> {{ $i++  }} </th>
      <td> {{ $block->class_i }} </td>
      <td> {{ $block->title }} </td>
      <td> {{ $block->list }} </td>

       
       <td> 
       <a href="{{ route('block.edit',$block->id) }}" class="btn btn-info">Edit</a>
       <a href="{{ route('block.delete',$block->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
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

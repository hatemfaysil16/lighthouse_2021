@foreach($pricingBlog as $about=>$body) 


  <?php
  $a = $body->pricing_desc;

  $c=json_decode($a);  

  ?>


  <td> @foreach ($c as $item)
    {{$item}}<br>
    @endforeach </td>

   

@endforeach





@extends('admin.admin_master')

@section('admin')



    <div class="py-12"> 
   <div class="container">
    <div class="row">

<h4> pricingBlog  </h4>
<a href="{{ route('pricingBlog.create') }}"> <button class="btn btn-info">Add pricingBlog</button>  </a>
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


          <div class="card-header">  pricingBlog </div>
    

    <table class="table">
  <thead>
    <tr>



      <th scope="col" width="5%">SL </th>
      <th scope="col" width="25%">title</th>
      <th scope="col" width="25%">title_two</th>
      <th scope="col" width="25%">pricing</th>
      <th scope="col" width="25%">month</th>
      <th scope="col" width="25%">currency</th>
      <th scope="col" width="25%">pricing_desc</th>
      <th scope="col" width="25%">button</th>
      <th scope="col" width="25%">Action</th>


  


    </tr>
  </thead>
  <tbody>
          @php($i = 1)
        @foreach($pricingBlog as $about=>$body) 
    <tr>
      <th scope="row"> {{ $i++  }} </th>
        <td> {{ $body->title }} </td>
      <td> {{ $body->title_two }} </td>
      <td> {{ $body->pricing }} </td>
      <td> {{ $body->month }} </td>
      <td> {{ $body->currency }} </td>

      <?php
      $a = $body->pricing_desc;
      $c=json_decode($a);  
      ?>
      
      <td> @foreach ($c as $item)
        {{$item}}<br>
        @endforeach </td>

      <td> {{ $body->button }} </td>
       
      <td> 
        {{--  <a href="{{ route('pricingBlog.edit',$body->id) }}" class="btn btn-info">Edit</a>  --}}
        <a href="{{ route('pricingBlog.delete',$body->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
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

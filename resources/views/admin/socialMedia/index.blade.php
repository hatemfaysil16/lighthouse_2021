@extends('admin.admin_master')

@section('admin')

    <div class="py-12"> 
   <div class="container">
    <div class="row">

<h4>  SocialMedia </h4>
    <a href="{{ route('add.SocialMedia') }}"> <button class="btn btn-info">Add SocialMedia</button>  </a>
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


          <div class="card-header"> All SocialMedia </div>
    

    <table class="table">
  <thead>
    <tr>

      <th scope="col" width="5%">SL </th>
      <th scope="col" width="15%">facebook</th>
      <th scope="col" width="15%">twitter	</th>
      <th scope="col" width="15%">youtube</th>
      <th scope="col" width="15%">Instagram</th>
      <th scope="col" width="15%">skype</th>
      <th scope="col" width="15%">github</th>
      <th scope="col" width="15%">action</th>


    </tr>
  </thead>
  <tbody>
          @php($i = 1)
        @foreach($HomeSocial as $social) 
    <tr>

      <th style="max-width: 8rem" scope="row"> {{ $i++  }} </th>
      <td style="max-width: 8rem"> {{ $social->facebook }} </td>
      <td style="max-width: 8rem"> {{ $social->twitter }} </td>
      <td style="max-width: 8rem"> {{ $social->youtube }} </td>
      <td style="max-width: 8rem"> {{ $social->Instagram }} </td>
      <td style="max-width: 8rem"> {{ $social->skype }} </td>
      <td style="max-width: 8rem"> {{ $social->github }} </td>


       
       <td> 
       <a href="{{ route('edit.SocialMedia',$social->id) }}" class="btn btn-info">Edit</a>
       <a href="{{ route('delete.SocialMedia',$social->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
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

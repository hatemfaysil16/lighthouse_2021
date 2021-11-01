@extends('admin.admin_master')

@section('admin')

<div class="col-lg-12">
<div class="card card-default">
     <div class="card-header card-header-border-bottom">
          <h2>Create HomeAbout</h2>
     </div>
     <div class="card-body">
     <form action="{{ route('store.SocialMedia') }}" method="POST">
          @csrf



<div class="form-group">
     <label for="exampleFormControlInput1"> facebook </label>
     <input type="text" name="facebook" class="form-control" id="exampleFormControlInput1" placeholder="facebook">
     
     @error('facebook')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>


<div class="form-group">
     <label for="exampleFormControlInput1"> twitter</label>
     <input type="text" name="twitter" class="form-control" id="exampleFormControlInput1" placeholder="twitter">
     @error('twitter')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> youtube </label>
     <input type="text" name="youtube" class="form-control" id="exampleFormControlInput1" placeholder="youtube">
     
     @error('youtube')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> Instagram </label>
     <input type="text" name="Instagram" class="form-control" id="exampleFormControlInput1" placeholder="Instagram">
     
     @error('Instagram')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> skype </label>
     <input type="text" name="skype" class="form-control" id="exampleFormControlInput1" placeholder="skype">
     
     @error('skype')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> github </label>
     <input type="text" name="github" class="form-control" id="exampleFormControlInput1" placeholder="github">
     
     @error('github')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>

<div class="form-group">
     <label for="exampleFormControlInput1"> linkedIn </label>
     <input type="text" name="linkedIn" class="form-control" id="exampleFormControlInput1" placeholder="linkedIn">
     
     @error('linkedIn')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror
</div>
















               </div>
                



               <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    
               </div>
          </form>
     </div>
</div>
 


@endsection

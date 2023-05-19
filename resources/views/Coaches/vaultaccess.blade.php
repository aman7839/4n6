

@extends('admin.dashboard.layout.main')

@section('content')
  <div class="container mt-1 pt-4 pb-4">
      <div class="card">
        <div class="card-header d-flex">
          <h4>Vault Access To Student</h4>
        </div>
  
 <div class="card-body">
  <form action="{{url('coach/vaultaccess')}}" method ="post" enctype="multipart/form-data">
    @csrf
   

    
      <div class="form-group mt-3">
          {{-- <label for="user_name"> User Name</label>
          <input type="text" name ="user_name"  class="form-control" id="user_name" aria-describedby="emailHelp" >
          <span class ="text-danger">@error('user_name'){{$message}} @enderror</span>
           --}}
           <input type="radio" id="yes" name="vault_access" value="1" checked>
            <label for="html">Yes</label><br>
            <input type="radio" id="no" name="vault_access" value="0" >
            <label for="css">No</label><br>
                
        </div>

    
    <input type="submit" name="submit" class="btn btn-success" value = "Submit" >

    <a href="{{url('coach/vault')}}" class="btn btn-danger">Cancel</a>

  </form>
 </div>
  

  </div>
  </div>

  @endsection


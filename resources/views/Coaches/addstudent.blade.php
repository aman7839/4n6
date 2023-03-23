

  @extends('admin.dashboard.layout.main')

  @section('content')
    <div class="container mt-1 pt-4 pb-4">
        <div class="card">
          <div class="card-header d-flex">
            <h4>Add Student</h4>
          </div>
    
   <div class="card-body">
    <form action="{{url('coach/savestudent')}}" method ="post" enctype="multipart/form-data">
      @csrf
     
     
      
      
      
      
        <div class="form-group mt-3">
            <label for="user_name"> User Name</label>
            <input type="text" name ="user_name"  class="form-control" id="user_name" aria-describedby="emailHelp" >
            <span class ="text-danger">@error('user_name'){{$message}} @enderror</span>
          
          </div>
          <div class="form-group mt-3">
            <label for="name">  Student Name</label>
            <input type="text" name ="name" value = "{{old('name')}}" class="form-control" id="name" aria-describedby="emailHelp" >
            <span class ="text-danger">@error('name'){{$message}} @enderror</span>
          
          </div>
      
        <div class="form-group">
          <label for="personal_phone_no">Mobile</label>
          <input type="text" name ="personal_phone_no"  value = "{{old('personal_phone_no')}}"  class="form-control" id="personal_phone_no" aria-describedby="emailHelp" >
          <span class ="text-danger">@error('personal_phone_no'){{$message}} @enderror</span>
        </div>
       
      
        
        <div class="form-group">
          <label for="school_city">Location</label>
          <input type="text" name ="school_city"  value = "{{old('school_city')}}"  class="form-control" id="location" aria-describedby="emailHelp" >
          <span class ="text-danger">@error('school_city'){{$message}} @enderror</span>
        
        </div>
     
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name ="email"   value = "{{old('email')}}" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <span class ="text-danger">@error('email'){{$message}} @enderror</span>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <span class ="text-danger">@error('password'){{$message}} @enderror</span>
      </div>
      <a href="{{url('/coach/students')}}" class="btn btn-danger">Cancel</a>
      
      <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
   </div>
    

    </div>
    </div>

    @endsection


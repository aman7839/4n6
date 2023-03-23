

  @extends('admin.dashboard.layout.main')

  @section('content')
    <div class="container mt-1 pt-4 pb-4">
        <div class="card">
          <div class="card-header d-flex">
            <h4>Edit Student</h4>
          </div>
    
   <div class="card-body">
    <form action="{{url('coach/updatestudent/'.$student->id)}}" method ="post" enctype="multipart/form-data">
      @csrf
     
     
      
      
      
      @method('put')
        
          <div class="form-group mt-3">
            <label for="name">  Student Name</label>
            <input type="text" name ="name" value="{{$student->student->name ?? ''}}" class="form-control" id="name" aria-describedby="emailHelp" >
            <span class ="text-danger">@error('name'){{$message}} @enderror</span>
          
          </div>
      
        <div class="form-group">
          <label for="personal_phone_no">Mobile</label>
          <input type="text" name ="personal_phone_no"   value="{{$student->student->personal_phone_no ?? ''}}"  class="form-control" id="personal_phone_no" aria-describedby="emailHelp" >
          <span class ="text-danger">@error('personal_phone_no'){{$message}} @enderror</span>
        </div>
       
      
        
        <div class="form-group">
          <label for="school_city">Location</label>
          <input type="text" name ="school_city"   value="{{$student->student->school_city ?? ''}}"  class="form-control" id="location" aria-describedby="emailHelp" >
          <span class ="text-danger">@error('school_city'){{$message}} @enderror</span>
        
        </div>
     
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name ="email"    value="{{$student->student->email?? ''}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <span class ="text-danger">@error('email'){{$message}} @enderror</span>
      </div>
      
      <a href="{{url('/coach/students')}}" class="btn btn-danger">Cancel</a>
      
      <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
   </div>
    

    </div>
    </div>

    @endsection


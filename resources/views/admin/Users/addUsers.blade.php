



  @extends('admin.dashboard.layout.main')



  @section('content')

    <div class="container mt-1 pt-4 pb-4">

        <div class="card">

          <div class="card-header d-flex">

            <h4>Add Users</h4>

          </div>

    

   <div class="card-body">

    <form action="{{route('users.save')}}" method ="post" enctype="multipart/form-data">

      @csrf

     

     

      

      

      

      <div class="form-group mt-3">

          <label for="name">  User Name</label>

          <input type="text" name ="user_name" value = "{{old('user_name')}}" class="form-control" id="user_name" aria-describedby="emailHelp" >

          <span class ="text-danger">@error('user_name'){{$message}} @enderror</span>

        

        </div>

        <div class="form-group mt-3">

          <label for="name">  Name</label>

          <input type="text" name ="name" value = "{{old('name')}}" class="form-control" id="name" aria-describedby="emailHelp" >

          <span class ="text-danger">@error('name'){{$message}} @enderror</span>

        

        </div>

        <div class="form-group">

          <label for="personal_phone_no">Mobile</label>

          <input type="text" name ="personal_phone_no"  value = "{{old('personal_phone_no')}}"  class="form-control" id="personal_phone_no" aria-describedby="emailHelp" >

          <span class ="text-danger">@error('personal_phone_no'){{$message}} @enderror</span>

        </div>



        <div class="form-group">

          <label for="role">Select Role</label>

          <select name="role" id="role" class="form-control required">

              <option   value="" disabled>Select One</option>

              <option value="student" selected>Student</option>

                <option value="coach">Coach</option>

                

                

              </select>

              <span class ="text-danger">@error('role'){{$message}} @enderror</span>

        

      </div>
{{-- 
        <div class="form-group">

          <label for="images">Images</label>

          <input type="file" name ="image"  class="form-control" id="images" aria-describedby="emailHelp" >

          

          @if ($errors->has('image'))

          <span class="text-danger">{{ $errors->first('image') }}</span>

      @endif

        </div> --}}

        

        <div class="form-group">

          <label for="school_city">Location</label>

          <input type="text" name ="school_city"  value = "{{old('school_city')}}"  class="form-control" id="location" aria-describedby="emailHelp" >

          <span class ="text-danger">@error('school_city'){{$message}} @enderror</span>

        

        </div>

        {{-- <div class="form-group">

          <label>User Role</label>

          <select class="form-control" name="role" >

              <option value="0">Student</option>

              <option value="2">Coach</option>

          </select>

          <span class ="text-danger">@error('location'){{$message}} @enderror</span>

      </div> --}}

      <div class="form-group">

        <label for="exampleInputEmail1">Email address</label>

        <input type="email" name ="email"   value = "{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

        <span class ="text-danger">@error('email'){{$message}} @enderror</span>

      </div>

      <div class="form-group">

        <label for="password">Password</label>

        <input type="password" name="password" class="form-control" id="password" placeholder="Password">

        <span class ="text-danger">@error('password'){{$message}} @enderror</span>

      </div>

      <a href="{{url('/admin/users')}}" class="btn btn-danger">Cancel</a>

      

      <button type="submit" name="submit" class="btn btn-success">Submit</button>

    </form>

   </div>

    



    </div>

    </div>



    @endsection








  @extends('admin.dashboard.layout.main')



  @section('content')

    <div class="container mt-1 pt-4 pb-4">

        <div class="card">

          <div class="card-header d-flex">

            <h4>Add User</h4>

          </div>

    

   <div class="card-body">

    <form action="{{route('users.save')}}" method ="post" enctype="multipart/form-data">

      @csrf

    

      <div class="form-group mt-3">

          <label for="name"> Coach User Name</label>

          <input type="text" name ="user_name" value = "{{old('user_name')}}" class="form-control" id="user_name" aria-describedby="emailHelp" >

          <span class ="text-danger">@error('user_name'){{$message}} @enderror</span>


        </div>

        <div class="form-group">

          <label for="password"> Coach Password</label>
  
          <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
  
          <span class ="text-danger">@error('password'){{$message}} @enderror</span>
  
        </div>

        <div class="form-group mt-3">

          <label for="name"> Student User Name</label>

          <input type="text" name ="student_user_name" value = "{{old('student_user_name')}}" class="form-control" id="user_name" aria-describedby="emailHelp" >

          <span class ="text-danger">@error('student_user_name'){{$message}} @enderror</span>


        </div>

        <div class="form-group">

          <label for="password"> Student Password</label>
  
          <input type="password" name="student_password" class="form-control" id="password" placeholder="Enter Password">
  
          <span class ="text-danger">@error('student_password'){{$message}} @enderror</span>
  
        </div>
        <div class="form-group">

          <label for="password">Registration Date:</label>
  
          <input type="date" name="registration_date" value = "{{old('registration_date')}}" class="form-control" id="password" placeholder="">
  
          <span class ="text-danger">@error('registration_date'){{$message}} @enderror</span>
  
        </div>
        <div class="form-group">

          <label for="password">Expiration Date:</label>
  
          <input type="date" name="expiration_date" value = "{{old('expiration_date')}}" class="form-control" id="password" placeholder="">
  
          <span class ="text-danger">@error('expiration_date'){{$message}} @enderror</span>
  
        </div>

        <div class="form-group">

          <label for="password">Amount</label>
  
          <input type="text" name="amount" value = "{{old('amount')}}"  class="form-control" id="password" placeholder="">
  
          <span class ="text-danger">@error('amount'){{$message}} @enderror</span>
  
        </div>
          <div>
            <label for="html">Active:</label><br>

                  <input type="radio" id="html" name="status" value="1">
                        <label for="html">Yes</label><br>
                        <input type="radio" id="css" name="status" value="0">
                        <label for="css">No</label><br>
                      </div>

        <div class="form-group">

          <label for="password">School Name</label>
  
          <input type="text" name="school_name"  value = "{{old('school_name')}}"class="form-control" id="password" placeholder="">
  
          <span class ="text-danger">@error('school_name'){{$message}} @enderror</span>
  
        </div>

        <div class="form-group">

          <label for="password">School Email</label>
  
          <input type="email" name="school_email" value = "{{old('school_email')}}" class="form-control" id="password" placeholder="">
  
          <span class ="text-danger">@error('school_email'){{$message}} @enderror</span>
  
        </div>
        <div class="form-group">

          <label for="password">School Address</label>
  
          <input type="text" name="school_address" value = "{{old('school_address')}}" class="form-control" id="password" placeholder="">
  
          <span class ="text-danger">@error('school_address'){{$message}} @enderror</span>
  
        </div>

        <div class="form-group">

          <label for="password">School City</label>
  
          <input type="text" name="school_city" value = "{{old('school_city')}}" class="form-control" id="password" placeholder="">
  
          <span class ="text-danger">@error('school_city'){{$message}} @enderror</span>
  
        </div>

        {{-- <div class="col-lg-5 ms-auto"> --}}
        <div class="form-group">

          <div class="form-group no_error">
              <label for="school_state">School State</label>
              <select name="school_state" id="school_state" class="form-control required">
                <option   value="" disabled >Select One</option>

                @foreach ($states as $item)
                    
                
                  <option value="{{$item->state_abb}}">{{ucFirst(trans($item->name))}}</option>
                    
                    
                    @endforeach
       <span class ="text-danger">@error('school_state'){{$message}} @enderror</span>


              </select>
            
          </div>
      </div>
        <div class="form-group">

          <label for="personal_phone_no">School Phone No</label>

          <input type="text" name ="school_phone_no"  value = "{{old('school_phone_no')}}"  class="form-control" id="personal_phone_no" aria-describedby="emailHelp" >

          <span class ="text-danger">@error('school_phone_no'){{$message}} @enderror</span>

        </div>

        <div class="form-group">

          <label for="password">School Zip Code</label>
  
          <input type="text" name="school_zip"  value = "{{old('school_zip')}}" class="form-control" id="password" placeholder="">
  
          <span class ="text-danger">@error('school_zip'){{$message}} @enderror</span>
  
        </div>

        <div class="form-group">

          <label for="exampleInputEmail1"> Head Coach Email address</label>
  
          <input type="email" name ="email"   value = "{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  
          <span class ="text-danger">@error('email'){{$message}} @enderror</span>
  
        </div>

        {{-- <div class="form-group">

          <label for="password">School Zip Code</label>
  
          <input type="text" name="school_zip" class="form-control" id="password" placeholder="Password">
  
          <span class ="text-danger">@error('school_zip'){{$message}} @enderror</span>
  
        </div> --}}

        

        <div class="form-group mt-3">

          <label for="name"> Head Coach Name</label>

          <input type="text" name ="name" value = "{{old('name')}}" class="form-control" id="name" aria-describedby="emailHelp" >

          <span class ="text-danger">@error('name'){{$message}} @enderror</span>

        

        </div>

        <div class="form-group">

          <label for="personal_phone_no">Head Coach Phone No</label>

          <input type="text" name ="personal_phone_no"  value = "{{old('personal_phone_no')}}"  class="form-control" id="personal_phone_no" aria-describedby="emailHelp" >

          <span class ="text-danger">@error('personal_phone_no'){{$message}} @enderror</span>

        </div>

        <div class="form-group mt-3">

          <label for="name">Assistant Coach Name</label>

          <input type="text" name ="assist_name" value = "{{old('assist_name')}}" class="form-control" id="name" aria-describedby="emailHelp" >

          <span class ="text-danger">@error('assist_name'){{$message}} @enderror</span>

        

        </div>

        <div class="form-group">

          <label for="exampleInputEmail1">Assistant Coach Email address</label>
  
          <input type="email" name ="assist_email"   value = "{{old('assist_email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  
          <span class ="text-danger">@error('assist_email'){{$message}} @enderror</span>
  
        </div>

        <div class="form-group mt-3">

          <label for="name">Billing Contact  Name</label>

          <input type="text" name ="billing_name" value = "{{old('billing_name')}}" class="form-control" id="name" aria-describedby="emailHelp" >

          <span class ="text-danger">@error('billing_name'){{$message}} @enderror</span>

        

        </div>

        <div class="form-group">

          <label for="exampleInputEmail1">Billing Contact Email address</label>
  
          <input type="email" name ="billing_email"   value = "{{old('billing_email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  
          <span class ="text-danger">@error('billing_email'){{$message}} @enderror</span>
  
        </div>

        <div class="form-group">

          <label for="personal_phone_no">Billing Phone No</label>

          <input type="text" name ="billing_phone_no"  value = "{{old('billing_phone_no')}}"  class="form-control" id="personal_phone_no" aria-describedby="emailHelp" >

          <span class ="text-danger">@error('billing_phone_no'){{$message}} @enderror</span>

        </div>


        



        {{-- <div class="form-group">

          <label for="role">Select Role</label>

          <select name="role" id="role" class="form-control required">

              <option   value="" disabled>Select One</option>

              <option value="student" selected>Student</option>

                <option value="coach">Coach</option>

                

                

              </select>

              <span class ="text-danger">@error('role'){{$message}} @enderror</span>

        

      </div> --}}
{{-- 
        <div class="form-group">

          <label for="images">Images</label>

          <input type="file" name ="image"  class="form-control" id="images" aria-describedby="emailHelp" >

          

          @if ($errors->has('image'))

          <span class="text-danger">{{ $errors->first('image') }}</span>

      @endif

        </div> --}}

        

        {{-- <div class="form-group">

          <label for="school_city">Location</label>

          <input type="text" name ="school_city"  value = "{{old('school_city')}}"  class="form-control" id="location" aria-describedby="emailHelp" >

          <span class ="text-danger">@error('school_city'){{$message}} @enderror</span>

        

        </div> --}}

        {{-- <div class="form-group">

          <label>User Role</label>

          <select class="form-control" name="role" >

              <option value="0">Student</option>

              <option value="2">Coach</option>

          </select>

          <span class ="text-danger">@error('location'){{$message}} @enderror</span>

      </div> --}}

      

     

      <a href="{{url('/admin/users')}}" class="btn btn-danger">Cancel</a>

      

      <button type="submit" name="submit" class="btn btn-success">Submit</button>

    </form>

   </div>

    



    </div>

    </div>



    @endsection




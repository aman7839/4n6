{{-- <!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
   </head>
   <body>
      --}}
      @extends('admin.dashboard.layout.main')
      @section('content')
      <div class="container-fluid">
         <div class="py-4">
            <div class="card">
               <div class= "card-header">
                  <h4>Edit Profile</a></h4>
               </div>
               <div class ="card-body">
                  <form action="{{url('admin/updateProfile/'.$user->id)}}" method ="post" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name ="name" value="{{$user->name}}" class="form-control" id="name" aria-describedby="emailHelp" >
                              <span class ="text-danger">@error('name'){{$message}} @enderror</span>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="personal_phone_no">Mobile</label>
                              <input type="text" name ="personal_phone_no" value="{{$user->personal_phone_no}}" class="form-control" id="personal_phone_no" aria-describedby="emailHelp" >
                              <span class ="text-danger">@error('personal_phone_no'){{$message}} @enderror</span>
                           </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                             <label for="email">Email address</label>
                             <input type="email" name ="email" value="{{$user->email}}" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                             <span class ="text-danger">@error('email'){{$message}} @enderror</span>
                          </div>
                       </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="school_city">Location</label>
                              <input type="text" name ="school_city" value="{{$user->school_city}}" class="form-control" id="school_city" aria-describedby="emailHelp" >
                              <span class ="text-danger">@error('school_city'){{$message}} @enderror</span>
                           </div>
                        </div>  
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="image">Images</label>
                              <input type="file" name="image"  class="form-control mb-3" id="image" aria-describedby="emailHelp" >
                              {{-- <img  src="{{asset('/public/images/'. $user->image)}}" width="20%" class="user-avatar rounded-circle" alt="User Avatar"> --}}
                           </div>
                        </div>                   
                     </div>
                     <a href="{{url('/admin/users')}}" class="btn btn-danger ">Cancel</a>
                     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      @endsection
      {{-- 
   </body>
</html>
--}}
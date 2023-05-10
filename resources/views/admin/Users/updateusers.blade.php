{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> --}}

  @extends('admin.dashboard.layout.main')

  @section('content')

    <div class="container">
        <div class="card">

          <div class="card-header">
        <h4>Update Users</a></h4>

          </div>
    
    <div class="card-body">
      <form action="{{url('admin/updateUsers/'.$user->id)}}" method ="post" enctype="multipart/form-data">
        @csrf
       @method('PUT')
       <div class="form-group">
           <label for="name">Name</label>
           <input type="text" name ="name" value="{{$user->name}}" class="form-control" id="name" aria-describedby="emailHelp" >
           <span class ="text-danger">@error('name'){{$message}} @enderror</span>

          
         </div>
         <div class="form-group">
           <label for="personal_phone_no">Mobile</label>
           <input type="text" name ="personal_phone_no" value="{{$user->personal_phone_no}}" class="form-control" id="personal_phone_no" aria-describedby="emailHelp" >
           <span class ="text-danger">@error('personal_phone_no'){{$message}} @enderror</span>

         
         </div>
         
        <div class="form-group">
            <div class="form-group">
             <label for="image">Images</label>
             <input type="file" name="image"  class="form-control" id="image" aria-describedby="emailHelp" >
           {{-- <div class="mt-3">
            <img class="user-avatar rounded-circle" width="120" height="120" src="{{asset('/public/images/'. $user->image)}}" alt="User Avatar">
           </div> --}}

              

             {{-- <img  width="30%" class="img-circle" src="{{asset('images/'. $user->image)}}"> --}}
         
         </div>
         <div class="form-group">
           <label for="school_city">Location</label>
           <input type="text" name ="school_city" value="{{$user->school_city}}" class="form-control" id="school_city" aria-describedby="emailHelp" >
           <span class ="text-danger">@error('school_city'){{$message}} @enderror</span>
           
         </div>
		 
		 
       <div class="form-group">
         <label for="email">Email address</label>
         <input type="email" name ="email" value="{{$user->email}}" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
         <span class ="text-danger">@error('email'){{$message}} @enderror</span>
       </div>
@if($user->role =='coach') 

	<div class="form-group">
         <label for="school_phone_no">School Phone Number</label>
         <input type="number" name="school_phone_no" value="{{$user->school_phone_no}}" class="form-control" id="school_phone_no" aria-describedby="emailHelp" placeholder="Enter School Phone Number">
         
     </div>	
	 
	 <div class="form-group">
         <label for="school_name">School Name</label>
         <input type="text" name="school_name" value="{{$user->school_name}}" class="form-control" id="school_name" aria-describedby="emailHelp" placeholder="Enter School Name">
     </div>
	 
	 <div class="form-group">
         <label for="personal_phone_no">Personal Phone Number</label>
         <input type="number" name="personal_phone_no" value="{{$user->personal_phone_no}}" class="form-control" id="personal_phone_no" aria-describedby="emailHelp" placeholder="Enter Personal Phone Number">
     </div>
	 
	 <div class="form-group">
         <label for="school_address">School Address</label>
         <input type="text" name="school_address" value="{{$user->school_address}}" class="form-control" id="school_address" aria-describedby="emailHelp" placeholder="Enter School Address">
     </div>
	 
	 <div class="form-group">
         <label for="assistant_coach_name">Assistant Coach Name</label>
         <input type="text" name="assistant_coach_name" value="{{$user->assistant_coach_name}}" class="form-control" id="assistant_coach_name" aria-describedby="emailHelp" placeholder="Enter Assistant Coach Name">
     </div>
	 
	 <div class="form-group">
         <label for="school_city">School City</label>
         <input type="text" name="school_city" value="{{$user->school_city}}" class="form-control" id="school_city" aria-describedby="emailHelp" placeholder="Enter School City">
     </div>
	 
	 <div class="form-group">
         <label for="assistant_coach_email_address">Assistant Coach Email Address</label>
         <input type="text" name="assistant_coach_email_address" value="{{$user->assistant_coach_email_address}}" class="form-control" id="assistant_coach_email_address" aria-describedby="emailHelp" placeholder="Enter Assistant Coach Email Address">
     </div>
	 
	 <div class="form-group">
         <label for="school_state">School State</label>
         <input type="text" name="school_state" value="{{$user->school_state}}" class="form-control" id="school_state" aria-describedby="emailHelp" placeholder="Enter School State">
     </div>
	 
	 <div class="form-group">
         <label for="school_zip_code">School Zip Code</label>
         <input type="text" name="school_zip_code" value="{{$user->school_zip_code}}" class="form-control" id="school_zip_code" aria-describedby="emailHelp" placeholder="Enter School Zip Code">
     </div>
	 
	 <div class="form-group">
         <label for="billing_contact_name">Billing Contact Name</label>
         <input type="text" name="billing_contact_name" value="{{$user->billing_contact_name}}" class="form-control" id="billing_contact_name" aria-describedby="emailHelp" placeholder="Enter Billing Contact Name">
     </div> 
	 
	 <div class="form-group">
         <label for="billing_email_address">Billing Email Address</label>
         <input type="text" name="billing_email_address" value="{{$user->billing_email_address}}" class="form-control" id="billing_email_address" aria-describedby="emailHelp" placeholder="Enter Billing Email Address">
     </div> 
	 
	 <div class="form-group">
         <label for="billing_phone_no">Billing Phone Number</label>
         <input type="text" name="billing_phone_no" value="{{$user->billing_phone_no}}" class="form-control" id="billing_phone_no" aria-describedby="emailHelp" placeholder="Enter Billing Phone Number">
     </div>
	 

@endif	
	   
       <a href="{{url('/admin/users')}}" class="btn btn-danger">Cancel</a>
       
       <button type="submit" name="submit" class="btn btn-primary">Submit</button>
       <button type="button" class="btn btn-secondary" id="change_pass">Change Password</button>
	   
	   
@if($user->role =='coach')    
	
       <button type="button" class="btn btn-info" id="add_student">Add  Student</button>
       <a href="{{url('admin/viewstudentlist/'.$user->id)}}" class="btn btn-dark">View  Student</a>
 
@endif	   
	   
	   
	 
     </form>
    </div>
    </div>
     
	 
	 <!-- Edit Modal -->
<div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="fileuploadmodel">Change Password<button type="button" class="close"
                         data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button></h5>
                 <!-- <input type="text" id="selectedid"> -->
 
             </div>
             <div class="modal-body">
                 <form class="vault_form" action="{{ route('changeuser') }}" id="change_password" method="post">
 
                     @csrf
 
                 <div class="row">
                    <div class="col-md-12 mb-3">
                      <label for="">New Password</label>
                      <input type="text" name="password" class="form-control required" required>
                     
                 </div>
                    <div class="col-md-12">
                      <label for="">Confirm Password</label>
                      <input type="text" name="confirmpassword" class="form-control required" required>
                      <input type="hidden" name="user_id" class="form-control"  value="{{$user->id}}">
                     
                     
                 </div>
                 <div class="col-12 mt-3">
                  <button type="submit" class="btn btn-success">Update Password</button>
                 </div>

                    </div>
                 </div>

                 </form>
             </div>
 
         </div>
</div> 
	 <!-- Edit Modal -->
<div class="modal fade" id="add_studentmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="fileuploadmodel">Add Student<button type="button" class="close"
                         data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button></h5>
                 <!-- <input type="text" id="selectedid"> -->
 
             </div>
             <div class="modal-body">
                 <form class="vault_form" action="{{ route('addstudentbycoach') }}" id="change_password" method="post">
 
                     @csrf
 
                 <div class="row">
                    <div class="col-md-12 mb-3">
                      <label for="">User Name</label>
                      <input type="text" name="user_name" class="form-control required" required>
                     
                 </div>
                    <div class="col-md-12">
                      <label for="">Password</label>
                      <input type="password" name="password" class="form-control required" required>
                      <input type="hidden" name="user_id" class="form-control"  value="{{$user->id}}">
                     
                     
                 </div>
                 <div class="col-12 mt-3">
                  <button type="submit" class="btn btn-success">Update Password</button>
                 </div>

                    </div>
                 </div>

                 </form>
             </div>
 
         </div>
</div>





 </div>
 <!-- //Modal -->
    </div>
    @section('footer-scripts')
    <script>
jQuery(document).ready(function() {
	
   jQuery("#change_pass").on('click', function() {
                jQuery('#passwordModal').modal('toggle');
    });
	
   jQuery("#add_student").on('click', function() {
                jQuery('#add_studentmodal').modal('toggle');
    });

	
jQuery("#change_password").validate({
              rules: {
                password: {
                  required: true,
                  minlength: 5,
                },
                confirmpassword: {
          minlength: 5,
          equalTo: '[name="password"]'
      }
              },
              messages: {
                password: {
                  required: "Password is required",
                  minlength: "Password should be at least 5 characters long"
                },
                confirmpassword:{
                  equalTo: "Password and Confirm Password did not matches"
                }
              },
              submitHandler: function(form, event) {
                  // event.preventDefault();
                  jQuery(form).submit();
                  
              }
          });

})
</script>
@endsection
    @endsection

{{-- </body>

</html> --}}
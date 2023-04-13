
@extends('admin.dashboard.layout.main')
@section('content')
<div class="p-4">
    <div class="user_profile_image_wrapper m-2">
       <div class="user_profile_image">
   
            <a class="example-image-link" href="{{asset('/public/images/'.$user->image) }}" id="light-cheque"
            data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img src= "{{ asset('/public/images/'.$user->image) }}" width="30%" class=" rounded-circle "  title=""></a>
             <h3>{{$user->name}}</h3>
       </div>
      
        <div class="user_profile_content">
          <div class="profile_head">
            <h3> Email: <strong> {{$user->email ?? ''}}</strong></h3> 
            <h3> User id:  <strong>{{$user->id}}</strong> </h3>
          </div>
           {{-- <h3> User Name: <strong>{{$user->user_name ?? ''}}</strong> </h3>  --}}
            <div class="user_info_wrapper">
         <div class="profile_list">
            <h3>  Phone Number:</h3>
            <h3><strong>{{$user->personal_phone_no ?? ''}}</strong> </h3> 
         </div>
         <div class="profile_list">
            <h3> School Name:  </h3>
            <h3><strong>{{$user->school_name ?? ''}}</strong>  </h3>
         </div>
          <div class="profile_list">
            <h3> School's Phone Number:</h3>
            <h3><strong>{{$user->school_phone_no ?? ''}}</strong></h3>
          </div>
          <div class="profile_list">
            <h3>  School's Address:</h3>
          <h3><strong>{{$user->school_address ?? ''}}</strong></h3>
          </div>
          <div class="profile_list">
            <h3>  School's City:</h3>
          <h3><strong>{{$user->school_city ?? ''}}</strong></h3>
          </div>
          <div class="profile_list">
            <h3>  School's State:</h3>
          <h3><strong>{{$user->school_state ?? ''}}</strong></h3>
          </div>
         <div class="profile_list">
            <h3>  School's Zip Code:</h3>
            <h3><strong>{{$user->school_zip_code ?? ''}}</strong></h3>
         </div>
            @if($user->role=='admin')
          <div class="profile_list">
            <h3> Assistant Coach Name: </h3>
            <h3> <strong>{{$user->assistant_coach_name ?? ''}}</strong></h3>
          </div>
          <div class="profile_list">
            <h3>  Assistant Coach Email:</h3>
          <h3> <strong> {{$user->assistant_coach_email_address ?? ''}}</strong></h3>
          </div>
          <div class="profile_list">
            <h3> Billing Contact Name: </h3>
            <h3><strong> {{$user->billing_contact_name ?? ''}}</strong></h3>
          </div>
         <div class="profile_list">
            <h3>  Billing Email:</h3>
            <h3><strong>{{$user->billing_email_address ?? ''}}</strong></h3>
         </div>
          <div class="profile_list">
            <h3> Billing Phone Number:</h3>
            <h3> <br><strong> {{$user->billing_phone_no ?? ''}}</strong></h3>
          </div>
            @endif
        <div>
            <a href={{url('admin/editUsers/'.$user->id)}} class="btn btn-primary btn-sm">Edit</a>
        
            <a href="{{ url()->previous() }}" class="btn btn-danger btn-sm">Go Back</a>
        </div>
            </div>
            </div>
        
      
    </div>
</div>
@endsection
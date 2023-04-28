@extends('frontendviews.main')

@section('content')
<section class="cmn_header_section space">
    <div class="custom_container">
        <h1>Welcome ! <br>
            4n6 Member Login</h1>
    </div>
</section>
<div>

    <div class="custom_container space">
        <div class="row align-items-center">
           <div class="col-lg-5 col-md-6">
                <div class="login_image">
                    <img src="{{asset('/public/4n61/images/login.jpg')}}" class="img-fluid" alt="">
                </div>
           </div>
           <div class="col-md-5">
            <div class="cmn_heading mb-4 text-start">
                <h2 class="ms-0">User Login</h2>
            </div>
            <div class="user_login">

                <div class="login-form">
                   
                <form action="{{url('users/login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        
                        <label for="user_name">UserName or Email</label>
                        <input type="user_name" name="user_name" id="user_name"  placeholder="Enter your username or email" class="form-control" >
                        <span class ="text-danger">@error('user_name'){{$message}} @enderror</span>


                    </div>
                    
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control" >
                <span class ="text-danger">@error('password'){{$message}} @enderror</span>


                    </div>
                    {{-- <div class="remeber_password">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""  name = "remember_me" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                             Remember me
                            </label>
                          </div>
                          <!--<a href="{{url('forget-password')}}">Forget Password</a>-->
                    </div> --}}
                    <div>
                        <button class="cmn_btn">Login</button>
                        <p>Didn't have an account? <a href="{{url('register')}}">Sign up</a></p>
                    </div>
                </form>
            </div>
           </div>
        </div>

    </div>

</div>





@endsection
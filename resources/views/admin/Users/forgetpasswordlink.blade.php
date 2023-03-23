
    @extends('frontendviews.main')

    @section('content')

    
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
                    <h2 class="ms-0">Reset Password</h2>
                </div>
                <div class="user_login">
    
                    <div class="login-form">

                            <form action="{{ route('reset.password.post') }}" method="POST">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
        
                                <div class="form-group ">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group ">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required autofocus>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group ">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>
        
                                <button type="submit" class="cmn_btn">
                                   Reset Password
                                </button>
                                </div>
                            </form>
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection 




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



                        @if (Session::has('message'))

                        <div class="alert alert-success" role="alert">

                           {{ Session::get('message') }}

                       </div>

                   @endif

 

                     <form action="{{ route('forget.password.post') }}" method="POST">

                         @csrf

                           

                        

                        <div class="form-group">

                            <label for="">Email</label>

                            <input type="email" id="email" class="form-control" name="email" required autofocus>

                            @if ($errors->has('email'))

                                <span class="text-danger">{{ $errors->first('email') }}</span>

                            @endif

    

    

                        </div>

                    

                        

                             <button type="submit" class="cmn_btn">

                                 Send Password Reset Link

                             </button>

                        

                     </form>

                       

                  

                </div>

               </div>

            </div>

    

        </div>

    

    </div>


                  @endsection

    



    



    
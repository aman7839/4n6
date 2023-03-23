
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>4n6 </title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="icon" type="png" href="{{asset('/public/images/mariano_fav.png')}}">
    <link rel="shortcut icon" type="png" href="{{asset('/public/images/mariano_fav.png')}}">
    <link rel="stylesheet" href="{{asset('/public/css/toast.css')}}">


    <link rel="stylesheet" href="{{asset('/public/css/normalize.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/css/bootstrap4.1.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/css/font.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/css/themify.icons.css')}}">
    <link rel="stylesheet" href="{{asset('/public/css/stroke.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/4n61/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('/public/4n61/assets/css/style.css')}}">

    <link href='{{asset('/public/css/fonts.css')}}' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
              <div class="log_in_form"> 
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="{{asset('public/images/fanatic_logo.svg')}}" alt="">
                    </a>
                </div>
                <div class="login-form">
                   <form method="post" action="{{ route('login') }}">
              @csrf
              <div class="form-outline mb-4">
                 
                <label class="form-label" for="form2Example1">UserName or Email</label>
                <input type="text" name="user_name" id="form2Example1" class="form-control"  value = "{{old('email')}}"/>
                <span class ="text-danger">@error('user_name'){{$message}} @enderror</span>
              </div>
                        <!-- Password input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example2">Password</label>
                  <input type="password" name="password" id="form2Example2" class="form-control" />
                 
                  <span class ="text-danger">@error('password'){{$message}} @enderror</span>
                </div>
                    
                        <button type="submit" class="btn mt-5 mb-5">Sign in</button>

                  
                        {{-- <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                        </div> --}}
                    </form>

                    <a href="{{url('forget-password')}}">Forgot your password</a>


                </div>

              </div>
            </div>
            
        </div>
        
    </div>


    <script src="{{asset('/public/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('/public/assets/js/popper.js')}}"></script>
    <script src="{{asset('/public/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/public/assets/js/matchheight.min.js')}}"></script>
    <script src="{{asset('/public/4n61/assets/js/main.js')}}"></script>
    <script src="{{asset('/public/js/toast.js')}}"></script>
    <script> 
     
      jQuery(document).ready(function() {
             toastr.options.timeOut = 10000;
             @if (Session::has('error'))
                 toastr.error('{{ Session::get('error') }}');
             @elseif(Session::has('success'))
                 toastr.success('{{ Session::get('success') }}');
             @endif
         });
  
     </script>


</body>
</html>





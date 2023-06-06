<!DOCTYPE html>
<html lang="en">
   

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4n6</title>
    <link rel="stylesheet" href="{{asset('/public/css/style.css')}}">
   

    <link rel="stylesheet" href="{{asset('/public/4n61/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/4n61/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('/public/css/font.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/4n61/css/steps.css')}}">
    <link rel="stylesheet" href="{{asset('/public/css/toast.css')}}">
    <link rel="icon" type="image/png" href="{{asset('/public/4n61/images/Favicon.png')}}" />




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       {!! htmlScriptTagJsApi() !!}
</head>

<body>
    <!-- Header starts  herer -->
    <header>
        <div class="custom_container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('/public/4n61/images/fanatic_logo.svg')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 " style="--bs-scroll-height: 100px;">

                   
                        <li class="nav-item ">
                            <a class="nav-link {{ request()->is('/') ? 'active' : ''}}" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>

                        
                        {{-- <li class="nav-item ">
                            <a class="nav-link {{ request()->is('regeneratetopics') ? 'active' : ''}}" href="{{url('/regeneratetopics')}}">IDA</a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Limited Prep Events
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="{{url('/regeneratetopics')}}">Impromptu Duet Acting (IDA)</a></li>
                              <li><a class="dropdown-item" href="{{url('/isg')}}">Impromptu Speech Topic Generator</a></li>  
                              @auth
                              @if(auth()->user()->role == 'coach' )                          
                              <li><a class="dropdown-item" href="{{url('coach/extemp')}}">Extemp Topic Generator</a></li>

                              @endif

                              @if(auth()->user()->role == 'student' )                          
                              <li><a class="dropdown-item" href="{{url('student/extemp')}}">Extemp Topic Generator</a></li>

                              @endif

                              @if(auth()->user()->role == 'admin' )                          
                              <li><a class="dropdown-item" href="{{url('admin/extemp')}}">Extemp Topic Generator</a></li>

                              @endif

                              @endauth
                            </ul>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('tutorial') ? 'active' : ''}}" href="{{url('tutorial')}}">Tutorials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('reviews') ? 'active' : ''}}" href="{{url('reviews')}}">Reviews</a>
                        </li> 
                        <li class="nav-item">
                            
                            <a class="nav-link  {{ request()->is('contactUs') ? 'active' : ''}}" href="{{url('contactUs')}}">Contact Us</a>
                        </li>
                        <!-- <li class="nav-item">
                            
                            <a class="nav-link  {{ request()->is('faq') ? 'active' : ''}}" href="{{url('faq')}}">FAQ</a>
                        </li> -->


                        <li class="nav-item">
                            
                            <a class="nav-link  {{ request()->is('freeresources') ? 'active' : ''}}" href="{{url('freeresources')}}">Free Resources</a>
                        </li>

                    @if(!Auth::user())
                     
                     
                        <li class="nav-item">
                            
                            <a class="nav-link  {{ request()->is('demosearch') ? 'active' : ''}}" href="{{url('demosearch')}}">Demo Search</a>
                        </li>
                        @endif
                        @if(!Auth::user())
                
                
                    <li class="nav-item mobile_menu">
                            
                            <a class="nav-link  {{ request()->is('demosearch') ? 'active' : ''}}"  href="{{url('login')}}">Log In</a>
                        </li>
            @endif
                       
            @Auth
                    @if(Auth::user())
                    <li class="nav-item mobile_menu">
                            
                            <a class="nav-link  {{ request()->is('demosearch') ? 'active' : ''}}"  href="{{url('logout')}}">Logout</a>
                        </li>
                      
                    
                    @endif
                    @endauth
                        
                        @auth
                        @if(auth()->user()->role == 'coach')

                        <li class="nav-item">
                            
                            <a class="nav-link  {{ request()->is('coach/search') ? 'active' : ''}}" href="{{url('coach/search')}}">Search Database</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ request()->is('dashboard') ? 'active' : ''}}" href="{{url('/coach/search')}}">Dashboard</a>
                        </li>
                        
                    @endif     

                        @if(auth()->user()->role == 'student')

                        <li class="nav-item">
                            
                            <a class="nav-link  {{ request()->is('student/search') ? 'active' : ''}}" href="{{url('student/search')}}">Search Database</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ request()->is('dashboard') ? 'active' : ''}}" href="{{url('/student/search')}}">Dashboard</a>
                        </li>
                      @endif    

                    @if(auth()->user()->role == 'admin')

                    <li class="nav-item">
                            
                        <a class="nav-link  {{ request()->is('admin/search') ? 'active' : ''}}" href="{{url('admin/search')}}">Search Database</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ request()->is('dashboard') ? 'active' : ''}}" href="{{url('/admin/search')}}">Dashboard</a>
                    </li>

                    @endif  

                        @endauth
                        
                        <div class="navigates mobile">
                            <a href="#" class="facebook_link"><img src="{{asset('/public/4n61/images/facebook-square.svg')}}"></a>
                            <a href="{{url('login')}}" class="cmn_btn">Member Login</a>
                            <a href="{{url('login')}}" class="cmn_btn">Logout</a>
                        </div>

                    </ul>

                </div>
                <div class="navigates desktop">

                   @if(!Auth::user())
                    <a href="https://www.facebook.com/groups/4n6fanatics/" class="facebook_link"><img src="{{asset('/public/4n61/images/facebook-square.svg')}}"></a>
                    <a href="{{url('login')}}" class="cmn_btn">Member Login</a>
            @endif
                    @auth
                    @if(Auth::user())

                         <a href="{{url('logout')}}" class="cmn_btn">Logout</a>
                    
                    @endif
                    @endauth
                </div>
            </nav>
        </div>
    </header>

    <!-- Header ends here -->
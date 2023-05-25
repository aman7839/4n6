<!doctype html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>4n6</title>

    <meta name="description" content="Ela Admin - HTML5 Admin Template">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">

    

    <link rel="icon" type="png" href="{{asset('/public/images/fanatic_logo.svg')}}">

    <link rel="shortcut icon" type="png" href="{{asset('/public/images/mariano_fav.png')}}">





    <link rel="stylesheet" href="{{asset('/public/css/normalize.min.css')}}">

    <link rel="stylesheet" href="{{asset('/public/4n61/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/4n61/css/lightbox.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">

   

    <link rel="stylesheet" href="{{asset('/public/4n61/assets/css/cs-skin-elastic.css')}}">

    <link rel="stylesheet" href="{{asset('/public/4n61/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('/public/css/toast.css')}}">
    <link rel="stylesheet" href="{{asset('/public/css/daterangepicker.css')}}">

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">

   <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> 

   <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet"> 

    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">



    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />

    {{-- <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" /> --}}

  

   <style>

    #weatherWidget .currentDesc {

        color: #ffffff!important;

    }

        .traffic-chart {

            min-height: 335px;

        }

        #flotPie1  {

            height: 150px;

        }

        #flotPie1 td {

            padding:3px;

        }

        #flotPie1 table {

            top: 20px!important;

            right: -10px!important;

        }

        .chart-container {

            display: table;

            min-width: 270px ;

            text-align: left;

            padding-top: 10px;

            padding-bottom: 10px;

        }

        #flotLine5  {

             height: 105px;

        }



        #flotBarChart {

            height: 150px;

        }

        #cellPaiChart{

            height: 160px;

        }



    </style>

</head>



<body>

    <!-- Left Panel -->



    <aside id="left-panel" class="left-panel">

        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">

                <ul class="nav navbar-nav">

                   

                    @auth

                    @if(auth()->user()->role=='admin')



                    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : ''}}">

                        <a href="{{url('admin/dashboard')}}"><i class="menu-icon fa fa-tachometer"></i>Dashboard </a>

                    </li>



                    <li class="nav-item {{ request()->is('admin/editProfile/'.Auth::user()->id) ? 'active' : ''}}">  

                        <a class="" href="{{ url('admin/editProfile/'.Auth::user()->id)}}"><i class=" menu-icon fa fa-users"></i>My Profile</a>



                    </li>

                    <li class="nav-item {{ request()->is('admin/changePassword') ? 'active' : ''}}">  

                        <a class="" href="{{ url('admin/changePassword') }}"><i class=" menu-icon  fa fa-key"></i>Change Password </a>



                    </li>

                

                    <li class="nav-item {{ request()->is('admin/users') ? 'active' : ''}}">

                        <a href="{{url('admin/users')}}"><i class="menu-icon fa fa-user"></i>Manage Users </a>

                    </li>
                    <li class="nav-item dropdown admin_dropdown">
                        <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-id-card" aria-hidden="true"></i> Membership <i class="fa fa-chevron-right arrown_style"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item {{ request()->is('admin/activemembership') ? 'active' : ''}}" href="{{route('admin.activeMembership')}}"  > <i class="menu-icon fa fa-id-card" aria-hidden="true"></i>Active Memberships</a>
                          <a class="dropdown-item {{ request()->is('admin/pastmembership') ? 'active' : ''}}" href="{{route('admin.pastMembership')}}"> <i class="menu-icon fa fa-id-card" aria-hidden="true"></i>Past Memberships</a>
                        
                        </div>
                      </li>

                    {{-- <li class="nav-item {{ request()->is('admin/topics') ? 'active' : ''}}">

                        <a href="{{url('admin/topics')}}"><i class="menu-icon fa fa-star    "></i> Topics </a>

                    </li> --}}

                    <li class="nav-item {{ request()->is('admin/documents') ? 'active' : ''}}">

                        <a href="{{url('admin/documents')}}"><i class="menu-icon fa fa-file-text"></i>User Guides/Documents </a>

                    </li>
                    <li class="nav-item {{ request()->is('admin/offerprice') ? 'active' : ''}}">

                        <a href="{{url('admin/offerprice')}}"><i class="menu-icon fa fa-file-text"></i>Offer Price </a>

                    </li>

                    {{-- <li class="nav-item {{ request()->is('admin/states') ? 'active' : ''}}">

                        <a href="{{url('admin/states')}}"><i class="menu-icon fa fa-globe"></i>States</a>

                    </li> --}}

                    <li class="nav-item {{ request()->is('admin/category') ? 'active' : ''}}">

                        <a href="{{url('admin/category')}}"><i class="menu-icon fa fa-link"></i> Manage Links</a>

                    </li>
                    <li class="nav-item {{ request()->is('admin/reviews') ? 'active' : ''}}">

                        <a href="{{url('admin/reviews')}}"><i class="menu-icon fa fa-commenting"></i> Reviews</a>

                    </li>

                    <li class="nav-item {{ request()->is('admin/data') ? 'active' : ''}}">

                        <a href="{{url('admin/data')}}"><i class="menu-icon fa fa-table"></i> Manage Data</a>

                    </li>

                   
                        <li class="nav-item {{ request()->is('admin/vault') ? 'active' : ''}}">

                        <a href="{{url('admin/vault')}}"><i class="menu-icon fa fa-table"></i> Vault</a>

                    </li>

                    <li class="nav-item {{ request()->is('admin/messages') ? 'active' : ''}}">  

                        <a href="{{url('admin/messages')}}"><i class="menu-icon fa fa-commenting-o"></i> Messages</a>

                    </li>

                    <li class="nav-item {{ request()->is('admin/editProfile') ? 'active' : ''}}">  

                        <a class="" href="{{url('admin/logout')}}"><i class=" menu-icon fa fa-sign-out"></i>Logout</a>



                    </li>







                     {{-- <li class="nav-item {{ request()->is('admin/awards') ? 'active' : ''}}">

                        <a href="{{url('admin/awards')}}"><i class="menu-icon fa fa-star"></i>Awards</a>

                    </li>

                    <li class="nav-item {{ request()->is('admin/theme') ? 'active' : ''}}">

                        <a href="{{url('admin/theme')}}"><i class="menu-icon fa fa-star"></i>Theme</a>

                    </li>

                    <li class="nav-item {{ request()->is('admin/playcategory') ? 'active' : ''}}">

                        <a href="{{url('admin/playcategory')}}"><i class="menu-icon fa fa-star"></i>Play category</a>

                    </li>

                    <li class="nav-item {{ request()->is('admin/extemptopics') ? 'active' : ''}}">

                        <a href="{{url('admin/extemptopics')}}"><i class="menu-icon fa fa-star"></i>Extemp Topics</a>

                    </li> --}}





                    @endif



                  



                    @if(auth()->user()->role=='coach')

                    

                    {{-- <li class="nav-item {{ request()->is('coach/dashboard') ? 'active' : ''}}">

                        <a href="{{url('coach/dashboard')}}"><i class="menu-icon fa fa-tachometer"></i>Dashboard </a>

                    </li> --}}
                    {{-- <li class="nav-item {{ request()->is('coach/dashboard') ? 'active' : ''}}">

                        <a href="{{route('createTransaction')}}"><i class="menu-icon fa fa-id-card" aria-hidden="true"></i>Membership</a>

                    </li>    --}}
                    <li class="nav-item dropdown admin_dropdown">
                        <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-diamond" aria-hidden="true"></i> Membership <i class="fa fa-chevron-right arrown_style"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{route('coachmembership')}}"> <i class="menu-icon fa fa-dot-circle-o" aria-hidden="true"></i> Active Membership</a>
                          <a class="dropdown-item" href="{{route('createTransaction')}}"> <i class="menu-icon fa fa-dot-circle-o" aria-hidden="true"></i>New Membership</a>
                        
                        </div>
                      </li>


                      <li class="nav-item dropdown admin_dropdown">
                        <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-calendar" aria-hidden="true"></i> Limited Prep Events <i class="fa fa-chevron-right arrown_style"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{url('/regeneratetopics')}}" data-toggle="tooltip" data-placement="right" title="Impromptu Speech Topic Generator"> 
                            <i class="menu-icon fa fa-dot-circle-o" aria-hidden="true"></i> 
                            IDA  
                        </a>
                          <a class="dropdown-item" href="{{url('/isg')}}" data-toggle="tooltip" data-placement="right" title="Impromptu Speech Topic Generator"> 
                            <i class="menu-icon fa fa-dot-circle-o" aria-hidden="true"></i>
                            IST Generator
                        </a>
                          <a class="dropdown-item" href="{{url('coach/extemp')}}" data-toggle="tooltip" data-placement="right" title="Extemp Topic Generator"> 
                            <i class="menu-icon fa fa-dot-circle-o" aria-hidden="true"></i>ET Generator</a>
                            
                        </div>
                      </li>

                    <li class="nav-item {{ request()->is('coach/students') ? 'active' : ''}}">  

                        <a href="{{url('coach/students')}}"><i class="menu-icon fa fa-commenting-o"></i> Manage Students</a>

                    </li>
                    <li class="nav-item {{ request()->is('coach/vault') ? 'active' : ''}}">  

                        <a href="{{url('coach/vault')}}"><i class="menu-icon fa fa-file"></i> Vault</a>

                    </li>
                    <li class="nav-item {{ request()->is('coach/vaultaccess') ? 'active' : ''}}">  

                        <a href="{{url('coach/vaultaccess')}}"><i class="menu-icon fa fa-universal-access"></i> Vault Access</a>

                    </li>
                    <li class="nav-item {{ request()->is('coach/search') ? 'active' : ''}}">  

                        <a href="{{url('coach/search')}}"><i class="menu-icon fa fa-search"></i> Search Database</a>

                    </li>

                    {{-- <li class="nav-item {{ request()->is('coach/extemp') ? 'active' : ''}}">  

                        <a href="{{url('coach/extemp')}}"><i class="menu-icon fa fa-table"></i> Extemp Topic Generator</a>

                    </li>
                    <li class="nav-item {{ request()->is('/isg') ? 'active' : ''}}">  

                        <a href="{{url('/isg')}}"><i class="menu-icon fa fa-table"></i> Impromptu Speech Topic Generator</a>

                    </li> --}}
                   

                    <li class="nav-item {{ request()->is('/freeresources') ? 'active' : ''}}">  

                        <a href="{{url('/freeresources')}}"><i class="menu-icon fa fa-table"></i> Resources</a>

                    </li>

                    <li class="nav-item {{ request()->is('/reviews') ? 'active' : ''}}">  

                        <a href="{{url('/reviews')}}"><i class="menu-icon fa fa-comments"></i> Reviews</a>

                    </li>
                    <li class="nav-item {{ request()->is('/contactUs') ? 'active' : ''}}">  

                        <a href="{{url('/contactUs')}}"><i class="menu-icon fa fa-phone-square"></i> Contact Us</a>
                            
                        {{-- <a class="nav-link  {{ request()->is('contactUs') ? 'active' : ''}}" href="{{url('contactUs')}}">Contact Us</a> --}}
                    </li>



                    <li class="nav-item ">  

                        <a class="" href="{{url('coach/logout')}}"><i class=" menu-icon fa fa-sign-out"></i>Logout</a>

                           

                        </li>

                    


                    @endif

                   

                    @if(auth()->user()->role=='student')



                    {{-- <li class="nav-item {{ request()->is('student/dashboard') ? 'active' : ''}}">

                        <a href="{{url('student/dashboard')}}"><i class="menu-icon fa fa-tachometer"></i>Dashboard </a>

                    </li> --}}

                    <li class="nav-item dropdown admin_dropdown">
                        <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-calendar" aria-hidden="true"></i> Limited Prep Events <i class="fa fa-chevron-right arrown_style"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{url('/regeneratetopics')}}" data-toggle="tooltip" data-placement="right" title="Impromptu Speech Topic Generator"> 
                            <i class="menu-icon fa fa-dot-circle-o" aria-hidden="true"></i> 
                            IDA  
                        </a>
                          <a class="dropdown-item" href="{{url('/isg')}}" data-toggle="tooltip" data-placement="right" title="Impromptu Speech Topic Generator"> 
                            <i class="menu-icon fa fa-dot-circle-o" aria-hidden="true"></i>
                            IST Generator
                        </a>
                          <a class="dropdown-item" href="{{url('coach/extemp')}}" data-toggle="tooltip" data-placement="right" title="Extemp Topic Generator"> 
                            <i class="menu-icon fa fa-dot-circle-o" aria-hidden="true"></i>ET Generator</a>
                            
                        </div>
                      </li>
                      <li class="nav-item {{ request()->is('/demosearch') ? 'active' : ''}}">  

                        <a href="{{url('/demosearch')}}"><i class="menu-icon fa fa-search"></i> Search Database</a>

                    </li>

                    <li class="nav-item {{ request()->is('/freeresources') ? 'active' : ''}}">  

                        <a href="{{url('/freeresources')}}"><i class="menu-icon fa fa-table"></i> Resources</a>

                    </li>
                    <li class="nav-item {{ request()->is('student/vault') ? 'active' : ''}}">  

                        <a href="{{url('student/vault')}}"><i class="menu-icon fa fa-table"></i> Vault</a>

                    </li>
                    <li class="nav-item ">  

                        <a class="" href="{{url('student/logout')}}"><i class=" menu-icon fa fa-sign-out"></i>Logout</a>

                           

                        </li>

                 

                    @endif



                    @endauth

                </ul>

            </div><!-- /.navbar-collapse -->

        </nav>

    </aside>







    <!-- /#left-panel -->

    <!-- Right Panel -->







    @extends('frontendviews.main')

    @section('content')
    
    <!-- Main banner starts here -->
    <section class=" fanatic_banner">
        <div class="custom_container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner_content">
                        <h1 class="pb-4">The Ultimate Resources <br>
                            for Forensics (4N6), Speech <br>
                            and/or Drama Coaches & Students</h1>
                        <a href="{{url('login')}}" class="cmn_btn">Member Login</a>
                    </div>
                </div>

          
           @foreach ($offerPrice as $item)

                @if ($item->status == '1' && $item->to_date >= $today )
                {{-- @if($item->from_date == $today || $item->to_date == $today ) --}}

                <div class="col-lg-3">
                    <div class="fanatic_offer">
                        <p>
                           {{$item->description ?? ''}}
                           <strong class="prev-price">${{$item->price ?? ''}}</strong><span></span>
                            
                            <strong>${{$item->offer_price ?? ''}}</strong><span>only</span>
                        </p>
                    </div>
                </div>
               
                @else
                                 
                <div class="col-lg-3">
                    <div class="fanatic_offer">
                        <p>
                            Now <br>
                            Get 365 days <br>
                            For <br>
                            <strong>$200</strong><span>only</span>
                        </p>
                    </div>
                </div>
                @endif
                {{-- @endif --}}
          @endforeach

            </div>
            {{-- <a href="" class="play_btn cmn_btn"><i class="fa fa-play me-2" aria-hidden="true"></i>
                Play</a> --}}
        </div>
    </section>
    <!-- Main banner ends here -->

    <!-- our services starts here  -->

    <section class="space our_services">
        <div class="custom_container">
            <div class="cmn_heading">
               <h2>Our Services</h2>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 col-lg-4">
                   <div class="service_outer">
                    <div class="service_img">
                        <img src="{{asset('/public/4n61/images/valut.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="service_content">
                        <div class="service_header">

                            <h3 class="scondary_heading">Vault</h3>
                            <img src="{{asset('/public/4n61/images/vault_icon.png')}}" class="img-fluid" alt="">
                        </div>

                        <ul class="p-0 mb-3 pt-3">
                            <li>2,000 + performance-ready selections timed
                                for length with suggested introductions and
                                source information.</li>
                            <li>More cuttings added each week during the
                                school year.</li>
                            <li>Add Sample Cutting Link.</li>
                            <li>#’s of cuttings available – I like this, but need
                                ability to change these numbers</li>
                            <li>Split Solo Interp into two sections (Humorous
                                Interp and Dramatic Interp) – Leave off
                                Declamation, not a huge draw for most states.</li>
                        </ul>
                        <a href="{{url('register')}}" class="cmn_btn">Become a Member</a>
                    </div>
                </div>
                   </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service_outer">
                        <div class="service_img ">
                            <img src="{{asset('/public/4n61/images/database.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="service_content">
                            <div class="service_header">
                            <h3 class="scondary_heading">Database</h3>
                            <img src="{{asset('/public/4n61/images/database_icon.png')}}" class="img-fluid" alt="">
                            </div>
                            <ul class="p-0 mb-3 pt-3">
                                <li>24,000+ records tracking state and national 
                                    qualifiers since 2003. </li>
                                <li> Search by Event, Awards, 100+ Themes Leave 
                                    out Gender (so many of our students are 
                                    outside the binary gender norms) .</li>
                            </ul>
                            <a href="{{url('register')}}" class="cmn_btn">Become a Member</a>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-6 col-lg-4 ">
                   <div class="service_outer events">
                    <div class="service_img">
                        <img src="{{asset('/public/4n61/images/extemp.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="service_content">
                        <div class="service_header">
                        <h3 class="scondary_heading">Extemp & Limited <br>
                            Prep Events</h3>
                            <img src="{{asset('/public/4n61/images/event_icon.png')}}" class="img-fluid" alt="">
                        </div>
                        <ul class="p-0 mb-3 pt-3">
                            <li>Extemp Topic Generator (ETB)  - 100+ Extemp 
                                Topics each month. - The ETG functions the 
                                same way an Extemp Draw takes place at a 
                                tournament.  (Link to Tutorial) Both video and 
                                text.</li>
                                <li>
                                    Our Impromptu Speech Topic Generator with 28+ 
                                    categories and over 1,400 topics -- from "Social 
                                    Issues" to "Harry Potter Quotes" 
                                    
                                </li>
                                <li>
                                    Duo Improv Scene Generator – 3 professions, 
                                    locations and activities – Give students 30 
                                    minutes to create a short skit.</li>
                                
                               
                        </ul>
                        <a href="{{url('register')}}" class="cmn_btn">Become a Member</a>
                    </div>
                   </div>
                </div>
            </div>
       
        </div>
    </section>

    
    @endsection
    

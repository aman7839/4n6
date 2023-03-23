@extends('frontendviews.main')

    @section('content')

    <section class="cmn_header_section space" style="background-image:url('{{asset('/public/4n61/images/service_bg.jpg')}}');">
        <div class="custom_container">
            <h1>Tutorial</h1>
        </div>
    </section>


    <div class="custom_container space">
        <div class="cmn_heading">
            <h2>Instructions</h2>
        </div>
    </div>
    <section class="instructor_content">
        <div class="custom_container">
            <div class="row">
                <div class="col-md-6">
                    <div class="tutorial_video">
                        <iframe  height="450" src="https://www.youtube.com/embed/yAoLSRbwxL8"
                            title="Dummy Video" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 tutorial_content">
                    <img src="{{asset('/public/4n61/images/icon_tilt.png')}}" class="img-fluid top_icon" alt="">
                    <div class="">
                        <ul>
                            <li>Each time the "Regenerate Topics" button is
                                clicked, the generator will randomly display
                                3 Characters, 3 Locations and 3 Situations.</li>
                            <li>Student pairs should select 2 Characters,
                                1 Location and 1 Situation from the results.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row  space">
                <div class="col-md-6 col-lg-5 tutorial_content order-2-sm">
                    <img src="{{asset('/public/4n61/images/database_icon.png')}}" class="img-fluid bottom_icon" alt="">
                    <div class="">
                        <ul>
                            <li>Each time the "Regenerate Topics" button is
                                clicked, the generator will randomly display
                                3 Characters, 3 Locations and 3 Situations.</li>
                            <li>Student pairs should select 2 Characters,
                                1 Location and 1 Situation from the results.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tutorial_video order-1-sm">
                        <iframe  height="450" src="https://www.youtube.com/embed/yAoLSRbwxL8"
                            title="Dummy Video" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row space pt-0">
                <div class="col-md-6 ">
                    <div class="tutorial_video">
                        <iframe  height="450" src="https://www.youtube.com/embed/yAoLSRbwxL8"
                            title="Dummy Video" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 tutorial_content">
                    <img src="{{asset('/public/4n61/images/icon_tilt_mix.png')}}" class="img-fluid bottom_icon" alt="">
                  
                    <div class="">
                        <ul>
                            <li>Each time the "Regenerate Topics" button is
                                clicked, the generator will randomly display
                                3 Characters, 3 Locations and 3 Situations.</li>
                            <li>Student pairs should select 2 Characters,
                                1 Location and 1 Situation from the results.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    

    @endsection
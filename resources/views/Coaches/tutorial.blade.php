@extends('admin.dashboard.layout.main')

@section('content')

 


 <div class="container-fluid pt-4">
 <div class="card">
 <div class="card-header ida_header">
                    <h4 class="title_cmn">Tutorials</h4>
                  
                </div>
    <div class="card-body">
    <section class="instructor_content">
        <div class="custom_container">
            <div class="row m-0 pt-4">
                <div class="col-md-6">
                    <div class="tutorial_video">
                        {{-- <iframe  height="450" src="https://www.youtube.com/embed/yAoLSRbwxL8" --}}
                        {{-- <iframe  height="450" src="{{'../public/images'.$videos[0]->video}}}"
                            title="Dummy Video" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> --}}
                            @if (count($videos)>0)
                            <video width="100%" height="300" controls>
                                <source src="{{asset('/public/images/'.$videos[0]->video ?? "")}}" type="video/mp4">
                                {{-- <source src="movie.ogg" type="video/ogg"> --}}
                              Your browser does not support the video tag.
                              </video>

                              @else

                              <iframe  height="450" src="https://www.youtube.com/embed/yAoLSRbwxL8"
                            title="Dummy Video" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                              @endif
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 tutorial_content">
                    <img src="{{asset('/public/4n61/images/icon_tilt.png')}}" class="img-fluid bottom_icon" alt="">
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
            <div class="row  m-0  space">
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
                        {{-- <iframe  height="450" src="https://www.youtube.com/embed/yAoLSRbwxL8"
                            title="Dummy Video" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> --}}
                            @if (count($videos)>0)
                            <video width="100%" height="300" controls>
                                <source src="{{asset('/public/images/'.$videos[1]->video ?? "")}}" type="video/mp4">
                                {{-- <source src="movie.ogg" type="video/ogg"> --}}
                              Your browser does not support the video tag.
                              </video>

                              @else
                              <iframe  height="450" src="https://www.youtube.com/embed/yAoLSRbwxL8"
                              title="Dummy Video" frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen></iframe>
                              @endif
                    </div>
                </div>
            </div>
            <div class="row  m-0 space pt-0">
                <div class="col-md-6 ">
                    <div class="tutorial_video">
                        {{-- <iframe  height="450" src="https://www.youtube.com/embed/yAoLSRbwxL8"
                            title="Dummy Video" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> --}}
                            @if (count($videos)>0)
                            <video width="100%" height="300" controls>
                                <source src="{{asset('/public/images/'.$videos[2]->video ?? "" )}}" type="video/mp4">
                                  
                                {{-- <source src="movie.ogg" type="video/ogg"> --}}
                              Your browser does not support the video tag.
                              </video>
                              @else
                              <iframe  height="450" src="https://www.youtube.com/embed/yAoLSRbwxL8"
                              title="Dummy Video" frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen></iframe>
                              @endif
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
    </div>
   </div>
 </div>
    

    @endsection
@extends('frontendviews.main')

    @section('content')
   
    <section class="cmn_header_section space" style="background-image:{{asset('url(public/4n61/images/demo_bg.jpg)')}};">
        <div class="custom_container">
            <h1>Improv Scene <br>
                 Generator</h1>
        </div>
    </section>

    <div class="custom_container space">
        <div class="cmn_heading">
          <h2> INSTRUCTIONS: </h2>
           
        </div>
    </div>
<section class="coach_list space pt-0">
    <div class="custom_container">
       
        
        <ul class="topic_list">
            <li>
                Each time the "Regenerate Topics" button is clicked, the generator will randomly display 3 Characters, 3 Locations and 3 Situations.
            </li>
            <li>Student pairs should select 2 Characters, 1 Location and 1 Situation from the results.
            </li>
            <li>Each pair is allotted 30 minutes to prepare a 4-7 minute skit based on the information selected.
            </li>
            <li>Coaches may allow the use of a table and two chairs for the scene; however, all other props must be pantomimed.
                </li>
            <li>Evaluate students based on plot and character development, creative introductions and ability to pantomime props.
            </li>
            <li>
                This event is offered at some tournaments in the state of Kansas; but also works well as an in-class exercise to improve creativity, spontaneity and student interaction. 

            </li>
        </ul>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="coaches_list">
                    <p class="states">Character</p>
                    <ul>                                               
                        @foreach ($character as $item)
                        <li><a href="" >{{ucFirst(trans($item->info))}}</a></li>

                       
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="coaches_list">
                    <p class="states">Location</p>
                    <ul>
                        @foreach ($location as $item)

                        <li><a href="" >{{ucFirst(trans($item->info))}}</a></li>

                       
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="coaches_list">
                    <p class="states">Situation</p>
                    <ul>
                        @foreach ($situation as $item)

                        <li><a href="" >{{ucFirst(trans($item->info))}}</a></li>
                       
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-12 text-center mt-3">
                <a href="" class="cmn_btn">Regenerate Topics</a>
            </div>
        </div>
    </div>
</section>
    

    @endsection
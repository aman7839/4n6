@extends('frontendviews.main')

@section('content')

<section class="cmn_header_section space" style="background-image:url('{{asset('/public/4n61/images/service_bg.jpg')}}') ;">
    <div class="custom_container">
        <h1>Faq's</h1>
    </div>
</section>


<section class="contact_content space ">
    <div class="custom_container ">

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        I have a question that isn’t addressed here. What should I do?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse  " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Contact us directly via e-mail at <a href="mailto:laurie@4n6fanatics.com">laurie@4n6fanatics.com</a> or via phone at <a href="tel:541-821-
7612">541-821-7612</a></p>
                    </div>
                </div>
            </div>

        </div>
        <h2 class="faq_title">GENERAL QUESTIONS</h2>
        @foreach ($generalQuestions as $generalQuestionsFaq)

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{$generalQuestionsFaq->id ?? ''}}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$generalQuestionsFaq->id ?? ''}}" aria-expanded="false" aria-controls="collapseTwo">
                        {{$generalQuestionsFaq->question ?? ''}}
                    </button>
                </h2>
                <div id="collapse-{{$generalQuestionsFaq->id ?? ''}}" class="accordion-collapse collapse" aria-labelledby="heading-{{$generalQuestionsFaq->id ?? ''}}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>   {{$generalQuestionsFaq->answer ?? ''}}</p>
                    </div>
                </div>
            </div>
          
        </div>
        @endforeach

        <h2 class="faq_title"> MEMBERSHIP/PAYMENT QUESTIONS</h2>

        @foreach ($membershipQuestions as $membershipQuestionsFaq)

        <div class="accordion" id="accordionExample">

            <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{$membershipQuestionsFaq->id ?? ''}}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$membershipQuestionsFaq->id ?? ''}}" aria-expanded="false" aria-controls="membercollapseTwo">
                        {{$membershipQuestionsFaq->question ?? ''}}
                    </button>
                </h2>
                <div id="collapse-{{$membershipQuestionsFaq->id ?? ''}}" class="accordion-collapse collapse" aria-labelledby="heading-{{$membershipQuestionsFaq->id ?? ''}}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>{{$membershipQuestionsFaq->answer?? ''}}</p>
                    </div>
                </div>
            </div>

            

        </div>
        @endforeach
        <h2 class="faq_title">SERVICES PROVIDED QUESTIONS
        </h2>

        @foreach ($serviceQuestions as $serviceQuestionsFaq)

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{$serviceQuestionsFaq->id ?? ''}}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$serviceQuestionsFaq->id ?? ''}}" aria-expanded="false" aria-controls="serviceone">
                        {{$serviceQuestionsFaq->question ?? ''}}
                    </button>
                </h2>
                <div id="collapse-{{$serviceQuestionsFaq->id ?? ''}}" class="accordion-collapse collapse" aria-labelledby="heading-{{$serviceQuestionsFaq->id ?? ''}}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            {{$serviceQuestionsFaq->answer ?? ''}}
                        </p>
                    </div>
                </div>
            </div>
            
    </div>
    @endforeach
</section>



@endsection
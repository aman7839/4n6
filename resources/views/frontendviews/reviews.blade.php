@extends('frontendviews.main')

@section('content')

<section class="cmn_header_section space"
    style="background-image:url('{{asset('/public/4n61/images/contact_bg.jpg')}}') ;">
    <div class="custom_container">
        <h1>Reviews</h1>
    </div>
</section>


<div class="custom_container space">
    <div class="cmn_heading">
        <h2>Reviews</h2>
        {{-- <p class="mt-3 mb-0">
            Just complete the form below or call 4N6 Speech Drama at <a href="tel:(541) 821-7612">(541) 821-7612</a>
            <br>
            Our Office Hours are Monday through <span>Friday 10 am - 6 pm (CST)</span> <br>
            All calls and emails will be returned during office hours
        </p> --}}
    </div>
</div>
<section class="contact_content space pt-0 ">
   <div class="p-3">
    <div class="container ">
        <div class="row">
          
            @foreach ($review as $review_list)

            <div class="review_list">
                <div class="review_user_image">
                      <img alt="" src="{{ asset('/public/4n61/images/account_circle.svg') }}">  
                </div>
                <div class="review_content">
                    <b> {{$review_list['user']['name'] ?? ""}}</b>
                @if($review_list->comment)
                <p> {{$review_list->comment ?? ""}}</p>
                @endif
                @if($review_list->screenshot)
                <p> <a class="example-image-link" href="{{ asset('/public/images/'.$review_list->screenshot) }}"
                        data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img
                            src="{{ asset('/public/images/'.$review_list->screenshot) }}" width="100"
                            class="image-fluid" title=""></a></p>
                @endif
                </div>
            </div>
            @endforeach

            @auth

            <div class="">
                <div class="contact_form">
                    <form action="{{url('addreview')}}" method="post">
                        @csrf
                        {{-- <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Enter your name" class="form-control">
                            <span class="text-danger">@error('name'){{$message}} @enderror</span>

                        </div> --}}
                        {{-- <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="email" name="email" placeholder="Enter your email" class="form-control">
                            <span class="text-danger">@error('email'){{$message}} @enderror</span>

                        </div> --}}
                        <div class="form-group">
                            <h2 class="comment">Add Review</h2>
                            <textarea name="comment" class="form-control" id="" cols="30" rows="5"
                                placeholder="Add your review here"></textarea>
                            <span class="text-danger">@error('comment'){{$message}} @enderror</span>

                        </div>
                        <div>
                            <button type="submit" class="cmn_btn">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            @endauth

        </div>
    </div>
   </div>
</section>



@endsection
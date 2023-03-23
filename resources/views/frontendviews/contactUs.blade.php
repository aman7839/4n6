@extends('frontendviews.main')

    @section('content')

    <section class="cmn_header_section space" style="background-image:url('{{asset('/public/4n61/images/contact_bg.jpg')}}') ;">
        <div class="custom_container">
            <h1>Contact Us</h1>
        </div>
    </section>


    <div class="custom_container space">
        <div class="cmn_heading">
            <h2>Question or Comments</h2>
            <p class="mt-3 mb-0">
                Just complete the form below or call 4N6 Speech Drama at <a href="tel:(541) 821-7612">(541) 821-7612</a>
                <br>
                Our Office Hours are Monday through <span>Friday 10 am - 6 pm (CST)</span> <br>
                All calls and emails will be returned during office hours
            </p>
        </div>
    </div>
    <section class="contact_content space pt-0">
        <div class="custom_container ">
            <div class="row">
                <div class="col-md-6 col-lg-5">
                    <div class="contact_image">
                        <img src="{{asset('/public/4n61/images/contact_image.jpg')}}" class="img-fluid" alt="contact image">
                    </div>
                </div>
                <div class="col-md-5">
                        <div class="contact_form">
                                <form action="{{url('contactUS')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" placeholder="Enter your name" class="form-control">
                        <span class ="text-danger">@error('name'){{$message}} @enderror</span>

                                    </div>
                                    <div class="form-group">
                                        <label for="">Email Address</label>
                                        <input type="email" name="email" placeholder="Enter your email" class="form-control">
                        <span class ="text-danger">@error('email'){{$message}} @enderror</span>

                                    </div>
                                    <div class="form-group">
                                        <label for="">Add Comment</label>
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="Add your comment here"></textarea>
                        <span class ="text-danger">@error('description'){{$message}} @enderror</span>

                                    </div>
                                    <div>
                                        <button type="submit" class="cmn_btn">Send</button>
                                    </div>
                                </form>
                        </div>
                </div>
            </div>
        </div>
    </section>



    @endsection
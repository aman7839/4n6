@extends('frontendviews.main')

    @section('content')


    <section class="cmn_header_section space" style="background-image:url('{{asset('/public/4n61/images/service_bg.jpg')}}') ;">
        <div class="custom_container">
            <h1>Documents</h1>
        </div>
    </section>
    
    
    
    <!--  -->
    <section class="documents">
        <div class="custom_container space">
            <div class="cmn_heading">
                <h2>Documents</h2>
            </div>
        </div>
        <div class="container space pt-0">
            <div class="row">

                @foreach ($document as $item)

                <div class="col-lg-4 col-md-6">
                    <div class="doc_card">
                            <div class="doc_icon">
                              
                                    
                                   <a href="{{'download/'. $item->image }}"target="_blank" > <img src="{{asset('/public/4n61/images/doc_icon.png')}}" alt=""></a>
                            </div>
                            <p class="doc_date">Name: {{$item->name}} </p>

                            <p class="doc_date"> Date: {{$item->created_at}} pm </p>

                    </div>
                </div>
                @endforeach

              
            </div>
        </div>
    </section>

    @endsection

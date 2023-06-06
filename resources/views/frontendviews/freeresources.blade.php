@extends('frontendviews.main')

    @section('content')


    <section class="cmn_header_section space" style="background-image:url('{{asset('/public/4n61/images/service_bg.jpg')}}') ;">
        <div class="custom_container">
            <h1>Free Resources</h1>
        </div>
    </section>
    
    
    
    <!--  -->
    <section class="documents">
        <div class="custom_container space">
            <div class="cmn_heading">
                <h2>Free Resources</h2>
            </div>
        </div>
        <div class="container space pt-0">
            <div class="row">

                @foreach ($resources as $links)

                <div class="col-lg-4 col-md-6">
                    <div class="doc_card">
                            <h4><a href="{{url("links?cat_id=".$links->id)}}">{{$links->name}}</a></h4>
                    </div>
                </div>
                @endforeach

              
            </div>
        </div>
    </section>

    @endsection

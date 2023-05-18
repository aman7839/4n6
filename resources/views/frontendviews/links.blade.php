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
                <h2>Free Resources</h2>
            </div>
        </div>
        <div class="container space pt-0">
            <div class="row">

                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table align-middle table-bordered caption-top">
                            <caption>Current Category:@if(isset($catlinks[0]->name)) {{$catlinks[0]->name}} @endif
                            </caption>
                           
                          <thead>
                          
                           <th>Web Site Links</th>
                           <th>Description of Content</th>
                          </thead>

                          @foreach ($catlinks as $links)
                              
                          <tbody>
                            <tr>
                                
                           <td><strong><a href="{{$links->address}}" class="resource_link"  target="_blank">{{$links->title}}</a></strong></td>
                           <td>{{$links->description}}</td>
                            </tr>
                          
                          </tbody>

                          @endforeach
                        </table>
                      </div>
                </div>

                <p><strong><a class="resource_link"  href="{{url("freeresources")}}">Back to Free Resources</a></strong></p>
                
            </div>
        </div>
    </section>

    @endsection

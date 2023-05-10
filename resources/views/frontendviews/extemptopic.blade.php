@extends('frontendviews.main')

    @section('content')
   
    <section class="cmn_header_section space" style="background-image:{{asset('url(public/4n61/images/demo_bg.jpg)')}};">
        <div class="custom_container">
            <h1>Improve Scene <br>
                 Generator</h1>
        </div>
    </section>

    <div class="custom_container space pb-5">
        <div class="cmn_heading">
          <h2> Extemp Topic Generator</h2>
           
        </div>
    </div>
        <section class="extemps space pt-0">
            <div class="custom_container ">
                <div class="extemps_filter">
                    <div class="extemps_filter_list">
                        <div class="row w-100">
                            <div class="col-md-4">
                                    <form class="">
                                        <div class="form-group">
                                            <label for="">Domestic Topics</label>
                                        <div class="filter_wrap">
                                            <select name="topic_name_domestic" id="" class="form-control form-select">
                                                <option value="">--Select--</option>

                                                @foreach ($domesticTopic as $topics)
                                                    
                                        
                                                <option value={{$topics->topic_id}}  {{$topics->topic_id == $domesticName ? 'selected' : ''}}>{{$topics->topic->name ?? ''}}</option>
                                                
                                            @endforeach

                                            <input type="text" hidden value = '' name = 'domesticDate'>
                                                
                                            </select>

                                            
                                            <div class="button_actions">
                                                <Button id="domestic" class="cmn_btn">Domestic </Button> 
                                            </div>
                                        </div>
                                        </div>
                                     </div>
                                 </form>

                       
                            <div class="col-md-4">
                            <form>
                                    <div class="form-group">
                                        <label for="">Foreign Topics</label>
                                        <div class="filter_wrap">
                                        <select name="topic_name_foriegn" id="" class="form-control form-select">

                                            <option value="">--Select--</option>

                                            @foreach ($foreignTopic as $topics)
                                                
                                     
                                            <option value={{$topics->topic_id}}  {{$topics->topic_id == $foriegnName ? 'selected' : ''}}>{{$topics->topic->name ?? ''}}</option>
                                      
                                        @endforeach
                                        </select>
                                        {{-- <input type="text" hidden value="foreign" name="foreign"> --}}
                                        <div class="button_actions">
                                            <Button id="foreign" class="cmn_btn">Foreign</Button> 
                                        </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <div class="filter_wrap">
                                            
                                        <select name="date" id=""  class="form-control form-select">
                                            <option value="">--Select--</option>
    
                                            @foreach ($monthdate as $monthday)
                                               
                                            <option value="{{$monthday->month}} {{$monthday->year}}" >{{$monthday->month}} {{$monthday->year}}</option>
                                        @endforeach
                                        </select>
                                        <a href=""></a>
                                        <button  class="cmn_btn reset"><a href="{{url('/extemp')}}">Reset</a></button>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                           </div>
                            <div class="view_filters">
                                {{-- <div class="d-flex align-itms-center justify-content-center">
                                    <h6 class="domestic">Domestic Topics are Blue</h6>
                                    <h6 class="foreign">Foreign Topics are Red</h6>
                                </div> --}}
                                <div class="d-flex align-itms-center justify-content-center">
                                    <a href=""></a>

                                    <form action="">
                                   <input type="submit" name = "doBoth" Value = "View Questions From Both" class="cmn_btn reset"> 
                                </form>

                                <form action="">
                                   <input type="submit" name = "doAll" Value = "View All Extemp Questions" class="cmn_btn reset"> 

                                </form>
                                    {{-- <button class="cmn_btn">View All Extemp Questions</button> --}}
                                </div>
                            </div>

                            @if($domesticName != '')
                            {{-- @if($domestic != null) --}}
                            <div class="responsive mt-4">

                                <h6 class="domestic">Domestic Topics</h6>

                                <table class="table table-bordered">
                                    <thead>
                                        <th>Topic</th>
                                        <th>Question</th>
                                        <th>Month/Yr</th>
                                        <th>FX or DX</th>
                                    </thead>
                                    @foreach($domesticTopicList as $domestic)
                                    <tbody>
                                        <tr>
                                            <td>
                                               {{$domestic->topic->name}}
                                            </td>
                                            <td>
                                                {{$domestic->question}}	
                                            </td>
                                            <td>
                                                {{$domestic->month}}/ {{$domestic->year}}	
                                            </td>
                                            <td>  {{$domestic->type}}	</td>
                                        </tr>
                                    
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                            {{-- @endif --}}
                            @endif

                            @if($foriegnName != '')
                            {{-- @if($foreign != null) --}}
                            <div class="responsive mt-4">

                                <h6 class="domestic">Foreign Topics</h6>

                                <table class="table table-bordered">
                                    <thead>
                                        <th>Topic</th>
                                        <th>Question</th>
                                        <th>Month/Yr</th>
                                        <th>FX or DX</th>
                                    </thead>

                                    @foreach ($foreignTopicList as $foreign)

                                    <tbody>
                                        <tr>
                                            <td>
                                                {{$foreign->topic->name ?? ''}}
                                            </td>
                                            <td>
                                                {{$foreign->question}}
                                            </td>
                                            <td>
                                                {{$foreign->month}}/ {{$foreign->year}}	
                                            </td>
                                            <td> {{$foreign->type}}</td>
                                        </tr>
                                    
                                    </tbody>

                                    @endforeach
                                </table>
                            </div>
                            @endif
                            {{-- @endif --}}

                            @if($both != '' )

                            <div class="responsive mt-4">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>Topic</th>
                                        <th>Question</th>
                                        <th>Month/Yr</th>
                                        <th>FX or DX</th>
                                    </thead>

                                    @foreach ($bothTopics as $both)

                                    <tbody>
                                        <tr>
                                            <td>
                                                {{$both->topic->name ?? ''}}
                                            </td>
                                            <td>
                                                {{$both->question}}
                                            </td>
                                            <td>
                                                {{$both->month}}/ {{$both->year}}	
                                            </td>
                                            <td> {{$both->type}}</td>
                                        </tr>
                                    
                                    </tbody>

                                    @endforeach
                                </table>
                                @endif
                            </div>
                                @if($domesticName == null &&  $foriegnName  == null && $both == null && $all == null)
                            <div class="responsive mt-4">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>Topic</th>
                                        <th>Question</th>
                                        <th>Month/Yr</th>
                                        <th>FX or DX</th>
                                    </thead>

                                    @foreach ($bothTopics as $both)

                                    <tbody>
                                        <tr>
                                            <td>
                                                {{$both->topic->name ?? ''}}
                                            </td>
                                            <td>
                                                {{$both->question}}
                                            </td>
                                            <td>
                                                {{$both->month}}/ {{$both->year}}	
                                            </td>
                                            <td> {{$both->type}}</td>
                                        </tr>
                                    
                                    </tbody>

                                    @endforeach
                                </table>

                            </div>

                            @endif

                            @if($all != '')
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="responsive mt-4">
                                        <table class="table table-bordered">
                                            <thead>
                                                <th>Domestic Topics</th>
                                                <tbody>
                                                    @foreach ($allDomesticTopics as $domestictopics)

                                                    <tr>
                                                        <td>{{$domestictopics->question}}</td>

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="responsive mt-4">
                                        <table class="table table-bordered">
                                            <thead>
                                                <th>Foreign Topics</th>
                                                <tbody>
                                            @foreach ($allForeignTopics as $questions)
                                                    
                                                    <tr>
                                                        <td>{{$questions->question}}</td>

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                       
                    {{-- </form> --}}
            </div>
        </section>
    

    @endsection
   
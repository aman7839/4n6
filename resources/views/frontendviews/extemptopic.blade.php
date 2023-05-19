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
                        @auth
                        @if(auth()->user()->role == "coach")
                        <form action="{{url('coach/extemp')}}" method="POST" enctype="multipart/form-data">
                            @endif
                            @if(auth()->user()->role == "student")
                        <form action="{{url('student/extemp')}}" method="POST" enctype="multipart/form-data">
                            @endif
                            @if(auth()->user()->role == "admin")
                            <form action="{{url('admin/extemp')}}" method="POST" enctype="multipart/form-data">
                                @endif
                            @endauth
                            @csrf
                        <div class="row m-0 w-100">

                            
                               
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="">Domestic Topics</label>
                                            <div class="filter_wrap">
                                    @if(isset($domesticTopic))

                                                <select name="topic_name_domestic" id="" class="form-control form-select">
                                                    <option value="">--Select--</option>
                                                        
                                                    @foreach ($domesticTopic as $topics)
                                                        
                                            
                                                    <option value={{$topics->topic_id}}  {{$topics->topic_id == $domesticName ? 'selected' : ''}}>{{$topics->topic->name ?? ''}}</option>
                                                    
                                                @endforeach

                                                    
                                                </select>
                                    @endif
                                                <div class="button_actions">
                                                    <input type="submit"  class="cmn_btn" name="doAction" value="Domestic">
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                
                       
                                    <div class="col-md-6 col-lg-4">                           
                                        <div class="form-group">
                                            <label for="">Foreign Topics</label>
                                            <div class="filter_wrap">
                                    @if(isset($foreignTopic))

                                            <select name="topic_name_foriegn" id="" class="form-control form-select">

                                                <option value="">--Select--</option>

                                                @foreach ($foreignTopic as $topics)
                                                    
                                        
                                                <option value={{$topics->topic_id}}  {{$topics->topic_id == $foriegnName ? 'selected' : ''}}>{{$topics->topic->name ?? ''}}</option>
                                        
                                            @endforeach


                                            </select>

                                            @endif
                                            {{-- <input type="text" hidden value="foreign" name="foreign"> --}}
                                            <div class="button_actions">
                                                <input type="submit"  class="cmn_btn" name="doAction" value="Foreign">
                                                {{-- <Button id="foreign">Foreign</Button>  --}}
                                            </div>
                                            </div>
                                        </div>                                
                                    </div>

                                    <div class="col-md-12 col-lg-4">
                                        <div class="form-group">
                                            <label for="">Date</label>
                                            <div class="filter_wrap">
                                       @if(isset($monthdate))
                                                
                                            <select name="date" id=""  class="form-control form-select">
                                                <option value="">--Select--</option>
        
                                                @foreach ($monthdate as $monthday)
                                                <option value="{{$monthday->month}} {{$monthday->year}}" 
                                                    @if ($monthday->month.' '.$monthday->year==$dateSelected)
                                                        selected="selected"
                                                    @endif
                                                    
                                                                   >{{$monthName[$monthday->month]}} {{$monthday->year}}</option>
                                            @endforeach
                                            </select>

                                        @endif
                                        @auth 
                        @if(auth()->user()->role == "coach")

                                            <button  class="cmn_btn reset"><a href="{{url('coach/extemp')}}">Reset</a></button>
                                  @endif
                                  @if(auth()->user()->role == "student")

                                  <button  class="cmn_btn reset"><a href="{{url('student/extemp')}}">Reset</a></button>
                        @endif
                        @if(auth()->user()->role == "admin")

                                  <button  class="cmn_btn reset"><a href="{{url('admin/extemp')}}">Reset</a></button>
                        @endif
                                            @endauth                                                       
                                            </div>
                                        </div>
                                    </div>
                            </div>
                           </div>
                            <div class="view_filters">
                               
                                <div class="d-flex align-itms-center justify-content-center flex-wrap">
                                    

                                   <input type="submit" name = "doAction" Value = "View Questions From Both" class="cmn_btn reset"> 

                              
                                   <input type="submit" name = "doAction" Value = "View All Extemp Questions" class="cmn_btn reset"> 
                         </form>

                               
                                </div>
                            </div>

                           
                            <div class="table-responsive mt-4">

                                @if($topicData != '' && $allDomesticTopics == '' && $allForeignTopics == '')
                               
                                <table class="table table-bordered">
                                    <thead>
                                        <th>Topic</th>
                                        <th>Question</th>
                                        <th>Month/Yr</th>
                                        <th>FX or DX</th>
                                    </thead>
                                    
                                        @foreach($topicData as $domestic)
                                        <tbody>
                                            <tr>
                                                <td>
                                                {{$domestic->name}}
                                                </td>
                                                <td>
                                                    {{$domestic->question}}	
                                                </td>
                                                <td>
                                                    {{$domestic->month ?? ""}}/ {{$domestic->year?? ""}}	
                                                </td>
                                                <td>  {{$domestic->type}}	</td>
                                            </tr>
                                        
                                        </tbody>
                                        @endforeach
                                    
                                    
                                </table>
                                @endif
                            </div>

                                @if($allDomesticTopics != '' && $allForeignTopics != '')

                                   
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="table-responsive mt-4">
                                        <table class="table table-bordered">
                                            <thead>
                                                <th>Domestic Topics</th>

                                                @auth 
                                            @if(auth()->user()->role == "coach")

                                               <h4> <a href="{{url('coach/printdomestic')}}" target = "_blank">click to print</a></h4>
                                               @endif
                                               @if(auth()->user()->role == "student")

                                               <h4> <a href="{{url('student/printdomestic')}}" target = "_blank">click to print</a></h4>
                                               @endif
                                               @if(auth()->user()->role == "admin")

                                               <h4> <a href="{{url('admin/printdomestic')}}" target = "_blank">click to print</a></h4>
                                               @endif
                                               @endauth
                                                <tbody>
                                                    @foreach ($allDomesticTopics as $domestictopics)

                                                    <tr>
                                                        <td>{{$domestictopics->question}}</td>

                                                    </tr>
                                                    @endforeach

                                                    {{-- <input type="button" onclick="printDiv('print_domestic')" value="click to print" /> --}}
                                                </tbody>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="table-responsive mt-4">
                                        <table class="table table-bordered">
                                            <thead>
                                                <th>Foreign Topics</th>

                                                @auth 
                                            @if(auth()->user()->role == "coach")

                                               <h4> <a href="{{url('coach/printforiegn')}}" target = "_blank">click to print</a></h4>
                                                @endif
                                                @if(auth()->user()->role == "student")

                                                <h4> <a href="{{url('student/printforiegn')}}" target = "_blank">click to print</a></h4>
                                                 @endif
                                                 @if(auth()->user()->role == "admin")

                                                 <h4> <a href="{{url('admin/printforiegn')}}" target = "_blank">click to print</a></h4>
                                                  @endif
                                               @endauth
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
        </section>

        {{-- @section('script')
        <script>
         

           function printDiv("print_domestic") {


     var printContents = document.getElementById("print_domestic").innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
        </script>
        @endsection --}}
    

    @endsection
   
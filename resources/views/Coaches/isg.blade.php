@extends('admin.dashboard.layout.main')


    @section('content')


   
<div class="container-fluid pt-4">
<section class="coach_list space pt-0">
<div class="card">
    <div class="card-header ida_header">
    <h4 class="title_cmn">Impromptu Speech Topic 
                 Generator</h4>
    </div>
  <div class="card-body">
      <div class="custom_container">
      <h6 class="title_cmn"> INSTRUCTIONS: </h6>
          
          <ul class="topic_list">
              <li>
                  Select a category from the pull-down menu below, then press the "Get Topics" button.  Each time the "Get Topics" button is pressed, 3 random topics will be displayed relating to that category.
              </li>
              <li>You can also find a document for each category in the VAULT OF CUTTINGS which lists all topics for that category.
              </li>
              {{-- <li>Each pair is allotted 30 minutes to prepare a 4-7 minute skit based on the information selected.
              </li>
              <li>Coaches may allow the use of a table and two chairs for the scene; however, all other props must be pantomimed.
                  </li>
              <li>Evaluate students based on plot and character development, creative introductions and ability to pantomime props.
              </li>
              <li>
                  This event is offered at some tournaments in the state of Kansas; but also works well as an in-class exercise to improve creativity, spontaneity and student interaction. 
    
              </li> --}}
          </ul>
          <div class="row">
              <div class="col-md-12">
                  <form action= "">
               <div class="select_topic_filter">
                  <div class="form-group">
                      {{-- <form action="{{url('admin/updateProfile/'.$user->id)}}" method ="post" enctype="multipart/form-data"> --}}
    
                      <label for="selectcategory">Select topic</label>
    
                    <select name="topic_name" id="" class="form-control form-select">
    
    
    
                      {{-- <option value="" > --Select topic--</option> --}}
    
    
    
                      @foreach ($topic as $topics)
    
                      {{-- {{$item->id == ($data->category->id ?? '') ? 'selected':''}} --}}
                      {{-- <option value="{{$item->id}}"{{$item->id == ($data->category->id ?? '') ? 'selected':''}}  >{{$item->name}}</option> --}}
                
    
                      <option value="{{$topics->topic}}" {{$topics->topic == ($topicName ?? '') ? 'selected':''}} >{{$topics->topic}}</option>
    
                      @endforeach
    
                     
    
                    </select>
    
                 
    
                    {{-- <a href="" class="cmn_btn">Get Topics</a> --}}
                    
                    
                  </div>
                  <input type="submit" name="" class="cmn_btn" value ="Get Topics">
               </div>
          </form>
          @if($topicName != "" )
                 
              </div>
              <div class="result_wrapper w-100">
                  <div class="col-12">
                      <p class="states">{{$topicName}}</p>
                   </div>
      
                  @foreach ($info as $topics)
      
                  <div class="coaches_list">
                      <ul>                                               
                          <li><a href="" >{{ucFirst(trans($topics->info))}}</a></li>
                         
                          @endforeach
                      </ul>
                  </div>
              </div>
    
             @endif
             
              
                  {{-- <a href="" class="cmn_btn">Regenerate Topics</a> --}}
              </div>
          </div>
      </div>
   
  </div>
</div>
</section>
    
</div>

    @endsection


@extends('admin.dashboard.layout.main')

@section('content')

<div class="container">
    <div class="row m-2">
       <div class="col-md-12">

        <h2 >Extemp Manager</h2>
        

        <form action="{{url("admin/extemp")}}" method="post" enctype="multipart/form-data">
      @csrf
            <div class="extemp_search">
           
                <div class="row m-0">

                 <div class="col-md-9">
                    <div class="row m-0">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date</label>
                                <div class="filter_wrap">
                                    
                           @if(isset($date))
                                    
                                <select name="date" id=""  class="form-control form-select">
                                    <option value="">--Select--</option>
    
                                    @foreach ($date as $monthday)
                                    <option value="{{$monthday->month}} {{$monthday->year}}" 
                                        @if ($monthday->month.' '.$monthday->year==$dateselected)
                                            selected="selected"
                                        @endif
                
                                        
                                        >{{$monthName[$monthday->month]}} {{$monthday->year}}</option>
                                @endforeach
                                </select>
    
                            @endif
                                </div>
                            </div>
                        </div>
                       <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Topic</label>
                            <div class="filter_wrap">
                               @if(isset($Topic))
    
                                <select name="topic_name" id="" class="form-control form-select">
                                    <option value="">--Select--</option>
                                        
                                    @foreach ($Topic as $topics)
                                        
                            
                                    <option value={{$topics->topic_id}}  {{$topics->topic_id == $topicName ? 'selected' : ''}}>{{$topics->topic->name}}</option>
                                    
                                @endforeach
    
                                </select>
                               @endif
                               
                            </div>
                        </div>
                       </div>
                    </div>
                 </div>
                   <div class="align-self-end col-md-3 mb-3">
                    <div class="button_actions d-flex   ">
                        <input type="submit"  class="cmn_btn mr-2" name="doAction" value="Search">
                         <a href="{{url('admin/extemp')}}" class="cmn_btn cmn_clear">Clear</a>

                    </div>
                   </div>
                    {{-- <button  class="btn btn-primary">Search</button> --}}
                    
                </div>
             
            </div>             
        </form>


        <form action="{{url("admin/importextempdata")}}" method="post" enctype="multipart/form-data">
            @csrf
            <fieldset>
                <label>Select File to Upload  <small class="warning text-muted">{{__('Please upload only Excel (.xlsx or .xls) files')}}</small></label>
                <div class="input-group d-flex">
                    <input type="file" required class="form-control" style="height:44px" name="uploaded_file" id="uploaded_file">
                    <div class="input-group-append" id="button-addon2">
                        <button class="btn btn-primary square" type="submit"><i class="ft-upload mr-1"></i> Import Data</button>
                    </div>
                </div>
                @if ($errors->has('uploaded_file'))
                <p class="mb-0">
                    <small class="text-danger" id="file-error">{{ $errors->first('uploaded_file') }}</small>
                </p>
            @endif
               
            </fieldset>
        </form>
       </div>
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ url('admin/addextemp')}}"  class="btn btn-primary btn-sm mt-2"> <i class="fa fa-plus mr-2"></i> Add Topics</a></h4>
                    <h4><a href="{{ url('admin/data')}}"  class="btn btn-primary btn-sm mt-2">  Back</a></h4>
                  

                    
                    
                </div>
                <div class="card-body">     
                    @if($topic->count()>0)
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                               
                                <th>Topic</th> 
                                <th>Question</th>                                      
                                <th>Date</th>                                      
                                                                 
                                
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            @foreach ($topic as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->topic['name'] }}</td>
                                <td>{{ $item->question }}</td>
                                <td>{{ $monthName[$item->month]}}/{{$item->year}}</td>
                                {{-- $$monthName[$monthday->month]}}[$monthday->month]}}                 --}}
                               
                                <td>
                                    <a href={{url('admin/editextemp/'.$item->id)}} class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td>
                                    
                                    <a href={{url('admin/deletedata/'.$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" ><i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>

                    <span>{{ $topic->Links()}}</span>
                    <style>
                        .w-5{
                            display:none;

                        }
                     </style> 

                     @else
                      <h2>No data found</h2>

                      @endif

                </div>  
               
            </div>
        </div>
    </div>
</div>

@endsection

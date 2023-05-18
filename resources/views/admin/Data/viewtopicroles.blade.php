

    @extends('admin.dashboard.layout.main')

    @section('content')

    <div class="container">
        <div class="row m-2">
           <div class="col-md-12">

            <h2 >IDA Manager</h2>

            <form action="">
                <div class="form-group mt-4 search_bar">
               
                  <input type="search" name="search" id="" class="form-control" placeholder="Search Here" aria-describedby="helpId" value = "{{$search}}">
                  <button  class="btn btn-primary">Search</button>
                  <a href="{{url('admin/topicroles')}}"><i class="fa fa-times"></i></a>
                  
                </div>

                
            </form>
            <form action="{{url("admin/importisgdata")}}" method="post" enctype="multipart/form-data">
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

                        <h4><a href="{{ url('admin/addtopicroles')}}"  class="btn btn-primary btn-sm mt-2"> <i class="fa fa-plus mr-2"></i> Add Record</a></h4>
                        <h4><a href="{{ url('admin/data')}}"  class="btn btn-primary btn-sm mt-2">  Back</a></h4>
                        
                        
                    </div>

                    
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Topic</th>
                                     
                                    <th>Info</th> 
                                    
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topic as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->info }}</td>
                                  

                                  
                                  
                                   
                                    <td>
                                        <a href={{url('admin/edittopicroles/'.$item->id)}} class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        
                                        <a href={{url('admin/deletetopicroles/'.$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" ><i class="fa fa-trash" aria-hidden="true"></i>
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

                         
    
                    </div>  
                   
                </div>
            </div>
        </div>
    </div>
   
    @endsection

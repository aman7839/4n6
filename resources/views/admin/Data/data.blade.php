

    @extends('admin.dashboard.layout.main')

    @section('content')

    <div class="container">
        <div class="row m-2">
           <div class="col-md-12">
            {{-- <form action="">
                <div class="form-group mt-4 search_bar">
               
                  <input type="search" name="search" id="" class="form-control" placeholder="Search Here" aria-describedby="helpId" value = "{{$search}}">
                  <button  class="btn btn-primary">Search</button>
                  <a href="{{url('admin/users')}}"><i class="fa fa-times"></i></a>
                  
                </div>

                
            </form> --}}
           </div>
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                    <a href="{{ url('admin/adddata')}}"  class="btn btn-primary btn-sm mt-3"> <i class="fa fa-plus mr-2"></i> Add Data</a>

                       <a href="{{url('/admin/topicroles')}}" class="btn btn-primary btn-sm mt-3">IDA Manager</a>
                        <a href="{{url('/admin/viewisg')}}" class="btn btn-primary btn-sm mt-3">ISG Manager</a>
                      <a href="{{url('/admin/extemp')}}" class="btn btn-primary btn-sm mt-3">Extemp Manager</a>


                        
                        
                    </div>
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Title</th>
                                     
                                    <th>Author</th> 
                                    <th>Category Name</th>                                      
                                    <th>Award Name</th>                                      
                                    <th>Theme Name</th>  
                                    <th>Public</th>  


                                    
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->author }}</td>
                                    
                                    <td>{{ $item->category['name'] ?? '' }}</td>

                                    <td>{{ $item->awards['awards_name'] ?? '' }}</td>


                                    <td>{{ $item->theme['name'] ?? '' }}</td> 
                                    <td>{{ $item->public ? 'Public' : 'Hidden'  }}</td>



                                  
                                  
                                   
                                    <td>
                                        <a href={{url('admin/editdata/'.$item->id)}} class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
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
                        <span>{{ $data->Links()}}</span>
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



    @extends('admin.dashboard.layout.main')

    @section('content')

    <div class="container pt-4 pb-4">
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
                        <h4><a href="{{ url('admin/addplaycategory  ')}}"  class="btn btn-primary btn-sm mt-2"> <i class="fa fa-plus mr-2"></i> Add Play Category</a></h4>
                        {{-- <h4><a href="{{url('/admin/logout')}}" class="btn btn-primary btn-sm mt-3">Logout</a></h4> --}}
                        
                        
                    </div>
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                     
                                 
                                   <th>Edit</th>
                                    <th>Delete</th>
                                    
                                    

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                   
                                  
                                  
                                    <td>
                                        <a href={{url("admin/editplaycategory/".$item->id)}} class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        
                                        <a href={{url("admin/deleteplaycategory/".$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" ><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                       
                                        {{-- <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href={{url('deleteuser/'.$item->id)}} ><i class="fa fa-trash"></i></a> --}}
                                    </td>
                                   
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                        <span>{{ $category->links()}}</span>
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
 

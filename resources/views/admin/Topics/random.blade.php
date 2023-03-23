

    @extends('admin.dashboard.layout.main')

    @section('content')

    <div class="container pt-4 pb-4">
        <div class="row ">
            <form action="">
                <div class="form-group mt-2">
               
                  {{-- <input type="search" name="search" id="" class="form-control" placeholder="Search Here" aria-describedby="helpId" > --}}
                  {{-- <button  class="btn btn-primary mt-3">Search</button> --}}
                  {{-- <a href="{{url('admin/users')}}"><button  class="btn btn-primary mt-3" type= "button">Reset</button></a> --}}
                  
                </div>

                
            </form>
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header d-flex">
                        <h4><a href="{{ url('admin/addtopics')}}"  class="btn btn-primary btn-sm "> <i class="fa fa-plus"></i> Add Topics</a></h4>
                 
                        
                        
                    </div>
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Characters</th>
                                     
                                    <th>Situation</th> 
                                
                                    <th>Location</th>
                                    <th>Edit</th>   
                                    <th>Delete</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topics as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->characters }}</td>
                                    <td>{{ $item->locations }}</td>
                                    <td>{{ $item->situations }}</td>

                                    
                                    <td>
                                        <a href={{url('admin/edittopics/'.$item->id)}} class="btn btn-success btn-sm"> <i class="fa fa-pencil-square-o"></i> </a>
                                    </td>
                                    <td>
                                        
                                        <a href={{url('admin/deletetopics/'.$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" > <i class="fa fa-trash"></i> </a>
                                        {{-- <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href={{url('deleteuser/'.$item->id)}} ><i class="fa fa-trash"></i></a> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                        <span>{{ $topics->Links()}}</span>
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
 

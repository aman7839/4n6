
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
                        <h4><a href="{{ url('coach/addstudent')}}"  class="btn btn-primary btn-sm mt-2"> <i class="fa fa-plus mr-2"></i> Add Students</a></h4>
                        
                        
                    </div>
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Name</th>
                                     
                                    <th>Email</th> 
                                    <th>Mobile</th> 
                                    <th>Location</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($students as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->student->name ??'' }}</td>
                                    <td>{{ $item->student->email ??''}}</td> 
                             
                                  
                                    <td>{{ $item->student->personal_phone_no ??'' }}</td>
                                    
                                    
                                    <td>{{ $item->student->school_city ??'' }}</td> 
                                   <td>
                                        <a href={{url('coach/editstudent/'.$item->id)}} class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        
                                        <a href={{url('coach/deletestudent/'.$item->student->id ?? '')}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" ><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a> 
                                   </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                        <span>{{ $students->links()}}</span>
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
 


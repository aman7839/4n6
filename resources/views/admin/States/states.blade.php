{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> --}}

    @extends('admin.dashboard.layout.main')

    @section('content')

    <div class="container pb-4 pt-4">
        <div class="row m-2">
            {{-- <form action="">
                <div class="form-group mt-2">
               
                  <input type="search" name="search" id="" class="form-control" placeholder="Search Here" aria-describedby="helpId" value = "{{$search}}">
                  <button  class="btn btn-primary mt-3">Search</button>
                  <a href="{{url('admin/users')}}"><button  class="btn btn-primary mt-3" type= "button">Reset</button></a>
                  
                </div> --}}

                
            </form>
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        <h4><a href="{{ url('admin/addstates')}}"  class="btn btn-primary btn-sm mt-2"><i class="fa fa-plus mr-2"></i> Add States</a></h4>
                        {{-- <h4><a href="{{url('/admin/logout')}}" class="btn btn-primary btn-sm mt-3">Logout</a></h4> --}}
                        
                        
                    </div>
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> State Name</th>
                                     
                                    <th>File Name</th> 
                                    {{-- <th>Hidden</th>                                       --}}
                                
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($state as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    {{-- <td><img src= "images/{{$item->image}}" width="30%" class="img-circle" ></td> --}}
                                    <td><img src= "" width="30%" class=" rounded-circle "  title="">{{$item->file}}</td>
                                  
                                  
                                    {{-- <td>{{ $item->hidden }}</td> --}}
                                    
                                   
                                    <td>
                                        <a href={{url('admin/editstate/'.$item->id)}} class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        
                                        <a href={{url('admin/deletestate/'.$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" >Delete</a>
                                        {{-- <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href={{url('deleteuser/'.$item->id)}} ><i class="fa fa-trash"></i></a> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                        <span>{{ $state->Links()}}</span>
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
 
{{-- </body>
</html> --}}
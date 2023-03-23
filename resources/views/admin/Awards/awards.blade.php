

    
    @extends('admin.dashboard.layout.main')

    @section('content')

    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><a href="{{ url('admin/addawards')}}"  class="btn btn-primary btn-sm mt-2"><i class="fa fa-plus mr-2"></i> Add Awards</a></h4>
                        
                        
                    </div>
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Awards Name</th>
{{--                                      
                                    <th>Email</th> 
                                    <th>Images</th>                                      
                                    <th>Mobile</th>
                                    <th>location</th> --}}
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($awards as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->awards_name }}</td>
                                    {{-- <td>{{ $item->email }}</td> --}}
                                    {{-- <td><img src= "images/{{$item->image}}" width="30%" class="img-circle" ></td> --}}
                                    {{-- <td><img src="{{ asset('images/'.$item->image) }}" width="60%" class="img-circle alt=" title=""></td> --}}
                                  
                                  
                                    {{-- <td>{{ $item->mobile }}</td>
                                    <td>{{ $item->location }}</td> --}}
                                    
                                    <td>
                                        <a href={{url('admin/editAwards/'.$item->id)}} class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href={{url('admin/deleteAwards/'.$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <span>{{ $awards->links() }}</span>
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
 


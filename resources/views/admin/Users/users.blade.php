

    @extends('admin.dashboard.layout.main')

    @section('content')

    <div class="container">
        <div class="row m-2">
           <div class="col-md-12">
            <form action="">
                <div class="form-group mt-4 search_bar">
               
                  <input type="search" name="search" id="" class="form-control" placeholder="Search Here" aria-describedby="helpId" value = "{{$search}}">
                  <button  class="btn btn-primary">Search</button>
                  <a href="{{url('admin/users')}}"><i class="fa fa-times"></i></a>
                  
                </div>

                
            </form>

            <div class="col-md-12">

                <form action="{{url("admin/importdata")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <label>Select File to Upload  <small class="warning text-muted">{{__('Please upload only Excel (.xlsx or .xls) files')}}</small></label>
                        <div class="input-group">
                            <input type="file" required class="form-control" name="uploaded_file" id="uploaded_file">
                            @if ($errors->has('uploaded_file'))
                                <p class="text-right mb-0">
                                    <small class="danger text-muted" id="file-error">{{ $errors->first('uploaded_file') }}</small>
                                </p>
                            @endif
                            <div class="input-group-append" id="button-addon2">
                                <button class="btn btn-primary square" type="submit"><i class="ft-upload mr-1"></i> Import Data</button>
                            </div>
                        </div>
                    </fieldset>
                </form>


            </div>
           </div>
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        <h4><a href="{{ url('admin/addusers')}}"  class="btn btn-primary btn-sm mt-2"> <i class="fa fa-plus mr-2"></i> Add Users</a></h4>
                        
                        
                    </div>

                    <div class="card-header">
                        <a href="{{url("admin/exporttdata")}}" class="btn btn-primary" style="margin-left:85%">Export Excel Data</a>
                    </div>
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> User Name</th>
                                     
                                    <th>Email</th> 
                                    <th>Profile Picture</th>                                      
                                    <th>Mobile</th>
                                    <th>Role</th>
                                    <th>Location</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td><img src= "{{ asset('/public/images/'.$item->image) }}" width="30%" class=" rounded-circle "  title=""></td>
                                  
                                  
                                    <td>{{ $item->personal_phone_no }}</td>
                                    
                                    <td>{{$item->role}}</td>
                                    
                                    <td>{{ $item->school_city }}</td>
                                    <td>
                                        <a href={{url('admin/editUsers/'.$item->id)}} class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        
                                        <a href={{url('admin/deleteuser/'.$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" ><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                        <span>{{ $user->links()}}</span>
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
 

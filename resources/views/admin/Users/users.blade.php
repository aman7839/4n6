

    @extends('admin.dashboard.layout.main')

    @section('content')

    <div class="container-fluid">
        <div class="row m-2">
           <div class="col-md-12">
            <form action="">
                <div class="form-group mt-4 search_bar">
               
                  <input type="search" name="search" id="" class="form-control" placeholder="Search by username or email or schoolname" aria-describedby="helpId" value = "{{$search}}">
                  <button  class="btn btn-primary">Search</button>
                  <a href="{{url('admin/users')}}"><i class="fa fa-times"></i></a>
                  
                </div>

                
            </form>

@if($coach_id=="")
            <div class="">

                <form action="{{url("admin/importdata")}}" method="post" enctype="multipart/form-data">
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
@endif

            </div>
			
			
           </div>
            <div class="col-md-12 mt-2">
                <div class="card">
      
					@if($coach_id=="")
						<div class="card-header d-flex">
							<a href="{{ url('admin/addusers')}}"  class="btn btn-primary btn-sm "> <i class="fa fa-plus mr-2"></i> Add Users</a>  <a href="{{url("admin/exporttdata")}}" class="btn btn-success ml-auto" >Export Excel Data</a>
						</div>
					@endif	
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> User Name</th>
                                    
                                    {{-- <th>Email</th>  --}}
                                    <th>
                                        <a class="text-white" href="{{ route('users.index', ['sort' => 'email', 'order' => $sortColumn === 'email' ? $sortDirection : 'asc']) }}">
                                           Email
                                            @if ($sortColumn === 'email')
                                                @if ($sortOrder === 'asc')
                                                <i class="fa fa-arrow-up"></i>
                                                @else
                                                    <i class="fa fa-arrow-down"></i>
                                                @endif
                                            @endif
                                        </a>
                                    </th>
                                   
                                    {{-- <th>Profile Picture</th> --}}
                                    {{-- <th>School Name</th> --}}
                                    <th>
                                        <a class="text-white" href="{{ route('users.index', ['sort' => 'school_name', 'order' => $sortColumn === 'school_name' ? $sortDirection : 'asc']) }}">
                                            School Name
                                            @if ($sortColumn === 'school_name')
                                                @if ($sortOrder === 'asc')
                                                <i class="fa fa-arrow-up"></i>
                                                @else
                                                    <i class="fa fa-arrow-down"></i>
                                                @endif
                                            @endif
                                        </a>
                                    </th>
                                    

                                    <th>Mobile</th>
                                    <th>Role</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->school_name }}</td>

                                    {{-- <td><img src= "{{ asset('/public/images/'.$item->image) }}" width="80" height="80" class=" rounded-circle "  title=""></td> --}}
                                    <td>{{ $item->personal_phone_no }}</td>
                                    <td>{{ucfirst($item->role)}}</td>
                                    <td>{{ $item->school_city }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href={{url('admin/editUsers/'.$item->id)}} class="btn btn-primary btn-sm m-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </a>
                                            <a href={{url('admin/viewUsers/'.$item->id)}} class="btn btn-success btn-sm m-1"><i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            @if($item->role != 'admin')
                                            <a href={{url('admin/deleteuser/'.$item->id)}} class="btn btn-danger btn-sm m-1" onclick="return confirm('Are you sure?')" ><i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                                @endif
                                        </div>
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
 
    
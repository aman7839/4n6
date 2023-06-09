

    @extends('admin.dashboard.layout.main')

    @section('content')

    <div class="container">
        <div class="row m-2">
           <div class="col-md-12">
            <form action="">
                <div class="form-group mt-4 search_bar">
               
                  <input type="search" name="search" id="" class="form-control" placeholder="Search by author or title" aria-describedby="helpId" value = "{{$search}}">
                  <button  class="btn btn-primary">Search</button>
                  <a href="{{url('admin/data')}}"><i class="fa fa-times"></i></a>
                  
                </div>

                
            </form>
           </div>
            <div class="col-md-12 mt-2">
                <div class="card">
                    {{-- <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Manage Data</button>
                          <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">IDA Manager</button>
                          <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">ISG Manager</button>
                          <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Extemp Manager</button>

                        </div>
                      </nav> --}}
                     
                       {{-- </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">.ygugyu..</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                      </div> --}}
                    <div class="card-header">
                    <a href="{{ url('admin/adddata')}}"  class="btn btn-primary btn-sm mt-3"> <i class="fa fa-plus mr-2"></i> Add Data</a>
                    {{-- <li class="nav-item {{ request()->is('admin/data') ? 'active' : ''}}">

                        <a href="{{url('admin/data')}}"> Manage Data</a>

                    </li> --}}
                    {{-- <li class="nav-item {{ request()->is('admin/data') ? 'active' : ''}}"> --}}
                        {{-- <a href="{{url('admin/data')}}"   class="btn btn-primary btn-sm mt-3">Data Manager</a> --}}
                        {{-- <a href="{{url('admin/data')}}"  class="btn btn-primary btn-sm mt-3"> Manage Data</a> --}}

                        <a href="{{url('/admin/topicroles')}}"   class="btn btn-primary btn-sm mt-3">IDA Manager</a>
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
                                    {{-- <th>Public</th>   --}}


                                    
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
                                    {{-- <td>{{ $item->public ? 'Public' : 'Hidden'  }}</td> --}}



                                  
                                  
                                   
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

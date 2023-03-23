
    @extends('admin.dashboard.layout.main')

    @section('content')

<div class="container pt-4 pb-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ url('admin/adddocuments')}}"  class="btn btn-primary btn-sm mt-2"><i class="fa fa-plus mr-2"></i> Add Documents</a></h4>
                    {{-- <h4><a href="{{url('/admin/logout')}}" class="btn btn-primary btn-sm mt-3">Logout</a></h4> --}}
                    
                    
                </div>
                <div class="card-body">         

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th> Id</th>    
                                
                                <th> Document Name</th>    
                                <th> Last Updted</th>                            
                                <th>Edit</th>
                                <th>Delete</th>
                              
                                                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($document as $item)
                            <tr>    
                             
                                {{-- <a href="{{'download/'. $item->image }} ">Download Now</a> --}}
                                {{-- <a href="{{ asset('/public/images/'. $item->image)}}" target="_blank"> view Pdf </a>; --}}
                                <td> {{$item->id}}</td>

                                <td> {{$item->image}}</td>
                                <td>{{ $item->updated_at }}</td>
                               
                              
                                {{-- <td><img src= "images/{{$item->image}}" width="30%" class="img-circle" ></td> --}}
                                {{-- <td><img src="{{ asset('images/'.$item->image) }}" width="60%" class="img-circle alt=" title=""></td> --}}
                              
                              
                               
                                <td>
                                    <a href={{url('admin/editdocuments/'.$item->id)}} class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-o"></i> </a>
                                </td>
                                <td>
                                    <a href={{url('admin/deletedocuments/'.$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"> <i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <span>{{ $document->links() }}</span>
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
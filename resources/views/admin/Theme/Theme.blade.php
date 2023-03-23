

    
    @extends('admin.dashboard.layout.main')

    @section('content')

    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><a href="{{ url('admin/addtheme')}}"  class="btn btn-primary btn-sm mt-2"><i class="fa fa-plus mr-2"></i> Add Theme</a></h4>
                        
                        
                    </div>
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Theme Name</th>
                                                               
                                   <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($theme as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                   
                                
                                    <td>
                                        <a href={{url('admin/edittheme/'.$item->id)}} class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href={{url('admin/deletetheme/'.$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <span>{{ $theme->links() }}</span>
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
 


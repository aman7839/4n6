

    
    @extends('admin.dashboard.layout.main')

    @section('content')
    

    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
    
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>From</th>                                   
                                    <th>Date Sent</th> 
                                    <th>View</th>                                                                    
                                    <th>Reply</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->created_at }}</td>
                                  
                                    <td>
                                        <a href={{url('admin/viewmessages/'.$item->id)}} class="btn btn-primary btn-sm">View</a>

                                        
                                        
                                    </td>
                                    <td>
                                        <a href={{url('admin/replymessages/'.$item->id)}} class="btn btn-primary btn-sm">Reply</a>
                                    </td>
                                    <td>
                                        <a href={{url('admin/deletemessages/'.$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <span>{{ $messages->links() }}</span>
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
 


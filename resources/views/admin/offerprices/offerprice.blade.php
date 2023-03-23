
    @extends('admin.dashboard.layout.main')

    @section('content')

    <div class="container">
        <div class="row m-2">
           
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        <h4><a href="{{ url('admin/addofferprice')}}"  class="btn btn-primary btn-sm mt-2"> <i class="fa fa-plus mr-2"></i> Add Offer</a></h4>
                        
                        
                    </div>
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Actual Price</th>
                                     
                                    <th>Offer Price</th> 
                                    <th>From Date</th> 
                                    <th>To Date</th>
                                    <th>Status</th>
                                    <th>Description</th>

                                    <th>Update Offer</th>
                                    {{-- <th>Delete</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($offerPrice as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->price ?? '' }}</td>
                                    <td>{{ $item->offer_price ??''}}</td> 
                            
                                    <td>{{ $item->from_date ?? '' }}</td>
                                                                  
                                  <td>{{ $item->to_date ??'' }}</td> 
                                  
                                  <td>{{ $item->status ? 'Active' : 'Inactive'}}</td> 

                                  <td>{{ $item->description ??'' }}</td> 

                                   <td>
                                        <a href={{url('admin/editofferprice/'.$item->id)}} class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    {{-- <td>
                                        
                                        <a href={{url('admin/deleteofferprice/'.$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" ><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a> 
                                   </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                        <span>{{ $offerPrice->links()}}</span>
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
 



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




    <!--  Modal -->
    <div class="modal fade" id="addscreenshot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Screenshot<button type="button" class="close"
                            data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button></h5>
                    <!-- <input type="text" id="selectedid"> -->

                </div>
                <div class="modal-body">
                    <form class="vault_form" method="post" id="edit_folder_for" action="{{ url('admin/addscreenshot') }}" enctype="multipart/form-data">

                        @csrf

                       

                        <div class="form-outline">
                            {{-- <label class="form-label" for="form2Example1">Folder Name</label>
          <input type="text" name="name" class="form-control"  value= ""/> --}}

                            <div class="">
                                <div class="form-group">
                                    <label for="screenshot"> Screenshot <span class="text-danger"></span> </label>
                                    <input type="file" id="" name="screenshot" class="form-control"
                                        placeholder="Folder Name">
                                </div>
                            </div>


                            <span class="text-danger">
                                @error('screenshot')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                        <div class="form-outline">


                        </div>

                        <button type="submit" class="btn btn-success">Add Screenshot</button>


                    </form>
                </div>

            </div>
        </div>
    </div>
               
           {{-- end modal --}}



            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        <h4 id="screenshot"  class="btn btn-primary btn-sm mt-2"><i class="fa fa-plus mr-2"></i>  Add Screenshort </h4>
                        {{-- <h4><a href="{{url('/admin/logout')}}" class="btn btn-primary btn-sm mt-3">Logout</a></h4> --}}
                        
                        
                    </div>
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Review</th>
                                    <th>Screenshot</th> 
                                    <th>Status</th>                                      
                                    <th>Approve</th>
                                    
                                    {{-- <th>Edit</th> --}}
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($review as $reviews)
                                <tr>
                                    <td>{{ $reviews->id }}</td>
                                    <td>{{ $reviews->comment }}</td>
                                    <td><a class="example-image-link" href="{{ asset('/public/images/'.$reviews->screenshot) }}"
                                        data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img src= "{{ asset('/public/images/'.$reviews->screenshot) }}" width="100" class=" rounded-circle "  title=""></a></td>

                                  
                                        <td>{{ $reviews->approved == 1 ? 'Approved' : 'Pending' }}</td>
                                    
                                   
                                    {{-- <td>
                                        <a href={{url('admin/editstate/'.$reviews->id)}} class="btn btn-primary btn-sm">Edit</a>
                                    </td> --}}

                                    <td>
                                        <a href={{url('admin/approveview/'.$reviews->id)}} class="btn btn-primary btn-sm" onclick="return confirm('Are you sure?')">Approve</a>
                                    </td>
                                    <td>
                                        
                                        <a href={{url('admin/deletereview/'.$reviews->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" >Delete</a>
                                        {{-- <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href={{url('deleteuser/'.$item->id)}} ><i class="fa fa-trash"></i></a> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                        <span>{{ $review->links()}}</span>
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

    @section('footer-scripts')
    <script>

  jQuery(document).ready(function() {

    jQuery("#screenshot").on('click', function() {

        jQuery('#addscreenshot').modal('toggle');

            })


 })


    </script>
   
    @endsection
    @endsection
 

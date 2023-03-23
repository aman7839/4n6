
    @extends('admin.dashboard.layout.main')

    @section('content')


    
    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header ">
                        <h4>Add State</h4>
                        <h4><a href="{{url('admin/states')}}" class="btn btn-primary btn-sm mt-2">Back</a></h4> --}}
                        <div class="card-header d-flex mt-auto">
                          <h4>Add Theme</h4>
                     
                        </div>

                        <div class="card-body">

                        <form action = {{url('admin/savetheme')}}  method="POST" enctype="multipart/form-data">
                            
                            @csrf
                           
                           
                      
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Theme Name</label>
                              <input type="text" name="name" value =""class="form-control" id="exampleFormControlInput1" placeholder="enter theme name">
            <span class ="text-danger">@error('name'){{$message}} @enderror</span>

                            </div>
                            
                             
                              
                              <input type="submit" name="submit" value="submit" class="btn btn-success"> 
                            
                              
                            <a href="{{url('/admin/theme')}}" class="btn btn-danger">Cancel</a>
                              
                            </div>          
                            
                          </form>
                          
                        </div>
                            
                             
                            
                          
                            
                            
                          </div>

                          </div>

        </div>
    </div>
</div>
</div>
</div>
@endsection





        
        


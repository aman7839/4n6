<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
                          <h4>Add States</h4>
                     
                        </div>

                        <div class="card-body">

                        <form action = {{url('admin/savestates')}}  method="POST" enctype="multipart/form-data">
                            
                            @csrf
                           
                           
                      
                            <div class="form-group">
                              <label for="exampleFormControlInput1">State Name</label>
                              <input type="text" name="name" value =""class="form-control" id="exampleFormControlInput1" placeholder="enter state name">
            <span class ="text-danger">@error('name'){{$message}} @enderror</span>

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> File</label>
                                <input type="file" name="file" value ="" class="form-control" id="exampleFormControlInput1" placeholder="enter state name">
            <span class ="text-danger">@error('file'){{$message}} @enderror</span>

                              </div>

                              {{-- <div class="form-group">
                                <input type="checkbox"  name="hidden" id="exampleFormControlInput1" placeholder="enter state name" >

                                <label for="hidden"> Hidden</label> --}}
                                {{-- <input type="checkbox" name="hidden" id="exampleFormControlInput1" placeholder="enter state name"> --}}
                              {{-- </div> --}}
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Description</label>
                                <input type="text" name="description" value =""class="form-control" id="exampleFormControlInput1" placeholder="enter description here">
                       <span class ="text-danger">@error('description'){{$message}} @enderror</span>

                                
                              </div>
                              <a href="{{url('/admin/states')}}" class="btn btn-danger">Cancel</a>
                              <input type="submit" name="submit" value="submit" class="btn btn-success"> 
                            
                              
                              
                            </div>


                            
                            
                            
                          </form>
                          </div>

        </div>
    </div>
</div>
</div>
</div>
@endsection





        
        

</body>
</html>
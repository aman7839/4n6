
    @extends('admin.dashboard.layout.main')

    @section('content')
<div class="container mt-1 pt-4 pb-4">
    <div class="card">
      <div class="card-header d-flex">
        <h4>Add Play Category</h4>
        {{-- <h4 class="ml-auto"><a href="{{url('/admin/addcategory')}}" class="btn btn-primary btn-sm ">Back</a></h4> --}}
      </div>

<div class="card-body">
  <form action="{{url('admin/saveplaycategory')}}" method ="post" enctype="multipart/form-data">
    @csrf
   
    
    
    
    
    <div class="form-group mt-3">
        <label for="name">  Name</label>
        <input type="text" name ="name" value = "{{old('name')}}" class="form-control" id="name" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('name'){{$message}} @enderror</span>
      </div>
     
     
     
      
      
      <a href="{{url('admin/playcategory')}}" class="btn btn-danger">Cancel</a>
    
    <button type="submit" name="submit" class="btn btn-success">Submit</button>
  </form>
</div>


</div>
</div>



@endsection

    @extends('admin.dashboard.layout.main')

    @section('content')
<div class="container mt-1 pt-4 pb-4">
    <div class="card">
      <div class="card-header d-flex">
        <h4>Add Category</h4>
        {{-- <h4 class="ml-auto"><a href="{{url('/admin/addcategory')}}" class="btn btn-primary btn-sm ">Back</a></h4> --}}
      </div>

<div class="card-body">
  <form action="{{url('admin/savecategory')}}" method ="post" enctype="multipart/form-data">
    @csrf
   
    
    
    
    
    <div class="form-group mt-3">
        <label for="name">  Name</label>
        <input type="text" name ="name" value = "{{old('name')}}" class="form-control" id="name" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('name'){{$message}} @enderror</span>
      </div>
      <div class="form-group mt-3">
        <label for="name"> Description</label>
        <input type="text" name ="description" value = "{{old('description')}}" class="form-control" id="name" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('description'){{$message}} @enderror</span>
      </div>
     
      {{-- <div class="form-group mt-3">
        <label for="name">File</label>
        <input type="file" name ="image"  class="form-control" id="images" aria-describedby="emailHelp" >
        
        @if ($errors->has('image'))
        <span class="text-danger">{{ $errors->first('image') }}</span>
    @endif
      </div> --}}
      
      
      <a href="{{url('admin/category')}}" class="btn btn-danger">Cancel</a>
    
    <button type="submit" name="submit" class="btn btn-success">Submit</button>
  </form>
</div>


</div>
</div>



@endsection

    @extends('admin.dashboard.layout.main')

    @section('content')
<div class="container mt-1 pt-4 pb-4">
    <div class="card">
      <div class="card-header d-flex">
        <h4>Add Links</h4>
      </div>

<div class="card-body">
  <form action="{{url('admin/savelinks')}}" method ="post" enctype="multipart/form-data">
    @csrf
   
    
    
    
    
    <div class="form-group mt-3">
        <label for="name"> Web Site Title</label>
        <input type="text" name ="title" value = "{{old('title')}}" class="form-control" id="title" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('title'){{$message}} @enderror</span>
      </div>

      
      
      
      <div class="form-group mt-3">
        <label for="name"> Web Site Description</label>
        <input type="text" name ="description" value = "{{old('description')}}" class="form-control" id="description" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('description'){{$message}} @enderror</span>
      </div>
     
      <div class="form-group mt-3">
        <label for="address">Web Site Address</label>
        <input type="text" name ="address"  class="form-control" id="address" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('address'){{$message}} @enderror</span>
        
        
        
      </div>
      <div class="form-group">
        <label for="catid">Link Category</label>
        <select name="catid" id="catid" class="form-control required">
            <option   value="" disabled>Select One</option>

            @foreach ($category as $item)
                
            <option   value="{{$item->id}}" {{$item->id==$catid ? 'selected':''}}>{{$item->name}} </option>

            @endforeach 
           


           
            </select>
            <span class ="text-danger">@error('name'){{$message}} @enderror</span>
      
    </div>
    {{-- <div class="form-group mt-3">
      <label for="description">Decription Address</label>
      <input type="text" name ="description"  class="form-control" id="description" aria-describedby="emailHelp" >
      <span class ="text-danger">@error('description'){{$message}} @enderror</span>
      
      
      
    </div> --}}
      
      
      <a href="{{url('admin/category')}}" class="btn btn-danger">Cancel</a>
    
    <button type="submit" name="submit" class="btn btn-success">Submit</button>
  </form>
</div>


</div>
</div>



@endsection
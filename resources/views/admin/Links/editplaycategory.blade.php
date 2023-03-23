
  
  

    @extends('admin.dashboard.layout.main')

    @section('content')
  
      <div class="container pt-4 pb-4">
          <div class="card">
            <div class="card-header"><h4>Update Play Category</h4>
      
      <div class="card-body">
        <form action="{{url('admin/updateplaycategory/'.$category->id)}}" method ="post" enctype="multipart/form-data">
        @csrf
       @method('PUT')
       
       <div class="form-group">
           <label for="name">Name</label>
           <input type="text" name ="name" value="{{$category->name}}" class="form-control" id="name" aria-describedby="emailHelp" >
           <span class ="text-danger">@error('name'){{$message}} @enderror</span>

          
         </div>
        
        
         
         <a href="{{url('admin/playcategory')}}" class="btn btn-danger">Cancel</a>
       
       <button type="submit" name="submit" class="btn btn-primary">Submit</button>




     </form>
    </div>
      </div>
      </div>
  
      @endsection
  
 

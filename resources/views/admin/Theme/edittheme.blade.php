

    @extends('admin.dashboard.layout.main')

    @section('content')
  
      <div class="container pt-4 pb-4">
          <div class="card">
            <div class="card-header"><h4>Update Theme</h4>
      
      <div class="card-body">
        <form action="{{url('admin/updatetheme/'.$theme->id)}}" method ="post" enctype="multipart/form-data">
        @csrf
       @method('PUT')
       
       <div class="form-group">
           <label for="name">Name</label>
           <input type="text" name ="name" value="{{$theme->name}}" class="form-control" id="name" aria-describedby="emailHelp" >
           <span class ="text-danger">@error('name'){{$message}} @enderror</span>

          
         </div>
        
        
         
         <a href="{{url('admin/theme')}}" class="btn btn-danger">Cancel</a>
       
       <button type="submit" name="submit" class="btn btn-primary">Submit</button>




     </form>
    </div>
      </div>
      </div>
  
      @endsection
  
 
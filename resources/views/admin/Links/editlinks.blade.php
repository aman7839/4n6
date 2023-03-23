

    @extends('admin.dashboard.layout.main')

    @section('content')
  
      <div class="container">
          <div class="card">

            <div class="card-header">
          <h4>Update Category</h4>
                
            </div>
      
     <div class="card-body">

        <form action="{{url('admin/updatelinks/'.$category->id)}}" method ="post" >
            @csrf
           @method('PUT')
           {{-- <h4><a href="{{url('/admin/category')}}" class="btn btn-primary btn-sm mt-3">Back</a></h4> --}}
           <div class="form-group">
               <label for="name">Name</label>
               <input type="text" name ="name" value="{{$category->name}}" class="form-control" id="name" aria-describedby="emailHelp" >
               <span class ="text-danger">@error('name'){{$message}} @enderror</span>
   
              
             </div>
             <div class="form-group">
               <label for="mobile">Description</label>
               <input type="text" name ="description" value="{{$category->description}}" class="form-control" id="mobile" aria-describedby="emailHelp" >
               <span class ="text-danger">@error('description'){{$message}} @enderror</span>
   
             
             </div>
            
            
           
       <a href="{{url('admin/category')}}" class="btn btn-danger">Cancel</a>
           
           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
         </form>
     </div>
      </div>
      </div>
  
      @endsection
  
 
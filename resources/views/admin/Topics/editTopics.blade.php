

    @extends('admin.dashboard.layout.main')

    @section('content')
  
      <div class="container">
          <div class="card">
            <div class="card-header"><h4>Update Topics</h4>
      
      <div class="card-body">
        <form action="{{url('admin/updatetopics/'.$topics->id)}}" method ="post" enctype="multipart/form-data">
        @csrf
       @method('PUT')
       
       <div class="form-group">
           <label for="name">Characters</label>
           <input type="text" name ="characters" value="{{$topics->characters}}" class="form-control" id="name" aria-describedby="emailHelp" >
           <span class ="text-danger">@error('characters'){{$message}} @enderror</span>

          
         </div>
         <div class="form-group">
           <label for="mobile">Location</label>
           <input type="text" name ="locations" value="{{$topics->locations}}" class="form-control" id="mobile" aria-describedby="emailHelp" >
           <span class ="text-danger">@error('locations'){{$message}} @enderror</span>

         
         </div>
        
         <div class="form-group">
           <label for="location">Situations</label>
           <input type="text" name ="situations" value="{{$topics->situations}}" class="form-control" id="location" aria-describedby="emailHelp" >
           <span class ="text-danger">@error('situations'){{$message}} @enderror</span>
           
         </div>
       
         <a href="{{url('admin/topics')}}" class="btn btn-danger">Cancel</a>
       
       <button type="submit" name="submit" class="btn btn-primary">Submit</button>




     </form>
    </div>
      </div>
      </div>
      
      @endsection
  
 
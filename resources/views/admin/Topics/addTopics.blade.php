

    @extends('admin.dashboard.layout.main')

    @section('content')
      <div class="container pt-4 pb-4">
          <div class="card">
      
            <div class="card-header">
              <div class="d-flex">
                <h4>Add Topics</h4>
               </div>
                
            </div>
      <div class="card-body">
        <form action="{{url('admin/savetopics')}}" method ="post" enctype="multipart/form-data">
          @csrf
         
          
          
          <div class="form-group mt-3">
              <label for="name">Characters</label>
              <input type="text" name ="characters" value = "{{old('characters')}}" class="form-control" id="name" aria-describedby="emailHelp" >
              <span class ="text-danger">@error('characters'){{$message}} @enderror</span>
            
            </div>
            <div class="form-group">
              <label for="mobile">Locations</label>
              <input type="text" name ="locations"  value = "{{old('locations')}}"  class="form-control" id="mobile" aria-describedby="emailHelp" >
              <span class ="text-danger">@error('locations'){{$message}} @enderror</span>
            </div>
           
            
            <div class="form-group">
              <label for="location">Situations</label>
              <input type="text" name ="situations"  value = "{{old('situations')}}"  class="form-control" id="location" aria-describedby="emailHelp" >
              <span class ="text-danger">@error('situations'){{$message}} @enderror</span>
            
            </div>
           
         
          <a href="{{url('/admin/topics')}}" class="btn btn-danger">Cancel</a>
          
          <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
      
  
      </div>
      </div>
  
      @endsection
  
 
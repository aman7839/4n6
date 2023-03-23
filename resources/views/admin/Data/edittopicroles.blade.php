

  @extends('admin.dashboard.layout.main')

  @section('content')
    <div class="container mt-1 pt-4 pb-4">
        <div class="card">
          <div class="card-header d-flex">
            <h4>Update Record</h4>
          </div>
    
   <div class="card-body">
    <form action="{{url('admin/updatetopicroles/'.$topic->id)}}" method ="post" enctype="multipart/form-data">
      @csrf
     
    @method('PUT')
     
      
      
      
      
      <div class="form-group">
        <label for="name">  </label>
        <select name="name" id="name" class="form-control required">    
            <option   value="" disabled>Select One</option>
            <option value="profession" {{$topic->name == 'profession'? 'selected':''}}>Profession</option>
              <option value="situation" {{$topic->name == 'situation'? 'selected':''}}>Situation</option>
              <option value="location" {{$topic->name == 'location'? 'selected':''}}>Places</option>  
            </select>
            <span class ="text-danger">@error('name'){{$message}} @enderror</span>
      
    </div>
    
    
    
       
        
    <div class="form-group mt-3">
        <label for="info">  Info </label>
        <input type="text" name ="info" value = "{{$topic->info}}" class="form-control" id="info" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('info'){{$message}} @enderror</span>
      
      </div>
    
      <a href="{{url('admin/topicroles')}}" class="btn btn-danger">Cancel</a>
      
      <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
   </div>
    

    </div>
    </div>

    @endsection

{{-- </body>
</html> --}}

  
  @extends('admin.dashboard.layout.main')

  @section('content')

    <div class="container">
        <div class="card">
    
    <form action="{{url('admin/updateAwards/'.$awards->id)}}" method ="post" >
         @csrf
        @method('PUT')
        <h4><a href="" class="btn btn-primary btn-sm mt-3">Edit Awards</a></h4>
        <h4><a href="{{url('/admin/awards')}}" class="btn btn-primary btn-sm mt-3">Back</a></h4>
        <div class="form-group">
            <label for="awards_name"> AwardsName</label>
            <input type="text" name ="awards_name" value="{{$awards->awards_name}}" class="form-control" id="name" aria-describedby="emailHelp" >
           
          </div>
          
          
         
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    </div>

    @endsection



    @extends('admin.dashboard.layout.main')

    @section('content')

  <div class="container pt-4 pb-4">
      <div class="card">

        <div class="card-header">
      <h4>Edit State</a></h4>

        </div>
  
  <div class="card-body">
    <form action="{{url('admin/updatestate/'.$state->id)}}" method ="post"  enctype="multipart/form-data">
    @csrf
    @method('PUT')
   <div class="form-group">
       <label for="name"> File Name</label>
       <input type="text" name ="name" value="{{$state->name}}" class="form-control" id="name" aria-describedby="emailHelp" >
       <span class ="text-danger">@error('name'){{$message}} @enderror</span>

   
      
     </div>
     <div class="form-group">
       <label for="">Current Document</label>
       <div>
       <a href="{{'../view/'. $state->file }}"  target="_blank" ><img width="40" src={{asset('public/images/pdf_icon.png')}} alt=""> {{$state->name}}</a></div>
   </div>
<div class="form-group">
         <label for="image">Change File</label>
         <input type="file" name ="file"  class="form-control" id="images" aria-describedby="emailHelp" >
         
         @if ($errors->has('file'))
         <span class="text-danger">{{ $errors->first('file') }}</span>
     @endif
       </div>
       <a href="{{url('admin/states')}}" class="btn btn-danger">Cancel</a>
   <button type="submit" name="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
  </div>
  </div>

  @endsection

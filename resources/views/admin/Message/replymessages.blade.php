
    @extends('admin.dashboard.layout.main')

    @section('content')

  <div class="container pt-4 pb-4">
      <div class="card">

        <div class="card-header">
      <h4>Send Message</a></h4>

        </div>
  
  <div class="card-body">
    <form action="" method =""  >
    @csrf
    @method('PUT')
   <div class="form-group">
       <label for="name"> Name</label>
       <input type="text" name ="name" value="{{$messages->name}}" class="form-control" id="name" aria-describedby="emailHelp" >
       <span class ="text-danger">@error('name'){{$message}} @enderror</span>

   
      
     </div>
     <div class="form-group">
        <label for="email">  Email</label>
        <input type="text" name ="email" value="{{$messages->email}}" class="form-control" id="name" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('name'){{$message}} @enderror</span>
 
    
       
      </div>
      <div class="form-group">
        <label for="subject">  Subject</label>
        <input type="text" name ="subject" value="" class="form-control" id="subject" aria-describedby="emailHelp" >
 
    
       
      </div>


      <div class="form-group">
        <label for="description" >  Message</label>
    <textarea name="description"  class="form-control"  id="description" cols="30" rows="10">{{$messages->description}} </textarea>      
      <span class ="text-danger">@error('name'){{$message}} @enderror</span>
 
    
       
      </div>
     

       <a href="" class="btn btn-primary"> Send Reply</a>
       <a href="{{url('admin/messages')}}" class="btn btn-primary">Cancel</a>



 </form>
</div>
  </div>
  </div>

  @endsection

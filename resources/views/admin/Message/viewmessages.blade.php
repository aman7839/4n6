
    @extends('admin.dashboard.layout.main')

    @section('content')

  <div class="container pt-4 pb-4">
      <div class="card">

        <div class="card-header">
      <h4>View Message</a></h4>

        </div>
  
  <div class="card-body">
    <form action="" method =""  >
    @csrf
   <div class="form-group">
       <label for="name">Name: {{$messages->name}}</label>

       </div>

   <div class="form-group">

       <label for="email">Email: {{$messages->email}}</label>
      </div>

      <div class="form-group">

       <label for="message"> Message: {{$messages->description}}</label>
      </div>

      

     <a href="{{url('admin/replymessages/'.$messages->id)}}" class="btn btn-primary">Reply</a>

       <a href="{{url('admin/messages')}}" class="btn btn-primary">Cancel</a>
 


 </form>
</div>
  </div>
  </div>

  @endsection

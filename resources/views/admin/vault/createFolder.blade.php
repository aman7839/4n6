@extends('admin.dashboard.layout.main')



@section('content')

<!-- <form method="post" action="{{url('admin/savefolder')}}">

@csrf

<div class="form-outline mb-4">

   

  <label class="form-label" for="form2Example1">Folder Name</label>

  <input type="text" name="name" id="form2Example1" class="form-control"  value = ""/>

  <span class ="text-danger">@error('name'){{$message}} @enderror</span>

</div>

        

  <div class="form-outline mb-4">

 <label class="form-label" for="form2Example2">Password</label> -->

    <!-- <input type="hidden" name="parent_id"  value= "" id="form2Example2" class="form-control" /> -->

   

    <!-- <span class ="text-danger">@error('password'){{$message}} @enderror</span> -->

  <!-- </div> -->

      

          <!-- <button type="submit" class="btn btn-success">Create New Folder</button> -->



    

          
      <!-- </form> -->

      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Create Folder
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{url('admin/savefolder')}}">

@csrf

<div class="form-outline mb-4">

   

  <label class="form-label" for="form2Example1">Folder Name</label>

  <input type="text" name="name" id="form2Example1" class="form-control"  value = ""/>

  <span class ="text-danger">@error('name'){{$message}} @enderror</span>

</div>

        

  <div class="form-outline mb-4">

    <!-- <label class="form-label" for="form2Example2">Password</label> -->

    <input type="hidden" name="parent_id"  value= "" id="form2Example2" class="form-control" />

   

    <!-- <span class ="text-danger">@error('password'){{$message}} @enderror</span> -->

  </div>

      

          <button type="submit" class="btn btn-success">Create New Folder</button>



    

          
      </form>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Create Folder</button>
      </div> -->
    </div>
  </div>
</div>


@endsection
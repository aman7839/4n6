@extends('admin.dashboard.layout.main')

@section('content')

<div class="container-fluid pt-4 pb-4">
  <div class="card">

    <div class="card-header">
      <h4 class="title_cmn">Reply Review</a></h4>

    </div>

    <div class="card-body">
      <form action="{{url('admin/approveview/'.$review->id)}}" method="Post">
        @csrf

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name"> Comment</label><br>
              <label for="name"> {{$review->comment}}</label>


              {{-- <input type="text" name="name" value="{{$review->comment}}" class="form-control" id="name" aria-describedby="emailHelp" disabled>
              <span class="text-danger">@error('name'){{$message}} @enderror</span> --}}
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email"> Reply</label>
              <input type="text" name="reply" placeholder="Enter reply here"  class="form-control" id="name" aria-describedby="emailHelp" >
              <span class="text-danger">@error('reply'){{$message}} @enderror</span>


            </div>
          </div>
         
    

          <div class="col-md-12"> 
            <a href="{{url('admin/reviews')}}" class="btn btn-danger">Cancel</a>
            <input type="submit"  Value="Reply and Approve" class="btn btn-primary admin_cm_btn">
          </div>
        </div>


        {{-- <a href="" class="btn btn-primary"> Send Reply</a> --}}
      </form>
    </div>
  </div>
</div>

@endsection
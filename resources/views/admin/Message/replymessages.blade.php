@extends('admin.dashboard.layout.main')

@section('content')

<div class="container-fluid pt-4 pb-4">
  <div class="card">

    <div class="card-header">
      <h4 class="title_cmn">Send Message</a></h4>

    </div>

    <div class="card-body">
      <form action="{{url('admin/replymessages/'.$messages->id)}}" method="Post">
        @csrf

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name"> Name</label>
              <input type="text" name="name" value="{{$messages->name}}" class="form-control" id="name" aria-describedby="emailHelp" disabled>
              <span class="text-danger">@error('name'){{$message}} @enderror</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email"> Email</label>
              <input type="text" name="email" value="{{$messages->email}}" class="form-control" id="name" aria-describedby="emailHelp" disabled>
              <span class="text-danger">@error('name'){{$message}} @enderror</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="descriptions"> Message Description </label>
              <textarea name="descriptions" class="form-control" id="description" cols="30" rows="3" disabled> {{$messages->description}} </textarea>
              <span class="text-danger">@error('descriptions'){{$message}} @enderror</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="description"> Type Message Body Here</label>
              <textarea name="description" class="form-control" id="description" cols="30" rows="3" placeholder="Describe yourself here">
      @if(isset($messageBody)){{$messageBody}} @endif  </textarea>
              <span class="text-danger">@error('description'){{$message}} @enderror</span>
            </div>
            
          </div>
          <div class="col-md-12"> 
            <a href="{{url('admin/messages')}}" class="btn btn-danger">Cancel</a>
            <input type="submit" name="reply" Value="Send Reply" class="btn btn-primary admin_cm_btn">
          </div>



          {{-- <div class="form-group">
          <label for="subject">  Subject</label>
          <input type="text" name ="subject" value="" class="form-control" id="subject" aria-describedby="emailHelp" >
            </div> --}}




        </div>

        {{-- <input type="submt" name = "submit" value = "Send Reply"  class="btn btn-primary"> --}}

        {{-- <a href="" class="btn btn-primary"> Send Reply</a> --}}
      </form>
    </div>
  </div>
</div>

@endsection
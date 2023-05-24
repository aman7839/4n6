@extends('admin.dashboard.layout.main')

@section('content')

<div class="container-fluid pt-4 pb-4">
  <div class="card">

    <div class="card-header">
      <h4 class="title_cmn">View Message</a></h4>

    </div>

    <div class="card-body">
      <form action="" method="">
        @csrf

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Name: {{$messages->name}}</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email">Email: {{$messages->email}}</label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="message"> Message: {{$messages->description}}</label>
            </div>
          </div>
          <div class="col-md-12"> <a href="{{url('admin/messages')}}" class="btn btn-primary">Cancel</a>
            <a href="{{url('admin/replymessages/'.$messages->id)}}" class="btn btn-primary admin_cm_btn">Reply</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
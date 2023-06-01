@extends('admin.dashboard.layout.main')

@section('content')
<div class="p-3 pt-4 pb-4">
  <div class="card">
    <div class="card-header d-flex">
      <h4 class="title_cmn">Add Tutorial</h4>
      {{-- <h4 class="ml-auto"><a href="{{url('/admin/documents')}}" class="btn btn-primary btn-sm ">Back</a></h4> --}}
    </div>

    <div class="card-body">
      <form action="{{url('admin/savetutorial')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row">
          <div class="col-md-6">
            <div class="form-group mt-3">
              <label for="name"> Tutorial Name</label>
              <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" aria-describedby="emailHelp">
              <span class="text-danger">@error('name'){{$message}} @enderror</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mt-3">
              <label for="name">Video  (Limit 50MB, mp4,mov,ogg)</label>
              <input type="file" name="video" class="form-control" id="video" aria-describedby="emailHelp">

              @if ($errors->has('video'))
              <span class="text-danger">{{ $errors->first('video') }}</span>
              @endif
            </div>
          </div>
          <div class="col-md-6"> <a href="{{url('admin/tutorial')}}" class="btn btn-danger">Cancel</a>

            <button type="submit" name="submit" class="btn btn-success admin_cm_btn">Submit</button>
          </div>
        </div>




      </form>
    </div>


  </div>
</div>



@endsection
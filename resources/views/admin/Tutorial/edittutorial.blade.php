@extends('admin.dashboard.layout.main')

@section('content')

<div class="p-3 pt-4 pb-4">
  <div class="card">

    <div class="card-header">
      <h4 class="title_cmn">Edit Tutorial Videos</a></h4>

    </div>

    <div class="card-body">
      <form action="{{url('admin/savetutorial/'.$editVideo->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name"> Video Name</label>
              <input type="text" name="name" value="{{$editVideo->name}}" class="form-control" id="name" aria-describedby="emailHelp">
              <span class="text-danger">@error('name'){{$message}} @enderror</span>

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="video">Video (Limit 50MB, mp4,mov,ogg)</label>
              <input type="file" name="video" class="form-control" id="video" aria-describedby="emailHelp">
              {{-- <img  width="30%" class="img-circle" src="{{asset('images/'. $user->image)}}"> --}}

              @if ($errors->has('video'))
              <span class="text-danger">{{ $errors->first('video') }}</span>
              @endif
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="">Current Video</label>
              <div>
                <a href="{{ '../../public/images/'.$editVideo->video}}" target="_blank">View Current Video</a>
              </div>
              {{-- <a href=""></a> --}}

            </div>
          </div>
          <div class="col-md-12"> <a href="{{url('admin/tutorial')}}" class="btn btn-danger">Cancel</a>

            <button type="submit" name="submit" class="btn btn-primary admin_cm_btn">Submit</button>
          </div>
        </div>



      </form>
    </div>
  </div>
</div>

@endsection
@extends('admin.dashboard.layout.main')

@section('content')

<div class="p-3 pt-4 pb-4">
  <div class="card">

    <div class="card-header">
      <h4 class="title_cmn">Edit Documents</a></h4>

    </div>

    <div class="card-body">
      <form action="{{url('admin/updatedocuments/'.$document->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name"> File Name</label>
              <input type="text" name="name" value="{{$document->name}}" class="form-control" id="name" aria-describedby="emailHelp">
              <span class="text-danger">@error('name'){{$message}} @enderror</span>

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="image">File</label>
              <input type="file" name="image" class="form-control" id="images" aria-describedby="emailHelp">
              {{-- <img  width="30%" class="img-circle" src="{{asset('images/'. $user->image)}}"> --}}

              @if ($errors->has('image'))
              <span class="text-danger">{{ $errors->first('image') }}</span>
              @endif
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="">Current Document</label>
              <div>
                <a href="{{'../download/'. $document->image }}" target="_blank">View Current Document</a>
              </div>
              {{-- <a href=""></a> --}}

            </div>
          </div>
          <div class="col-md-12"> <a href="{{url('admin/documents')}}" class="btn btn-danger">Cancel</a>

            <button type="submit" name="submit" class="btn btn-primary admin_cm_btn">Submit</button>
          </div>
        </div>





      </form>
    </div>
  </div>
</div>

@endsection
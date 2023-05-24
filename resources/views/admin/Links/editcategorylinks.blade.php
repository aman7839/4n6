@extends('admin.dashboard.layout.main')

@section('content')

<div class="p-3 pt-4 pb-4">
  <div class="card">
    <div class="card-header">
      <h4 class="title_cmn">Edit Links</h4>
    </div>
    <div class="card-body">
      <form action="{{url('admin/updatecategorylinks/'.$link->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- <h4><a href="{{url('/admin/documents')}}" class="btn btn-primary btn-sm mt-3">Back</a></h4> --}}

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="title">Web Site Title </label>
              <input type="text" name="title" value="{{$link->title}}" class="form-control" id="title" aria-describedby="emailHelp">
              <span class="text-danger">@error('title'){{$message}} @enderror</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group ">
              <label for="name"> Web Site Description</label>
              <input type="text" name="description" value="{{$link->description}}" class="form-control" id="description" aria-describedby="emailHelp">
              <span class="text-danger">@error('description'){{$message}} @enderror</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="address">Web Site Address</label>
              <input type="text" name="address" value="{{$link->address}}" class="form-control" id="address" aria-describedby="emailHelp">
              <p class="text-danger">@error('address'){{$message}} @enderror</p>
            </div>
          </div>
          <div class="col-md-12"><a href="{{url('admin/category')}}" class="btn btn-danger">Cancel</a>

            <button type="submit" name="submit" class="btn btn-success admin_cm_btn">Submit</button>
          </div>
        </div>



        {{-- <div class="form-group">
           <label for="">Current Document</label>
           <div>
           <a href="{{'../download/'. $categoryLinks->image }}" target="_blank" >Download Current Document</a>
    </div>
    {{-- <a href=""></a> --}}


    {{-- </div>  --}}

    {{-- <div class="form-group">
             <label for="image">File</label>
             <input type="file" name ="image"  class="form-control" id="images" aria-describedby="emailHelp" >
             {{-- <img  width="30%" class="img-circle" src="{{asset('images/'. $user->image)}}"> --}}

    {{-- @if ($errors->has('image'))
             <span class="text-danger">{{ $errors->first('image') }}</span>
    @endif
  </div> --}}



  </form>
</div>
</div>
</div>

@endsection
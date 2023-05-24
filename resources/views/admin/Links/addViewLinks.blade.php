@extends('admin.dashboard.layout.main')

@section('content')
<div class="p-3 pt-4 pb-4">
  <div class="card">
    <div class="card-header d-flex">
      <h4 class="title_cmn">Add Links</h4>
    </div>

    <div class="card-body">
      <form action="{{url('admin/savelinks')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group ">
              <label for="name"> Web Site Title</label>
              <input type="text" name="title" value="{{old('title')}}" class="form-control" id="title" aria-describedby="emailHelp">
              <span class="text-danger">@error('title'){{$message}} @enderror</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group ">
              <label for="name"> Web Site Description</label>
              <input type="text" name="description" value="{{old('description')}}" class="form-control" id="description" aria-describedby="emailHelp">
              <span class="text-danger">@error('description'){{$message}} @enderror</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group ">
              <label for="address">Web Site Address</label>
              <input type="text" name="address" class="form-control" id="address" aria-describedby="emailHelp">
              <span class="text-danger">@error('address'){{$message}} @enderror</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="catid">Link Category</label>
              <select name="catid" id="catid" class="form-control required">
                <option value="" disabled>Select One</option>

                @foreach ($category as $item)

                <option value="{{$item->id}}" {{$item->id==$catid ? 'selected':''}}>{{$item->name}} </option>

                @endforeach

              </select>
              <p class="text-danger">@error('name'){{$message}} @enderror</p>
            </div>

          </div>
          <div class="col-md-12"><a href="{{url('admin/category')}}" class="btn btn-danger">Cancel</a>
            <button type="submit" name="submit" class="btn btn-success admin_cm_btn">Submit</button>
          </div>
        </div>
        {{-- <div class="form-group mt-3">
      <label for="description">Decription Address</label>
      <input type="text" name ="description"  class="form-control" id="description" aria-describedby="emailHelp" >
      <span class ="text-danger">@error('description'){{$message}} @enderror</span>
    </div> --}}

    </form>
  </div>
</div>
</div>



@endsection
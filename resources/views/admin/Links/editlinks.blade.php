@extends('admin.dashboard.layout.main')

@section('content')

<div class="p-3">
  <div class="card">

    <div class="card-header">
      <h4 class="title_cmn">Update Category</h4>

    </div>

    <div class="card-body">

      <form action="{{url('admin/updatelinks/'.$category->id)}}" method="post">
        @csrf
        @method('PUT')
        {{-- <h4><a href="{{url('/admin/category')}}" class="btn btn-primary btn-sm mt-3">Back</a></h4> --}}

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" value="{{$category->name}}" class="form-control" id="name" aria-describedby="emailHelp">
              <p class="text-danger">@error('name'){{$message}} @enderror</p>
            </div>
          </div>
          <div class="col-md-6"><div class="form-group">
          <label for="mobile">Description</label>
          <input type="text" name="description" value="{{$category->description}}" class="form-control" id="mobile" aria-describedby="emailHelp">
          <p class="text-danger">@error('description'){{$message}} @enderror</p>
        </div></div>
          <div class="col-md-12">  <a href="{{url('admin/category')}}" class="btn btn-danger">Cancel</a>

        <button type="submit" name="submit" class="btn btn-primary admin_cm_btn">Submit</button></div>
        </div>

        
      
      </form>
    </div>
  </div>
</div>

@endsection
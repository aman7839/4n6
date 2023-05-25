@extends('admin.dashboard.layout.main')

@section('content')
<div class=" pt-4 pb-4 p-3">
  <div class="card">
    <div class="card-header d-flex">

      <h4 class="title_cmn">Add Record</h4>

    </div>

    <div class="card-body">
      <form action="{{url('admin/savetopicroles')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name"> Type</label>
              <select name="name" id="name" class="form-control required">
                <option value="" disabled>Select One</option>
                <option value="profession" selected>Profession</option>
                <option value="situation">Situation</option>
                <option value="location">Places</option>
              </select>
              <span class="text-danger">@error('name'){{$message}} @enderror</span>

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="info"> Info </label>
              <input type="text" name="info" value="{{old('info')}}" class="form-control" id="info" aria-describedby="emailHelp">
              <span class="text-danger">@error('info'){{$message}} @enderror</span>

            </div>
          </div>
        </div> <a href="{{url('admin/topicroles')}}" class="btn btn-danger">Cancel</a>

        <button type="submit" name="submit" class="btn btn-success admin_cm_btn">Submit</button>
      </form>
    </div>


  </div>
</div>

@endsection

{{-- </body>
</html> --}}
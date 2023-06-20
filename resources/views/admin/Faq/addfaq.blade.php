@extends('admin.dashboard.layout.main')

@section('content')
<div class=" pt-4 pb-4 p-3">
  <div class="card">
    <div class="card-header d-flex">

      <h4 class="title_cmn">Add Record</h4>

    </div>

    <div class="card-body">
      <form action="{{url('admin/addfaq')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="name"> Type</label>
              <select name="type" id="name" class="form-control required">
                <option value="" disabled>Select One</option>
                <option value="GENERAL_QUESTIONS" selected>GENERAL QUESTIONS</option>
                <option value="MEMBERSHIP/PAYMENT_QUESTIONS
                ">MEMBERSHIP/PAYMENT QUESTIONS
            </option>
                <option value="SERVICES_PROVIDED_QUESTIONS">SERVICES PROVIDED QUESTIONS</option>
              </select>
              <span class="text-danger">@error('name'){{$message}} @enderror</span>

            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="Question"> Question </label>
              <input type="text" name="Question" value="{{old('Question')}}" class="form-control" id="Question" aria-describedby="emailHelp">
              {{-- <textarea name="Question" class="form-control" id="" cols="30" rows="10"></textarea> --}}

              <span class="text-danger">@error('Question'){{$message}} @enderror</span>

            </div>
</div>

          <div class="col-md-12">

            <div class="form-group">
                <label for="Answer"> Answer </label>
                {{-- <input type="text" name="Answer" value="{{old('Answer')}}" class="form-control" id="Answer" aria-describedby="emailHelp"> --}}
                <textarea name="Answer" class="form-control" id="Answer" cols="30" rows="10"></textarea>
                <span class="text-danger">@error('Answer'){{$message}} @enderror</span>
  
              </div>
          </div>
        </div> <a href="{{url('admin/faq')}}" class="btn btn-danger">Cancel</a>

        <button type="submit" name="submit" class="btn btn-success admin_cm_btn">Submit</button>
      </form>
    </div>


  </div>
</div>

@endsection

{{-- </body>
</html> --}}
@extends('admin.dashboard.layout.main')

@section('content')
<div class="p-3 pt-4 pb-4">
  <div class="card">
    <div class="card-header d-flex">
      <h4 class="title_cmn">Update Record</h4>
    </div>

    <div class="card-body">
      <form action="{{url('admin/editfaq/'.$faq->id)}}" method="post" enctype="multipart/form-data">
        @csrf

        @method('PUT')
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="type"> </label>
              <select name="type" id="name" class="form-control required">
                <option value="" disabled>Select One</option>
                <option value="GENERAL_QUESTIONS" {{$faq->type == 'GENERAL_QUESTIONS'? 'selected':''}}>GENERAL QUESTIONS</option>
                <option value="MEMBERSHIP/PAYMENT_QUESTIONS" {{$faq->type == 'MEMBERSHIP/PAYMENT_QUESTIONS'? 'selected':''}}>MEMBERSHIP/PAYMENT QUESTIONS</option>
                <option value="SERVICES_PROVIDED_QUESTIONS" {{$faq->type == 'SERVICES_PROVIDED_QUESTIONS'? 'selected':''}}>SERVICES PROVIDED QUESTIONS</option>
              </select>
              <span class="text-danger">@error('type'){{$message}} @enderror</span>

            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="info"> Question </label>
              <input type="text" name="question" value="{{$faq->question}}" class="form-control" id="info" aria-describedby="emailHelp">
              {{-- <textarea name="question" class = "form-control" id="" cols="30" rows="10"></textarea> --}}
              <span class="text-danger">@error('question'){{$message}} @enderror</span>

            </div>

            </div>
            
          <div class="col-md-12">

            <div class="form-group">
                <label for="info"> Answer </label>
                {{-- <input type="text" name="answer" value="{{$faq->answer}}" class="form-control" id="info" aria-describedby="emailHelp"> --}}
              <textarea name="answer" class = "form-control" id="" cols="30" rows="10">{{$faq->answer}}</textarea>

                <span class="text-danger">@error('answer'){{$message}} @enderror</span>
  
              </div>
          </div>
          <div class="col-12">
            <a href="{{url('admin/faq')}}" class="btn btn-danger">Cancel</a>

            <button type="submit" name="submit" class="btn btn-success admin_cm_btn">Submit</button>
          </div>
        </div>

      </form>
    </div>


  </div>
</div>

@endsection

{{-- </body>
</html> --}}
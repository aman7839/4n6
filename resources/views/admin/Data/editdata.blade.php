@extends('admin.dashboard.layout.main')

@section('content')
<div class="pt-4 pb-4 p-3">
  <div class="card">
    <div class="card-header d-flex">
      <h4 class="title_cmn">Edit Data</h4>
    </div>

    <div class="card-body">
      <form action="{{url('admin/updatedata/'.$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf

        @method('PUT')


        <div class="row">
          <div class="col-md-6">
            <div class="form-group mt-3">
              <label for="title"> Title</label>
              <input type="text" name="title" value="{{$data->title}}" class="form-control" id="title" aria-describedby="emailHelp">
              <span class="text-danger">@error('title'){{$message}} @enderror</span>

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mt-3">
              <label for="author"> Author</label>
              <input type="text" name="author" value="{{$data->author}}" class="form-control" id="author" aria-describedby="emailHelp">
              <span class="text-danger">@error('author'){{$message}} @enderror</span>

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mt-3">
              <label for="book"> Book </label>
              <input type="text" name="book" value="{{$data->book}}" class="form-control" id="book" aria-describedby="emailHelp">
              <span class="text-danger">@error('book'){{$message}} @enderror</span>

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mt-3">
              <label for="publisher"> Publisher </label>
              <input type="text" name="publisher" value="{{$data->publisher}}" class="form-control" id="publisher" aria-describedby="emailHelp">
              <span class="text-danger">@error('publisher'){{$message}} @enderror</span>

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="isbn">ISBN</label>
              <input type="text" name="isbn" value="{{$data->isbn}}" class="form-control" id="isbn" aria-describedby="emailHelp">
              <span class="text-danger">@error('isbn'){{$message}} @enderror</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="type"> Type</label>
              <select name="type" id="type" class="form-control required">
                <option value="" disabled>Select One</option>
                <option value="humorous" {{$data->type == 'Humorous'? 'selected':''}}>Humorous</option>
                <option value="serious" {{$data->type == 'Serious' ? 'selected':''}}>Serious</option>


              </select>
              <span class="text-danger">@error('type'){{$message}} @enderror</span>

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">


              <label for="characters"> Characters </label>
              <select name="characters" id="characters" class="form-control required">
                <option value="" disabled>Select One</option>
                <option value="Male" {{$data->characters == 'Male'? 'selected':''}}>Male</option>
                <option value="Female" {{$data->characters == 'Female'? 'selected':''}}>Female</option>
                <option value="All" {{$data->characters == 'All'? 'selected':''}}>All</option>
                <option value="M/F" {{$data->characters == 'M/F'? 'selected':''}}>M/F</option>

                <option value="M/M" {{$data->characters == 'M/M'? 'selected':''}}>M/M</option>

                <option value="F/F" {{$data->characters == 'F/F'? 'selected':''}}>F/F</option>

              </select>
              <span class="text-danger">@error('characters'){{$message}} @enderror</span>

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="rating"> Rating </label>
              <select name="rating" id="rating" class="form-control required">
                <option value="" disabled>Select One</option>
                <option value="G-All Ages" {{$data->rating == 'G-All Ages'? 'selected':''}}>G-All Ages</option>
                <option value="PG-Middle School Appropriate" {{$data->rating == 'PG-Middle School Appropriate'? 'selected':''}}>PG-Middle School Appropriate</option>
                <option value="PG-13-High School" {{$data->rating == 'PG-13-High School'? 'selected':''}}>PG-13-High School</option>
                <option value="R-rating" {{$data->rating == 'R-rating'? 'selected':''}}>R-rating</option>

              </select>
              <span class="text-danger">@error('rating'){{$message}} @enderror</span>

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="award_id"> Awards </label>
              <select name="award_id" id="award_id" class="form-control required">


                <option value="" disabled>Select One</option>


                @foreach ($awards as $item)

                <option value="{{$item->id }}" {{$item->id == ($data->awards->id ?? '') ? 'selected':''}}>{{$item->awards_name}}</option>

                @endforeach

              </select>
              <span class="text-danger">@error('award_id'){{$message}} @enderror</span>

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="theme_id"> Theme </label>
              <select name="theme_id" id="theme_id" class="form-control required">
                <option value="" disabled>Select One</option>

                @foreach ($theme as $item)

                <option value="{{$item->id}}" {{$item->id == ($data->theme->id ?? '') ? 'selected':''}}>{{$item->name}}</option>

                @endforeach

              </select>
              <span class="text-danger">@error('theme_id'){{$message}} @enderror</span>

            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="category_id"> Category </label>
              <select name="category_id" id="category_id" class="form-control required">
                <option value="" disabled>Select One</option>

                @foreach ($category as $item)

                <option value="{{$item->id}}" {{$item->id == ($data->category->id ?? '') ? 'selected':''}}>{{$item->name}}</option>

                @endforeach

              </select>
              <span class="text-danger">@error('category_id'){{$message}} @enderror</span>

            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="summary">Summary</label>
              <textarea name="summary" id="summary" class="form-control" cols="50" rows="2">{{$data->summary}}</textarea>
              <span class="text-danger">@error('summary'){{$message}} @enderror</span>
            </div>
          </div>
          <div class="col-12">
          <a href="{{url('admin/data')}}" class="btn btn-danger">Cancel</a>

<button type="submit" name="submit" class="btn btn-success admin_cm_btn">Submit</button>
          </div>
        </div>
          {{-- <div class="form-group mt-3">
        <label for="book" >  Public: </label> <br>

        <label for="book">  Yes  </label>

        <input type="radio" name ="public" value = '1' {{$data->public == '1'? 'checked' :''}} class="" id="yes" aria-describedby="emailHelp" >

        <label for="book"> No </label>

        <input type="radio" name="public" value='0' {{$data->public == '0'? 'checked' :''}} class="" id="no" aria-describedby="emailHelp">

        <span class="text-danger">@error('book'){{$message}} @enderror</span>

    </div> --}}

 
    </form>
  </div>


</div>
</div>

@endsection

{{-- </body>
</html> --}}


  @extends('admin.dashboard.layout.main')

  @section('content')
    <div class="container mt-1 pt-4 pb-4">
        <div class="card">
          <div class="card-header d-flex">
            <h4>Add Data</h4>
          </div>
    
   <div class="card-body">
    <form action="{{url('admin/updatedata/'.$data->id)}}" method ="post" enctype="multipart/form-data">
      @csrf
     
      @method('PUT')
     
      
      
      
      <div class="form-group mt-3">
          <label for="title">  Title</label>
          <input type="text" name ="title" value = "{{$data->title}}" class="form-control" id="title" aria-describedby="emailHelp" >
          <span class ="text-danger">@error('title'){{$message}} @enderror</span>
        
        </div>
        <div class="form-group mt-3">
          <label for="author">  Author</label>
          <input type="text" name ="author" value = "{{$data->title}}" class="form-control" id="author" aria-describedby="emailHelp" >
          <span class ="text-danger">@error('author'){{$message}} @enderror</span>
        
        </div>
        <div class="form-group mt-3">
            <label for="book">  Book </label>
            <input type="text" name ="book" value = "{{$data->book}}" class="form-control" id="book" aria-describedby="emailHelp" >
            <span class ="text-danger">@error('book'){{$message}} @enderror</span>
          
          </div>
          <div class="form-group mt-3">
            <label for="publisher"> Publisher </label>
            <input type="text" name ="publisher" value = "{{$data->publisher}}" class="form-control" id="publisher" aria-describedby="emailHelp" >
            <span class ="text-danger">@error('publisher'){{$message}} @enderror</span>
          
          </div>
        <div class="form-group">
          <label for="isbn">ISBN</label>
          <input type="text" name ="isbn"  value = "{{$data->isbn}}"  class="form-control" id="isbn" aria-describedby="emailHelp" >
          <span class ="text-danger">@error('isbn'){{$message}} @enderror</span>
        </div>

        <div class="form-group">
          <label for="type"> Type</label>
          <select name="type" id="type" class="form-control required" >
              <option   value="" disabled>Select One</option>
              <option value="humorous"{{$data->type == 'humorous'? 'selected':''}}>Humorous</option>
                <option value="serious" {{$data->type == 'serious' ? 'selected':''}}>Serious</option>
                
                
              </select>
              <span class ="text-danger">@error('type'){{$message}} @enderror</span>
        
      </div>
      <div class="form-group">

        
        <label for="characters"> Characters </label>
        <select name="characters" id="characters" class="form-control required" >    
            <option   value = "" disabled>Select One</option>
            <option value="male" {{$data->characters == 'male'? 'selected':''}} >Male</option>
              <option value="female" {{$data->characters == 'female'? 'selected':''}}>Female</option>
              <option value="all"{{$data->characters == 'all'? 'selected':''}}>All</option>  
            </select>
            <span class ="text-danger">@error('characters'){{$message}} @enderror</span>
      
    </div>
    <div class="form-group">
        <label for="rating"> Rating </label>
        <select name="rating" id="rating" class="form-control required">
            <option   value="" disabled>Select One</option>
            <option value="G-All Ages"   {{$data->rating == 'G-All Ages'? 'selected':''}}>G-All Ages</option>
              <option value="PG-Middle School Appropriate"{{$data->rating == 'PG-Middle School Appropriate'? 'selected':''}}>PG-Middle School Appropriate</option>
              <option value="PG-13-High School" {{$data->rating == 'PG-13-High School'? 'selected':''}} >PG-13-High School</option> 
              <option value="R-rating"{{$data->rating == 'R-rating'? 'selected':''}}>R-rating</option>  

            </select>
            <span class ="text-danger">@error('rating'){{$message}} @enderror</span>
      
    </div>
    <div class="form-group">
        <label for="award_id"> Awards </label>
        <select name="award_id" id="award_id" class="form-control required">

            
            <option   value="" disabled>Select One</option>
           

            @foreach ($awards as $item)
                
            <option value="{{$item->id }}" {{$item->id == ($data->awards->id ?? '') ? 'selected':''}}>{{$item->awards_name}}</option>
              
            @endforeach

            </select>
            <span class ="text-danger">@error('award_id'){{$message}} @enderror</span>
      
    </div>
    <div class="form-group">
        <label for="theme_id"> Theme </label>
        <select name="theme_id" id="theme_id" class="form-control required">
            <option   value="" disabled>Select One</option>

            @foreach ($theme as $item)
                
            <option value="{{$item->id}}"{{$item->id == ($data->theme->id ?? '') ? 'selected':''}}  >{{$item->name}}</option>
              
            @endforeach

            </select>
            <span class ="text-danger">@error('theme_id'){{$message}} @enderror</span>
      
    </div>
    <div class="form-group">
        <label for="category_id"> Category </label>
        <select name="category_id" id="category_id" class="form-control required">
            <option   value="" disabled>Select One</option>

            @foreach ($category as $item)
                
            <option value="{{$item->id}}"{{$item->id == ($data->category->id ?? '') ? 'selected':''}}  >{{$item->name}}</option>
              
            @endforeach

            </select>
            <span class ="text-danger">@error('category_id'){{$message}} @enderror</span>
      
    </div>
       
      
        
      <div class="form-group">
        <label for="summary" >Summary</label>
   <textarea name="summary" id="summary"   class="form-control"cols="50" rows="10  ">{{$data->summary}}</textarea>        
    <span class ="text-danger">@error('summary'){{$message}} @enderror</span>
      </div>

      <div class="form-group mt-3">
        <label for="book" >  Public: </label> <br>

        <label for="book">  Yes  </label>

        <input type="radio" name ="public" value = '1' {{$data->public == '1'? 'checked' :''}} class="" id="yes" aria-describedby="emailHelp" >

        <label for="book">  No  </label>

        <input type="radio" name ="public" value = '0' {{$data->public == '0'? 'checked' :''}} class="" id="no" aria-describedby="emailHelp" >

        <span class ="text-danger">@error('book'){{$message}} @enderror</span>
      
      </div>
    
      <a href="{{url('admin/data')}}" class="btn btn-danger">Cancel</a>
      
      <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
   </div>
    

    </div>
    </div>

    @endsection

{{-- </body>
</html> --}}


  @extends('admin.dashboard.layout.main')

  @section('content')
    <div class="container mt-1 pt-4 pb-4">
        <div class="card">
          <div class="card-header d-flex">
            <h4>Edit Data</h4>
          </div>
    
   <div class="card-body">
    <form action="{{url('admin/updateextemp/'.$topic->id)}}" method ="post" enctype="multipart/form-data">
      @csrf
     
     @method('put')
      
      
    
        <div class="form-group">
          <label for="type"> Type</label>
          <select name="type" id="type" class="form-control required">
              <option   value="" disabled>Select One</option>
              <option value="domestic"{{$topic->type=='domestic' ? 'selected':''}} >Domestic</option>
                <option value="foreign" {{$topic->type=='foreign'? 'selected':''}}>Foreign</option>
                
                
              </select>
              <span class ="text-danger">@error('type'){{$message}} @enderror</span>
        
      </div>
      
    <div class="form-group">
        <label for="topic_id"> Topic </label>
        <select name="topic_id" id="topic_id" class="form-control required">
            <option   value="" disabled>Select One</option>

            @foreach ($extemptopic as $item)
                
            <option value="{{$item->id}}" {{$item->id == $topic->topic_id ? 'selected' :''}}  >{{$item->name}}</option> 
              
             @endforeach

            </select>
            <span class ="text-danger">@error('topic_id'){{$message}} @enderror</span>
      
    </div>

       
      <div class="form-group">
        <label for="question" >Question</label>
   <textarea name="question" id="question"  class="form-control"cols="50" rows="10    ">  {{$topic->question}}  </textarea>        
    <span class ="text-danger">@error('question'){{$message}} @enderror</span>
      </div>


      <div class="form-group">
        <label for="month"> Date:</label>
        <select name="month" id="month" >
            <option value="01" {{$topic->month== '01' ? 'selected':''}}>Jan</option>
            <option value="02" {{$topic->month== '02' ? 'selected':''}}>Feb</option>
            <option value="03" {{$topic->month== '03' ? 'selected':''}}>Mar</option>
            <option value="04" {{$topic->month== '04' ? 'selected':''}}>Apr</option>
            <option value="05" {{$topic->month== '05' ? 'selected':''}}>May</option>
            <option value="06" {{$topic->month== '06' ? 'selected':''}}>June</option>
            <option value="07" {{$topic->month== '07' ? 'selected':''}}>July</option>
            <option value="08" {{$topic->month== '08' ? 'selected':''}}>Aug</option>
            <option value="09" {{$topic->month== '09' ? 'selected':''}}>Sep</option>
            <option value="10" {{$topic->month== '10' ? 'selected':''}}>Oct</option>
            <option value="11" {{$topic->month== '11' ? 'selected':''}}>Nov</option>
            <option value="12" {{$topic->month== '12' ? 'selected':''}}>Dec</option>
          </select>
        

          <select name="year" id="year" >
            <option value="2012" {{$topic->year == '2012' ? 'selected':''}}>2012 </option>
            <option value="2013"{{$topic->year == '2013' ? 'selected':''}}>2013</option>
            <option value="2014"{{$topic->year == '2014' ? 'selected':''}}>2014</option>
            <option value="2015"{{$topic->year == '2015' ? 'selected':''}}>2015</option>
            <option value="2016"{{$topic->year == '2016' ? 'selected':''}}>2016</option>
            <option value="2017"{{$topic->year == '2017' ? 'selected':''}}>2017</option>
            <option value="2018"{{$topic->year == '2018' ? 'selected':''}}>2018</option>
            <option value="2019"{{$topic->year == '2019' ? 'selected':''}}>2019</option>
            <option value="2020"{{$topic->year == '2020' ? 'selected':''}}>2020</option>
            <option value="2021"{{$topic->year == '2021' ? 'selected':''}}>2021</option>
            <option value="2022"{{$topic->year == '2022' ? 'selected':''}}>2022</option>
            <option value="2023"{{$topic->year == '2023' ? 'selected':''}} >2023</option>
          </select>
            <span class ="text-danger">@error('month'){{$message}} @enderror</span>
      
    </div>
    


      
    
      <a href="{{url('admin/extemp')}}" class="btn btn-danger">Cancel</a>
      
      <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
   </div>
    

    </div>
    </div>

    @endsection

{{-- </body>
</html> --}}
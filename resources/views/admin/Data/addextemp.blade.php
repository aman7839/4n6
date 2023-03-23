

  @extends('admin.dashboard.layout.main')

  @section('content')
    <div class="container mt-1 pt-4 pb-4">
        <div class="card">
          <div class="card-header d-flex">
            <h4>Add Data</h4>
          </div>
    
   <div class="card-body">
    <form action="{{url('admin/saveextemp')}}" method ="post" enctype="multipart/form-data">
      @csrf
     
     
      
      
    
        <div class="form-group">
          <label for="type"> Type</label>
          <select name="type" id="type" class="form-control required">
              <option   value="" disabled>Select One</option>
              <option value="domestic" selected>Domestic</option>
                <option value="foreign">Foreign</option>
                
                
              </select>
              <span class ="text-danger">@error('type'){{$message}} @enderror</span>
        
      </div>
      
    <div class="form-group">
        <label for="topic_id"> Topic </label>
        <select name="topic_id" id="topic_id" class="form-control required">
            <option   value="" >Select One</option>

            @foreach ($topic as $item)
                
            <option value="{{$item->id}} " >{{$item->name}}</option>
              
            @endforeach

            </select>
            <span class ="text-danger">@error('topic_id'){{$message}} @enderror</span>
      
    </div>

    <div class="form-group mt-3">
      <label for="name"> New Topic </label>
      <input type="text" name ="name"  class="form-control" id="name" aria-describedby="" >
    
    </div>

       
      <div class="form-group">
        <label for="question" >Question</label>
   <textarea name="question" id="question"  class="form-control"cols="50" rows="10    ">  {{old('question')}}  </textarea>        
    <span class ="text-danger">@error('question'){{$message}} @enderror</span>
      </div>


      <div class="form-group">
        <label for="month"> Date:</label>
        <select name="month" id="month" >
            <option value="01">Jan</option>
            <option value="02">Feb</option>
            <option value="03">Mar</option>
            <option value="04">Apr</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">Aug</option>
            <option value="09">Sep</option>
            <option value="10">Oct</option>
            <option value="11">Nov</option>
            <option value="12">Dec</option>
          </select>
        

          <select name="year" id="year" >
            <option value="2012">2012 </option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022"selected>2022</option>
            <option value="2023" >2023</option>
          </select>
            <span class ="text-danger">@error('month'){{$message}} @enderror</span>
      
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
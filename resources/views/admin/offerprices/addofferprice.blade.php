
    @extends('admin.dashboard.layout.main')

    @section('content')
<div class="container mt-1 pt-4 pb-4">
    <div class="card">
      <div class="card-header d-flex">
        <h4>Add Offer Price</h4>
        {{-- <h4 class="ml-auto"><a href="{{url('/admin/addcategory')}}" class="btn btn-primary btn-sm ">Back</a></h4> --}}
      </div>

<div class="card-body">
  <form action="{{url('admin/saveofferprice')}}" method ="post" enctype="multipart/form-data">
    @csrf
   
    
    
    
    
    <div class="form-group mt-3">
        <label for="price"> Price</label>
        <input type="text" name ="price" value = "{{old('price')}}" class="form-control" id="price" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('price'){{$message}} @enderror</span>
      </div>
      <div class="form-group mt-3">
        <label for="offer_price"> Offer Price</label>
        <input type="text" name ="offer_price" value = "{{old('offer_price')}}" class="form-control" id="offer_price" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('offer_price'){{$message}} @enderror</span>
      </div>
      <div class="form-group mt-3">
        <label for="from_date"> From Date</label>
        <input type="date" name ="from_date" value = "{{old('from_date')}}" class="form-control" id="from_date" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('from_date'){{$message}} @enderror</span>
      </div>
     
      <div class="form-group mt-3">
        <label for="to_date"> To Date</label>
        <input type="date" name ="to_date" value = "{{old('to_date')}}" class="form-control" id="to_date" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('to_date'){{$message}} @enderror</span>
      </div>
      
      <div class="form-group mt-3">
        <label for="description"> Description</label>
        <input type="text" name ="description" value = "{{old('description')}}" class="form-control" id="description" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('description'){{$message}} @enderror</span>
      </div>


                            <div class="form-group mt-3">
                                <label for="status">Select Status</label>
                                <select name="status" id="status" class = "form-control">
                                    <option  value="" disabled >Select One</option>
                                    <option value="1" >Active</option>
                                      <option value="0">Inactive</option>
                               <span class ="text-danger">@error('status'){{$message}} @enderror</span>


                                </select>
                                
                            </div>
      
      
      <a href="{{url('admin/offerprice')}}" class="btn btn-danger">Cancel</a>
    
    <button type="submit" name="submit" class="btn btn-success">Submit</button>
  </form>
</div>


</div>
</div>



@endsection

    @extends('admin.dashboard.layout.main')

    @section('content')
<div class="container mt-1 pt-4 pb-4">
    <div class="card">
      <div class="card-header d-flex">
        <h4>Edit Offer Price</h4>
      </div>

<div class="card-body">
  <form action="{{url('admin/updateofferprice/'.$editOfferPrice->id)}}" method ="post" enctype="multipart/form-data">
    @csrf
   
    @method('put')
    
    
    
    <div class="form-group mt-3">
        <label for="price"> Actual Price</label>
        <input type="text" name ="price" value = "{{$editOfferPrice->price}}" class="form-control" id="price" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('price'){{$message}} @enderror</span>
      </div>
      <div class="form-group mt-3">
        <label for="offer_price"> Offer Price</label>
        <input type="text" name ="offer_price" value = "{{$editOfferPrice->offer_price}}" class="form-control" id="offer_price" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('offer_price'){{$message}} @enderror</span>
      </div>
      <div class="form-group mt-3">
        <label for="from_date"> From Date</label>
        <input type="date" name ="from_date" value = "{{$editOfferPrice->from_date}}" class="form-control" id="from_date" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('from_date'){{$message}} @enderror</span>
      </div>
     
      <div class="form-group mt-3">
        <label for="to_date"> To Date</label>
        <input type="date" name ="to_date" value = "{{$editOfferPrice->to_date}}" class="form-control" id="to_date" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('to_date'){{$message}} @enderror</span>
      </div>
      
      <div class="form-group mt-3">
        <label for="description"> Description</label>
        <input type="text" name ="description" value = "{{$editOfferPrice->description}}" class="form-control" id="description" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('description'){{$message}} @enderror</span>
      </div>
      <div class="form-group mt-3">
        <label for="status">Select Status</label>
        <select name="status" id="status" class = "form-control">
            <option  value="" disabled >Select One</option>
            <option value = "1" {{$editOfferPrice->status == '1'? 'selected': '' }} >Active</option>
              <option  value= "0" {{$editOfferPrice->status == '0' ? 'selected': ''}} >Inactive</option>
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
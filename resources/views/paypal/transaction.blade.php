@extends('frontendviews.main')

    @section('content')
<div>



<section class="space transactions">
    <div class="custom_container">
         
      
            <div class="paypal_info">
               <h3>Membership amount: <strong>{!! $offerPrice ? '<del>': ''!!}{{$price->price}}{!! $offerPrice ? '</del>': '' !!} {{$payablePrice}}</strong></h3>
            </div>
   
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">PayPal</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Cheque Payment</button>
            </li>
           
          </ul>
          <div class="tab-content pt-5" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="transcetion_card">
                    <div class="paypal_info">
                       <a class="cmn_btn" href="{{route('processTransaction')}}">Pay ${{$payablePrice}}</a>
                    </div>
              </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="chekform transcetion_card">
                    <form action="{{ route('submitcheque') }}" id="transaction_form" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Full Name</label>
                                    <input type="text" placeholder="Full Name" name="accountholder_name" class="form-control required" required>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Cheque no.</label>
                                    <input type="text" placeholder="Cheque no." name="cheque_number" class="form-control required" required>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Bank Name</label>
                                    <input type="text" placeholder="Bank Name" name="bank_name" class="form-control required" required>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Upload Image</label>
                                    <input type="file" placeholder="Full Name" name="file" class="form-control required mb-2" onchange="readURL(this);" required>
                                    <a class="example-image-link" href="#" id="light-cheque"
                                        data-lightbox="example-set" data-title="Click the right half of the image to move forward." style="display: none"><img id="blah" src="#" alt="your image"  /></a>
                                </div>
                        </div>
                        <div class="col-12 text-center mt-2">
                            <button class="cmn_btn">Submit</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
              
          </div>
    </div>
</section>
</div>
@section('script')
    <script>
        function readURL(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            $('#light-cheque').css('display', 'block');
        $('#blah').attr('src', e.target.result).width(200).height(100);
        $('#light-cheque').attr('href', e.target.result);
        };
        
        reader.readAsDataURL(input.files[0]);
        }
        }
      $(document).ready(function() {
        // validtions starts here
        $("#transaction_form").validate({
    //           rules: {
    //             password: {
    //               required: true,
    //               minlength: 5,
    //             },
    //             confirmpassword: {
    //       minlength: 5,
    //       equalTo: '[name="password"]'
    //   }
    //           },
              messages: {
                accountholder_name: {
                  required: "Please enter account holder name"
                },
                cheque_number:{
                    cheque_number: "Please enter account number"
                },
                bank_name: {
                  required: "Please enter bank name"
                },
              },
              submitHandler: function(form, event) {
                  // event.preventDefault();
                  jQuery(form).submit();
                  
              }
          });
        })
    </script>
    @endsection

    @endsection
@extends('admin.dashboard.layout.main')

@section('content')
<div>
    <section class="space transactions">
        <div class="content">
         
             <div class="card p-3">

                {{-- <div class="col-12 text-center mt-2"> --}}
                    {{-- <button class="btn btn-primary btn-lg" type="submit">Update</button> --}}
                    <a href="{{ route('admin.activeMembership') }}" class="btn btn-primary">Go Back</a>
                {{-- </div> --}}
                <form action="{{route('admin.updateMembership')}}" id="transaction_form" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="">Full Name: <a href="{{url('admin/viewUsers/'.$membership->user->id)}}">{{$membership->user->name}}</a></label>
                                <input type="hidden" class="form-control" name="membership_id" value="{{$membership->id}}"/>
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="">Amount Paid: $ {{$membership->amount}}</label>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Membership start-end date</label>
                            <input type="text" class="form-control" name="daterange" value="" readonly/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Membership Status</label>
                            <select name="status" id="membership-status" class="form-control">
                                <option value="">--Select--</option>
                                <option value="1" {{$membership->status=='1' ? 'selected':''}}>Active</option>
                                <option value="2" {{$membership->status=='2' ? 'selected':''}}>Expired</option>
                                <option value="3" {{$membership->status=='3' ? 'selected':''}}>Canceled</option>
                              </select>
                        </div>
                    </div>
                    @if($membership->payment_mode=='cheque')
                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Cheque no.</label>
                                <input type="text" placeholder="Cheque no." name="cheque_number" class="form-control required" value="{{$membership->cheque_number}}" required>
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Bank Name</label>
                                <input type="text" placeholder="Bank Name" name="bank_name" class="form-control required" value="{{$membership->bank_name}}" required>
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Upload Image</label>
                                <input type="file" placeholder="Full Name" name="file" class="form-control required mb-4    " onchange="readURL(this);">
                                {{-- <a class="example-image-link mt-3" href="{{asset('public/'.$membership->cheque_image)}}" id="light-cheque"
                                    data-lightbox="example-set" data-title="Click the right half of the image to move forward." ><img id="blah" src="{{asset('public/'.$membership->cheque_image)}}" alt="your image" width="300" height="300"  /></a> --}}
                            </div>
                    </div>
                    @endif
                    @if($membership->payment_mode=='paypal')

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Paypal transaction id: {{$membership->paypal_transaction_id}}</label>
                        </div>
                </div>
                    @endif
                    <div class="col-12 text-center mt-2">
                        <button class="btn btn-primary btn-lg" type="submit">Update</button>
                        <a href="{{ route('admin.activeMembership') }}" class="btn btn-danger btn-lg">Cancel</a>
                    </div>
                </div>
            </form>
                
             </div>
           
        </div>
    </section>
</div>
@section('footer-scripts')
<script>
 function readURL(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            jQuery('#light-cheque').css('display', 'block');
        jQuery('#blah').attr('src', e.target.result).width(200).height(100);
        jQuery('#light-cheque').attr('href', e.target.result);
        };
        
        reader.readAsDataURL(input.files[0]);
        }
        }
jQuery(document).ready(function() {
    jQuery('input[name="daterange"]').daterangepicker({
        locale: {
      format: 'MM/DD/YYYY'
    },
    startDate: "<?php echo date('m/d/Y', strtotime($membership->start_date)) ?>",
    endDate: "<?php echo date('m/d/Y', strtotime($membership->end_date)) ?>",
        opens: 'left'
    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
})
</script>
@endsection

@endsection
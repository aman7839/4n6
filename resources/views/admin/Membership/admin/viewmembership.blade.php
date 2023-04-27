@extends('admin.dashboard.layout.main')

@section('content')
<div>
    <section class="space transactions">
        <div class="content">
          <div class="admin_view_mem my_membership">
             <h5>Name: <br> <a href="{{url('admin/viewUsers/'.$membership->user->id)}}"><span>{{$membership->user->name ?? ''}}</span></a></h5>
           <h5>Start Date: <br> <span> {{date('Y-m-d', strtotime($membership->start_date))}}</span></h5>
          <h5> End Date: <br><span> {{date('Y-m-d', strtotime($membership->start_date))}}</span></h5>
          <h5> Amount: <br> <span>{{$membership->amount}}</span></h5>
           @if($membership->payment_mode=='cheque')
           <h5> Cheque Number: <br><span> {{$membership->cheque_number}}</span></h5>
          <h5>  Bank Name: <br> <span>{{$membership->bank_name}}</span></h5>
           <h5> Account Holder Name: <br><span> {{$membership->accountholder_name}}</span></h5>
           <h5>
            cheque: <br> <div>
                <a class="example-image-link" href="{{asset('public/'.$membership->cheque_image)}}" id="light-cheque"
                    data-lightbox="example-set" data-title="Click the right half of the image to move forward." >
                    <img id="blah" src="{{asset('public/'.$membership->cheque_image)}}" alt="your image" width="40" height="40"  /></a>
            </div>
           </h5>
           @endif

           @if($membership->payment_mode=='paypal')
           <h3> Paypal Transaction Id: <br> <span> {{$membership->paypal_transaction_id}}</span> </h3>
           @endif
          <div class="w-100">
            <a href="{{ url()->previous() }}" class="btn btn-danger btn-sm">Go Back</a>    
        </div> 
          </div>
        </div>
    </section>
</div>

</section>
@section('footer-scripts')
<script>

jQuery(document).ready(function() {

})
</script>
@endsection

@endsection
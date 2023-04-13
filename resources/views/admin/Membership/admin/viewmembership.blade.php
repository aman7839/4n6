@extends('admin.dashboard.layout.main')

@section('content')
<div>
    <section class="space transactions">
        <div class="content">
           Name: <a href="{{url('admin/viewUsers/'.$membership->user->id)}}">{{$membership->user->name ?? ''}}</a>
           Start Date:  {{date('Y-m-d', strtotime($membership->start_date))}}
           End Date: {{date('Y-m-d', strtotime($membership->start_date))}}
           Amount: {{$membership->amount}}
           @if($membership->payment_mode=='cheque')
            Cheque Number: {{$membership->cheque_number}}
            Bank Name: {{$membership->bank_name}}
            Account Holder Name: {{$membership->accountholder_name}}
            cheque: <a class="example-image-link" href="{{asset('public/'.$membership->cheque_image)}}" id="light-cheque"
                data-lightbox="example-set" data-title="Click the right half of the image to move forward." ><img id="blah" src="{{asset('public/'.$membership->cheque_image)}}" alt="your image" width="200px" height="100px"  /></a>
           @endif

           @if($membership->payment_mode=='paypal')
            Paypal Transaction Id: {{$membership->paypal_transaction_id}}
           @endif
           <a href="{{ url()->previous() }}" class="btn btn-danger btn-sm">Go Back</a> 
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
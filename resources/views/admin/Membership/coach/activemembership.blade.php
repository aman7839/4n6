@extends('admin.dashboard.layout.main')

@section('content')
<div>



<section class="space transactions">
    <div class="content">
        <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="active-tab" data-toggle="tab" href="#activememberships" role="tab" aria-controls="activememberships" aria-selected="true">Active Membership</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="previous-tab" data-toggle="tab" href="#pastsMembership" role="tab" aria-controls="pastMembership" aria-selected="false">Past Membership</a>
            </li>

          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="activememberships" role="tabpanel" aria-labelledby="home-tab">
              <div class="transcetion_card">
               <div class="my_membership">
      
                @if($activeMembership)
              <h5> id: <span> {{$activeMembership->id}}</span></h5>
               <h5> Start Date:  <span>{{ date('Y-m-d', strtotime($activeMembership->start_date)) }}</span></h5>
              <h5>  End Date:  <span>{{ date('Y-m-d', strtotime($activeMembership->end_date)) }}</span></h5>
              <h5>  Amount Paid:  <span>$ {{$activeMembership->amount}}</span></h5>
                @if($activeMembership->user_message && $activeMembership->user_message !='')
                Admin message: {{$activeMembership->user_message}}
                @endif
                @else

                <p><a class="btn btn-primary" href="{{route('createTransaction')}}">Add New Membership</a></p>

                   <div class="no_membership">

                    <div class="no_membership">
                      <img src="{{asset('/public/4n61/images/undraw_subscribe_vspl.svg')}}" class="img-fluid" alt="">
                      <p>No membership found.</p>
                     </div>
                   </div>
                @endif
               </div>
          </div>
            </div>
            <div class="tab-pane fade" id="pastsMembership" role="tabpanel" aria-labelledby="pastMembership-tab">
              <div class="transcetion_card">
                @if(count($pastMemberships)>0)
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($pastMemberships as  $pastmember)

                        <tr>
                            <th scope="row">{{$pastmember->id}}</th>
                            <td>{{date('Y-m-d', strtotime($pastmember->start_date))}}</td>
                            <td>{{date('Y-m-d', strtotime($pastmember->end_date))}}</td>
                            <td>{{$pastmember->amount}}</td>
                            <td>{{$pastmember->status}}</td>
                          </tr>
                   
                        @endforeach
                   </tbody>
                  </table>
                  @else
                 <div class="no_membership">
                  <img src="{{asset('/public/4n61/images/undraw_subscribe_vspl.svg')}}" class="img-fluid" alt="">
                  <p>No membership found.</p>
                 </div>
                @endif
            </div>
            </div>

          </div>

    </div>
</section>
        @section('footer-scripts')
    <script>
       
      jQuery(document).ready(function() {
        
    })
    </script>
    @endsection

    @endsection
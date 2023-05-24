@extends('admin.dashboard.layout.main')

@section('content')
<div>
    <section class="space transactions">
        <div class="content">
            <div class="card">
                <div class="card-header mb-3">
                    <h4>Past Membership</h4>
                </div>
                <div class="p-2">
                    <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pastmembership as  $pastmember)
                    <tr>
                        <th scope="row">{{$pastmember->id}}</th>
                        <th><a href="{{url('admin/viewUsers/'.$pastmember->user->id)}}">{{$pastmember->user->name ?? ''}}</a></th>
                        <td>{{date('Y-m-d', strtotime($pastmember->start_date))}}</td>
                        <td>{{date('Y-m-d', strtotime($pastmember->end_date))}}</td>
                        <td>{{$pastmember->amount}}</td>
                        <td>
                            @switch($pastmember->status)
                            @case(1)
                                Active
                                @break
                            @case(2)
                                Expired
                                @break
                            @case(3)
                                Canceled
                                @break
                            @default
                                Inactive
                    @endswitch    
                        </td>
                        <td><div class="d-flex">
                            <a href={{url('admin/editmembership/'.$pastmember->id)}} class="btn btn-primary btn-sm m-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href={{url('admin/viewmembership/'.$pastmember->id)}} class="btn btn-success btn-sm m-1"><i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </div>
                       </td>
                      </tr>
               
                    @endforeach
               </tbody>
              </table>
              <span>{{ $pastmembership->links()}}</span>
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
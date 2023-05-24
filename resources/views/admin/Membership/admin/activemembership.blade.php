@extends('admin.dashboard.layout.main')

@section('content')
<div>
    <section class="space transactions">
        <div class="content">
          <div class="card">
            <div class="card-header mb-3">
                <h4 class="title_cmn">Subsciptions details</h4>
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
                        @foreach ($activeMembership as  $activemember)
                        <tr>
                            <td scope="row">{{$activemember->id}}</td>
                            <td><a href="{{url('admin/viewUsers/'.$activemember->user->id)}}">{{$activemember->user->name ?? ''}}</a></td>
                            <td>{{date('Y-m-d', strtotime($activemember->start_date))}}</td>
                            <td>{{date('Y-m-d', strtotime($activemember->end_date))}}</td>
                            <td>{{$activemember->amount}}</td>
                            <td>
                    @switch($activemember->status)
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
                                New
                    @endswitch
                            </td>
                            <td><div class="d-flex justify-content-center">
                                <a href={{url('admin/editmembership/'.$activemember->id)}} class="btn btn-primary btn-sm m-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <a href={{url('admin/viewmembership/'.$activemember->id)}} class="btn btn-success btn-sm m-1"><i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </div>
                           </td>
                          </tr>
                   
                        @endforeach
                   </tbody>
                  </table>
                  <span>{{ $activeMembership->links()}}</span>
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
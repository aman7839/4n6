@extends('admin.dashboard.layout.main')

@section('content')

<div class="">
    <div class="row m-2">
        <div class="col-md-12">

        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-header ida_header">
                    <div class="d-flex">
                        <h4><a href="{{ url('admin/data')}}" class="btn btn-secondary btn-sm "> <i class="fa fa-chevron-left"></i> Back</a></h4>
                        <h4 class="title_cmn">IDA Manager</h4>
                    </div>
                    <h4><a href="{{ url('admin/addtopicroles')}}" class="btn btn-primary btn-sm admin_cm_btn"> <i class="fa fa-plus mr-2"></i> Add Record</a></h4>


                </div>


                <div class="card-body">
                    <div class="ida_filter">
                        <form action="">
                            <div class="form-group search_bar">

                                <input type="search" name="search" id="" class="form-control" placeholder="Search Here" aria-describedby="helpId" value="{{$search}}">
                                <button class="btn btn-primary admin_cm_btn">Search</button>
                                <a href="{{url('admin/topicroles')}}"><i class="fa fa-times"></i></a>

                            </div>


                        </form>
                        <form action="{{url("admin/importisgdata")}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <fieldset>
                                <label>Select File to Upload <small class="warning text-muted">{{__('Please upload only Excel (.xlsx or .xls) files')}}</small></label>
                                <div class="form-group search_bar">
                                    <input type="file" required class="form-control" name="uploaded_file" id="uploaded_file">
                                    <button class="btn btn-primary square admin_cm_btn" type="submit"><i class="ft-upload mr-1"></i> Import Data</button>
                                </div>
                                @if ($errors->has('uploaded_file'))
                                <p class="mb-0">
                                    <small class="text-danger" id="file-error">{{ $errors->first('uploaded_file') }}</small>
                                </p>
                                @endif

                            </fieldset>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Topic</th>

                                    <th>Info</th>

                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topic as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->info }}</td>





                                    <td>
                                        <a href={{url('admin/edittopicroles/'.$item->id)}} class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>

                                        <a href={{url('admin/deletetopicroles/'.$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    @if($topic->count()== 0)
                    <div class="nodata_found">
                        <img src="{{asset('/public/4n61/images/no_data.svg')}}" alt="">
                    </div>
                    @endif
                    <span>{{ $topic->Links()}}</span>
                    <style>
                        .w-5 {
                            display: none;

                        }
                    </style>



                </div>

            </div>
        </div>
    </div>
</div>

@endsection
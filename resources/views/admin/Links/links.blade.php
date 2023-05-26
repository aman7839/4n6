@extends('admin.dashboard.layout.main')

@section('content')

<div class="p-3 pt-4 pb-4">
    <div class="row m-0">
        <div class="col-md-12">

        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-header ida_header">
                    <h4 class="title_cmn">Manage Links</h4>
                    <h4><a href="{{ url('admin/addcategory  ')}}" class="btn btn-primary btn-sm admin_cm_btn"> <i class="fa fa-plus mr-2"></i> Add Category</a></h4>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group  search_bar">

                            <input type="search" name="search" id="" class="form-control" placeholder="Search Here" aria-describedby="helpId" value="{{$search}}">
                            <button class="btn btn-primary admin_cm_btn">Search</button>
                            <a href="{{url('admin/category')}}"><i class="fa fa-times"></i></a>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>


                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>View Links</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>


                                    <td>
                                        <a href={{url("admin/editlinks/".$item->id)}} class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>

                                        <a href={{url("admin/deletelinks/".$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>

                                    </td>
                                    <td>

                                        <a href={{url("admin/links?cat_id=".$item->id)}} class="btn btn-info btn-sm admin_cm_btn">View Links

                                        </a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    @if($category->count()== 0)
                    <div class="nodata_found">
                        <img src="{{asset('/public/4n61/images/no_data.svg')}}" alt="">
                    </div>
                    @endif
                    <span>{{ $category->Links()}}</span>
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
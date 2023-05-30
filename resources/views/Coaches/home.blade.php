
@extends('admin.dashboard.layout.main')

@section('content')

<div class="container-fluid pt-4">
    <div class="row m-0">
       <div class="col-md-12">

  
                {{-- @foreach ($pageContent as $content) --}}
                {!! ($pageContent[0]->page_description) !!}
                {{-- @endforeach --}}
                  
                    
          
        </div>
    </div>
</div>

@endsection



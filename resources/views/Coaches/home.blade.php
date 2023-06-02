
@extends('admin.dashboard.layout.main')

@section('content')

<div class="container-fluid pt-4">
    <div class="row m-0">
       <div class="col-md-12">

  
                {{-- @foreach ($pageContent as $content) --}}

                @if(count($pageContent)>0)
                {!! ($pageContent[0]->page_description) !!}

                @else
                    <h3>No data found</h3>
                @endif
                {{-- @endforeach --}}
                  
                    
          
        </div>
    </div>
</div>

@endsection



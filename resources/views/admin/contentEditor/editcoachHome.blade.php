@extends('admin.dashboard.layout.main')

@section('content')
<div class="p-3 pt-4 pb-4">
  <div class="card">
    <div class="card-header d-flex">
      <h4 class="title_cmn">Update Data</h4>
    </div>

    <div class="card-body">
      <form action="{{url('admin/editcontent/'.$editPageContent->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-12">
              <div class="form-group mt-3">
                <label for="topic"> Content </label>
                <textarea  class="ckeditor form-control" name="description">{{$editPageContent->page_description}}</textarea>
               
              </div>
            </div>
          

        {{-- <div class="row">
          <div class="col-md-6">
            <div class="form-group mt-3">
              <label for="topic"> Topic </label>
              <input type="text" name="topic" value="{{$editPageContent->topic}}" class="form-control" id="topic" aria-describedby="emailHelp">
              <span class="text-danger">@error('info'){{$message}} @enderror</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mt-3">
              <label for="info"> Info </label>
              <input type="text" name="info" value="{{$editPageContent->info}}" class="form-control" id="info" aria-describedby="emailHelp">
              <span class="text-danger">@error('info'){{$message}} @enderror</span>
            </div>
          </div> --}}
          <div class="col-12">
            <a href="{{url('admin/content')}}" class="btn btn-danger">Cancel</a>
            <button type="submit" name="submit" class="btn btn-success admin_cm_btn">Save content</button>
          </div>
        </div>
        
      </form>
    </div>


  </div>
</div>
{{-- CKEditor CDN --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.13/js/froala_editor.pkgd.min.js"></script>
<script>
    $(document).ready(function() {
        var editor = new FroalaEditor('.ckeditor');
    });
</script>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
    .create( document.querySelector( '.ckeditor' ) )
    .catch( error => {
    console.error( error );
    } );
    </script> --}}

{{-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> --}}
{{-- <script type="text/javascript">
    $(document).ready(function() {
    //    editor.resize( '100%', '350' )
       $('.ckeditor').ckeditor({


       });
    });
</script> --}}
@endsection

{{-- </body>
</html> --}}
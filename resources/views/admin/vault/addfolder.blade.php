@extends('admin.dashboard.layout.main')



@section('content')


    <style>
        /* label.error {
            color: #dc3545;
            font-size: 14px;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
       width: 300px;
          } */
       /* .auther_outer{
       margin: 12px 0px;
        }
        .select_item {
    position: absolute;
    top: -2px;
    left: 100px;
}

.author_inner_element {
    position: relative;
} */
    </style>
<div>



    
</div>

    <div class="content">
        <div class="">
            <div class="row">
                <div class="col-12">
                <form action="{{url("admin/importvaultfiles")}}" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <label>Select File to Upload <small class="warning text-muted">{{__('Please upload only Excel (.xlsx or .xls) files')}}</small></label>
                    <div class="form-group search_bar">
                        <input type="file" required class="form-control" name="uploaded_file" id="uploaded_file">
                        <div class="input-group-append" id="button-addon2">
                            <button class="btn btn-primary square admin_cm_btn" type="submit"><i class="ft-upload mr-1"></i> Import Data</button>
                        </div>
                    </div>
                    @if ($errors->has('uploaded_file'))
                    <p class="mb-0">
                        <small class="text-danger" id="file-error">{{ $errors->first('uploaded_file') }}</small>
                    </p>
                    @endif

                </fieldset>
            </form>
                </div>
                <div class="col-md-12 col-lg-4 col-xl-3">
                    <div class="tree">
                        <ul id="myUL">
                            @foreach ($vault_tree as $valult)
                                {{-- <li > --}}
                                    <li data-folder-id="{{ $valult->id }}" id="{{ $valult->id }}">
                                    <span class="caret {{ count($valult->nested_categories) == 0 ? 'empty_folder' : '' }}"><i
                                            class="fa fa-folder-open"></i> </span>
                                    <span class="tree_folder tree_folder_name tree_folder_editname"
                                        data-name="{{ $valult->name }}" data-id="{{ $valult->id }}">{{ $valult->name }}
                                    </span>


                                    @if (count($valult->nested_categories) > 0)
                                        @include('admin.vault.manageChild', [
                                            'childs' => $valult->nested_categories,
                                        ])
                                    @endif
                                </li>
                            @endforeach
                            <div id="ss"></div>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-9">
                  <div class="folder_breadcrumb" id="folder_breadcrumb"></div>
                    <div class="btn_selections">
                        <div>
                            <button id="create_button" class="btn btn-success">+ Create Folder</button>
                        </div>
                        <div style="display: none;" class="selected_folder_action">

                            <div>
                                <button id="edit_button" class="btn btn-primary"> <i class="fa fa-pencil"></i> Edit
                                    Folder</button>
                            </div>
                            <div>
                                <button id="delete_button" class="btn btn-danger"><i class="fa fa-trash"></i> Delete
                                    Folder</button>
                            </div>
                            <div>
                                <button id="upload_button" class="btn btn-warning"><i class="fa fa-upload"></i> Upload
                                    File</button>
                            </div>
                        </div>
                    </div>
                    <div class="get_files">
                      <div class="card">
                      <div class="table-responsive">
                      <table class="table table-bordered table-striped mb-0" id = "folder_table" >
                            <thead>
                                
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Modified</th>
                                    {{-- <th scope="col">Edit</th> --}}
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody id="files_list">

                         </tbody>
                        </table>
                      </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="foldermodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Folder <button type="button" class="close"
                            data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button></h5>
                    <!-- <input type="text" id="selectedid"> -->
                </div>
                <div class="modal-body">
                    <form class="vault_form" method="post" id="create_folder_form" action="{{ url('admin/savefolder') }}">
                        @csrf
                        <div class="form-outline">
                            <label class="form-label" for="form2Example1">Parent Folder: </label> <span
                                class="parent_name_class" id="parent-name"></span>
                        </div>
                        <div class="form-outline">
                            {{-- <label class="form-label" for="form2Example1">Folder Name</label>
<input type="text" name="name" class="form-control"  value= ""/> --}}
                            <div class="">
                                <div class="form-group">
                                    <label for="name"> Folder Name <span class="text-danger">*</span> </label>
                                    <input type="text" name="name" class="form-control" placeholder="Folder Name">
                                </div>
                            </div>
                            {{-- <div class="">
                                <div class="form-group">
                                    <label for="author_name"> Author Name <span class="text-danger">*</span> </label>
                                    <input type="text" name="author_name" class="form-control" placeholder="Author Name">
                                </div>
                            </div> --}}

                            <label class="form-label" for="form2Example1">Description</label>
                            <input type="text" name="description" class="form-control" value="" />

                            <div class="checks">
                                {{-- <div>
                                    <input type="checkbox" name="email_notification"> Send Notification Email
                                </div> --}}

                                <div>
                                    <input type="checkbox" name="coach_access"> Coach Access
                                </div>

                                <div>
                                    <input type="checkbox" name="student_access"> Student Access
                                </div>
                            </div>
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>

                            {{-- <span class="text-danger">
                                @error('author_name')
                                    {{ $message }}
                                @enderror
                            </span> --}}
                        </div>
                        <div class="form-outline">


                        </div>

                        <button type="submit" class="btn btn-success">Create New Folder</button>


                    </form>


                </div>
                <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
            </div>
        </div>
    </div>
    </div>
    <!-- //Modal -->



    <!-- Edit Modal -->
    <div class="modal fade" id="editfolder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Folder <button type="button" class="close"
                            data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button></h5>
                    <!-- <input type="text" id="selectedid"> -->

                </div>
                <div class="modal-body">
                    <form class="vault_form" method="post" id="edit_folder_for">

                        @csrf

                        <div class="form-outline">
                            <label class="form-label" for="form2Example1">Parent Folder: </label> <span
                                class="parent_name_class" id="parent-name"></span>
                        </div>

                        <div class="form-outline">
                            {{-- <label class="form-label" for="form2Example1">Folder Name</label>
          <input type="text" name="name" class="form-control"  value= ""/> --}}

                            <div class="">
                                <div class="form-group">
                                    <label for="name"> Folder Name <span class="text-danger">*</span> </label>
                                    <input type="text" id="edit_name" name="name" class="form-control"
                                        placeholder="Folder Name">
                                </div>
                            </div>

                            {{-- <div class="">
                                <div class="form-group">
                                    <label for="edit_author_name"> Author Name <span class="text-danger">*</span> </label>
                                    <input type="text" id="edit_author_name" name="edit_author_name" class="form-control"
                                        placeholder="Author Name">
                                </div>
                            </div> --}}

                            <label class="form-label" for="form2Example1">Description</label>
                            <input type="text" id="edit_desc" name="description" class="form-control" value="" />
                            {{--           
          <input type="checkbox" id="edit_notification" name="email_notification">  Send Notification Email --}}


                            <div class="checks">
                                <div>
                                    <input type="checkbox" id="edit_coach_access" name="coach_access"> Coach Access
                                </div>

                                <div>
                                    <input type="checkbox" id="edit_student_access" name="student_access"> Student Access
                                </div>

                            </div>

                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>

                            {{-- <span class="text-danger">
                                @error('edit_author_name')
                                    {{ $message }}
                                @enderror
                            </span> --}}
                        </div>


                        <div class="form-outline">


                        </div>

                        <button type="submit" class="btn btn-success">Edit Folder</button>


                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- //Modal -->

    <!-- Edit Modal -->
    <div class="modal fade" id="fileupload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fileuploadmodel">Upload File<button type="button" class="close"
                            data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button></h5>
                    <!-- <input type="text" id="selectedid"> -->

                </div>
                <div class="modal-body">
                    <form class="vault_form" action="{{ route('uploadfile') }}" method="post" enctype="multipart/form-data">

                        @csrf
                        {{-- <div class="">
                            <div class="form-group">
                                <label for="author_name"> Author Name <span class="text-danger"></span> </label>
                                <input type="text" id="author_name" name="author_name" class="form-control"
                                    placeholder="Author Name">
                            </div>
                        </div> --}}
                        <div class="auther_outer">
                            <div class="author_inner_element">
                                <label class="form-label" for="form2Example1">Author Name</label>
                            </div>
                            <div class="select_item">
                                <select class="author_name js-example-basic-single form-control" name="author_name">
        
                                    @foreach($author_name as $author)
                                    <option value="{{$author->author}}">{{$author->author}}</option>
                                    {{-- <option value="WY">Wyoming</option> --}}
        
                                    @endforeach
                                </select>
                             </div>
                        </div>
                        <label class="form-label mb-2" for="form2Example1">Upload File</label>
                        <input type="file" name="files[]" class="form-control mb-3" required multiple >
                        <input type="hidden" name="vault_id" id="vault_id" value="">
                        <button type="submit" class="btn btn-success">Upload</button>


                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- //Modal -->







    </div>
@section('footer-scripts')
    <script>
        
        jQuery(document).ready(function() {
            // var toggler = document.getElementsByClassName("caret");
            var parent_name = "";
            var parent_id = "";
            var toggler = jQuery('.caret');
            var i;
            var vault_tree = {!! json_encode($vault_tree) !!};
            console.log(vault_tree)
            const getAncestors = (target, children, ancestors = []) => {
                for (let node of children) {
                    if (node.id === target) {
                        return ancestors.concat("<p>" + node.name + "</p>");
                    }
                    const found = getAncestors(target, node.nested_categories, ancestors.concat("<p>" + node.name + "</p>"));
                    if (found) {
                        return found;
                    }
                }
                return undefined;
            };



            for (i = 0; i < toggler.length; i++) {
                toggler[i].addEventListener("click", function() {
                    this.parentElement.querySelector(".nested").classList.toggle("active");
                    this.classList.toggle("caret-down");
                });
            }
            jQuery("#create_folder_form").validate({ 
                rules: {
                    name: "required",
                },
                messages: {
                    name: "Folder name is required",
                },
                submitHandler: function(form, event) {
                    event.preventDefault();
                    var isvalid = jQuery("#create_folder_form").valid();

                    var paramObj = {};
                    jQuery.each(jQuery('#create_folder_form').serializeArray(), function(_, kv) {
                        if (paramObj.hasOwnProperty(kv.name)) {
                            paramObj[kv.name] = jQuery.makeArray(paramObj[kv.name]);
                            paramObj[kv.name].push(kv.value);
                        } else {
                            paramObj[kv.name] = kv.value;
                        }
                    });
                    paramObj.parent_id = parent_id;
                    if (isvalid) {
                        var actionurl = event.currentTarget.action;
                        jQuery.ajax({
                            url: actionurl,
                            type: 'post',
                            data: paramObj, 
                            success: function(data) {

                              //  alert(JSON.stringify(data))
                                if (data.status == true) {
    //                                 jQuery('#foldermodel').modal('hide');
    //                                 var folderName = data.data.name; // Retrieve the folder name from the response
    //     var folderId = data.data.id; // Retrieve the folder ID from the response
    //     var parentId = data.data.parent_id; // Retrieve the parent folder ID from the response

    //     // Find the parent <li> element using the parent folder ID
    //     var parentElement = jQuery('li[data-folder-id="' + parentId + '"]');

    //     // Find the nested <ul> element within the parent <li>
    //    // var nestedUl = parentElement.children('ul');

    //     // Create a new <li> element for the new folder
    //     var newFolderElement = '<li data-folder-id="' + folderId + '" id="' + folderId + '">' +
    //                                 '<span class="caret empty_folder"><i class="fa fa-folder-open"></i></span>' +
    //                                 '<span class="tree_folder tree_folder_name tree_folder_editname" data-name="' + folderName + '" data-id="' + folderId + '">' + folderName + '</span>' +
    //                                 '<ul></ul>' + // Empty nested <ul> for potential child folders
    //                             '</li>';
                                       
    //                          
    //                             jQuery('#'+parentId+' ul.nested').append(newFolderElement);
    //                            

                            
                                   window.location.reload()
                                }
                            },
                            error: function(error) {
                                console.log('error', error)
                            }
                        });
                    }
                }
            });


            jQuery("#edit_folder_for").validate({
                rules: {
                    name: "required",
                },
                messages: {
                    name: "Folder name is required",
                },
                submitHandler: function(form, event) {
                    event.preventDefault();
                    var isvalid = jQuery("#edit_folder_for").valid();

                    var paramObj = {};
                    jQuery.each(jQuery('#edit_folder_for').serializeArray(), function(_, kv) {
                        if (paramObj.hasOwnProperty(kv.name)) {
                            paramObj[kv.name] = jQuery.makeArray(paramObj[kv.name]);
                            paramObj[kv.name].push(kv.value);
                        } else {
                            paramObj[kv.name] = kv.value;
                        }
                    });
                    paramObj.parent_id = parent_id;

                    console.log(paramObj)


                    if (isvalid) {

                        jQuery.ajax({
                            url: "{{ 'editfolder' }}" + '/' + parent_id,
                            type: 'post',
                            data: paramObj,
                            success: function(data) {
                                if (data.status == true) {
                                    window.location.reload()
                                }
                            },
                            error: function(error) {
                                console.log('error', error)
                            }
                        });
                    }
                }
            });


            jQuery('#create_button').on('click', function() {
                if (parent_name == "") {
                    parent_name = "root"              

                }
                jQuery(".parent_name_class").html(parent_name);
                jQuery('#foldermodel').modal('toggle');
            })

            jQuery(".tree_folder").on('click', function() {
                parent_id = jQuery(this).data('id');
                parent_name = jQuery(this).data('name');
                jQuery("#selectedid").val(parent_id);
                jQuery("#vault_id").val(parent_id);
                var selectedFolder=this
                ///
                jQuery.ajax({
                    url: "{{ 'folder-data' }}" + '/' + parent_id,
                    type: 'get',
                    success: function(data) {
                        console.log("data", data);
                        if (data.status == true) {

                            // edit starts
                            jQuery('#edit_name').val(data.data.name);
                            jQuery('#edit_desc').val(data.data.description);
                            if (data.data.coach_access == true) {
                                jQuery('#edit_coach_access').attr("checked", true);

                            }
                            if (data.data.student_access == true) {
                                jQuery('#edit_student_access').attr("checked", true);

                            }


                            
                            if (parent_id != "") {
                            
                              jQuery("#folder_breadcrumb").html("")
                              let breadcrumb=getAncestors(parent_id, vault_tree);
                              jQuery("#folder_breadcrumb").html(breadcrumb.join("<p class='slash'>/</p>"))
                              jQuery(".selected_folder_action").css("display", "flex")
                              jQuery('#myUL li').find('.active_folder').removeClass('active_folder')
                               jQuery(selectedFolder).addClass('active_folder')
                            }
                            let filesHtml = ""
                            jQuery('#files_list').html('')
                            if (data.data.items && data.data.items.length > 0) {

                    // jQuery("#folder_table").css("display", "flex")

                                var storagePath = "<?php echo asset('public/'); ?>";
                                for (let i = 0; i < data.data.items.length; i++) {
                                    const timestamp = data.data.items[i].updated_at;
                                    const date = new Date(timestamp);
                                    let day = date.getDate();
                                    let month = date.getMonth();
                                    let year = date.getFullYear();
                                    console.log("value--", data.data.items[i].updated_at);
                                    filesHtml += "<tr>";
                                    filesHtml += "<td><a href='" + storagePath + data.data.items[i].file + "' target='_blank'>" + data.data.items[i].name + "</a></td>";
                                    filesHtml += "<td>" + `${month+1}/${day}/${year}` + "</td>";
                                    // filesHtml += "<td class='edit_file'><i class='fa fa-pencil'></i></td>";
                                    filesHtml += "<td class='delete_file' data-id='"+data.data.items[i].id+"'><i class='fa fa-trash'></i></td>";
                                    filesHtml += "</tr>";
                                }

                            }

                            jQuery('#files_list').html(filesHtml)

                            if (data.data.items && data.data.items.length == 0){

                            jQuery('#files_list').html("<tr><td> No files to display</td> <td><td></td></td></tr>")
                                
                            }

                      
                        }

                    },
                    error: function(error) {
                        console.log('error', error)
                    }
                });


                ///
            })

            jQuery("#edit_button").on('click', function() {
                jQuery('#editfolder').modal('toggle');
            })
            jQuery("#upload_button").on('click', function() {
                jQuery('#fileupload').modal('toggle');
            })
            jQuery('#delete_button').on('click', function() {
              var text;
                if (confirm("are you sure") == true) {
                   
              
                    jQuery.ajax({
                        url: "{{ 'deletefolder' }}" + '/' + parent_id,
                        type: 'post',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            if (data.status == true) {

                                window.location.reload()
                            }
                        },
                        error: function(error) {
                            console.log('error', error)
                        }
                    });
                } else {
                    text = "You canceled!";

                }
            })

            jQuery(document).on('click','.delete_file',function(){
              var text;
              if(confirm("are you sure")==true){
                let fileId= jQuery(this).data('id')
                let selected_row=this
                jQuery.ajax({
                        url: "{{ 'deletefile' }}" + '/' + fileId,
                        type: 'post',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            if (data.status == true) {
                              jQuery(selected_row).parent('tr').remove();
                            }
                        },
                        error: function(error) {
                            console.log('error', error)
                        }
                    });
              }else{
                    text = "You canceled!";
              }
            })

        })
    </script>
@endsection
@endsection

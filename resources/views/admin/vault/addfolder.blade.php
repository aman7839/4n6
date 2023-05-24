@extends('admin.dashboard.layout.main')



@section('content')


    <style>
        label.error {
            color: #dc3545;
            font-size: 14px;
        }
    </style>


    <div class="content">

        <div class="">

            <div class="row">
                <div class="col-md-3 border-right pl-0">
                    <div class="tree">
                        <ul id="myUL">

                            @foreach ($vault_tree as $valult)
                                <li>
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
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
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

                        <table class="table table-bordered">
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

                        <input type="file" name="files[]" required multiple >
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
                                if (data.status == true) {
                                    // jQuery('#foldermodel').modal('hide');
            
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

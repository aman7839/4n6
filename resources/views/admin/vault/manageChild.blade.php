<ul class="nested">
    @foreach ($childs as $category)
   <li>

    <span class="caret {{count($category['nested_categories']) == 0 ? 'empty_folder': ''}}"><i class="fa fa-folder-open"></i> </span>
   <span class="tree_folder tree_folder_name tree_folder_editname"  data-name="{{$category['name']}}" data-id="{{$category['id']}}">{{$category["name"]}}</span>
   @if(count($category["nested_categories"])>0)
   @include('admin.vault.manageChild',['childs' => $category['nested_categories']])
   @endif
   </li>
   @endforeach
</ul>
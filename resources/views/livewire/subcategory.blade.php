<div>
    <div class="mb-8">
        <label class="text-sm font-bold" for="">@lang("admin/category.category select"):</label>
            <select wire:model="select" name="select" id="" class="text-xs rounded w-40 text-right p-2" style="background-position: left 0.5rem center;">
                <option value="">--انتخاب کنید--</option>
                @foreach ( $subCategories as $category )
                    @php
                        $path = $category->path.$category->_id.','
                    @endphp
                    <option value="{{$path}}">{{$category->category_name}}</option>
                @endforeach
            </select>
    </div>       
    
    @if($select)
        <label class="text-sm font-bold" for="">@lang("admin/category.sub-category"):</label>
        <div class="flex flex-col w-80 mt-2">
        @forelse ($children as $child)
            <span class="flex justify-between items-center bg-green-100 w-72 text-right p-2 mb-1 ml-1 text-xs rounded text-gray-600">
                <form class="{{$child->_id}}" action="{{ route('admin.categories.subcategory.subcategory.update' , ['category' => $child->_id])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <span class="py-1.5" id="{{$child->_id}}">{{$child->category_name}}</span>
                </form>
                <div class="flex pl-1">
                    <i class="editSubSubCategory fas fa-pen ml-2 text-xs cursor-pointer text-green-700 border-l border-gray-300 pl-2"></i>
                    <form action="{{ route('admin.categories.sub.sub.destroy', ['category'=>$child->_id]) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="hover:text-red-900"><i class="fas fa-times text-custom-red cursor-pointer"></i></button>
                    </form>
                </div>
            </span>
        @empty
            <span class="text-xs text-gray-500">چیزی یافت نشد!</span>
        @endforelse
        </div>
        <div>
            <form action="{{ route('admin.categories.sub.sub' , $select ) }}" method="POST">
                @csrf
                <input name="category_name" type="text" class="text-xs rounded w-60 focus:ring-0">
                <button class="mt-2 px-6 py-2 rounded bg-green-400 hover:bg-green-500 text-white font-bold text-xs">@lang("admin/category.add")</button>
            </form>
        </div>   
        
    @endif
    @if ($errors->addSecondSubcategory->first('category_name'))
            <li class="text-sm text-custom-red mt-2 flex items-center"><span class="pt-2 pl-1">*</span>{{ $errors->addSecondSubcategory->first('category_name') }}</li>
    @endif
    @if ($errors->editSecondSubcategory->first('category_name'))
            <li class="text-sm text-custom-red mt-2 flex items-center"><span class="pt-2 pl-1">*</span>{{ $errors->editSecondSubcategory->first('category_name') }}</li>
    @endif
</div>
<script>
    $(function() {
      $('.expander').click(function(e) {
        $(this).find('i').toggleClass('fa-angle-down');
        $(this).find('i').toggleClass('fa-angle-left');
      });
    });

    $("body").on( "click", ".editSubSubCategory", function() {
        let value = $(this).parent().parent().children().eq(0).children().eq(2).text();
        let id = $(this).parent().parent().children().eq(0).children().eq(2).attr('id');
        $(this).parent().parent().children().eq(0).children().eq(2).replaceWith('<input name="category_name" type="text" class="text-xs rounded w-48 focus:ring-0 border-gray-400 ">');
        $(this).parent().parent().children().eq(0).children().eq(2).val(value);
        $(this).replaceWith('<i class="saveSubSubCategory fas fa-check ml-2 text-sm cursor-pointer text-green-700 border-l border-gray-300 pl-2"></i>');
    });

    $("body").on( "click", ".saveSubSubCategory", function() {
        $(this).parent().parent().children().eq(0).submit();
    });



</script>

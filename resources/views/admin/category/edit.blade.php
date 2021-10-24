@extends('admin._layouts.master')

@section('body')
    
    <div class="mt-8">
        <div class="mt-4">
            <h2 class="mb-4 text-xl text-gray-700 font-semibold capitalize">@lang("admin/category.edit category")</h2>
            <div class="p-6 bg-white rounded-md shadow-md">
                
                <form action="{{ route('admin.categories.update' , $category->_id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="text-gray-700" for="category_name">@lang("admin/category.create category title")</label>
                            <input name="category_name" value="{{ $category->category_name}}" class="text-sm form-input border-gray-300 w-full mt-2 rounded-md focus:ring-0" type="text">
                        </div>
                        {{-- <label class="inline-flex items-center ml-3">
                            <input name="is_active" type="checkbox" {{ $color->is_active == true ? 'checked': '' }} class="form-checkbox h-5 w-5 rounded text-blue-600"><span class="mx-2 text-gray-700">@lang("admin.forms.color form.active")</span>
                        </label> --}}
                    </div>
                    <div class="flex justify-end mt-4 text-sm">
                        <a href="{{ route('admin.categories.index')}}" class="text-xs font-bold text-center w-20 ml-2 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700 focus:outline-none focus:bg-red-700">@lang("admin.forms.color form.discard")</a>
                        <button class="text-xs font-bold text-center w-20 px-4 py-2 bg-green-400 text-white rounded hover:bg-green-500 focus:outline-none focus:bg-green-500">@lang("admin.forms.color form.save")</button>
                    </div>
                    @if ($errors->editRootCategory->first('category_name'))
                        <li class="text-sm text-custom-red mt-2 flex items-center"><span class="pt-2 pl-1">*</span>{{ $errors->editRootCategory->first('category_name') }}</li>
                    @endif
                </form>
            </div>
            <div class="mt-8">
                <h2 class="mb-4 text-xl text-gray-700 font-semibold capitalize">@lang("admin/category.add sub-category")</h2>
                <div class="p-6 bg-white rounded-md shadow-md">
                    <div class="mb-8">
                        <label class="text-sm font-bold" for="">@lang("admin/category.main category"):</label>
                        <span class="font-bold text-lg border-b-2 pb-1 border-green-400">{{$category->category_name}}</span>
                    </div>
                    <label class="text-sm font-bold" for="">@lang("admin/category.sub-category"):</label>
                    <div class="flex flex-col w-80 mt-2">
                        @forelse ($subCategories as $subCategory )
                            <span class="flex justify-between items-center bg-green-100 w-72 text-right p-2 mb-1 ml-1 text-xs rounded text-gray-600">
                                <form class="{{$subCategory->_id}}" action="{{ route('admin.categories.subcategory.update' , ['category' => $subCategory->_id])}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <span class="py-1.5" id="{{$subCategory->_id}}">{{$subCategory['category_name']}}</span>
                                </form>
                                
                                <div class="flex pl-1">
                                    <i class="editSubCategory fas fa-pen ml-2 text-xs cursor-pointer text-green-700 border-l border-gray-300 pl-2"></i>
                                    <form action="{{ route('admin.categories.destroy', ['category'=>$subCategory->_id]) }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button class="hover:text-red-900"><i class="fas fa-times text-sm text-custom-red cursor-pointer"></i></button>
                                    </form>
                                </div>
                                
                            </span>
                        @empty
                            <span class="text-xs text-gray-500">چیزی یافت نشد!</span>
                        @endforelse
                    </div>
                    <div>
                        <form action="{{ route('admin.categories.sub' , $category->_id) }}" method="POST">
                            @csrf
                            <input name="category_name" type="text" class="text-xs rounded w-60 focus:ring-0 border-gray-400">
                            <button class="mt-2 px-6 py-2 rounded bg-green-400 hover:bg-green-500 text-white font-bold text-xs">@lang("admin/category.add")</button>
                        </form>
                    </div>  
                    @if ($errors->addFirstSubcategory->first('category_name'))
                        <li class="text-sm text-custom-red mt-2 flex items-center"><span class="pt-2 pl-1">*</span>{{ $errors->addFirstSubcategory->first('category_name') }}</li>
                    @endif
                    @if ($errors->editFirstSubcategory->first('category_name'))
                        <li class="text-sm text-custom-red mt-2 flex items-center"><span class="pt-2 pl-1">*</span>{{ $errors->editFirstSubcategory->first('category_name') }}</li>
                    @endif
                </div>
            </div>
            <div class="mt-8">
                <h2 class="mb-4 text-xl text-gray-700 font-semibold capitalize">@lang("admin/category.second level sub-category")</h2>
                <div class="p-6 bg-white rounded-md shadow-md">
                    <livewire:subcategory :subCategories="$subCategories">
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
          $('.expander').click(function(e) {
            $(this).find('i').toggleClass('fa-angle-down');
            $(this).find('i').toggleClass('fa-angle-left');
          });
        });

        $("body").on( "click", ".editSubCategory", function() {
            let value = $(this).parent().parent().children().eq(0).children().eq(2).text();
            let id = $(this).parent().parent().children().eq(0).children().eq(2).attr('id');
            $(this).parent().parent().children().eq(0).children().eq(2).replaceWith('<input name="category_name" type="text" class="text-xs rounded w-48 focus:ring-0 border-gray-400 ">');
            $(this).parent().parent().children().eq(0).children().eq(2).val(value);
            $(this).replaceWith('<i class="saveSubCategory fas fa-check ml-2 text-sm cursor-pointer text-green-700 border-l border-gray-300 pl-2"></i>');
        });

        $("body").on( "click", ".saveSubCategory", function() {
            $(this).parent().parent().children().eq(0).submit();
        });



    </script>
@endsection
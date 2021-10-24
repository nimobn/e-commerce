@extends('admin._layouts.master')

@section('body')
    
    <div class="mt-8">
        <div class="mt-4">
            <div class="p-6 bg-white rounded-md shadow-md">
                <h2 class="text-xl text-gray-700 font-semibold capitalize">@lang("admin/category.create category")</h2>
                <form class="mt-10" action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf
                    <div class="flex flex-col max-w-xs gap-6 mt-4">
                        <div>
                            <label class="text-gray-700" for="category_name">@lang("admin/category.create category title")</label>
                            <input name="category_name" value="{{ old('category_name') }}" class="form-input border-gray-300 w-full mt-2 rounded-md focus:border-indigo-600" type="text">
                        </div>
                        
                        {{-- <label class="inline-flex items-center ml-3">
                            <input name="is_active" type="checkbox" class="form-checkbox h-5 w-5 rounded text-blue-600" checked><span class="mx-2 text-gray-700">@lang("admin.forms.color form.active")</span>
                        </label> --}}
                    </div>

                    <div class="flex justify-end mt-4">
                        <button class="text-center text-sm w-20 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">@lang("admin.forms.color form.save")</button>
                    </div>
                    @if ($errors->rootCategory->first('category_name'))
                        <li class="text-sm text-custom-red mt-2 flex items-center"><span class="pt-2 pl-1">*</span>{{ $errors->rootCategory->first('category_name') }}</li>
                    @endif
                </form>
            </div>
            <div class="mt-4">
                <div class="p-6 bg-white rounded-md shadow-md">
                    <h2 class="text-xl text-gray-700 font-semibold capitalize">@lang("admin/category.category list")</h2>
                    <div class="bg-white shadow rounded-md overflow-hidden my-6">
                        <table class="text-right w-full border-collapse text-base">
                            <thead class="border-b">
                                <tr>
                                    <th class="py-3 px-5 bg-blue-600 font-medium uppercase text-sm text-gray-100">@lang("admin/category.name")</th>
                                    <th class="py-3 px-5 bg-blue-600 font-medium uppercase text-sm text-gray-100">@lang("admin/category.sub category")</th>
                                    <th class="py-3 px-5 bg-blue-600 font-medium uppercase text-sm text-gray-100">@lang("admin/category.operation")</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr class="hover:bg-gray-200">
                                        <td class="py-4 px-6 border-b text-gray-700 font-bold">{{$category->category_name}}</td>
                                        {{-- <td dir="ltr" class="py-2 px-6 border-b text-gray-500 font-bold">{{$subCategoryNumber}}</td> --}}
                                        <td dir="ltr" class="py-4 px-6 border-b text-gray-500 font-bold"></td>
                                        <td class=" px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <div class="flex">
                                                <a href="{{ route('admin.categories.edit' , ['category' => $category->_id ])}}" class="text-green-600 hover:text-green-900 pl-3"><i class="fas fa-pen"></i></a>
                                                <form action="{{ route('admin.categories.destroy', ['category'=>$category->_id]) }}" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button class="text-red-600 hover:text-red-900 border-r border-gray-300 pr-3"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>   
                                @endforeach
                           
                                
                            </tbody>
                        </table>
                    </div>
                    {{ $categories->links('components.pagination') }}
                </div>
                
            </div>

        </div>
    </div>
@endsection
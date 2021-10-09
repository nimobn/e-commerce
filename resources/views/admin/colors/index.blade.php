@extends('admin._layouts.master')

@section('body')
    
    <div class="mt-8">
        <div class="mt-4">
            <div class="p-6 bg-white rounded-md shadow-md">
                <h2 class="text-xl text-gray-700 font-semibold capitalize">@lang("admin.forms.color form.add color")</h2>
                <form class="mt-10" action="{{ route('admin.colors.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="text-gray-700" for="color_name">@lang("admin.forms.color form.color name")</label>
                            <input name="color_name" value="{{ old('color_code') }}" class="form-input border-gray-300 w-full mt-2 rounded-md focus:border-indigo-600" type="text">
                        </div>
                        <div>
                            <label class="text-gray-700" for="color_code">@lang("admin.forms.color form.color code")</label>
                            <input name="color_code" value="{{ old('color_code') }}" class="form-input border-gray-300 w-full mt-2 rounded-md focus:border-indigo-600" type="text">
                        </div>
                        <label class="inline-flex items-center ml-3">
                            <input name="is_active" type="checkbox" class="form-checkbox h-5 w-5 rounded text-blue-600" checked><span class="mx-2 text-gray-700">@lang("admin.forms.color form.active")</span>
                        </label>
                    </div>

                    <div class="flex justify-end mt-4">
                        <button class="text-center text-sm w-20 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">@lang("admin.forms.color form.save")</button>
                    </div>
                    <x-error-message/>
                </form>
            </div>
            <div class="mt-4">
                <div class="p-6 bg-white rounded-md shadow-md">
                    <h2 class="text-xl text-gray-700 font-semibold capitalize">@lang("admin.forms.color form.color list")</h2>
                    <div class="bg-white shadow rounded-md overflow-hidden my-6">
                        <table class="text-right w-full border-collapse text-base">
                            <thead class="border-b">
                                <tr>
                                    <th class="py-3 px-5 bg-blue-600 font-medium uppercase text-sm text-gray-100">نام رنگ</th>
                                    <th class="py-3 px-5 bg-blue-600 font-medium uppercase text-sm text-gray-100">کد رنگ</th>
                                    <th class="py-3 px-5 bg-blue-600 font-medium uppercase text-sm text-gray-100">نمونه</th>
                                    <th class="py-3 px-5 bg-blue-600 font-medium uppercase text-sm text-gray-100">وضعیت</th>
                                    <th class="py-3 px-5 bg-blue-600 font-medium uppercase text-sm text-gray-100">عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($colors as $color)
                                    <tr class="hover:bg-gray-200">
                                        <td class="py-2 px-6 border-b text-gray-700 font-bold">{{$color->color_name}}</td>
                                        <td dir="ltr" class="py-2 px-6 border-b text-gray-500 font-bold">{{$color->color_code}}</td>
                                        <td class="py-2 px-6 border-b text-gray-500">
                                            <div class="rounded-full w-10 h-10 space-x-3 border-4 border-gray-300" style="background-color: {{$color->color_code}}"></div>
                                        </td>
                                        <td class="px-5 py-2 border-b border-gray-200 text-sm">
                                            <span class="px-3 py-1 font-bold text-xs {{$color->is_active == true ? 'text-green-900':'text-red-900'}} leading-tight">
                                                <span aria-hidden class="py-1 px-10 w-14 flex items-center justify-center {{$color->is_active == true ? 'bg-green-200':'bg-red-200'}} rounded-full">
                                                    {{$color->is_active == true ? Lang::get('admin.forms.color form.active'): Lang::get('admin.forms.color form.inactive')}}
                                                </span>
                                                
                                            </span>
                                        </td>
                                        <td class=" px-6 py-2 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <div class="flex">
                                                <a href="{{ route('admin.colors.edit' , ['color' => $color->_id ])}}" class="text-green-600 hover:text-green-900 pl-3"><i class="fas fa-pen"></i></a>
                                                <form action="{{ route('admin.colors.destroy', ['color'=>$color->_id]) }}" method="POST">
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
                    {{ $colors->links('components.pagination') }}
                </div>
                
            </div>

        </div>
    </div>
@endsection
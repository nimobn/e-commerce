@extends('admin._layouts.master')

@section('body')
    
    <div class="mt-8">
        <div class="mt-4">
            <div class="p-6 bg-white rounded-md shadow-md">
                <h2 class="text-xl text-gray-700 font-semibold capitalize">@lang("admin.forms.color form.edit color")</h2>
                <form class="mt-10" action="{{ route('admin.colors.update' , $color->_id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="text-gray-700" for="color_name">@lang("admin.forms.color form.color name")</label>
                            <input name="color_name" value="{{ $color->color_name}}" class="form-input border-gray-300 w-full mt-2 rounded-md focus:border-indigo-600" type="text">
                        </div>
                        <div>
                            <label class="text-gray-700" for="color_code">@lang("admin.forms.color form.color code")</label>
                            <input name="color_code" value="{{ $color->color_code }}" class="form-input border-gray-300 w-full mt-2 rounded-md focus:border-indigo-600" type="text">
                        </div>
                        <label class="inline-flex items-center ml-3">
                            <input name="is_active" type="checkbox" {{ $color->is_active == true ? 'checked': '' }} class="form-checkbox h-5 w-5 rounded text-blue-600"><span class="mx-2 text-gray-700">@lang("admin.forms.color form.active")</span>
                        </label>
                    </div>
                    <div class="flex justify-end mt-4 text-sm">
                        <a href="{{ route('admin.colors.index')}}" class="text-center w-20 ml-2 px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">@lang("admin.forms.color form.discard")</a>
                        <button class="text-center w-20 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">@lang("admin.forms.color form.save")</button>
                    </div>
                    <x-error-message/>
                </form>
            </div>
           

        </div>
    </div>
@endsection
@extends('admin._layouts.master')

@section('body')
    
    <div class="mt-8">
        <div class="mt-4">
            <div class="p-6 bg-white rounded-md shadow-md">
                <h2 class="text-xl text-gray-700 font-semibold capitalize">@lang("admin.forms.color form.add color")</h2>
                <form class="mt-10">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="text-gray-700" for="username">@lang("admin.forms.color form.color name")</label>
                            <input class="form-input border-gray-300 w-full mt-2 rounded-md focus:border-indigo-600" type="text">
                        </div>
                        <div>
                            <label class="text-gray-700" for="emailAddress">@lang("admin.forms.color form.color code")</label>
                            <input class="form-input border-gray-300 w-full mt-2 rounded-md focus:border-indigo-600" type="email">
                        </div>
                        <label class="inline-flex items-center ml-3">
                            <input type="checkbox" class="form-checkbox h-5 w-5 rounded text-blue-600" checked><span class="mx-2 text-gray-700">@lang("admin.forms.color form.active")</span>
                        </label>
                    </div>

                    <div class="flex justify-end mt-4">
                        <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">@lang("admin.forms.color form.save")</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
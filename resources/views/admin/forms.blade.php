@extends('admin._layouts.master')

@section('body')
    {{-- <h3 class="text-gray-700 text-3xl font-semibold">Forms</h3> --}}

    {{-- <div class="mt-4">
        <h4 class="text-gray-600">Model Form</h4>

        <div class="mt-4">
            <div class="max-w-sm w-full bg-white shadow-md rounded-md overflow-hidden border">
                <form>
                    <div class="flex justify-between items-center px-5 py-3 text-gray-700 border-b">
                        <h3 class="text-sm">Add Category</h3>
                        <button>
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    
                    <div class="px-5 py-6 bg-gray-200 text-gray-700 border-b">
                        <label class="text-xs">Name</label>

                        <div class="mt-2 relative rounded-md shadow-sm">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-600">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/>
                                </svg>
                            </span>

                            <input type="text" class="form-input w-full px-12 py-2 appearance-none rounded-md focus:border-indigo-600">
                        </div>
                    </div>

                    <div class="flex justify-between items-center px-5 py-3">
                        <button class="px-3 py-1 text-gray-700 text-sm rounded-md bg-gray-200 hover:bg-gray-300 focus:outline-none">Cancel</button>
                        <button class="px-3 py-1 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-500 focus:outline-none">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <div class="mt-8">
        {{-- <h4 class="text-gray-600">Forms</h4> --}}

        <div class="mt-4">
            <div class="p-6 bg-white rounded-md shadow-md">
                <h2 class="text-xl text-gray-700 font-semibold capitalize">@lang("admin.forms.color form.colors")</h2>
                
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
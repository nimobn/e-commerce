@extends('admin._layouts.master')

@section('body')
<div class="mt-8">
    <h4 class="text-gray-600">@lang("admin/feature.create title")</h4>

    @if (count($errors) > 0)
        <div class="bg-red-700">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-white">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    @isset($feature){{-- edit part --}}
        <div class="mt-4">
            <div class="p-6 bg-white rounded-md shadow-md">            
                <form class="mt-5" action="{{ route('admin.features.update', ['feature'=>$feature]) }}" method="POST">
                    @method("PATCH")
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4 border-b pb-4">
                        <div>
                            <label class="text-gray-700" for="username">@lang("admin/feature.create category title")</label>
                            <input class="form-input border-gray-300 w-full mt-2 rounded-md focus:border-indigo-600" name="feature_category" value="{{ $feature->category }}" type="text">
                        </div>
                    </div>
                    
                    <livewire:feature-box :feature="$feature">

                    <div class="mt-4">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">@lang("admin/feature.edit btn")</button>
                    </div>
                </form>
            </div>
        </div>            
    @else{{-- create new one --}}
    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">            
            <form class="mt-5" action="{{ route('admin.features.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4 border-b pb-4">
                    <div>
                        <label class="text-gray-700" for="username">@lang("admin/feature.create category title")</label>
                        <input class="form-input border-gray-300 w-full mt-2 rounded-md focus:border-indigo-600" name="feature_category" value="{{ old('feature_category') }}" type="text">
                    </div>
                </div>
                
                <livewire:feature-box>

                <div class="mt-4">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">@lang("admin/feature.save btn")</button>
                </div>
            </form>
        </div>
    </div>
    @endisset
</div>
@endsection
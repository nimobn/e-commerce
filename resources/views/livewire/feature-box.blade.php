<div>

    @if ($feature == null) {{-- create new part --}}
        <div class="grid grid-cols-1 gap-6 mt-2 pb-4">
            <div>
                <label class="text-gray-700" for="username">@lang("admin/feature.create features title")</label>
            </div>
            <div class="flex">
                <div class="w-1/2"><input class="form-input border-gray-300 w-full mt-2 rounded-md focus:border-indigo-600" type="text" name="features[]" value="{{ old('features.0') }}"></div>
                <div class="mr-4 mt-2">
                    <button type="button" class="px-2 pt-2 pb-1 bg-green-500 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700" wire:click='addBox'>
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
                <div @class(["mr-4", "mt-2", "hidden" => ($box_counter==0)])>
                    <button type="button" class="px-2 pt-2 pb-1 bg-red-500 text-white rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700" wire:click='rmBox'>
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 mt-2 pb-4">
            @for ($i=0; $i<$box_counter; $i++)
                <div class="w-1/2"><input class="form-input border-gray-300 w-full rounded-md focus:border-indigo-600" type="text" value="{{ old('features.'.($i+1)) }}" name="features[]"></div>
            @endfor
        </div>
    @else {{-- edit part --}}
        <div class="grid grid-cols-1 gap-6 mt-2 pb-4">
            <div>
                <label class="text-gray-700" for="username">@lang("admin/feature.create features title")</label>
            </div>
            
        </div>
        <div class="grid grid-cols-1 gap-6 mt-2 pb-4">
            @foreach ($feature->features as $sub_feature)
                <div class="w-1/2 relative">
                    <input class="form-input border-gray-300 w-full rounded-md focus:border-indigo-600" type="text" value="{{ $sub_feature }}" name="features[]">
                </div>
            @endforeach
        </div>
        <div class="flex">
            {{-- <div class="w-1/2"><input class="form-input border-gray-300 w-full mt-2 rounded-md focus:border-indigo-600" type="text" name="features[]" value="{{ $feature->features[0] }}"></div> --}}
            <div class="mr-4 mt-2">
                <button type="button" class="px-2 pt-2 pb-1 bg-green-500 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700" wire:click='addBox'>
                    <i class="fa fa-plus"></i>
                </button>
            </div>
            <div @class(["mr-4", "mt-2", "hidden" => ($box_counter==0)])>
                <button type="button" class="px-2 pt-2 pb-1 bg-red-500 text-white rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700" wire:click='rmBox'>
                    <i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 mt-2 pb-4">
            @for ($i=0; $i<$box_counter; $i++)
                <div class="w-1/2"><input class="form-input border-gray-300 w-full rounded-md focus:border-indigo-600" type="text" name="features[]"></div>
            @endfor
        </div>
    @endif
</div>

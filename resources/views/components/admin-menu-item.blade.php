<ul class="nav">
    <li>
        <a @class([ "flex",
                    "items-center", 
                    "mt-1", 
                    "py-2",
                    "px-6",
                    "text-gray-500",
                    "hover:bg-gray-700",
                    "hover:bg-opacity-25",
                    "hover:text-gray-100",
                    "expander" => $has_sub_menu]) href="{{$href}}">
            <i class="{{ $icon }} text-xl w-8 text-center"></i>
            <span class="mx-1">@lang("admin.sidebar.$lang_key")</span>
        </a>
        @if ($has_sub_menu)
            <ul @class(["hidden" => !Illuminate\Support\Str::contains(url()->current(), $item_url), "nav", "text-gray-300"])>        
                @for ($i=0; $i<count($sub_items)-1; $i++)
                    <li class="hover:bg-gray-700 text-sm pr-10 py-2"><a class="flex items-center" href="{{$sub_items[$i]['href']}}"><i class="fas fa-angle-left ml-2"></i>{{$sub_items[$i]['text']}}</a></li>
                @endfor
                <li class="hover:bg-gray-700 text-sm pr-10 py-2"><a class="flex items-center" href="#{{$sub_items[$i]['href']}}"><i class="fas fa-angle-left ml-2"></i>{{$sub_items[$i]['text']}}</a></li>
            </ul>
        @endif
    </li>
</ul>
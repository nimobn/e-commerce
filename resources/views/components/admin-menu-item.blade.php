<ul class="nav">
    <li>
        <a @class([ "flex",
                    "items-center", 
                    "mt-4", 
                    "py-2",
                    "px-6",
                    "text-gray-500",
                    "hover:bg-gray-700",
                    "hover:bg-opacity-25",
                    "hover:text-gray-100",
                    "expander" => $has_sub_menu])" href="{{$href}}">
            <i class="fad fa-{{ $icon }}"></i>
            <span class="mx-3">@lang("admin.sidebar.$lang_key")</span>
        </a>
        @if ($has_sub_menu)
            <ul style="display: none" class="nav  text-gray-100">        
                @for ($i=0; $i<count($sub_items)-1; $i++)
                    <li class="text-sm px-6 py-2 border-b border-gray-500 border-opacity-10"><a href="{{$sub_items[$i]['href']}}">{{$sub_items[$i]['text']}}</a></li>
                @endfor
                <li class="text-sm px-6 py-2"><a href="#{{$sub_items[$i]['href']}}">{{$sub_items[$i]['text']}}</a></li>
            </ul>
        @endif
    </li>
</ul>
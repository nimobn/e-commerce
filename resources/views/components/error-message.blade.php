@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-sm text-custom-red mt-2 flex items-center"><span class="pt-2 pl-1">*</span> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
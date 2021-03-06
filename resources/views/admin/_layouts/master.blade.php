<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        {{-- <link rel="canonical" href="{{ $page->getUrl() }}"> --}}

        {{-- <meta name="description" content="{{ $page->description }}"> --}}

        <title>@yield("title")</title>
        @livewireStyles
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset("fonts/fontawesome/css/all.css") }}">

        <script src="{{ asset("js/jquery-3.6.0.min.js") }}"></script>
    </head>
    <body dir="rtl" class="font-yekan">
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
            @include('admin._layouts.sidebar')
            
            <div class="flex-1 flex flex-col overflow-hidden">
                @include('admin._layouts.header')

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container mx-auto px-6 py-8">
                        @yield('body')
                    </div>
                </main>
            </div>
        </div>
        @livewireScripts
        <script src="{{ asset("js/app.js") }}"></script>
    </body>
</html>

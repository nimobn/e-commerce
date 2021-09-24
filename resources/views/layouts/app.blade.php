<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    @yield('head')
    <title>@yield('title')</title>
</head>
<body dir="rtl" class="font-yekan">
    <main class="bg-gray-background w-full">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </main>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
</body>
</html>
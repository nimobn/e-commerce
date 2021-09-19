<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    @yield('head')
    <title>@yield('title')</title>
</head>
<body dir="rtl" class="font-yekan">
    <main class="bg-gray-background w-full h-100">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </main>
    @yield('script')
</body>
</html>
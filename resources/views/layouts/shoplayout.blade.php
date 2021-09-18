<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
    @yield('title')
</head>
<body dir="rtl" class="font-yekan">
    <main class="bg-gray-background w-full h-100">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </main>
</body>
</html>
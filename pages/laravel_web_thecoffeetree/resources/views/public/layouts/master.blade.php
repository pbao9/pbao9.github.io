<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('public.layouts.head')
</head>

<body class="h-screen w-[100%]">
    @include('public.layouts.header')

    <main>
        @yield('content')
    </main>


    @include('public.layouts.footer')
    @include('public.layouts.scripts')
</body>

</html>

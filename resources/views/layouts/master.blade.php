<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

{{-- Head section will go here --}}
<head>
    @include('layouts.includes.head')
</head>

<body>
<div id="app">
    @include('layouts.includes.header')

    @yield('content')
</div>


@include('layouts.includes.footer')
</body>
</html>

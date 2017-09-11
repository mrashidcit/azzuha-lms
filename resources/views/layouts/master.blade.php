<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

{{-- Head section will go here --}}
@yield('head')

<body>
<div id="app">
    @yield('header')

    @yield('content')
</div>


@yield('footer')
</body>
</html>

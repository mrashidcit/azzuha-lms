<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @include('dashboard.includes.head')
</head>
{{--@include('layout.internal')--}}
{{--@yield('head') --}}
<body>



<div id="wrapper">

    @include('dashboard.includes.header')

    @include('dashboard.includes.side-bar')

</div>

<div id="page-wrapper" >
    @yield('content')
</div>


@include('dashboard.includes.footer')

</body>
</html>

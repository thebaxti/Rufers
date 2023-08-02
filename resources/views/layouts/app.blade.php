<!doctype html>
<html lang="en">
<head>
    @include('site.classes.head')
</head>
<body>
@include('site.classes.header')
@yield('content')
@include('site.classes.footer')
</body>
@include('site.classes.script')
</html>

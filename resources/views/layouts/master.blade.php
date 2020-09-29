<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    @yield('top_scripts')
    <title>Map Task</title>
</head>
<body>
@yield('content')
@yield('bottom_scripts')
</body>
</html>

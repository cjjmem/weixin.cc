<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>管理后台</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{ admin_css_url('bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ admin_css_url('animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('font.css') }}" type="text/css" />
    @yield('css_link')

    <style>
        @yield('css')
    </style>

    @yield('pre_js')
</head>

<body>
    @yield('body')
<script src="{{ admin_js_url('jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ admin_js_url('bootstrap.js') }}"></script>
<!-- App -->
<script src="{{ admin_js_url('app.js') }}"></script>
@yield('js')
</body>
</html>
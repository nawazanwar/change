<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>@yield('page_title', config('app.name'))</title>
    <meta name="google-site-verification" content="ukTtIKS4InSo7uW1v8eKCLoasdDAxu25fv"/>
    <meta name="description" content="@yield('page_meta_description')">
    <meta name="keywords" content="@yield('page_meta_keywords')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="p:domain_verify" content="425ec6314bfecb94ffaae11ebbacbb5c"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ url()->full() }}"/>
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
    @yield('innerStyleSheet')
</head>
<body>
@if(!in_array(request()->route()->getName(), ['login','register']))
    @include('components.header')
@endif
<main>
    @yield('content')
</main>
@include('components.footer')
<script src="{{ asset('js/app.min.js') }}"></script>
@yield('innerScriptFiles')
@yield('innerPageScript')
</body>
</html>

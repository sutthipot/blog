<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts._header')
</head>
<body class="bg-cover" style="background-image: url('{{ asset('images/bg-1a1.png')}}')" lang="{{ app()->getLocale() }}">
<div id="app">
    <logincomponent></logincomponent>
</div>
    @include('layouts._footer')
</body>
</html>

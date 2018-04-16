<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts._header')
    <script>
        var i_var = '{{isset($i)?$i:null}}';
    </script>
</head>
<body lang="{{ app()->getLocale() }}">
<div id="app">
    <router-view></router-view>
</div>
    @include('layouts._footer')
<script>
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en" @yield('html-attributes')>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ovro - Personal Portfolio Template</title>

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="/img/logo/fav-logo1.png" type="image/x-icon">

    <!--===== CSS LINK =======-->
    @vite(['resources/scss/main.scss'])

    @yield('css')

</head>

<body @yield('body-attributes')>

     @include('layouts.partials.loader')
    @include('layouts.partials.sidebar')
    @include('layouts.partials.navbar')

    @yield('content')

    @include('layouts.partials.popup')

    @yield('scripts')
    @vite(['resources/js/main.js'])
</body>

</html>

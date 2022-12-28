<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Laravel Role Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    @include('backend.layouts.partials.styles')
    @yield('styles')
</head>

<body class="vertical-layout">

    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div id="containerbar">

        @include('backend.layouts.partials.sidebar')

        @yield('admin-content')

    </div>

    @include('backend.layouts.partials.scripts')
    @yield('scripts')
</body>

</html>

<!DOCTYPE html>
<html>
    <head>
        @include('cms/layout/header')

        @yield('header')
    </head>

    <body>

        @yield('content')

        @include('cms/layout/header')
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }} >
    @include('includes.head')
    <body class="lang-en">
        @include('includes.header')
        <div class="container">
            @yield('content')
            @include('includes.footer')
            @include('includes.jasbottom')
        </div>
    </body>
</html>
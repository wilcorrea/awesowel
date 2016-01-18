<!DOCTYPE html>
<html lang="{{ \Awesovel\Providers\AwesovelServiceProvider::$LANGUAGE }}">
    <head>
        @include('awesovel.templates.portal.head.index')
    </head>

    <body>

        @include('awesovel.templates.portal.includes.nav')

        @if(isset($page) && $page->header)
            @include('awesovel.templates.portal.includes.header')
        @endif

        @yield('content')

        @include('awesovel.templates.portal.includes.footer')

        @include('awesovel.templates.portal.resources.scripts')
    </body>
</html>

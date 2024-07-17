<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @vite('resources/css/app.css')
        {{$head}}
    </head>

    <body class="hidden {{$bodyClass}}">
        <script>0</script>
        {{$body}}
    </body>
</html>
{{-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk --}}

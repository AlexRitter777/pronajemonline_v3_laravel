<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="images/favicon.png" />
        <script src="https://www.google.com/recaptcha/api.js?render=6LflMpQgAAAAAMN2q092nkMkkOCUicv4D60lxZc9"></script>
        <title>Welcome Guest</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans text-gray-900 antialiased">
    <div class="container-scroller">

            @yield('auth-content')
    </div>

    </body>
</html>

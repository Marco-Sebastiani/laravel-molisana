<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
    <title> @yield('title') </title>
</head>
<body>
    @include('partials.header')

    <main> @yield('content') </main>

    @include('partials.footer')

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
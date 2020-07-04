<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @stack('css')
</head>
<body class="bg-white">
    <x-navbar/>

    <div class="container mt-3">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('js')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanberCRUD</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @stack('css')
    <style>
        .btn{
            border-radius: 20px !important;
        }
    </style>
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
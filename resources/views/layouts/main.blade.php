<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- boostrap 5.0 css --}}
    <link rel="stylesheet" href="{{ asset("/css/bootstrap.min.css") }}">
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset("/css/index.css") }}">

    <title>Inoe Villa</title>
</head>
<body>

    @include('partials.navbar')

    @yield('container')

    {{-- boostrap javascript --}}
    <script src="{{ asset("/js/bootstrap.min.js") }}"></script>
</body>
</html>
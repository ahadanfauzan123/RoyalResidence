<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('/') }}css/main.css">
    <title>@yield('title')</title>
</head>
<body class="w-screen min-h-screen overflow-x-hidden flex flex-col gap-y-8 bg-blue-400 pb-10">
    @include('layout.navbar')
    @yield('content')
</body>
</html>
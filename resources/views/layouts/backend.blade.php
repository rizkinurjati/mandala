<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Mandala Computer</title>
        @stack('before-style')
        @include('includes.backend.style')
        @stack('after-style')

</head>
<body>
        @include('includes.backend.navbar')

        @yield('content')

        @stack('before-script')
        @include('includes.backend.script')
        @stack('after-script')
</body>
</html>
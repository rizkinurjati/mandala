<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mandala Computer</title>
        @stack('before-style')
        @include('includes.frontend.style')
        @stack('after-style')

</head>
<body>
        @include('includes.frontend.navbar')

        @yield('content')
        
        @include('includes.frontend.footer')

        @stack('before-script')
        @include('includes.frontend.script')
        @stack('after-script')
</body>
</html>
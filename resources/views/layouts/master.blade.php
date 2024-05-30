<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('styles')
    <title>Document</title>
</head>

<body>
    @include('layouts.partials.header')
    @hasSection('content')
        @yield('content')
    @else
        <div>Content not found</div>
    @endif
    @include('layouts.partials.footer')
</body>

</html>

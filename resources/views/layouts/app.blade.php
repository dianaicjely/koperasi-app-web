<!DOCTYPE html>
<html>
<head>
    <title>Koperasi</title>
    <link rel="stylesheet" href="{{ asset('codebase/css/codebase.min.css') }}">
</head>
<body>

@include('layouts.sidebar')

<main>
    @yield('content')
</main>

@include('layouts.footer')

</body>
</html>
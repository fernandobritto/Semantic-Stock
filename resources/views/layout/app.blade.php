<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Semantic Stock</title>
</head>
<body>
<div class="container">
    <main role="main">
        {{--      Se houver uma sessão nos layouts filhos o Blande ira  mostra-la--}}
        @hasSection('body')
            @yield('body', 'Default Content')
        @endif
    </main>
</div>


<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


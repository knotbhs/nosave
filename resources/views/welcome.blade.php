<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fizemos esta aplicação para ajudar as pessoas que usam o WhatsApp no computador e não tem como salvar o contato. Use e compartilhe a ideia.">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('imagens/favicon-48.ico') }}">
    <title>{{ config('app.name', 'NoSave - Mensagens Whats') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">     --}}
    <link rel="stylesheet" href="{{ asset('css/dd.css?v=4.0') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flags.css?v=1.0') }}" />
    <style>
        .erroInput
        {
            border: 2px solid red;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('imagens/logo-escrito.png') }}" width="90" height="30" alt="">
                </a>
                <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4"  style="overflow-x: hidden; overflow-y: auto; padding-top: 30px; padding-bottom: 30px; min-height: 450px; background: #a8fd8c url('{{ asset('imagens/bgwhats.jpg') }}');">
            @include('whats.home')
            @yield('content')
        </main>
        <footer>
            @include('whats.footer')
        </footer>
    </div>
</body>
    @yield('content-js')
    
    <script src="{{ asset('js/dd.min.js?ver=4.0') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('plugins/fontawesome/js/all.min.js') }}"></script> --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>

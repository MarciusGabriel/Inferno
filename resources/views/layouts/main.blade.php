<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
      

        <title>@yield('title')</title>

        <!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
<!-- css aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/script.js"> </script>

    </head>
    <body >
     <header>
       <nav class="navbar navbar-expand-lg navbar-light ">
<div class="collapse navbar-collapse" id="navbar">
<a href="/" class="navbar-brand">
<img src="/img/hdcevents_logo.svg" alt="hdc events">
</a>
<ul class="navbar-nav">
<li class="nav-item">
    <a href="/" class="nav-link">Eventos</a>
</li>
<li class="nav-item">
    <a href="/events/create" class="nav-link">Criar Eventos</a>
</li>
<li class="nav-item">
    <a href="/" class="nav-link">Entrar</a>
</li>
<li class="nav-item">
    <a href="/" class="nav-link">Cadastrar</a>
</li>
</ul>
</div>
       </nav>
     </header>

    @yield('content')
        <footer>
            <p>HDC EVENTS &copy; 2025</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>

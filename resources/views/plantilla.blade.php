<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('partials.nav')
    <main class="container mt-4">
        @yield('contenido')
    </main>
    <footer class="text-center mt-4">
        <p>Data actual: {{ fechaActual('d/m/Y') }}</p>
    </footer>
</body>

</html>
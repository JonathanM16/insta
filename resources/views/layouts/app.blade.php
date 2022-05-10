<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instagram - @yield('titulo')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="{{ asset('js/app.js')}}"></script>
</head>

        <body class="bg-gray-100">
            <header class="p-5 border-b bg-white shadow">

                <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    Instagram
                </h1>

                <nav class="flex gap-2 items-center">
                    <a class="font-bold uppercase text-gray-600 text-sm" href="#">Login</a>
                    <a class="font-bold uppercase text-gray-600 text-sm" href="/crear-cuenta">Crear Cuenta</a>
                </nav>
            </div>
            </header>

            <main class="container mx-auto mt-10">

                <h2 class="font-black text-center text-3xl mb-10">
                    @yield('titulo')
                </h2>
                @yield('contenido')
            </main>


            <footer class=" mt-10 text-center p-5 text-gray-500 font-bold uppercase ">
                    Programación para Internet - Todos los derechos reservados  {{now()->year}}
            </footer>



           
            {{-- helpers : funciones dentro de los templates --}}
            {{-- <?php echo date('Y'); ?> --}}
            {{-- Sirven para imprimir por que laravel detecta que es php --}}
        </body>

</html>
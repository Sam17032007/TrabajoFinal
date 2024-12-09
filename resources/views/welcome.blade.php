<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mi Página de Inicio</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100 font-sans">
        <header class="bg-blue-600 text-white">
            <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
                <div class="text-2xl font-bold">Mi Sitio</div>
                <div>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('home') }}" class="text-white hover:text-blue-200">Home</a>
                            <a href="{{ url('/proveedors') }}" class="text-white hover:text-blue-200">proveedors</a>
                            <a href="{{ url('/categorias') }}" class="text-white hover:text-blue-200">Categorias</a>
                            <a href="{{ url('/productos') }}" class="text-white hover:text-blue-200">Productos</a>
                        @else
                            <a href="{{ route('login') }}" class="text-white hover:text-blue-200 mr-4">Ingresar</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-white hover:text-blue-200">Registrarse</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>
        </header>

        <main class="container mx-auto px-6 py-8">
            <h1 class="text-4xl font-bold text-center mb-8">Bienvenido a Mi Sitio</h1>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4">Sobre Nosotros</h2>
                    <p class="text-gray-600">Somos una empresa dedicada a proporcionar soluciones innovadoras para nuestros clientes. Con años de experiencia en la industria, nos esforzamos por ofrecer servicios de alta calidad.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4">Nuestros Servicios</h2>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Desarrollo web</li>
                        <li>Diseño gráfico</li>
                        <li>Marketing digital</li>
                        <li>Consultoría IT</li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 text-center">
                <h2 class="text-2xl font-semibold mb-4">Contáctanos</h2>
                <p class="text-gray-600 mb-4">¿Tienes alguna pregunta? No dudes en contactarnos.</p>
                <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Contactar</a>
            </div>
        </main>

        <footer class="bg-gray-800 text-white text-center py-4 mt-12">
            <p>&copy; 2024 Mi Sitio. Todos los derechos reservados.</p>
        </footer>
    </body>
</html>

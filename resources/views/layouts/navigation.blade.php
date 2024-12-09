<nav class="bg-blue-600 text-white">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <div class="text-2xl font-bold">Mi Sitio</div>
        <div>
            <a href="{{ url('/') }}" class="text-white hover:text-blue-200">Inicio</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/welcome') }}" class="text-white hover:text-blue-200">welcome</a>
                @else
                    <a href="{{ route('login') }}" class="text-white hover:text-blue-200 mr-4">Ingresar</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-white hover:text-blue-200">Registrarse</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</nav>
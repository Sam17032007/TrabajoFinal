<div class="bg-base-100 shadow-xl border-b border-base-200">
    <div class="navbar container mx-auto px-4 h-20">
        <!-- Inicio - Logo y Menú Móvil -->
        <div class="navbar-start">
            <!-- Menú Móvil -->
            <div class="dropdown lg:hidden">
                <label tabindex="0" class="btn btn-ghost btn-circle hover:bg-base-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </label>
                <ul tabindex="0" class="menu menu-lg dropdown-content mt-3 z-[1] p-3 shadow-xl bg-base-100 rounded-box w-60 gap-1 translate-y-5">
                    <li>
                        <a href="{{ route('inicio') }}" class="text-base {{ request()->routeIs('inicio') ? 'active font-semibold' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Inicio
                        </a>
                    </li>
                    @auth
                        <li>
                            <a href="{{ route('products.index') }}" class="text-base {{ request()->routeIs('products.index') ? 'active font-semibold' : '' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                                productos
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categories.index') }}" class="text-base {{ request()->routeIs('categories.index') ? 'active font-semibold' : '' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                </svg>
                                Categorías
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('suppliers.index') }}" class="text-base {{ request()->routeIs('suppliers.index') ? 'active font-semibold' : '' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                proveedors
                            </a>
                        </li>
                        <div class="divider my-2"></div>
                        <li>
                            <a href="{{ route('logout') }}" class="text-base text-error">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                Cerrar Sesión
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}" class="text-base {{ request()->routeIs('login') ? 'active font-semibold' : '' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                </svg>
                                Iniciar Sesión
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="text-base {{ request()->routeIs('register') ? 'active font-semibold' : '' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                </svg>
                                Registrarse
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>

            <!-- Logo -->
            <a href="{{ route('inicio') }}" class="btn btn-ghost normal-case text-xl gap-2 px-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
                <span class="hidden sm:inline-block font-bold">Mi Aplicación</span>
            </a>
        </div>

        <!-- Centro - Menú Principal -->
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal gap-2">
                <li>
                    <a href="{{ route('inicio') }}" class="btn btn-ghost {{ request()->routeIs('inicio') ? 'bg-base-200 text-primary font-semibold' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Inicio
                    </a>
                </li>
                @auth
                    <li>
                        <a href="{{ route('products.index') }}" class="btn btn-ghost {{ request()->routeIs('products.index') ? 'bg-base-200 text-primary font-semibold' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            Productos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('categories.index') }}" class="btn btn-ghost {{ request()->routeIs('categories.index') ? 'bg-base-200 text-primary font-semibold' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                            Categorías
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('suppliers.index') }}" class="btn btn-ghost {{ request()->routeIs('suppliers.index') ? 'bg-base-200 text-primary font-semibold' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            proveedors
                        </a>
                    </li>
                @endauth
            </ul>
        </div>

        <!-- Final - Perfil/Autenticación -->
        <div class="navbar-end gap-2">
            @auth
                <div class="flex items-center gap-2">
                    @include('components.theme-switcher')
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar online">
                            <div class="w-10 rounded-full bg-primary text-primary-content font-bold flex items-center justify-center" style="display: flex;">
                                <span class="text-xl m-0">{{ substr(auth()->user()->name, 0, 1) }}</span>
                            </div>
                        </label>
                        <ul tabindex="0" class="menu menu-lg dropdown-content mt-3 z-[1] p-3 shadow-xl bg-base-100 rounded-box w-60 gap-1 grid translate-y-5" style="justify-content: center;">
                            <div class="px-4 py-3 mb-2 bg-base-200 rounded-lg">
                                <div class="font-bold text-lg">{{ auth()->user()->name }}</div>
                                <div class="text-sm opacity-70">{{ auth()->user()->email }}</div>
                            </div>
                            <li>
                                <a class="text-base">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    Mi Perfil
                                    <span class="badge badge-primary badge-sm">Nuevo</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-base">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Configuración
                                </a>
                            </li>
                            <div class="divider my-2"></div>
                            <li>
                                <a href="{{ route('logout') }}" class="text-base text-error hover:text-error">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            @else
                <div class="hidden sm:flex gap-2">
                    <a href="{{ route('login') }}" class="btn btn-ghost btn-sm">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Registrarse</a>
                </div>
            @endauth
        </div>
    </div>
</div>

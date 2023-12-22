<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LEADS') }}</title>

    <!-- Styles -->
    <script src="https://kit.fontawesome.com/b871c9bab3.js" crossorigin="anonymous"></script>

    <!-- datatable styles -->
    <link href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-html5-2.3.6/b-print-2.3.6/r-2.4.1/sc-2.1.1/sb-1.4.2/datatables.min.css" rel="stylesheet"/>

    {{-- sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    {{-- google charts --}}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>
<body>

    <div id="app" class="h-100">

        <div class="container-fluid h-100">
            <div class="row vh-100">
                @auth
                    <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar text-center border border-light-subtle border-end bg-white">
                        <div class="position-sticky h-100">
                            <div class="mb-5">
                                {{-- logo que esta en public/img --}}
                                <img src="{{ asset('img/logo.png') }}"alt="Logo" class="img-fluid mt-4" style="width: 70%;">
                            </div>
                            {{-- <ul class="nav flex-column mt-5 mx-2">


                                <li class="nav-item">
                                    <a class="btn btn-outline-primary mb-2 w-100 fs-5 fw-medium text-start border border-0 rounded-3 p-2 {{ request()->is('alumno*') ? 'active' : '' }}" href="{{ route('alumno.index') }}">
                                    <i class="fa-regular fa-user-graduate mx-2"></i>
                                        Alumnos
                                    </a>
                                </li>
                            </ul> --}}
                            <ul class="nav flex-column mt-5 mx-2">
                                {{-- Contactos --}}
                                <li class="nav-item">
                                    {{-- es secondary cuando no esta activo y primary cuando esta activo --}}
                                    <a class="btn mb-2 w-100 fs-5 fw-medium text-start border border-0 rounded-3 p-2
                                        @if (!request()->is('contacto*'))
                                            btn-outline-secondary
                                        @else
                                            btn-outline-primary active
                                        @endif"
                                        href="{{ route('contactos.index') }}">
                                        <i class="fa-regular fa-user mx-2"></i>
                                        Contactos
                                    </a>
                                </li>

                                {{-- separador horizonal --}}
                                <hr>

                                {{-- informacion de la empresa--}}
                                <li class="nav-item">
                                        <a class="btn mb-2 w-100 fs-5 fw-medium text-start border border-0 rounded-3 p-2
                                            @if (!request()->is('empresa*'))
                                                btn-outline-secondary
                                            @else
                                                btn-outline-primary active
                                            @endif"
                                            href="{{ route('empresa.index') }}">
                                            <i class="fa-regular fa-building mx-2"></i>
                                            Empresa
                                        </a>
                                </li>

                                {{-- eventos --}}
                                <li class="nav-item">
                                    <a class="btn mb-2 w-100 fs-5 fw-medium text-start border border-0 rounded-3 p-2
                                        @if (!request()->is('evento*'))
                                            btn-outline-secondary
                                        @else
                                            btn-outline-primary active
                                        @endif"
                                        href="{{ route('eventos.index') }}">
                                        <i class="fa-regular fa-calendar mx-2"></i>
                                        Eventos
                                    </a>

                                </li>

                                {{-- productos --}}
                                <li class="nav-item">
                                    <a class="btn mb-2 w-100 fs-5 fw-medium text-start border border-0 rounded-3 p-2
                                        @if (!request()->is('producto*'))
                                            btn-outline-secondary
                                        @else
                                            btn-outline-primary active
                                        @endif"
                                        href="{{ route('productos.index') }}">
                                        <i class="fa-solid fa-box mx-2"></i>
                                        Productos
                                    </a>

                                </li>

                                {{-- separador horizontal --}}
                                <hr>

                                {{-- texto muted de REPORTES --}}
                                <p class="text-muted fw-medium text-start m-2 fs-6">REPORTES</p>

                                {{-- separador horizontal --}}

                                {{-- pedidos --}}
                                <li class="nav-item">
                                    <a class="btn mb-2 w-100 fs-5 fw-medium text-start border border-0 rounded-3 p-2
                                        @if (!request()->is('pedido*'))
                                            btn-outline-secondary
                                        @else
                                            btn-outline-primary active
                                        @endif"
                                        href="{{ route('pedidos.index') }}">
                                        <i class="fa-solid fa-shopping-cart mx-2"></i>
                                        Pedidos
                                    </a>
                                </li>

                            


                            </ul>

                        </div>
                    </nav>  
                @endauth
                
                
                    @auth
                        <main class="col-md-9 col-lg-10" style="background-color: #F7F7F7">
                    @else
                        <main class="col" style="background-color: #F7F7F7">
                    @endauth

                    @guest
                        <nav class="navbar navbar-expand-lg mt-4 p-0 mx-5">
                            <div class="container-fluid">
                                <p class="navbar-brand fw-medium fs-3 mb-0" 
                                    style="webkit-user-select: none; moz-user-select: none; ms-user-select: none; user-select: none;">
                                    LEADS
                                </p>
                            </div>
                        </nav>   
                    @else

                    <nav class="navbar navbar-expand-lg mt-4 p-0">
                        <div class="container-fluid">

                            <p class="navbar-brand fw-semibold fs-3 mb-0"> 
                                @if (request()->is('contacto*'))
                                    Contactos
                                @elseif (request()->is('evento*'))
                                    Eventos
                                @elseif (request()->is('producto*'))
                                    Productos
                                @elseif (request()->is('pedido*'))
                                    Pedidos
                                @elseif (request()->is('empresa*'))
                                    Información empresarial
                                @endif
                            </p>

                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ms-auto">
                                    <img src="https://static.vecteezy.com/system/resources/previews/021/115/771/non_2x/white-circle-free-png.png" alt="user" class="img-fluid" style="width: 40px;">
                                    <li class="nav-item">
                                        <a class="nav-link" >  Admin </a>
                                    </li>
                                    <div class="vr mx-2"></div>
                                    <li class="ms-3 nav-item">
                                        
                                        <a class="btn btn-light shadow-sm" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar sesión') }}
                                        </a>
        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>   
                    @endguest
                    

                    @yield('content')
                    @stack('scripts')


                </main>

                
            </div>
        </div>
    </div>


</body>
</html>
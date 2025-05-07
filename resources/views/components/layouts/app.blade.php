<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad extracurricular</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- Vite (si estás usando Vite) -->
    @vite(['resources/css/estilo.css'])
</head>
<body class= "background_image">
    <header class="bg-dark text-white">
        <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center py-3">
            <div class="row">
                <p class="d-flex d-lg-block d-md-block d-none me-4 mb-0">
                    <i class="bi-clock-fill me-2"></i>
                    <strong class="me-2">Actividades extracurricular</strong>
                </p>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            @auth
            <a
                href="{{ url('/dashboard') }}"
                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
            >
            Dashboard
            </a>
            @else
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"  href="{{ route('login') }}">Iniciar</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            @endauth
        </nav>
    </header>
    <main class="container mt-4">
        @yield('content')
    </main>
</body>
</html>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 70px;
        }
    </style>
    <title>Control de notas</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top">
        <a class="navbar-brand" href="https://parzibyte.me/blog">Control de notas</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('estudiantes.index') }}">Estudiantes</a> <!-- Utilizando rutas nombradas -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('materias.index') }}">Materias</a> <!-- Utilizando rutas nombradas -->
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="menu">
            {{-- <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Soporte y ayuda&nbsp;<i class="fa fa-hands-helping"></i></a>
                </li>
            </ul> --}}
        </div>
    </nav>
    <main class="container-fluid">
        <footer class="px-2 py-2 fixed-bottom bg-dark">
            <span class="text-muted">sistema experto
               
            </span>
        </footer>
    </main>
        
</body>
        
</html>
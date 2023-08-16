<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>register</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    
  <link rel="stylesheet" href="assets/css/estilo.css">

</head>

<body>
     {{-- register --}}
     <div class="signup-form">
      <div class="title">Signup</div>
    <form action="{{route('register')}}" method="POST">
      @csrf
        <div class="input-boxes">
          <div class="input-box">
            <i class="fas fa-user"></i>
            <input type="text" name="name" id="name" placeholder="ingrese su nombre" required>
          </div>
          <div class="input-box">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="form2Example11" placeholder="ingresar correo" required>
          </div>
          <div class="input-box">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="form2Example22" placeholder="Ingresar Contraseña" required>
          </div>
          <div class="input-box">
            <i class="fas fa-lock"></i>
            <input type="password" name="password_confirmation" id="form2Example22" placeholder="Confirmar Contraseña" required>
          </div>
          <div class="button input-box">
            <input type="submit" value="Registrarse">
          </div>
          <div class="text sign-up-text">¿Ya tienes una cuenta?<a href="{{route('login')}}">Iniciar Sesión</a></div>
        </div>
  </form>
</div>
  </script>
</body>

</html>
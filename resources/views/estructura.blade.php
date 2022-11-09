<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThreeMatch</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa-solid fa-bars"></i>
            </label>
            <a href='/' class="enlace">
                <img src="{{ asset('css/imagenes/sistema/logo.png') }}" alt="" class="logo">
            </a>
            <ul>
    
                <li><a href='/'>Inicio</a></li>
                <li><a href='eventos'>Eventos</a></li>
                <li><a href='suscribirse'>Suscribirse</a></li>
                <li><a href='contacto'>Nosotros</a></li>
                <li><div class="box"> 
                    <input type="text" name="busqueda" placeholder="Busqueda" class="src" autocomplete="off"> 
                </div></li>
                <li><a href='favoritos'><i class="fa-solid fa-star"></i></a></li>
                <li><a href='login'><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </nav>
</header>
        
@yield('main')

        <footer>
            <div class="grupo-1">
                <div class="box">
                    <h2>SOBRE NOSOTROS</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
                </div>
                <div class="box">
                    <h2>SIGUENOS</h2>
                    <div class="red-social">
                        <a href="https://www.instagram.com/merjac_/" class="fa fa-instagram"></a>
                        <a href="https://twitter.com/MerjacProyecto" class="fa fa-twitter"></a>
                        
                    </div>
                </div>
            </div>
            <div class="grupo-2">
                <small>&copy; 2022 <b>Merjac</b> - Todos los Derechos Reservados.</small>
            </div>
        </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2cb25f2c39.js"></script>  
</body>
</html>
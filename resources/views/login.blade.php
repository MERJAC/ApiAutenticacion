<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="{{ asset('css/estilosformulario.css') }}">
</head>
<body>
    <div id="iniciosesion">
        <form action="Authentificar" method="post">
            @csrf
            <div class="flecha">
                <a href='/'><img src="{{ asset('css/imagenes/sistema/flecha-atras.png') }}"></a>
            </div>
            <h2 class="form_title">Inicia Sesión</h2>
            <p class="form_paragraph">¿Aún no tienes una cuenta?</p>
            <p onclick="Registro();">Entra Aquí</p>
            

            <div class="form_container">
                <div class="form_group">    
                    <input type="text" id="email" class="form_input" placeholder=" " name="email" value="{{old('email')}}">
                    <label for="email" class="form_label">Email:</label>
                    <span class="form_line"></span>
                </div>
                <div class="form_group">
                    <input type="password" id="password" class="form_input" placeholder=" " name="password">
                    <label for="password" class="form_label">Contraseña:</label>
                    <span class="form_line"></span>
                </div>
                
                <input type="submit" class="form_submit" value="Entrar">
            </div>
        </form>
        </div>
    </div>


<div id="registro">
        <form action="CrearUsuario" method="post">
            @csrf
            <div class="flecha">
                <a href='/'><img src="{{ asset('css/imagenes/sistema/flecha-atras.png') }}"></a>
            </div>
       
            <h2 class="form_title">Registrate</h2>
            <p class="form_paragraph">¿Ya tenes cuenta?</p>
            <p onclick="inicioSesion();">Inicia Sesion Aquí</p>

            <div class="form_container">
                
                <div class="form_group">
                    <input type="text" id="name" class="form_input" placeholder=" " name="name" value="{{old('name')}}">
                    <label for="name" class="form_label">Nombre:</label>
                    <span class="form_line"></span>
                </div>
                <div class="form_group">    
                    <input type="text" id="name" class="form_input" placeholder=" " name="email" value="{{old('email')}}">
                    <label for="email" class="form_label">Email:</label>
                    <span class="form_line"></span>
                </div>
                <div class="form_group">
                    <input type="password" id="1password" class="form_input" placeholder=" " name="password">
                    <label for="password" class="form_label">Contraseña:</label>
                    <span class="form_line"></span>
                </div>
                <div class="form_group">
                    <input type="password" id="1password_confirmation" class="form_input" placeholder=" " name="password_confirmation">
                    <label for="Confirmar Contraseña" class="form_label">Confirmar Contraseña:</label>
                    <span class="form_line"></span>
                </div>
                <input type="submit" class="form_submit" value="Entrar">
            </div>
        </form>
        </div>
    </div>

</body>

<script>
    function inicioSesion(){
        document.getElementById("registro").style.display = 'none';
        document.getElementById("iniciosesion").style.display = 'block';
    }
    function Registro(){
        document.getElementById("registro").style.display = 'block';
        document.getElementById("iniciosesion").style.display = 'none';
    }
</script>
</html>
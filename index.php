<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="preload" href="CSS/login.css" as="style">
    <link href="CSS/login.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira:wght@400;600&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<nav class="nav">
    <div class="contenedor nav_contenido">
        <div class="nav_izquierda">
            IEST <span>Deportes</span>
        </div>
    </div>
</nav>

<body>
    <section class="contenedor_body">
        <div>
            <img src="IMG/Logo Anahuac.png">
        </div>
        <div>
            <p>Login</p>
        </div>
        <form id="form_login" onsubmit="form_login(event)">
            <div>
                <fieldset>
                    <div>
                        <div>
                            <label>Usario</label>
                            <input id="usuario" class="input-text" type="text" placeholder="ID" required>
                        </div>

                        <div>
                            <label>Contraseña</label>
                            <input id="pass" class="input-text" type="password" placeholder="Contraseña" required>
                        </div>
                    </div>
                    <div>
                        <button type="submit">Iniciar Sesión</button>
                    </div>
                </fieldset>
            </div>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/login.js"></script>

</body>

<footer>
    <p>Max Del Angel © 2024</p>
</footer>

</html>
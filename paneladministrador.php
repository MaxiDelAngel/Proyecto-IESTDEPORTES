<?php
session_start(); // Iniciar la sesión si no se ha iniciado aún

// Verificar si el usuario está autenticado
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Obtener el nombre del usuario de la sesión
    $nombre = $_SESSION['user_data']['nombre']; // Ajusta según la estructura de tu array de datos de usuario
} else {
    // Si el usuario no está autenticado, redirigir al formulario de inicio de sesión
    header("Location: login.php"); // Ajusta el nombre del archivo de inicio de sesión si es necesario
    exit; // Asegurar que el script se detenga después de la redirección
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="CSS/paneladmin.css" as="style">
    <link rel="stylesheet" href="CSS/paneladmin.css" as="style">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Admin</title>
</head>
<body>
<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="IMG/LOGO IEST DEPORTES.jpg" alt="">
        </div>

            <span class="logo_name">IEST DEPORTES</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Horarios</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">...</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">...</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">...</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">...</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="cerrarsesion.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Cerrar sesión</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>


    <!--QUITAR ESTA PARTE DEL PROGRAMA, SE TIENE QUE ARREGLAR TMB EL CSS AL QUITARLA-->
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <span>Bienvenido, <?php echo $nombre; ?></span>
            <img src="IMG/75543715_2405125449739857_8182714646583574528_n.jpg" alt=""><!--IMAGEN DE PERFIL-->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">INICIO</a></span>
                </div>
                <div class="contenedor-opciones">
                    <div class="opcion">
                        <div class="opcion-nombre">
                            <p>Deportes</p>
                        </div>
                        <div class="opcion-footer">
                            
                        </div>
                    </div>
                    <div class="opcion">
                        <div class="opcion-nombre">
                            <p>Solicitudes</p>
                        </div>
                        <div class="opcion-footer">
                            
                        </div>
                    </div>
                    <div class="opcion">
                        <div class="opcion-nombre">
                            <p>Historial Deportivo</p>
                        </div>
                        <div class="opcion-footer">
                            
                        </div>
                    </div>
                    <div class="opcion">
                        <div class="opcion-nombre">
                            <p>Coaches</p>
                        </div>
                        <div class="opcion-footer">
                            
                        </div>
                    </div>
                    <div class="opcion">
                        <div class="opcion-nombre">
                            <p>Horarios</p>
                        </div>
                        <div class="opcion-footer">
                            
                        </div>
                    </div>
                    <div class="opcion">
                        <div class="opcion-nombre">
                            <p>Resumen</p>
                        </div>
                        <div class="opcion-footer">
                            
                        </div>
                    </div>
                    
                </div>

            </div>

    <script src="js/admin.js"></script>
</body>
</html>


    
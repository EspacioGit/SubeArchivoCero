<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href = "/multitransporte/css/index.css">  
    <title>Multitransporte</title>
</head>

<body> 
    <h1>Multitransporte Más Viajes</h1> 
    <p>por favor <strong>Ingrese su clave y contrasena</strong></p> 
    <div>
        <?php echo date('Y-m-d H:i:s'); ?>
        <a href="/multitransporte/pages/JOSB_cliente.html"><br>CLIENTE<br></a>
        <a href="/multitransporte/pages/JOSB_admin.html"><br>ADMINISTRADOR<br></a>
    </div> 
    <div>
        <form action="login.php" method="post">
            <label for="user">Usuario:</label>
            <input type="text" id="user" name="user" requered><br>
            <label for="password">Contraseña:</label>            
            <input type="password" id="password" name="password" requered><br>
            <button type="submit">Ingresar</button>
        </form>
    </div>    
        <div>
            <footer class="footer">
            <div class="container">
                <div class="footer-content">
            <p>&copy; JOSB - PW1 - 2024 / 05 / 15 Mi Sitio Web. Todos los derechos reservados.</p>
                </div>
            <div class="footer-social-links">
                <a href="#"><img src="ruta/a/icono/facebook.png" alt="Facebook"></a>
                <a href="#"><img src="ruta/a/icono/twitter.png" alt="Twitter"></a>
                <!-- Enlaces a redes sociales -->
          </div>
        </div>
      </footer>
    </div>
</body>
</html>
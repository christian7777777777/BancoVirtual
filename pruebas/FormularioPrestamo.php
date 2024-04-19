<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <header>
        <img src="multimedia\logo.png" alt="Logo del banco">
        <h1>Banco Virtual</h1>
        <p>Tu banco en línea</p>
    </header>
    <section class="bienvenido">
        <h2>Formulario de Prestamo</h2>
        <p>Ingresa tus Datos para solicitar un prestamo</p>
        <a href="index.php" class="boton">Pagina Principal</a>
    </section>

    <form action="ValidacionPrestamo.php" method = "post">
        <fieldset>
            <legend>Nombres</legend>
            <label for="Usuario">Usuario</label><br>
            <input type="text" name="Usuario" placeholder="Ingresa tu usuario" required="" ><br>
        </fieldset>
        
        <label for="Correo">Correo</label><br>
        <input type="email" name="Correo" placeholder="Ingresa tu correo" required=""><br>
      
        <label for="Contrasena">Contraseña</label><br>
        <input type="password" name="Contrasena" placeholder="Ingresa tu contraseña" required=""><br>
      
        <label for="Telefono">Teléfono</label><br>
        <input type="number" name="Telefono" placeholder="Ingresa tu teléfono" required=""><br>
        
        <label for="Edad">Edad</label><br>
        <input type="number" name="Edad" placeholder="Ingresa tu edad" required=""><br>

        <label>Selecciona tu género:</label><br>
        <input type="radio" name="genero" value="Masculino" required=""> Masculino<br>
        <input type="radio" name="genero" value="Femenino" required=""> Femenino<br>

        <label for="terminos">Acepto los términos y condiciones</label><br>
        <input type="checkbox" name="terminos" value="true" required=""><br>

        <input type="submit" value="Enviar"><br>
    </form>
    <footer>
        <p>Copyright &copy; 2024 Banco Virtual</p>
    </footer>
</body>
</html>
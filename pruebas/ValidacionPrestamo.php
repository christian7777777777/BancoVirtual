<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Virtual - Tu banco en línea</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <header>
        <img src="multimedia\logo.png" alt="Logo del banco">
        <h1>Banco Virtual</h1>
        <p>Tu banco en línea</p>
    </header>

    <section class="bienvenido">
        <h2>Validacion de Prestamo</h2>
        <p>Validares a que tipo de prestamo eres elegible</p>
        <a href="index.php" class="boton">Pagina Principal</a>
        <a href="FormularioPrestamo.php" class="boton">Formulario de Prestamo</a>
    </section>

    <?php  
        $usuario = $_POST['Usuario'];
        $edad = $_POST['Edad'];
        $genero = $_POST['genero'];

        if ($edad >= 18 && $genero == "Femenino"){
            echo "<h2>Estimada: $usuario puede solicitar un prestamo hasta a $5000 USD </h2>";
        }
        elseif($edad >= 18 && $genero == "Masculino"){
            echo "<h2>Estimado: $usuario puede solicitar un prestamo hasta a $6000 USD </h2>";
        }
        elseif($edad < 18){
            echo "<h2>Estimado: $usuario usted no es elegible para un prestamo</h2>";
        }
    ?>

    <footer>
        <p>Copyright &copy; 2024 Banco Virtual</p>
    </footer>
</body>
</html>
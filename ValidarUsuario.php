<?php include("template/cabecera.php");?>
<?php
    include("conexionBD.php");
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if($_POST['Boton']=="Registrar"){
            $nombreUsuario = trim($_POST['NombreUsuario']);
            $apellidoUsuario = trim($_POST['ApellidoUsuario']);
            $cedulaUsuario = trim($_POST['CedulaUsuario']);
            $edadUsuario = trim($_POST['EdadUsuario']);
            $telefonoUsuario = trim($_POST['TelefonoUsuario']);
            $emailUsuario = trim($_POST['EmailUsuario']);
            $contrasenaUsuario = trim($_POST['ContrasenaUsuario']);
            $generoUsuario = trim($_POST['GeneroUsuario']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO `usuarios` (`ID`, `Nombres`, `Apellidos`, `Cedula`, `Edad`, `Telefono`, `Email`, `Contrasena`, `Genero`, `Fecha_Registro`) 
            VALUES (NULL, '$nombreUsuario', '$apellidoUsuario', '$cedulaUsuario', '$edadUsuario', '$telefonoUsuario', '$emailUsuario', '$contrasenaUsuario', '$generoUsuario', '$fecha');";
            
            $resultado = mysqli_query($conn, $consulta);
            
            if($resultado){
                ?>
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Bien Hecho <?php echo $nombreUsuario ?>!</strong> Te has registrado correctamente!!! <a href="index.php" class="alert-link">Pagina Principal</a>.
                </div>
                <?php
            }else{
                ?>
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Fallo en Registro!</strong> Vueleve a Intentarlo <a href="RegistroUsuario.php" class="alert-link">Registrarse</a>.
                </div>
                <?php
            }
        }
        elseif($_POST['Boton']=="Login"){
            $emailUsuario = $_POST['EmailUsuario'];
            $contrasenaUsuario = $_POST['ContrasenaUsuario'];

        }
    }
?>
<?php include("template/pie.php");?>
        
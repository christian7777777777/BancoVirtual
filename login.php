<?php include("template/cabecera.php");?>     
<form action="ValidarUsuario.php" method="post">
    <fieldset>
        <legend class="mt-4 text-center">Igresa tus credenciales</legend>
        <div>
            <label for="EmailUsuario" class="form-label mt-4">Direccion de Email</label>
            <input type="email" class="form-control" id="EmailUsuario" name="EmailUsuario" aria-describedby="emailHelp" placeholder="Ingresa tu email">
            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
        </div>
        <div>
            <label for="ContrasenaUsuario" class="form-label mt-4">Contrasena</label>
            <input type="password" class="form-control" id="ContrasenaUsuario" name="ContrasenaUsuario" placeholder="Ingresa tu Contrasena" autocomplete="off">
        </div>
    </fieldset>
    <fieldset>
       <div>
            <input type="submit" class="btn btn-primary" value="Login" name="Boton">
        </div> 
    </fieldset>
</form>
<?php include("template/pie.php");?>

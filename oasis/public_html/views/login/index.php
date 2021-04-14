<?php
    $titulo = 'Login';
    include 'php/cabecera.php'; 
    include 'php/menu-default.php';    
?>
    <div class="container mt-5">
        <div class="text-center pt-5">
            <img src="<?php print constant('URL'); ?>images/user.png" class="rounded" alt="...">
        </div>
        <div class="row d-flex justify-content-center p-5">
            <form action="<?php print constant('URL'); ?>login/auth" method="POST" class="w-75">
                <label for="user"><span class="ion-ios-person"></span> Usuario</label>
                <input type="text" name="user" class="form-control" placeholder="Username" required>
                <label for="password"><span class="ion-ios-lock"></span> Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <div class="row d-flex justify-content-center mt-5">
                    <input type="submit" value="Agregar" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
<?php
    include 'html/body-final.html';
   ?>

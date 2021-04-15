<?php
    $titulo = 'Crear Usuario'; 
    include 'php/cabecera.php'; 
    include 'php/menu-admin.php';
    $tipo = 'Usuario';
    $accion_1 = 'Creado';
    $accion_2 = 'Crear';
    require_once 'php/msg.php';
?>
    <div class="row d-flex justify-content-center">
        <h2 class="text-success m-3">Agregar Usuario</h2>
    </div>

    <div class="row d-flex justify-content-center m-5">

            <form class="w-75" action="<?php print constant('URL'); ?>admin/usuario_insert" method="POST">
            <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" pattern="^[a-zA-Z\s]+{2,254}" aria-describedby="textHelp" placeholder="Ingresa tu nombre">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"  pattern="^[a-zA-Z\s]+{2,254}" aria-describedby="textHelp" placeholder="Ingresa tu apellido">
                </div>
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control"  id="usuario" name="usuario" pattern="[a-zA-Z\s]+{2,254}" aria-describedby="textHelp" placeholder="Ingresa tu usuario" required>
                </div>
                <div class="form-group">
                    <label for="contrasena">Contrsaeña</label>
                    <input type="password" class="form-control" id="contrasena" name="contrasena" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" aria-describedby="textHelp" placeholder="Ingresa tu contraseña" required>
                </div>
    
                <div class="row d-flex justify-content-center">
                    <input type="submit" value="Agregar" class="btn btn-success">
                </div>
            </form>

    </div>

<?php
    include 'html/body-final.html';  
?>
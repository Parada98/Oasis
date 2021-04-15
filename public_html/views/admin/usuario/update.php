<?php
    $titulo = 'Actualizar Usuario';
    include 'php/cabecera.php'; 
    include 'php/menu-admin.php';
    if(isset($this->datos)){
        // que campos teniamos para actualizar
        // nombre, apellido, usuario?? solo 3
        foreach($this->datos as $item){
            $id_usuario = $item['id_usuario'];
            $nombre = $item['nombre'];
            $apellido = $item['apellido'];
            $usuario = isset($item['usuario']) ? $item['usuario'] : '';
        }
    }
    $tipo = 'Usuario';
    $accion_1 = 'Actualizado';
    $accion_2 = 'Actualizar';
    require_once 'php/msg.php';
?>
    <div class="row d-flex justify-content-center">
        <h2 class="text-success m-3">Actualizar Usuario</h2>
    </div>

    <div class="row d-flex justify-content-center m-5">

        <form class="w-75" action="<?php print constant('URL'); ?>admin/usuario_update2" method="POST">
            <div class="form-group">
                <label for="id_usuario">Id usuario</label>
                <input type="text" class="form-control" value='<?php print $id_usuario; ?>'  id="id_usuario" name="id_usuario" aria-describedby="textHelp" readonly>
            </div> <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" value='<?php print $nombre; ?>' id="nombre" name="nombre" pattern="^[a-zA-Z\s]+{2,254}" aria-describedby="textHelp" placeholder="Ingresa tu nombre" >
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" value='<?php print $apellido; ?>' id="apellido" name="apellido" pattern="^[a-zA-Z\s]+{2,254}" aria-describedby="textHelp" placeholder="Ingresa tu apellido">
            </div>
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" value='<?php print $usuario; ?>' id="usuario" name="usuario" pattern="^[a-zA-Z]+{2,254}" aria-describedby="textHelp" placeholder="Ingresa tu nuevo usuario" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Constraseña</label>
                <input type="text" class="form-control" id="contrasena" name="contrasena" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" aria-describedby="textHelp" placeholder="Ingresa tu nueva constraseña">
            </div>
            <div class="row d-flex justify-content-center">
                <input type="submit" value="Actualizar" class="btn btn-success">
            </div>
        </form>

    </div>
    <div class="row d-flex justify-content-center">
        <button type="button" class="btn btn-success m-4"><a class="badge badge-success" href="<?php print constant('URL'); ?>admin/usuario_imagen">Actualizar fotografia</a></button>
    </div>

<?php
    include 'html/body-final.html';  
?>
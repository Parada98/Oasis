<?php
    $titulo = 'Crear  Editorial'; 
    include 'php/cabecera.php'; 
    include 'php/menu-admin.php';
    $tipo = 'Editorial';
    $accion_1 = 'Creada';
    $accion_2 = 'Crear';
    require_once 'php/msg.php';
    
?>
    <div class="row d-flex justify-content-center">
        <h2 class="text-success m-3">Agregar Editorial</h2>
    </div>

    <div class="row d-flex justify-content-center m-5">

        <form class="w-75" action="<?php print constant('URL'); ?>admin/editorial_insert" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="name"  pattern="^[a-zA-Z\s]+{2,254}" aria-describedby="textHelp" placeholder="Ingresa tu nombre" required>
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" pattern="[a-zA-Z\s-_.\0-9]+{2,254}" aria-describedby="textHelp" placeholder="Ingresa tu dirreccion" required>
            </div>
            <div class="form-group">
                <label for="Descripcion">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" pattern="^[a-zA-Z\s]+{2,254}"aria-describedby="textHelp" placeholder="Ingresa una descripcion">
            </div>
            <div class="row d-flex justify-content-center">
                <input type="submit" value="Agregar" class="btn btn-success">
            </div>
        </form>

    </div>
<?php
    include 'html/body-final.html';  
?>
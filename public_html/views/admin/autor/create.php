<?php
    $titulo = 'Crear  Autor'; 
    include 'php/cabecera.php'; 
    include 'php/menu-admin.php';
    $tipo = 'Autor';
    $accion_1 = 'Creado';
    $accion_2 = 'Crear';
    require_once 'php/msg.php';
    ?>
    <div class="row d-flex justify-content-center">
        <h2 class="text-success">Agregar Autor</h2>
    </div>

    <div class="row d-flex justify-content-center m-5">

        <form class="w-75" action="<?php print constant('URL'); ?>admin/autor_insert" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="textHelp" placeholder="Ingresa el nombre" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number"  min="10" max="150" step="1" class="form-control" id="edad" name="edad" aria-describedby="textHelp" placeholder="Ingresa la edad" required>
            </div>
            <div class="form-group">
                <label for="genero">Genero</label>
                <input type="text" class="form-control" id="genero" name="genero" aria-describedby="textHelp" placeholder="Ingresa el genero" required>
            </div>
            <div class="row d-flex justify-content-center">
                <input type="submit" value="Agregar" class="btn btn-success">
            </div>
        </form>

    </div>
<?php
    include 'html/body-final.html';  
?>

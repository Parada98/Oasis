<?php
    $titulo = 'Actualizar autor';
    include 'php/cabecera.php'; 
    include 'php/menu-admin.php';
    $tipo = 'Autor';
    $accion_1 = 'Actualizado';
    $accion_2 = 'Actualizar';
    require_once 'php/msg.php';

    if(isset($this->datos)){
        foreach($this->datos as $item){
            $id_autor = $item['id_autor'];
            $nombre = $item['nombre'];
            $edad = $item['edad'] == null ? 0 : $item['edad'];
            $genero = $item['genero'];
        }
    }
?>
    <div class="row d-flex justify-content-center">
        <h2 class="text-success m-3">Agregar Autor</h2>
    </div>

    <div class="row d-flex justify-content-center m-5">

        <form class="w-75" action="<?php print constant('URL'); ?>admin/autor_update2" method="POST">
            <div class="form-group">
                <label for="id_autor">Id autor</label>
                <input type="text" class="form-control" value='<?php print $id_autor; ?>'  id="id_autor" name="id_autor" aria-describedby="textHelp" readonly>
                <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" value='<?php print $nombre; ?>' name="nombre" aria-describedby="textHelp" placeholder="Ingresa el nombre" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number"  min="10" max="150" step="1"  value='<?php print $edad; ?>' class="form-control" id="edad" name="edad" aria-describedby="textHelp" placeholder="Ingresa la edad" required>
            </div>
            <div class="form-group">
                <label for="genero">Genero</label>
                <input type="text" class="form-control" value='<?php print $genero; ?>' id="genero" name="genero" aria-describedby="textHelp" placeholder="Ingresa el genero" required>
            </div>
            <div class="row d-flex justify-content-center">
                <input type="submit" value="Actualizar" class="btn btn-success">
            </div>
        </form>

    </div>
<?php
    include 'html/body-final.html';  
?>

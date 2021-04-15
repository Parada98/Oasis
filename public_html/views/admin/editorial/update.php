<?php
    $titulo = 'Actualizar Editorial';
    include 'php/cabecera.php'; 
    include 'php/menu-admin.php';
    $tipo = 'Editorial';
    $accion_1 = 'Actualizada';
    $accion_2 = 'Actualizar';
    require_once 'php/msg.php';
    
    if(isset($this->datos)){
        foreach($this->datos as $editorial){
            $id_editorial = $editorial['id_editorial'];
            $nombre = $editorial['nombre'];
            $direccion = $editorial['direccion'];
            $decripcion = isset($editorial['descripcion']) ? $editorial['descripcion'] : '';
        }
    }
?>
    <div class="row d-flex justify-content-center">
        <h2 class="text-success m-3">Agregar Editorial</h2>
    </div>

    <div class="row d-flex justify-content-center m-5">

        <form class="w-75" action="<?php print constant('URL'); ?>admin/editorial_update2" method="POST">
            <div class="form-group">
                <label for="id_usuario">Id usuario</label>
                <input type="text" class="form-control" value='<?php print $id_editorial; ?>'  id="id_editorial" name="id_editorial" aria-describedby="textHelp" readonly>
            </div> <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" value='<?php print $nombre; ?>' id="nombre" name="name" pattern="[a-zA-Z\s]+{2,254}" aria-describedby="textHelp" placeholder="Ingresa tu nombre" required>
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" value='<?php print $direccion; ?>' id="direccion" name="direccion" pattern="[a-zA-Z\s-_.\0-9]+{2,254}" aria-describedby="textHelp" placeholder="Ingresa tu dirreccion" required>
            </div>
            <div class="form-group">
                <label for="Descripcion">Descripcion</label>
                <input type="text" class="form-control" value='<?php print $decripcion; ?>' id="descripcion" name="descripcion" pattern="[a-zA-Z\s]+{2,254}" aria-describedby="textHelp" placeholder="Ingresa una descripcion">
            </div>
            <div class="row d-flex justify-content-center">
                <input type="submit" value="Actualizar" class="btn btn-success">
            </div>
        </form>

    </div>
<?php
    include 'html/body-final.html';  
?>

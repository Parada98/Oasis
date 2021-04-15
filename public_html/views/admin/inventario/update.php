<?php
    $titulo = 'Actualizar inventario';
    include 'php/cabecera.php'; 
    include 'php/menu-admin.php';
    $tipo = 'Inventario';
    $accion_1 = 'Actualizado';
    $accion_2 = 'Actualizar';
    require_once 'php/msg.php';
    
    if(isset($this->datos)){
        foreach($this->datos as $item){
            $id_inventario = $item['id_inventario'];
            $nombre = $item['nombre'];
            $stock = $item['stock'];
        }
    }

?>
    <div class="row d-flex justify-content-center">
        <h2 class="text-success m-3">Actualizar</h2>
    </div>

    <div class="row d-flex justify-content-center m-5">

        <form class="w-75" action="<?php print constant('URL'); ?>admin/inventario_update2" method="POST">
        <div class="form-group">
                <label for="id_inventario">Id Inventario</label>
                <input type="text" class="form-control" value='<?php print $id_inventario; ?>'  id="id_inventario" name="id_inventario" aria-describedby="textHelp" readonly>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" value='<?php print $nombre; ?>'  id="nombre" name="nombre" aria-describedby="textHelp" readonly>
            </div>
            <div class="form-group">
                <label for="stock">stock</label>
                <input type="number"  min="0" step="1" class="form-control" value='<?php print $stock; ?>' id="stock" name="stock" aria-describedby="textHelp" placeholder="Ingresa el numero de libros" required>
            </div>
            <div class="row d-flex justify-content-center">
                <input type="submit" value="Actualizar" class="btn btn-success">
            </div>
        </form>

    </div>
<?php
    include 'html/body-final.html';  
?>

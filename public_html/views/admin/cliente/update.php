<?php
    $titulo = 'Actualizar Cliente';
    include 'php/cabecera.php'; 
    include 'php/menu-admin.php';
    $tipo = 'Cliente';
    $accion_1 = 'Actualizado';
    $accion_2 = 'Actualizar';
    require_once 'php/msg.php';
    if(isset($this->datos)){
      
        foreach($this->datos as $item){
            print 
            $id_cliente = $item['id_cliente'];
            $nombre = $item['nombre'];
            $apellido = $item['apellido'];
            $rfc = $item['rfc'];
            $credito = $item['credito'];
        }
    }

?>
    <div class="row d-flex justify-content-center">
        <h2 class="text-success m-3">Actualizar Cliente</h2>
    </div>

    <div class="row d-flex justify-content-center m-5">

        <form class="w-75" action="<?php print constant('URL'); ?>admin/cliente_update2" method="POST">
            <div class="form-group">
                <label for="id_cliente">Id clienet</label>
                <input type="text" class="form-control" value='<?php print $id_cliente; ?>'  id="id_cliente" name="id_cliente" aria-describedby="textHelp" readonly>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" value='<?php print $nombre; ?>' id="nombre" name="nombre" aria-describedby="textHelp" placeholder="Ingresa tu nombre" required pattern="^[a-zA-Z\s]+{2,254}">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" value='<?php print $apellido; ?>' id="apellido" name="apellido" aria-describedby="textHelp" placeholder="Ingresa tu apellido" required pattern="^[a-zA-Z\s]+{2,254}">
            </div>
            <div class="form-group">
                <label for="rfc">RFC</label>
                <input type="text" class="form-control" value='<?php print $rfc; ?>' id="rfc" name="rfc" aria-describedby="textHelp" placeholder="Ingresa tu rfc" required pattern="^[a-zA-Z\s]+{2,254}">
            </div>
            <div class="form-group">
                <label for="credito">Credito</label>
                
                <input list="creditos" class="form-control" value='<?php print $credito; ?>' id="credito" name="credito" aria-describedby="textHelp" placeholder="Ingresa credito" pattern="[A-Za-z]+{2}">
                    <datalist id="creditos">
                        <option value="si">
                        <option value="no">
                    </datalist>
                   
            </div>
            <div class="row d-flex justify-content-center">
                <input type="submit" value="Actualizar" class="btn btn-success">
            </div>
        </form>

    </div>
   

<?php
    include 'html/body-final.html';  
?>

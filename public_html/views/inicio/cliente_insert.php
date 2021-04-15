
<?php
    $titulo = "Cliente";
    require_once ('php/cabecera.php');
    require_once ("php/menu-default.php");
    $tipo = 'Cliente';
    $accion_1 = 'Creado';
    $accion_2 = 'Crear';
    require_once 'php/msg.php';
?>
    
    <div class="row d-flex justify-content-center">
        <h2 class="text-success m-3">Agregar Cliente</h2>
    </div>

    <div class="row d-flex justify-content-center m-5">

        <form class="w-75" action="<?php print constant('URL'); ?>inicio/cliente_insert" method="POST">
           <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="textHelp" placeholder="Ingresa tu nombre" required pattern="[A-Za-z]{1,30}">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="textHelp" placeholder="Ingresa tu apellido" required pattern="[A-Za-z]{1,30}">
            </div>
            <div class="form-group">
                <label for="rfc">RFC</label>
                <input type="text" class="form-control" id="rfc" name="rfc" aria-describedby="textHelp" placeholder="Ingresa tu rfc" required pattern="[A-Za-z]{1,30}" pattern="[A-Za-z0-9]{1,30}">
            </div>
            <div class="form-group">
                <label for="credito">Credito</label>
          
                <input list="creditos" class="form-control" id="credito" name="credito" aria-describedby="textHelp" placeholder="Ingresa credito" required  pattern="[A-Za-z]{2}">
                    <datalist id="creditos">
                        <option value="si">
                        <option value="no">
                    </datalist>
                   
            </div>

            <div class="row d-flex justify-content-center">
                <input type="submit" value="Agregar" class="btn btn-success">
            </div>
        </form>
    </div>
<?php
    require_once ("html/body-final.html");
?>
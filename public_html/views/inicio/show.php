<?php
$titulo = 'Oasis';
include("php/cabecera.php");
include("php/menu-default.php");
$tipo = 'Venta';
$accion_1 = 'Realizada';
$accion_2 = 'Realizar';
require_once 'php/msg.php';

foreach ($this->datos as $item) {

    $imagen = $item['imagen'];
    $nombre = $item['nombre'];
    $autor = $item['autor'];
    $descripcion = $item['descripcion'];
    $precio = $item['precio'];
    $estado = $item['estado'];
    $autor = $item['autor'];
    $editorial = $item['editorial'];
    $id_libro = $item['id_libro'];
}
?>

<div class="container mt-5 mb-5 p-3" >
    <div class=" row  no-gutters"  >
        <div class="card text-white col-lg-8 col-xl-8 col-12" style="background:rgba(37, 56, 84, .3)" >
            <div class="row">
                <div class="col-md-4">
                    <?php print ('<img class="rounded card-img-top mx-auto p-1" src="data:image/jpg;base64,'); print (base64_encode($imagen));print('"/>'); ?>
                </div>
                <div class="col-md-8">
                    <h2 class="text-center">Datos del libro</h2>
                    <div class="card-body" style="color:black">
                        <h5 class="card-title"><?php print($nombre);?></h5>
                        <p class="card-text"> <ion-icon name="book"></ion-icon> Descripcion:</p>
                        <p class="card-text"><?php print($descripcion);?></p>
                        <p class="card-text"><ion-icon name="sparkles"></ion-icon>Estado: <?php print($estado);?></p>
                        <p class="card-text"><ion-icon name="card"></ion-icon> Precio: <?php print($precio);?></p>
                        <p class="card-text"> <ion-icon name="person"></ion-icon> Autor: <?php print($autor) ?> </p>
                        <p class="card-text"></p><ion-icon name="folder"></ion-icon> Editorial: <?php print($editorial) ?> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-12 col-lg-4 col-xl-4 justify-content-center'>
            <form class="col-12" action="<?php print constant('URL'); ?>inicio/venta" method="POST">
            
            <input type="text" id="id_libro" name="id_libro" value="<?php print $id_libro; ?>"hidden>
                <input type="numer" id="precio" name="precio" value="<?php print $precio; ?>" hidden>
                <label for="cantidad" pattern="[0-9]{10}" class="text-light text-center" style="font-size:30px;">Cantidad</label>
                <div class="container row">
                    <a id="menos" class="menos col-3 col-xl-3 col-lg-3 text-danger text-decoration-none text-center display-4">
                        <ion-icon name="remove-circle-outline"></ion-icon>
                    </a>
                    <input type="number" class="col-6" min='1'  value="1" id="cantidad" name="cantidad" required >
                    <a id="mas" class="col-3 col-xl-3 col-lg-3 text-success text-decoration-none text-center display-4 ">
                        <ion-icon name="add-circle-outline"></ion-icon>
                    </a>
                </div>
                <label for="total" class="text-light text-center" style="font-size:30px;">Total</label>
                <input type="text" class="form-control" id="total" name="total" aria-describedby="textHelp" value ="0" placeholder="Total" readonly required>
                <label for="direccion" class="text-light text-center" style="font-size:30px;">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" aria-describedby="textHelp" placeholder="Ingresa tu usuario" required>

                <label for="rfc" class="text-light text-center" style="font-size:30px;">RFC</label>
                <input type="text" class="form-control" id="rfc" name="rfc" aria-describedby="textHelp" placeholder="Ingresa tu rfc" required>
                
                <div class="row d-flex mt-3 justify-content-center">
                    <input type="submit" value="comprar" class="btn btn-success">
                </div>
            </form>
            
        </div>
    </div>
</div>
<script src="<?php print constant('URL'); ?>js/show.js"></script>
<?php
include("html/body-final.html");
?>


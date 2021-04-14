<?php
    $titulo = 'Oasis';
    include ("php/cabecera.php"); 
    include ("php/menu-default.php");
    foreach($this->datos as $item){
        
        $imagen = $item['imagen'];
        $nombre = $item['nombre'];
        $autor = $item['autor'];
        $descripcion = $item['descripcion'];
        $precio = $item['precio'];
    } 
?>

<div class="container row m-5">
    <div class="card col-8" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <?php print ('<img class="rounded card-img-top"  src="data:image/jpg;base64,'); print (base64_encode($imagen));print('"/>'); ?>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                            <h5 class="card-title"><?php print($nombre);?></h5>
                            <p class="card-text"><?php print($autor);?></p>
                            <p class="card-text"><?php print($descripcion);?></p>
                </div>
            </div>
        </div>
            <div class="card-footer">
                    <p class="card-text"><small class="text-muted">Precio: $<?php print($precio);?></small></p>
                    </a>
            </div> 
    </div>
    <div class='col-4'>
        <form class="w-75" action="<?php print constant('URL'); ?>admin/usuario_insert" method="POST">
            <div class="form-group">
                <label for="cantidad">Precio</label>
                <div>
                    <input type="numer" id="precio" name="precio" value="<?php print $precio; ?>" readonly required>
                </div>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <div>
                    <button id="menos">
                        <ion-icon name="remove-circle-outline"></ion-icon>
                    </button>
                        <input type="numer" min='1'  value="1" id="cantidad" name="cantidad" required>
                    <button id="mas">
                        <ion-icon name="remove-circle-outline"></ion-icon>
                    </button>
                </div>
            </div>
            <div class="form-group">
                <label for="total">Total</label>
                <input type="text" class="form-control" id="total" name="total" aria-describedby="textHelp" value ="0" placeholder="Total" readonly required>
            </div>
            <div class="form-group">
                <label for="usuario">Direccion</label>
                <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="textHelp" placeholder="Ingresa tu usuario" required>
            </div>
            <div class="row d-flex justify-content-center">
                <input type="submit" value="Agregar" class="btn btn-success">
            </div>
        </form>

    </div>
</div>
                    
<?php
    include ("html/body-aside.html");
    include ("html/body-final.html");
?>


<script>
(function(){
    const mas = document.getElementById("mas"),
    precio = document.getElementById("precio"),
    menos = document.getElementById("menos"),
    cantidad = document.getElementById("cantidad"),
    total = document.getElementById("total");
    _precio = Number(precio.value); 
    n = Number(cantidad.value) * _precio;
    total.value = n;
    mas.addEventListener("click", function(e){
        n = Number(cantidad.value) + 1;
        cantidad.value = n;
        n = Number(cantidad.value) * _precio;
        total.value = n;
    });
    menos.addEventListener("click", function(e){
        n = Number(cantidad.value) - 1;
        cantidad.value = n <= 1 ? 1 : n ;
        n = Number(cantidad.value) * _precio;
        total.value = n;
    });
})();

</script>
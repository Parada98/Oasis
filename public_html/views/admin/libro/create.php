<?php
function conexion($host, $dbname, $user, $password)
{
    try {
        $GLOBALS['db'] = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $GLOBALS['db']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        $GLOBALS['msg'] = 'Fallo la conexion';
    }
}

$titulo = 'Crear Libro';
include 'php/cabecera.php';
include 'php/menu-admin.php';
$tipo = 'Libro';
$accion_1 = 'Creado';
$accion_2 = 'Crear';
require_once 'php/msg.php';

?>
<div class="row d-flex justify-content-center">
    <h2 class="text-success m-3">Agregar Libro</h2>
</div>

<div class="row d-flex justify-content-center m-5">

    <form class="w-75" action="<?php print constant('URL'); ?>admin/libro_insert" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="textHelp" placeholder="Ingresa tu nombre" pattern="^[a-zA-Z\s]+{2,254}">
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" name="color" aria-describedby="textHelp" placeholder="Ingresa tu color" pattern="^[a-zA-Z\s]+{2,254}">
        </div>
        <div class="form-group">
            <label for="estante">Estante</label>
            <input type="text" class="form-control" id="estante" name="estante" aria-describedby="textHelp" placeholder="Ingresa el estante" pattern=".{1,3}">
        </div>
        <div class="form-group">
            <label for="numero_paginas">Numero paginas</label>
            <input type="text" class="form-control" id="numero_paginas" name="numero_paginas" aria-describedby="textHelp" placeholder="Ingresa el numero pagina" pattern=".{1,}">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text-area" class="form-control" id="descripcion" name="descripcion" aria-describedby="textHelp" placeholder="Ingresa la descripcion" pattern="^[a-zA-Z\s]+{2,254}">
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" aria-describedby="textHelp" placeholder="Ingresa el estado" pattern="^[a-zA-Z\s]+{2,254}">
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" aria-describedby="textHelp" placeholder="Ingresa el precio" pattern=".{1,6}">
        </div>
        <div class="form-group">
            <label for="id_autor">Autor</label>
            <select name="id_autor">
                <?php
                conexion(constant('HOST'), constant('DB'), constant('USER'), constant('PASSWORD'));
                $consulta = $GLOBALS['db']->prepare("SELECT DISTINCT * FROM  Autor ORDER BY nombre");
                $consulta->execute();
                while ($fila = $consulta->fetch())
                    print PHP_EOL . "\t\t\t\t\t" . '<option value="' . $fila['id_autor'] . '">' . $fila['nombre'] . '</option>';
                $GLOBALS['db'] = null;
                $consulta = null;
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="id_editorial">Editorial</label>
            <select name="id_editorial">
                <?php
                conexion(constant('HOST'), constant('DB'), constant('USER'), constant('PASSWORD'));
                $consulta = $GLOBALS['db']->prepare("SELECT DISTINCT * FROM  Editorial ORDER BY nombre");
                $consulta->execute();
                while ($fila = $consulta->fetch())
                    print PHP_EOL . "\t\t\t\t\t" . '<option value="' . $fila['id_editorial'] . '">' . $fila['nombre'] . '</option>';
                $GLOBALS['db'] = null;
                $consulta = null;
                ?>
            </select>
        </div>
        <div class="form-group">
            <input type="file" required name="imagen">
        </div>
        <div class="row d-flex justify-content-center">
            <input type="submit" value="Agregar" class="btn btn-success">
        </div>
    </form>

</div>
<?php
include 'html/body-final.html';
?>
<?php
    function conexion($host ,$dbname ,$user , $password)
    {
        try{
            $GLOBALS['db'] = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $GLOBALS['db']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            $GLOBALS['msg'] = 'Fallo la conexion';
        }
    }
    
    $titulo = 'Actualizar Libro';
    include 'php/cabecera.php'; 
    include 'php/menu-admin.php';
    if(isset($this->datos)){
        foreach($this->datos as $item){
            print 
            $id_libro = $item['id_libro'];
            $nombre = $item['nombre'];
            $color = $item['color'];
            $estante = $item['estante'];
            $numero_paginas = $item['numero_paginas'];
            $descripcion = $item['descripcion'];
            $estado = $item['estado'];
            $precio = $item['precio'];
            $id_autor = $item['id_autor'];
            $id_editorial = $item['id_editorial'];
        }
    }
    
    $tipo = 'Libro';
    $accion_1 = 'Actualizado';
    $accion_2 = 'Atualizar';
    require_once 'php/msg.php';
?>
    <div class="row d-flex justify-content-center">
        <h2 class="text-success m-3">Actualizar Libro</h2>
    </div>

    <div class="row d-flex justify-content-center m-5">
        <form class="w-75" action="<?php print constant('URL'); ?>admin/libro_update2" method="POST"  enctype="multipart/form-data">
            <div class="form-group">
                <label for="id_libro">Id libro</label>
                <input type="text" class="form-control" value='<?php print $id_libro; ?>'  id="id_libro" name="id_libro" aria-describedby="textHelp" readonly>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" value='<?php print $nombre; ?>' id="nombre" name="nombre" aria-describedby="textHelp" placeholder="Ingresa tu nombre">
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" value='<?php print $color; ?>' id="color" name="color" aria-describedby="textHelp" placeholder="Ingresa tu color">
            </div>
            <div class="form-group">
                <label for="estante">Estante</label>
                <input type="text" class="form-control" value='<?php print $estante; ?>' id="estante" name="estante" aria-describedby="textHelp" placeholder="Ingresa el estante">
            </div>
            <div class="form-group">
                <label for="numero_paginas">Numero paginas</label>
                <input type="text" class="form-control" value='<?php print $numero_paginas; ?>' id="numero_paginas" name="numero_paginas" aria-describedby="textHelp" placeholder="Ingresa el numero pagina">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text-area" class="form-control" value='<?php print $descripcion; ?>' id="descripcion" name="descripcion" aria-describedby="textHelp" placeholder="Ingresa la descripcion">
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" value='<?php print $estado; ?>' id="estado" name="estado" aria-describedby="textHelp" placeholder="Ingresa el estado">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" value='<?php print $precio; ?>' id="precio" name="precio" aria-describedby="textHelp" placeholder="Ingresa el precio">
            </div>
            <div class="form-group">
                <label for="id_autor">Autor</label>
                    <select name="id_autor">
                    <?php
                        conexion(constant('HOST'), constant('DB'), constant('USER'), constant('PASSWORD'));
                        $consulta = $GLOBALS['db']->prepare("SELECT DISTINCT * FROM  Autor ORDER BY nombre");
                        $consulta->execute();
                        while($fila = $consulta->fetch())
                        print PHP_EOL."\t\t\t\t\t".'<option value="'.$fila['id_autor'].'">'.$fila['nombre'].'</option>';
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
                        while($fila = $consulta->fetch())
                        print PHP_EOL."\t\t\t\t\t".'<option value="'.$fila['id_editorial'].'">'.$fila['nombre'].'</option>';
                        $GLOBALS['db'] = null;
                        $consulta = null;        
                        ?>
                    </select>
            </div>
            <input type="file"  name="imagen" >

            <div class="row d-flex justify-content-center">
                <input type="submit" value="Actualizar" class="btn btn-success">
            </div>
        </form>

    </div>
   
<?php
    include 'html/body-final.html';  
?>

<?php
    $titulo = 'Administrar Editorial';
    require_once 'php/cabecera.php'; 
    require_once 'php/menu-admin.php';
    $tipo = 'Editorial';
    $accion_1 = 'Eliminado';
    $accion_2 = 'Eliminar';
    require_once 'php/msg.php';?>
    <h2 class="text-center">Editorial</h2>
    <div class="row justify-content-center">
        <div class="col-auto" >
            <table class="table table-borderless table-light  table-responsive align-middle text-center" style="color:#FFF;" >
                <thead style="background: #0E698B;" >
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Actualizar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody style="background: #253854;  ">
                <?php 
                foreach($this->datos as $editorial )
                {
                    
                    print("\t\t\t\t<tr>");
                    print("\t\t\t\t\t<td>".$editorial['nombre']."</td>\n");
                    print("\t\t\t\t\t<td>".$editorial['direccion']."</td>\n");
                    print("\t\t\t\t\t<td>".$editorial['descripcion']."</td>\n");
                    print("\t\t\t\t\t<td>".'<form class="w-75" action="editorial_update" method="POST"><button type="submit" class="btn btn-info " name="id_editorial" value="'.$editorial['id_editorial'].'">Actualizar</button></form></td>'.PHP_EOL);
                    print("\t\t\t\t\t<td>".'<form class="w-75" action="editorial_remove" method="POST"><button type="submit" class="btn btn-danger " name="id_editorial" value="'.$editorial['id_editorial'].'">Eliminar</button></form></td>'.PHP_EOL);
                    print("\t\t\t\t<tr>\n");
               
                }
               
                ?>
                <tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-success m-4"><a class="badge badge-success" href="<?php print constant('URL'); ?>admin/editorial_create">Agregar</a></button>
    </div>

<?php
    require_once 'html/body-final.html';
?>

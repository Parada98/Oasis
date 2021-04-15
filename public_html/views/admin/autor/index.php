<?php
    $titulo = 'Administrar Autor';
    require_once 'php/cabecera.php'; 
    require_once 'php/menu-admin.php';
    $tipo = 'Autor';
    $accion_1 = 'Eliminado';
    $accion_2 = 'Eliminar';
    require_once 'php/msg.php'; 
?>
    <h2 class="text-center">Autor</h2>
    <div class="row justify-content-center">
        <div class="col-auto" >
            <table class="table table-borderless table-light  table-responsive align-middle text-center" style="color:#FFF;" >
                <thead style="background: #0E698B;" >
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Actualizar</th>
                    <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody style="background: #253854;  ">
                <?php 
                    foreach($this->datos as $item)
                    {
                        print("\t\t\t\t<tr>\n");
                        print("\t\t\t\t\t<td>".$item['nombre']."</td>\n");
                        print("\t\t\t\t\t<td>".$item['edad']."</td>\n");
                        print("\t\t\t\t\t<td>".$item['genero']."</td>\n");
                        print("\t\t\t\t\t<td>".'<form class="w-75 " action="autor_update" method="POST"><button type="submit" class="btn btn-info btn-sm " name="id_autor" value="'.$item['id_autor'].'">Actualizar</button></form></td>'.PHP_EOL);
                        print("\t\t\t\t\t<td>".'<form class="w-75" action="autor_remove" method="POST"><button type="submit" class="btn btn-danger btn-sm" name="id_autor" value="'.$item['id_autor'].'">Eliminar</button></form></td>'.PHP_EOL);
                        print("\t\t\t\t\t</tr>\n");
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-success m-4"><a class="badge badge-success" href="<?php print constant('URL'); ?>admin/autor_create">Agregar</a></button>

    </div>

<?php
    require_once 'html/body-final.html';
?>

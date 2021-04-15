<?php
    $titulo = 'Administrar Inventario';
    require_once 'php/cabecera.php'; 
    require_once 'php/menu-admin.php';    
?>
    <h2 class="text-center">Inventario</h2>
    <div class="row justify-content-center">
        <div class="col-auto" >
            <table class="table table-borderless table-light  table-responsive align-middle text-center" style="color:#FFF;" >
                <thead style="background: #0E698B;" >
                    <tr>
                        <th scope="col">Nombre del libro</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Fecha de ingreso</th>
                        <th scope="col">Actualizar</th>
                    </tr>
                </thead>
                <tbody style="background: #253854;">
                <?php 
                foreach($this->datos as $item)
                {
                    print("\n\t\t\t\t<tr>\n");
                    print("\t\t\t\t\t<td>".$item['nombre']."</td>\n");
                    print("\t\t\t\t\t<td>".$item['stock']."</td>\n");
                    print("\t\t\t\t\t<td>".$item['fecha']."</td>\n");
                    print("\t\t\t\t\t<td>".'<form class="w-75" action="inventario_update" method="POST"><button type="submit" class="btn btn-info " name="id_inventario" value="'.$item['id_inventario'].'">Actualizar</button></form></td>'.PHP_EOL);
                    print("\t\t\t\t</tr>\n");
                    
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
    require_once 'html/body-final.html';
?>

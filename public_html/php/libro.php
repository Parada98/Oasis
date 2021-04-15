<?php 

function imprimir($datos)
{
    ?>
<div class="row justify-content-center">
        <div class="col-auto" >
            <table class="table table-borderless table-light  table-responsive align-middle text-center" style="color:#FFF;" > <thead style="background: #0E698B;" >
                <thead style="background: #0E698B;" >
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Color</th>
                        <th scope="col">Estante</th>
                        <th scope="col">numero de paginas</th>
                        <th scope="col">Descripcion </th>
                        <th scope="col">Estado</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Editorial</th>
                        <th scope="col">Actualizar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody style="background: #253854;">
                <?php 
                foreach($datos as $item )
                {
                    print("\n\t\t\t\t<tr>\n");
                    print("\t\t\t\t\t<td>".$item['nombre']."</td>\n");
                    print("\t\t\t\t\t<td>".'<img height="100px" src="data:image/jpg;base64,'); print (base64_encode($item['imagen']));print('"/></td>'.PHP_EOL);
                    print("\t\t\t\t\t<td>".$item['color']."</td>\n");
                    print("\t\t\t\t\t<td>".$item['estante']."</td>\n");
                    print("\t\t\t\t\t<td>".$item['numero_paginas']."</td>\n");
                    print("\t\t\t\t\t<td>".$item['descripcion']."</td>\n");
                    print("\t\t\t\t\t<td>".$item['estado']."</td>\n");
                    print("\t\t\t\t\t<td>".$item['precio']."</td>\n");
                    print("\t\t\t\t\t<td>".$item['autor']."</td>\n");
                    print("\t\t\t\t\t<td>".$item['editorial']."</td>\n");
                    print("\t\t\t\t\t<td>".'<form class="w-75" action="libro_update" method="POST"><button type="submit" class="btn btn-info " name="id_libro" value="'.$item['id_libro'].'">Actualizar</button></form></td>'.PHP_EOL);
                    print("\t\t\t\t\t<td>".'<form class="w-75" action="libro_remove" method="POST"><button type="submit" class="btn btn-danger " name="id_libro" value="'.$item['id_libro'].'">Eliminar</button></form></td>'.PHP_EOL);
                    print("\t\t\t\t\t</tr>\n");
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
}
?>
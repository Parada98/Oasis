<?php 

function imprimir($datos)
{
    ?>
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
                foreach($datos as $item)
                {

                    print("\t\t\t\t<tr>");
                    print("\t\t\t\t\t<td>". $item['nombre']."</td>\n");
                    print("\t\t\t\t\t<td>". $item['direccion']."</td>\n");
                    print("\t\t\t\t\t<td>". $item['descripcion']."</td>\n");
                    print("\t\t\t\t\t<td>".'<form class="w-75 " action="editorial_update" method="POST"><button type="submit" class="btn btn-info btn-sm " name="id_editorial" value="'.$item['id_editorial'].'">Actualizar</button></form></td>'.PHP_EOL);
                    print("\t\t\t\t\t<td>".'<form class="w-75" action="editorial_remove" method="POST"><button type="submit" class="btn btn-danger btn-sm" name="id_editorial" value="'.$item['id_editorial'].'">Eliminar</button></form></td>'.PHP_EOL);
                    print("\t\t\t\t<tr>\n");

                }

                ?>
                <tbody>
            </table>
        </div>
    </div>
    <?php
}
?>

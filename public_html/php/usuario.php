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
                        <th scope="col">Apellido</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Fotografia</th>
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
                print("\t\t\t\t\t<td>".$item['apellido']."</td>\n");
                print("\t\t\t\t\t<td>".$item['usuario']."</td>\n");
                print("\t\t\t\t\t<td>".'<img height="100px" src="data:image/jpg;base64,'); print (base64_encode($item['fotografia']));print('"/></td>'.PHP_EOL);
                print("\t\t\t\t\t<td>".'<form class="w-75" action="usuario_update" method="POST"><button type="submit" class="btn btn-info " name="id_usuario" value="'.$item['id_usuario'].'">Actualizar</button></form>'.PHP_EOL);
                print("\t\t\t\t\t<td>".'<form class="w-75" action="usuario_remove" method="POST"><button type="submit" class="btn btn-danger " name="id_usuario" value="'.$item['id_usuario'].'">Eliminar</button></form>'.PHP_EOL);
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
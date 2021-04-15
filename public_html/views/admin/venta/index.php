<?php
    $titulo = 'Administrar Venta';
    require_once 'php/cabecera.php'; 
    require_once 'php/menu-admin.php';
    ?>
    <h2 class="text-center">Venta</h2>
    <div class="row justify-content-center">
        <div class="col-auto" >
            <table class="table table-borderless table-light  table-responsive align-middle text-center" style="color:#FFF;" >
                <thead style="background: #0E698B;" >
                    <tr>
                        <th scope="col">Nombre del libro</th>
                        <th scope="col">Nombre del usuario</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">RFC</th>
                        <th scope="col">precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Total</th>
                        <th scope="col">credito</th>
                    </tr>
                </thead>
                <tbody style="background: #253854;">
                <?php 
                    foreach($this->datos as $item)
                    {
                        print("\n\t\t\t\t<tr>\n");
                        print("\t\t\t\t\t<td>".$item['libro_nombre']."</td>\n");
                        print("\t\t\t\t\t<td>".$item['nombre_usuario']."</td>\n");
                        print("\t\t\t\t\t<td>".$item['direccion']."</td>\n");
                        print("\t\t\t\t\t<td>".$item['rfc']."</td>\n");
                        print("\t\t\t\t\t<td>".$item['precio']."</td>\n");
                        print("\t\t\t\t\t<td>".$item['cantidad']."</td>\n");
                        print("\t\t\t\t\t<td>".$item['total']."</td>\n");
                        print("\t\t\t\t\t<td>".$item['credito']."</td>\n");
                        print("\t\t\t\t\t</tr>\n");
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
    require_once 'html/body-final.html';
?>

<?php 

function imprimir($datos)
{
    ?>
    <div class="row justify-content-center">
        <div class="col-auto" >
            <table class="table table-borderless table-light  table-responsive align-middle text-center" style="color:#FFF;" >
                <thead style="background: #0E698B;" >                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">RFC</th>
                    <th scope="col">Credito</th>
                    </tr>
                </thead>
                <tbody style="background: #253854;">
                <?php 
                foreach($datos as $item )
                {
                    print("\t\t\t\t\t<td>".$item['nombre']."</td>\n");
                    print("\t\t\t\t\t<td>".$item['apellido']."</td>\n");
                    print("\t\t\t\t\t<td>".$item['rfc']."</td>\n");
                    print("\t\t\t\t\t<td>".$item['credito']."</td>\n");
                    print("\t\t\t\t</tr>\n");
                    
                 
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
}
?>
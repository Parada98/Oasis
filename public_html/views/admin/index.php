
<?php
    $titulo = "Administrador";
    require_once ('php/cabecera.php');
    require_once ("php/menu-admin.php");
?>
    <div class="row justify-content-center">
        <div class="col-auto" >
            <table class="table table-borderless table-light  table-responsive align-middle text-center" style="color:#FFF;" >
                    <thead style="background: #0E698B;">
                    <tr>
                        <th scope="col"> <span class="ion-ios-cart"></span> Ventas</th>
                        <th scope="col"> <span class="ion-ios-book"></span> Libros</th>
                        <th scope="col"> <span class="ion-ios-clipboard"></span> Editorial</th>
                        <th scope="col"> <span class="ion-ios-contact"></span> Autor</th>
                        <th scope="col"> <span class="ion-ios-person"></span> Cliente</th>
                        <th scope="col"> <span class="ion-ios-people"></span> Usuario</th>
                    </tr>
                </thead>
                <tbody style="background: #253854;" class="col-auto">
                    <tr>
                        <td>Insertar</td>
                        <td>Insertar</td>
                        <td>Insertar</td>
                        <td>Insertar</td>
                        <td>Insertar</td>
                        <td>Insertar</td>
                    </tr>
                    <tr>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                        <td>Ver</td>
                    </tr>
                    <tr>
                        <td>Eliminar</td>
                        <td>Eliminar</td>
                        <td>Eliminar</td>
                        <td>Eliminar</td>
                        <td>Eliminar</td>
                        <td>Eliminar</td>
                    </tr>
                    <tr>
                        <td>Actualizar</td>
                        <td>Actualizar</td>
                        <td>Actualizar</td>
                        <td>Actualizar</td>
                        <td>Actualizar</td>
                        <td>Actualizar</td>
                    </tr>
                    <tr class="administrar">
                        <td>
                            <button type="button" class="btn btn-sm btn-primary ">
                                <a href="<?php print constant('URL'); ?>admin/venta" class="text-light">
                                    <ion-icon name="construct-sharp"></ion-icon> Administar
                                </a>
                            </button>
                        </td>
                        <td>
                        <button type="button" class="btn btn-sm btn-primary ">
                            <a href="<?php print constant('URL'); ?>admin/libro" class="text-light">
                                <ion-icon name="construct-sharp"></ion-icon> Administar
                            </a>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary ">
                            <a href="<?php print constant('URL'); ?>admin/editorial" class="text-light">
                                <ion-icon name="construct-sharp"></ion-icon> Administar
                            </a>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary ">
                            <a href="<?php print constant('URL'); ?>admin/autor" class="text-light">
                                <ion-icon name="construct-sharp"></ion-icon> Administar
                            </a>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary ">
                            <a href="<?php print constant('URL'); ?>admin/cliente" class="text-light">
                                <ion-icon name="construct-sharp"></ion-icon> Administar
                            </a>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary ">
                            <a href="<?php print constant('URL'); ?>admin/usuario" class="text-light">
                                <ion-icon name="construct-sharp"></ion-icon> Administar
                            </a>
                        </button>
                    </td>
                </tbody>
            </table>
        </div>
    </div>
<?php
    require_once ("html/body-final.html");
    ?>
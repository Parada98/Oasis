
<?php
    $titulo = "Administrador";
    require_once ('php/cabecera.php');
    require_once ("php/menu-admin.php");
    foreach($this->datos as $item){
        $id_usuario = $item['id_usuario'];
        $nombre = $item['nombre'];
        $apellido = $item['apellido'];
        $usuario = $item['usuario'];
        $foto = $item['fotografia'];
    }
?>


	<div class="container mb-5">
      
                <div class="panel panel-success"><br>
                <h2 class="panel-title"><center><font size="5"><i class='glyphicon glyphicon-user'></i>PERFIL</font></center></h2>
                </div>

                <div class="panel-body">
                        <div class="row justify-content-center">
                                        
                                <div class="col-auto col-md-6 col-lg-6 " align="center"> 
                                                <div id="load_img">
                                                <?php print("\t\t\t\t".'<img height="150px" src="data:image/jpg;base64,'); print (base64_encode($foto));print('"/>'); ?>
                                                        <!-- <img class="img-responsive" src="fotografia'];?>" alt="Logo"> -->
                                                        
                                                </div>
                                Nombre: <input type="text" class="form-control input-sm" name="nombre_apellido" value="<?php print $nombre; ?>" readonly>
                                Apellidos: <input type="text" class="form-control input-sm" name="ocupacion" value="<?php print $apellido; ?>"  readonly>
                                Usuario:  <input type="text" class="form-control input-sm" name="correo" value="<?php print $usuario; ?>" readonly >
                        
                                </div>
                        </div>
                </div>

        </div>
<?php
    require_once ("html/body-final.html");
?>
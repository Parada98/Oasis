<?php
$host = constant('HOST');
$dbname = constant('DB');
$user = constant('USER');
$password = constant('PASSWORD');
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
        <h2 class="text-center m-5" style="color:#0E698B">Ultimos Agregado</h2>
        <div id="carouselControls" class="carousel slide" >
                <div class="carousel-inner">
                        <?php
                        $i = 0;
                        $num = 4;
                        while($i < 3){
                ?>
                        <div class="carousel-item <?php if ($i == 0) print 'active';?>">
                                <div class="container">
                                        <div class="card-deck">
                                        <?php
                                                $consulta = $db->prepare("SELECT * FROM ultimos_agregados Limit :inicio, :final");
                                                $ii = (int) ($i * $num);
                                                $j = (int) ($num); 
                                                $consulta->bindParam(":inicio",$ii , PDO::PARAM_INT);
                                                $consulta->bindParam(":final", $j, PDO::PARAM_INT);
                                                $consulta->execute();
                                                while($item = $consulta->fetch())
                                                {
                                                        ?>            
                                                        <div class="card ">
                                                                <?php print ('<img class="rounded card-img-top"  src="data:image/jpg;base64,'); print (base64_encode($item['imagen']));print('"/>'); ?>
                                                                <div class="card-body">
                                                                        <h5 class="card-title"><?php print($item['nombre']);?></h5>
                                                                        <p class="card-text"><?php print($item['autor']);?></p>
                                                                </div>
                                                                <div class="card-footer">
                                                                        <p class="card-text "><small class="text-muted">Precio: $<?php print($item['precio']);?></small></p>
                                                                                <p class="justify-content-center text-center">
                                                                                        <a href="<?php print constant('URL'); ?>inicio/show?libro=<?php print $item['id_libro']; ?>" class=" text-secondary text-decoration-none">
                                                                                                <ion-icon name="cart"></ion-icon>Comprar
                                                                                        </a>
                                                                                </p>
                                                                        </a>
                                                                </div>
                                                        </div>
                                        <?php }?>
                                        </div>
                                </div>
                        </div>
                                        <?php 
                                                        $i = $i + 1;
                                                } 
                                                ?>
                </div>
                <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
                        <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                </a>
        </div>




        <h2 class="text-center m-5" style="color:#0E698B">Ultimos Vendidos</h2>
        <div id="carouselControlss" class="carousel slide" >
                <div class="carousel-inner">
                        <?php
                        $i = 0;
                        $num = 4;
                        while($i < 3){
                ?>
                        <div class="carousel-item <?php if ($i == 0) print 'active';?>">
                                <div class="container">
                                        <div class="card-deck">
                                        <?php
                                                $consulta = $db->prepare("SELECT * FROM ultimos_vendido Limit :inicio, :final");
                                                $ii = (int) ($i * $num);
                                                $j = (int) ($num); 
                                                $consulta->bindParam(":inicio",$ii , PDO::PARAM_INT);
                                                $consulta->bindParam(":final", $j, PDO::PARAM_INT);
                                                $consulta->execute();
                                                while($item = $consulta->fetch())
                                                {
                                                        ?>            
                                                        <div class="card ">
                                                                <?php print ('<img class="rounded card-img-top"  src="data:image/jpg;base64,'); print (base64_encode($item['imagen']));print('"/>'); ?>
                                                                <div class="card-body">
                                                                        <h5 class="card-title"><?php print($item['nombre']);?></h5>
                                                                        <p class="card-text"><?php print($item['autor']);?></p>
                                                                </div>
                                                                <div class="card-footer">
                                                                        <p class="card-text"><small class="text-muted">Precio: $<?php print($item['precio']);?></small></p>
                                                                                <a href="" class="text-secondary text-decoration-none">
                                                                                         <ion-icon name="cart"></ion-icon>Comprar
                                                                                </a>
                                                                        </a>
                                                                </div>
                                                        </div>
                                        <?php }?>
                                        </div>
                                </div>
                        </div>
                                        <?php 
                                                        $i = $i + 1;
                                                } 
                                                ?>
                </div>
                <a class="carousel-control-prev" href="#carouselControlss" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
                        <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselControlss" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                </a>
        </div>


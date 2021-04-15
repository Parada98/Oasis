<?php
    $titulo = 'Oasis';
    include ("php/cabecera.php"); 
    include ("php/menu-default.php");

        if(count($this->datos) > 0){
?>
        <?php
            $i = 0;
            $num = 3;
            $j = 0;
            while($i < 10){
            ?>
        <div class="container">
            <div class="row">
                <?php
                $n = $j + $num;
                for($x = $j; $x < $n && count($this->datos) > $x; $x++)
                {
                ?>            
                    <div class="card  mt-5 mx-auto col-10 col-xl-3 col-lg-3 col-md-3 ">
                            <?php print ('<img class="rounded card-img-top"  src="data:image/jpg;base64,'); print (base64_encode($this->datos[$x]['imagen']));print('"/>'); ?>
                            <div class="card-body">
                                    <h5 class="card-title"><?php print($this->datos[$x]['nombre']);?></h5>
                                    <p class="card-text"><?php print($this->datos[$x]['autor']);?></p>
                            </div>
                            <div class="card-footer">
                                    <p class="card-text"><small class="text-muted">Precio: $<?php print($this->datos[$x]['precio']);?></small></p>
                                            <a href="<?php print constant('URL'); ?>inicio/show?libro=<?php print $this->datos[$x]['id_libro']; ?>" class="text-secondary text-decoration-none">
                                                    <ion-icon name="cart"></ion-icon>Comprar
                                            </a>
                                    </a>
                            </div>
                    </div>
                    <?php 
                 $j = $x;   
                } 
                ?>
            </div>
        </div>
    </div>
    <?php 
        if(count($this->datos) <= $j) break;
        $j++;
        $i = $i + 1;
    } ?>

<?php }else{?>
<div class="alert alert-danger mt-5 p-5 text-center diplay-2" role="alert">
No hay coincidencias!!
</div>
    <?php }?>  
    
<?php 
   include ("html/body-final.html");
?>





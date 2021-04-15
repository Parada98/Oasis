<?php
    $titulo = 'Oasis';
    include ("php/cabecera.php"); 
    include ("php/menu-default.php");
   

?>


        <?php
            $i = 0;
            $num = 3;
            $j = 0;
            while($i < 3){
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
    } 
        ?>
    
    <div class="row d-flex justify-content-center">

        <nav aria-label="Page navigation ">   
            <ul class="pagination mt-5">
                <li class="page-item <?php if($this->numero_pagina <= 1){ print 'disabled'; } ?>">
                    <a href="?numero_pagina=1" class="page-link"  aria-label="Previous">
                        &laquo;
                    </a>
                </li>
                <li class="page-item <?php if($this->numero_pagina <= 1){ print 'disabled'; } ?>">
                    <a href="<?php if($this->numero_pagina <= 1){ print '#'; } else { print "?numero_pagina=".($this->numero_pagina - 1); } ?>" class="page-link">
                        Anterior
                    </a>
                </li>
                <li class="page-item <?php if($this->numero_pagina >= $this->total_paginas){ print 'disabled'; } ?>">
                    <a href="<?php if($this->numero_pagina >= $this->total_paginas){ print '#'; } else { print "?numero_pagina=".($this->numero_pagina + 1); } ?>" class="page-link">
                        Siguiente
                    </a>
                </li>
                <li class="page-item <?php if($this->numero_pagina >= $this->total_paginas){ print 'disabled'; } ?>">
                    <a href="?numero_pagina=<?php print $this->total_paginas; ?>" class="page-link">
                        &raquo;
                    </a>
                </li>
            </ul>
        </nav>
    </div>
<?php 
   include ("html/body-final.html");
?>





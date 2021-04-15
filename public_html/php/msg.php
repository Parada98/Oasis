<?php if(isset($this->msj)){
            if($this->msj == true){
    ?>
     <div class="row mt-5 justify-content-center">
        <div class="alert alert-success m-2 p-3 col-auto" role="alert">
            <h2 class="text-success text-center"><?php print $tipo.' '.$accion_1;?></h2>
        </div>
     </div>
    <?php } else{?>            
    <div class="row mt-5 justify-content-center">
        <div class="alert alert-warning m-2 p-3 col-auto" role="alert">
            <h2 class="text-warning">Error al <?php print $accion_2.' '.$tipo;?></h2>
        </div>
   </div>
    <?php }}?>
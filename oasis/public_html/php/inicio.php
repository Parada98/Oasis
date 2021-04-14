<?php
// $numero_pagina = isset($_GET['numero_pagina']) ? $_GET['numero_pagina'] : 1;
// $host = constant('HOST');
// $db = constant('DB');
// $user = constant('USER');
// $password = constant('PASSWORD');
// try{
//         print 'f';
//         $db = new PDO("mysql:host=$host;dbname=$db", $user, $password);
//         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }catch(PDOException $e){
//         $GLOBALS['msg'] = 'Fallo la conexion';
// }
// $consulta = $db->prepare("SELECT * FROM Libro");
// $consulta->execute();
// $numero_paginas = 6;
// $inicio = ($numero_pagina - 1) * $numero_paginas;
//     $total_paginas = round($consulta->rowCount() / $numero_paginas);
//     $consultas = $db->prepare("SELECT * FROM Libro LIMIT :inicio, :final");
//     $consultas->bindParam(":inicio", $inicio, PDO::PARAM_INT);
//     $consultas->bindParam(":final", $numero_paginas, PDO::PARAM_INT);
//     $consultas->execute();
//     print("\t".'<div class="row" >'.PHP_EOL);
    
//     while($item = $consultas->fetch())    
//     {
//             print("\t\t".'<div class="col-4">'.PHP_EOL);
//             print("\t\t\t".'<img  class="card-img-top" height="180" src="data:image/jpg;base64,'); print (base64_encode($item['imagen']));print('"/></td>'.PHP_EOL);
//             print("\t\t\t".'<div class="card-body">'.PHP_EOL);
//             print("\t\t\t".'<p class="card-title">'.$item['nombre']."</p>\n");
//             print("\t\t\t<hr>\n");
//             print("\t\t\t".'<p class="card-subtitle">'.$item['color']."</p>\n");
//             print("\t\t\t".'<p class="card-text">'.$item['precio']."</p>\n");
//             print("\t\t\t</div>");
//             print("\t\t</div>");
//         }
//         print("\t".'</div>'.PHP_EOL);
?>
    <!-- <section>

            <ul class="pagination">
        <li><a href="?numero_pagina=1">First</a></li>
        <li class="<?php //if($numero_pagina <= 1){ echo 'disabled'; } ?>">
            <a href="<?php //if($numero_pagina <= 1){ echo '#'; } else { echo "?numero_pagina=".($numero_pagina - 1); } ?>">Prev</a>
        </li>
        <li class="<?php //if($numero_pagina >= $total_paginas){ echo 'disabled'; } ?>">
            <a href="<?php //if($numero_pagina >= $total_paginas){ echo '#'; } else { echo "?numero_pagina=".($numero_pagina + 1); } ?>">Next</a>
        </li>
        <li><a href="?numero_pagina=<?php //echo $total_paginas; ?>">Last</a></li>
    </ul>
        
    </section>
 -->
 <div id="carouselCaptions" class="carousel slide mt-5" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselCaptions" data-slide-to="1"></li>
    <li data-target="#carouselCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php print constant('URL'); ?>images/banner_.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php print constant('URL'); ?>images/banner_1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
        <img src="<?php print constant('URL'); ?>images/banner_2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php include('php/slider_after_books.php'); ?>








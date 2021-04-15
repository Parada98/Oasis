
<!-- Diego el gato del equipo -->

</head>
<body style="background: rgba(37, 56, 84, .3);">
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top mb-5" style="background-color:#253854;">
        <a class="navbar-brand" href="<?php print constant('URL'); ?>"> <ion-icon name="leaf"></ion-icon> Oasis </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                    <a class="nav-link" href="<?php print constant('URL'); ?>inicio/libros"><ion-icon name="book"></ion-icon> ver libros </a>
                </li>
            </ul>
            <div class="nav-item dropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php print constant('URL'); ?>login"><ion-icon name="planet"></ion-icon> Acceder </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php print constant('URL'); ?>inicio/cliente_create"><ion-icon name="person-add"></ion-icon> Registrar </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php print constant('URL'); ?>inicio/acerca"> <ion-icon name="help"></ion-icon> Acerca de....  </a>
                    </li>
            
                </ul>
            </div>
            <form class="form-inline my-2 my-lg-0" action="<?php print constant('URL'); ?>inicio/search" method="POST">
                <input class="form-control mr-sm-2" type="search" name="texto" id="texto" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>


        </div>
    </nav>
</header>


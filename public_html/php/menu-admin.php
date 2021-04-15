<?php // require_once("php/validar_session.php")?>
</head>
<!-- Diego el gato del equipo -->

<body>
<header>

    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#253854;">
        <a class="navbar-brand" href="#">
            <ion-icon name="leaf"></ion-icon> Oasis 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <ion-icon name="list"></ion-icon>

        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php print constant('URL'); ?>admin">
                        <ion-icon name="home"></ion-icon> Home 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php print constant('URL'); ?>admin/venta">
                        <ion-icon name="cart"></ion-icon> Ventas 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php print constant('URL'); ?>admin/editorial">
                        <ion-icon name="folder"></ion-icon> Editorial
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php print constant('URL'); ?>admin/autor">
                        <ion-icon name="person"></ion-icon> Autor 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php print constant('URL'); ?>admin/cliente">
                        <ion-icon name="people"></ion-icon> Cliente 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php print constant('URL'); ?>admin/usuario">
                        <ion-icon name="walk"></ion-icon> Usuario
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php print constant('URL'); ?>admin/libro">
                        <ion-icon name="book"></ion-icon> Libro 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php print constant('URL'); ?>admin/inventario">
                        <ion-icon name="logo-buffer"></ion-icon> Inventario
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="dropdown" >
                    <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <ion-icon name="finger-print-sharp"></ion-icon>  Usuario 
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="nav-item"><a class="dropdown-item" href="#">Perfil</a></li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="<?php print constant('URL'); ?>login/salir">
                                <ion-icon name="exit"></ion-icon> Salir
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

</header>

<main class="main">


<?php
$titulo = "Acerca de";
require_once ('php/cabecera.php');
require_once ("php/menu-default.php");
?>
<style>
    .div-imagen {
        display: inline-block;
        position: relative;
    }

    .div-imagen>div {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        padding: 10px;
        margin: 0;
    }

    .desvanecer:hover {
        opacity: 0.07;
        -webkit-transition: opacity 500ms;
        -moz-transition: opacity 500ms;
        -o-transition: opacity 500ms;
        -ms-transition: opacity 500ms;
        transition: opacity 500ms;
    }

    /* @media (max-width:480px) {
        .div-imagen {
            width: 100%;
        }
    } */
</style>
<div class="row d-flex justify-content-center">
    <h1 class="text-dark m-3 p-3">Libreria Oasis</h1>
</div>
<div class="container">
    <p class="text-justify">El proyecto consiste en desarrollar una página web enfocada en un negocio de libros
        (librería que lleva por nombre Oasis). Este proyecto se desarrolló durante un periodo
        de un mes (04 de abril de 2021 – 04 de Marzo de 2021) de acuerdo al cronograma
        de actividades presentado al Docente de la materia.
    </p>
    <p class="text-justify">
        En el desarrollo del proyecto se trabajó por equipos en distintas áreas como lo son:
    </p>

    <div class="container row">
        <div class="col-sm-12 col-lg-4 col-md-6">
            <h3>Área de logo empresarial</h3>
            <div class="div-imagen">
                <div>
                    <p>
                        <ion-icon name="person"></ion-icon>Palomino Mendoza MelinaSamantha.
                    </p>
                    <p>
                        <ion-icon name="person"></ion-icon> Encarnación Hernández Raúl.
                    </p>

                </div>
                <img class="desvanecer" src="<?php print constant('URL'); ?>images/logo (1).jpg" />
            </div>
        </div>

        <div class="col-sm-12 col-lg-4 col-md-6">
            <h3>Área de base de datos</h3>
            <div class="div-imagen">
                <div>
                    <p>
                        <ion-icon name="server"></ion-icon> Guerrero Ramírez Luis Ángel.
                    </p>
                    <p>
                        <ion-icon name="server"></ion-icon> Maldonado Gutiérrez Aaron Marco.
                    </p>
                    <p>
                        <ion-icon name="server"></ion-icon> Ramírez Rivero José León.
                    </p>
                    <p>
                        <ion-icon name="server"></ion-icon> Vargas Balderas Bruno Valmiki.
                    </p>


                </div>
                <img class="desvanecer" src="<?php print constant('URL'); ?>images/DB.jpg" />
            </div>
            <ul>
        </div>


        <div class="col-sm-12 col-lg-4 col-md-6">
            <h3>Área de página web</h3>
            <div class="div-imagen">
                <div>
                    <p>
                        <ion-icon name="logo-html5"></ion-icon> Medina Arcos Jonatan Rubén.
                    </p>

                </div>
                <img class="desvanecer" src="<?php print constant('URL'); ?>images/html.jpg" />
            </div>

        </div>


        <div class="col-sm-12 col-lg-4 col-md-6">
            <h3>Área de Interfaces</h3>
            <div class="div-imagen">
                <div>
                    <p>
                        <ion-icon name="cog"></ion-icon> Estrada Castillo Alfredo.
                    </p>
                    <p>
                        <ion-icon name="cog"></ion-icon> Hernández Cruz Diego Alberto.
                    </p>
                    <p>
                        <ion-icon name="cog"></ion-icon> Palmerín Rubio José Emilio<br> Canek.
                    </p>
                    <p>
                        <ion-icon name="cog"></ion-icon> Parada García Ángel.
                    </p>

                </div>
                <img class="desvanecer" src="<?php print constant('URL'); ?>images/interface.jpg" />
            </div>

        </div>
        <div class="col-sm-12 col-lg-4 col-md-6">
            <h3>Área de social network</h3>
            <div class="div-imagen">
                <div>

                    <p>
                        <ion-icon name="logo-facebook"></ion-icon> Palomino Mendoza Melina Samantha.
                    </p>

                </div>
                <img class="desvanecer" src="<?php print constant('URL'); ?>images/social.jpg" />
            </div>

        </div>
    </div>
</div>
<?php
require_once ("html/body-final.html");
?>
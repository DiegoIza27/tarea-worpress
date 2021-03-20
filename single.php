<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Mi blog </title>
    <style>

    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logo col-xs-12 col-sm-6">
                    <a href=""><img src="img/1.jpg" alt=""></a>
                </div>
                <div class="redes_sociales col-xs-12 col-sm-6">
                    <a class="facebook" href="https://www.Facebook.com" class="Facebook"><i class="fa fa-facebook" ></i></a>
                    <a class="youtube" href="#" class="youtube"><i class="fa fa-youtube-play" ></i></a>
                    <a class="github" href="#" class="GitHub"><i class="fa fa-github" ></i></a>
                    <a class="instagram" href="#" class="instagram"><i class="fa fa-instagram" ></i></a>
                </div>
            </div>


        </div>
        <nav class="menu">
            <div class="container">
                <div class="row">
                    <ul class="col-md-12">
                        <li> <a href="">html</a></li>
                        <li> <a href="">Css</a></li>
                        <li> <a href="">Js</a></li>

                    </ul>
                </div>
            </div>

        </nav>
        <div class="ad container hidden-xs">
            <div class="row">
                <div class="col-md-12">
                    <img src="img/8.jpg" alt="">
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <section class="main col-md-8">

                <div class="row titulo-seccion">
                    <div class="col-md-12">
                        <h3>Lo mas Reciente</h3>
                    </div>
                </div>
                <div class="row posts">

                    <article class="col-sm-12 post">
                        <div class="contenedor">
                            <div class="thumb">
                                <img src="img/2.jpg" width="700" alt="">
                            </div>
                            <div class="info">
                                <h2 class="titulo"> ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, blanditiis!</h2>
                                <p class="fecha"> 7 de abril del 2020</p>
                                <div class="categoria">
                                    <a href="#">html</a>
                                    <a href="#">Css</a>
                                    <a href="#">Js</a>
                                </div>
                                <p class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet beatae obcaecati consequuntur, dolores tempora minima?</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam corrupti magni expedita incidunt, accusantium amet itaque exercitationem nisi dolorem neque.</p>
                            </div>
                        </div>
                    </article>

                </div>


            </section>
            <aside class="sidebar col-md-4">

                <div class="widget redes-sociales">
                    <div class="titulo_seccion">
                        <h3>Sigenos</h3>
                        <div class="redes-sociales">
                            <a class="facebook" href="https://www.Facebook.com" class="Facebook"><i class="icono fa fa-facebook" ></i> <span class="seguidores"> 130k</span></a>

                            <a class="youtube" href="#"><i class="icono fa fa-youtube-play" ></i> <span class="seguidores"> 130k</span></a>

                            <a class="github" href="#"><i class="icono fa fa-github" ></i> <span class="seguidores"> 130k</span></a>

                            <a class="instagram" href="#" icono><i class="icono fa fa-instagram" ></i> <span class="seguidores"> 130k</span></a>

                        </div>
                    </div>
                </div>
                <div class="widget boletin">
                    <div class="titulo-seccion">
                        <h3>Subcribete</h3>
                    </div>
                    <form action="" class="formulario">
                        <label for="text">Subcribete a nuestro boletin</label>
                        <input type="email" id="email" placeholder="correo electronico " required>
                        <input type="submit" value="Enviar">
                    </form>

                </div>
                <div class="widget ad ">
                    <div class="contenedor-ad">
                        <a href=""><img src="" alt=""></a>
                    </div>
                </div>
            </aside>
        </div>


    </div>

    <footer>
        <div class="ad container hidden-xs">
            <div class="row">
                <div class="col-md-12">
                    <img src="img/4.jpg" alt="">
                </div>
            </div>

        </div>
        <nav class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="">Inicio</a></li>
                            <li><a href="">Aserca de </a></li>
                            <li><a href="">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="copyrigth">
            <div class="contaner">
                <div class="row">
                    <div class="col-md-12">
                        <p>Creado por Diego Iza -Gestion de contenidos 7 semestre </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
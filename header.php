<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-grid.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <title>
    <?php  
    if(is_home()){
        echo get_bloginfo('name');
    }
    else if(is_single()){
        echo the_title();

    }else {
        echo get_bloginfo('name');
    }
    ?>
    </title>
    <?php  
    wp_head();
    ?>


</head>

<body>
<header>
        <div class="container">
            <div class="row">
                <div class="logo col-xs-12 col-sm-6">
                    <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url');?>/img/yo.jpg" alt="" width="40px"></a>
                </div>
                <div class="redes_sociales col-xs-12 col-sm-6">
                    <a class="facebook" href="https://www.facebook.com/diego.iza2" class="Facebook" target="_blank"><i class="fa fa-facebook" ></i></a>
                    <a class="youtube" href="#" class="youtube"><i class="fa fa-youtube-play" target="_blank"></i></a>
                    <a class="github" href="https://github.com/DiegoIza27" class="GitHub"target="_blank"><i class="fa fa-github" ></i></a>
                    <a class="instagram" href="https://www.instagram.com/mitocode/?hl=es" class="instagram"target="_blank"><i class="fa fa-instagram" ></i></a>
                </div>
            </div>


        </div>
        <nav class="menu">
            <div class="container">
                <div class="row">
                    <ul class="col-md-12">
                        <li> <a href="https://developer.mozilla.org/es/docs/Web/HTML"target="_blank">Html</a></li>
                        <li> <a href="https://developer.mozilla.org/es/docs/Web/CSS"target="_blank">Css</a></li>
                        <li> <a href="https://developer.mozilla.org/es/docs/Web/JavaScript"target="_blank">Js</a></li>
                        <li> <a href="https://git-scm.com/"target="_blank">Git</a></li>
                        <li> <a href="https://es.reactjs.org/"target="_blank">React Js</a></li>
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
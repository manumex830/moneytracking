<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       <title>Money Tracking 
            <?php 
                if (!empty($title)) {
                    echo "»".$title;
                }
            ?>      
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php echo $layoutParams["route_css"]; ?>/normalize.min.css">
        <link rel="stylesheet" href="<?php echo $layoutParams["route_css"]; ?>/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $layoutParams["route_css"]; ?>/main.css">
        <link rel="stylesheet" href="<?php echo $layoutParams["route_css"]; ?>/icons/style.css">
       
        <script src="<?php echo $layoutParams["route_js"]; ?>/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

      <div class="container-fluid">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="<?php echo APP_URL; ?>/"><span class="icon-home3"></span>Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="<?php echo APP_URL; ?>/users" class="navbar-brand">
                    <span class="icon-users"></span> Usuarios<span class="sr-only">(current)</span></a>
                </li>
                <li><a href="<?php echo APP_URL; ?>/types" class="navbar-brand">
                    <span class="icon-user-tie"></span> Tipos de Usuario<span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo APP_URL; ?>/" class="navbar-brand">
                    <span class="icon-credit-card"></span> Transacciones<span class="sr-only">(current)</span></a>
                </li>
                <li><a href="<?php echo APP_URL; ?>/categories" class="navbar-brand">
                    <span class="icon-stack"></span> Categorias<span class="sr-only">(current)</span></a>
                </li>
                <li><a href="<?php echo APP_URL; ?>" class="navbar-brand">
                    <span class="icon-cog"></span> Configurar<span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo APP_URL."/users/logout"; ?>" class="navbar-brand">
                    <div class="col-md-offset-10"><span class="icon-lock"></span>Logout<span class="sr-only"></span></div></a>
                </li>               
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
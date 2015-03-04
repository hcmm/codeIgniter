<!DOCTYPE html>

<html lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Longfolio | One page portfolio template</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">

        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>" type="text/css" media="all">
        <link rel="stylesheet" href="<?= base_url("css/style.css") ?>" title="teal" type="text/css" media="all">
        <link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body>
    <header class="main-header">
        <div class="wrapper">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 class="logo">
                        <?= anchor("home", "logo")?>
<!--                        <a href="/home" rel="home" title="Longfolio">-->
                            <!--<img src="./Longfolio   One page portfolio template_files/logo.png" alt="Longfolio">-->
<!--                            logo-->
                    </h1>
                </div>
                <div class="main-nav navbar-right navbar-collapse collapse" style="height: 1px;">
                    <ul class="nav nav-pills">
                        <li class="box-link-topo"><?= anchor("produtos", "Produtos/Preços")?></li>
                        <!--<li><a href="projetos-em-andamento.php">Projetos em andamento</a></li>-->
                        <li class="box-link-topo"><a href="#services">Como Funciona</a></li>
                        <li class="box-link-topo"><?= anchor("contato", "Contato")?></li>
                        <li class="box-link-topo link-button-b"><?= anchor("login", "Login")?></li>
                        <li class="link-button"><?= anchor("usuario/novo", "CADASTRE-SE", array("class" => "js-auth-slider-toggle--signup btn btn-primary mintSignupSlider-processed"))?></li>
<!--                        <li class="box-link-topo link-button-b"><a href="login"><i class="fa fa-lock"></i> Login</a></li>-->
<!--                        <li class="box-link-topo link-button-b"><a href="usuario/novo" class="js-auth-slider-toggle--signup btn btn-primary mintSignupSlider-processed"><i class="fa fa-lock"></i> CADASTRE-SE</a></li>-->
                    </ul>
                </div>
            </nav>

        </div>

    </header>

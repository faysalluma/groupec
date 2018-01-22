<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By GROUPE C">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>
      GROUPE C
    </title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/ico" href="<?php echo base_url();?>/assets/favicon.ico" />

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets') ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets') ?>/css/theme.css" rel="stylesheet">
    <link href="<?php echo base_url('assets') ?>/css/bootstrap-reset.css" rel="stylesheet">

     <!-- Scroll CSS -->
    <link href="<?php echo base_url('assets/scroll') ?>/css/scrolling-nav.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!--external css-->
    <link href="<?php echo base_url('assets') ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/flexslider.css"/>
    <link href="<?php echo base_url('assets') ?>/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/assets/owlcarousel/owl.theme.css">

    <link href="<?php echo base_url('assets') ?>/css/superfish.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/component.css">
    <link href="<?php echo base_url('assets') ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets') ?>/css/style-responsive.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/css/parallax-slider/parallax-slider.css" />
    <script type="text/javascript" src="<?php echo base_url('assets') ?>/js/parallax-slider/modernizr.custom.28468.js">
    </script>

    <!-- Page cours video css -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/magnific-popup.css">

    <!-- ADMIN GENERAL ELEMENTS -->
   <!-- <link href="<?php echo base_url('assets/gentelella-master') ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 
    <link href="<?php echo base_url('assets/gentelella-master') ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">-->
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/gentelella-master') ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets/gentelella-master') ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('assets/gentelella-master') ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="<?php echo base_url('assets/gentelella-master') ?>/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/gentelella-master') ?>/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/gentelella-master') ?>/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <!-- Custom Theme Style
    <link href="<?php echo base_url('assets/gentelella-master') ?>/build/css/custom.min.css" rel="stylesheet"> -->
    <!-- ADMIN FIN GENERAL ELEMENTS -->

<!-- STYLE PAGINATION -->
<style type="text/css">
   
/* Pagination */
div.pagination {
  font-family: "Lucida Sans Unicode", "Lucida Grande", LucidaGrande, "Lucida Sans", Geneva, Verdana, sans-serif;
  padding:2px;
  margin: 20px 10px;
    /* float: right;*/
}

div.pagination a {
  margin: 3px;
  padding: 0.5em 0.64em 0.43em 0.64em;
  background-color: #E04F5F;  /* Couleur des cadrents du lien */
  text-decoration: none; /* no underline */
  color: #fff;

    width: 40px;
    display: inline-block;
    border-radius: 10px;
    font-weight: bold;
}
div.pagination a:hover, div.pagination a:active {
  padding: 0.5em 0.64em 0.43em 0.64em;
  margin: 2px;
  background-color: #48CFAD;
  color: #fff;
}
div.pagination span.current {
    padding: 0.5em 0.64em 0.43em 0.64em;
    margin: 2px;
    background-color: #f6efcc;
    color: #6d643c;
  }
div.pagination span.disabled {
    display:none;
  }

/* loading */
.loading{position: absolute;left: 0; top: 0; right: 0; bottom: 0;z-index: 2;background: rgba(255,255,255,0.7);}
.loading .content {
    position: absolute;
    transform: translateY(-50%);
     -webkit-transform: translateY(-50%);
     -ms-transform: translateY(-50%);
    top: 20%;  /* Position du loader */
    left: 0;
    right: 0;
    text-align: center;
    color: #555;
}

</style>
<!-- FIN STYLE PAGINATION -->


     <!-- Style personnalisé -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/style.css">

    
  </head>

  <body>
    <!--header start-->
    <header class="head-section">
      <div class="navbar navbar-default navbar-static-top container" style="padding: 0px;">
          <div class="navbar-header">
              <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">GROUPE<span> C</span></a>
          </div>
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li  class="dropdown">
                      <a href="<?php echo site_url('accueil') ?>">Accueil</a>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Services <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="<?php echo site_url('formation') ?>">Formations</a>
                          </li>
                          <li>
                              <a href="<?php echo site_url('application') ?>">Applications</a>
                          </li>
                          <li>
                              <a href="#" onclick="alert('Boutique en ligne bientôt disponible.');">Ventes et prestations</a>
                          </li>
                          
                      </ul>
                  </li>

                   <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Cours <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="<?php echo site_url('pdf') ?>">Pdf</a>
                          </li>
                          <li>
                              <a href="<?php echo site_url('video') ?>">Vidéos</a>
                          </li>
                      </ul>
                  </li>

                  <!--<li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Espaces Etudiants <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="about.html">1ere année</a>
                          </li>
                          <li>
                              <a href="404.html">2eme  année</a>
                          </li>
                          <li>
                              <a href="career.html">Licence</a>
                          </li>
                          <li>
                              <a href="login.html">Master 1</a>
                          </li>
                          <li>
                              <a href="registration.html">Master 2</a>
                          </li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a href="#">Forum</a>
                  </li>
                  <li class="dropdown">
                      <a href="<?php echo site_url('login') ?>">Connexion</a>
                  </li>-->
                  
                  <li>
                      <a id="top-to-back" class="page-scroll" href="#contact">Contact</a>
                  </li>
                   <!--<li><input class="form-control search" placeholder=" Search" type="text"></li>-->
              </ul>
          </div>
      </div>
    </header>
    <!--header end-->
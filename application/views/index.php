
    <!-- Sequence Modern Slider -->
    <div style="margin-top: -20px;">
      <?php $this->load->view('slide'); ?>
    </div>
    
  
    <!--
    <div id="da-slider" class="da-slider">
      <?php  foreach ($formation as $ligne) : ?>
            <div class="da-slide">
            <div class="container">
              <div class="row">
              <div class="col-md-12">
              <h2>
                  <i style="width: 60%;display: block;white-space: normal;"><?php  echo $ligne->titre; ?></i>
              </h2>
              <p style="height: 120px; margin-top: -10px;">
                <i>Lieu : <?php  echo $ligne->lieu; ?></i><br />

                <i>Date début :  <?php 
                  setlocale(LC_TIME, 'fra_fra');
                  $dateFormat = $ligne->datedebut; 
                  echo utf8_encode(strftime("%d %B %Y",strtotime("$dateFormat")));
                ?></i><br />

                <i>Durée : <?php  echo $ligne->duree; ?></i><br />

                <i>Date limite d'insciption : 
                  <?php 
                  setlocale(LC_TIME, 'fra_fra');
                  $dateFormat = $ligne->datelimiteins; 
                  echo utf8_encode(strftime("%d %B %Y",strtotime("$dateFormat")));
                  ?>
                </i>

              </p>
              <a href="<?php echo site_url('detail/index/'.$ligne->formationid); ?>"  class="btn btn-info btn-lg da-link">
                S'inscrire
              </a>
              <div class="da-img">
                <img src="<?php echo base_url('assets/uploads/img').'/'.$ligne->image; ?>" style="width: 400px; height: 375px;" />
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php  endforeach; ?>  

      <nav class="da-arrows">
        <span class="da-arrows-prev">
        </span>
        <span class="da-arrows-next">
        </span>
      </nav>

    </div>
    -->

    <div class="property gray-bg" style="padding-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
    <div class="container">
      <div class="row mar-b-50">
        <div class="col-md-12">
          <div class="text-center feature-head wow fadeInDown">
            <h1 class="">
              NOS SERVICES
            </h1>

          </div>


          <div class="feature-box">
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
              <a href="<?php echo site_url('formation') ?>">
                <em>
                <img src="<?php echo base_url('assets/img/1.png') ?>" alt="" width="100" height="100">

                </em>
                <h4>
                  <b>Nos Formations</b>
                </h4>
              </a>
              </div>
              <p class="text-center">
                  Découvrez nos formations (Individuelles ou Générales) dans tous les domaines innovants de l’informatique à savoir : 
Conceptions de sites web , développement d’applications Android, Réseaux informatiques et maintenance, Télécommunications, Sécurité Informatique.

              </p>
            </div>
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
               <a href="<?php echo site_url('application') ?>">
                <em>
                  <img src="<?php echo base_url('assets/img/2.png') ?>" alt="" width="100" height="100">
                </em>
                <h4>
                  <b>Nos applications</b>
                </h4>
              </a>
              </div>
              <p class="text-center">
                  Découvrez nos applications métiers : nos appications de gestion, nos applications web et nos applications android.
              </p>
            </div>
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
               <a href="#" onclick="alert('Boutique en ligne bientôt disponible.');">
                <em>
                  <img src="<?php echo base_url('assets/img/3.png') ?>" alt="" width="100" height="100">
                </em>
                <h4>
                  <b>Nos ventes et prestations</b>
                </h4>
              </a>
              </div>
              <p class="text-center">
                Découvrez tous matériels et accessoires informatiques de notre boutique accessibles à un prix très réduit et passez vos commandes.
              </p>
            </div>
          </div>

          <!--feature end-->
        </div>
      </div>
    </div>
    </div>
   
     <!--VIDEOS RECENTES-->
      <div class="container">
        <div class="row">
          <div class="col-lg-12 recent text-center">
            <h3 class="recent-work" style="margin-bottom: 40px;">
              DERNIERES VIDEOS
            </h3>
           <!-- <p>Suivez ici les dernieres vidéos publiées.</p>>-->
            <div id="owl-demo" class="owl-carousel owl-theme wow fadeIn">
              <!--<div class="item view view-tenth">
                <img src="img/works/img9.jpg" alt="work Image">
                <div class="mask">
                  <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                    <i class="fa fa-link">
                    </i>
                  </a>
                </div>
              </div>-->
           
                <!--<div class="col-md-12">

                  <div id="portfoliolist-three" style="margin-right: 10px;">
                      <div class="col-md-12">

                      <div class="portfolio" style="width: 130%; display: inline-block;">
                          <div class="portfolio-wrapper">
                              <div class="portfolio-hover">
                                  <div class="image-caption" style="overflow: hidden; display: none;">
                                      <a href="<?php echo base_url('assets/img/portfolios/app/3.jpg') ?>" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="" data-original-title="Zoom"><i class="fa fa-eye"></i></a>
                                      <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Details"><i class="fa fa-link"></i></a>
                                      <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="" data-original-title="Likes"><i class="fa fa-heart"></i></a>

                                  </div>

                                  <div class="video-container single-video">
                                  <iframe  src="https://www.youtube.com/embed/qvBX9VgPGSg" allowfullscreen="" style="border:none;"></iframe>
                                  </div>

                              </div>
                          </div>
                      </div>

                      <div class="portfolio" style="width: 130%; display: inline-block;">
                          <div class="portfolio-wrapper">
                              <div class="portfolio-hover">
                                  <div class="image-caption" style="overflow: hidden; display: none;">
                                      <a href="<?php echo base_url('assets/img/portfolios/app/3.jpg') ?>" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="" data-original-title="Zoom"><i class="fa fa-eye"></i></a>
                                      <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Details"><i class="fa fa-link"></i></a>
                                      <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="" data-original-title="Likes"><i class="fa fa-heart"></i></a>

                                  </div>

                                  <div class="video-container single-video">
                                  <iframe  src="https://www.youtube.com/embed/qvBX9VgPGSg" allowfullscreen="" style="border:none;"></iframe>
                                  </div>

                              </div>
                          </div>
                      </div>

                      </div>

                  </div>

                </div>-->


                 <?php  if (isset($videos)) : ?>
                 <?php $i=0;  foreach ($videos as $ligne) : ?>
                  <?php  if ($i<=30) : ?>
                   <div class="col-md-12">
                   <div class="video-container single-video">
                    <iframe width="560" height="315" src="<?php  echo $ligne->lien; ?>" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <h6 style='color: #415B76;'><a href="<?php  echo $ligne->lien; ?>" title="Accéder à la vidéo sur Youtube"><?php  echo $ligne->titre; ?></a></h6>
                </div>
                <?php  endif; ?>
                <?php $i+=1;  endforeach; ?>
                <?php  endif; ?>
                
            </div>
          </div>
        </div>
      </div>
      <!-- FIN VIDEOS RECENTES-->

       <!--NEWS LETTER-->
      <div id="newsletter-faq" style="margin-bottom: 70px; margin-top: 0px;padding: 30px; height: 110px;">

        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <p class="lead wow fadeInLeft animated" data-wow-animation-name="fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">Restez informé de nos activités grâce à notre newsletter</p>
                </div>

                <div class="col-md-6">

                    <!--////////// Newsletter Form //////////-->
                    <form method="post" id="newsletter-signup" action="#">
                        <div class="input-group wow fadeInRight animated" data-wow-animation-name="fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                          <input style="color: black;" type="email" onkeyup="verifier_newsletter();" onmouseout="verifier_newsletter();" placeholder="Entrez votre email" name="newsletter" id="e-mail" class="form-control newsletter-input">
                          <div style="color: red; display: none;" id="message-email" >Cet email est déjà inscrit à notre newsletter.</div>
                          <span class="input-group-btn">
                            <button  name="submit" class="btn btn-inverse btn-hg" id="sabonner">S'abonner</button>
                          </span>
                        </div><!-- /input-group -->
                    </form>
                    <!--////////// end of Newsletter Form ///////////-->

                     <div id="error-info"></div><!-- Error notification for newsletter signup form -->

                </div>

            </div><!-- /row -->
        </div><!-- /container -->


    </div>
    <!-- FIN NEWS LETTER-->

    <div class="container">

      <div class="row mar-b-60">
        <div class="col-lg-6">
          <!--tab start-->
          <section class="tab wow fadeInLeft">
            <header class="panel-heading tab-bg-dark-navy-blue">
              <ul class="nav nav-tabs nav-justified ">
                <!--<li class="active">
                  <a data-toggle="tab" href="#news">
                    Actualités
                  </a>
                </li>-->
                <li class="">
                  <a  data-toggle="tab" href="#events">
                    A PROPOS DE NOUS
                  </a>
                </li>
                <!--<li class="">
                  <a data-toggle="tab" href="#notice-board">
                    A propos de nous
                  </a>
                </li>-->
              </ul>
            </header>
            <div class="panel-body">
              <div class="tab-content tasi-tab">
                 <!--
                <div id="news" class="tab-pane fade in active">
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <img src="<?php echo base_url('assets/img/product1.jpg') ?>" alt="">
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class=" p-head">
                        News Tittle goes here
                      </a>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      </p>
                    </div>
                  </article>

                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <img src="<?php echo base_url('assets/img/product2.jpg') ?>" alt="">
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class=" p-head">
                        News Tittle goes here 2
                      </a>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. simsut dorlor
                      </p>
                    </div>
                  </article>
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <img src="<?php echo base_url('assets/img/product1.jpg') ?>" alt="">
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class=" p-head">
                        News Tittle goes here 3
                      </a>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. sumon ahmed
                      </p>
                    </div>
                  </article>
                </div>-->

                <div id="events" class="tab-pane fade in active">
                 
                   <p>
                    <strong>GROUPE C</strong> est spécialisé dans plusieurs domaines de l'informatique qui lui permettent d'apporter des solutions numériques adaptées et de proposer des formations simples et courtes aux entreprises et aux particuliers dans les domaines les plus variés des Technologies de l'Information de la Communication (TIC).
                  </p>
                 <p>
                    <strong>Nous formons en :</strong>
                    <ul style="margin-left: 15px;">
                       <li>Programmation (Application de gestion) .</li>
                       <li>Conception de sites web et d'applications Android .</li>
                       <li>Web design et PhotoShop .</li>
                       <li>Electronique .</li>
                       <li>Réseaux informatiques et maintenance .</li>
                       <li>Piratage et Sécurité informatique .</li>
                       <li>Excel avancé et VBA .</li>
                       <li>Secrétariat informatique et Bureautique .</li>
                    </ul>

                </div>
                <!--<div id="notice-board" class="tab-pane fade">
                
                </div>-->
              </div>
            </div>
          </section>
          <!--tab end-->
        </div>
        <div class="col-lg-6" >
      <!--<div class="row" style="text-align: center; background-color: #F4F4F4;"><h3>PRESIDENT / FONDATEUR</h3></div>-->
             
          <!--testimonial start-->
          <!--<div class="about-testimonial boxed-style about-flexslider ">
            <section class="slider wow fadeInRight">
              <div class="flexslider">
                <ul class="slides about-flex-slides">
                  <li>
                    <div class="about-testimonial-image ">
                      <img alt="" src="<?php echo base_url('assets/img/FAYSAL_TOF.jpg') ?>">
                    </div>
                    <a class="about-testimonial-author" href="#">
                      SANDA FAYSAL
                    </a>
                    <span class="about-testimonial-company">
                        Site web :<a href="http://faysalsanda.groupec.net/" target="_blank" title="Visiter le site web"> faysalsanda.groupec.net</a>
                    </span>
                    <div class="about-testimonial-content">
                      <p class="about-testimonial-quote">
                      Consultant en Informatique, Analyste programmeur, Développeur Web / Android, Technicien Réseaux et Maintenance informatique. 
                      </p>
                    </div>
                  </li>


                  <!--<li>
                    <div class="about-testimonial-image ">
                      <img alt="" src="<?php echo base_url('assets/img/seibou2.png') ?>">
                    </div>
                    <a class="about-testimonial-author" href="#">
                      GAMBA SEIBOU
                    </a>
                    <span class="about-testimonial-company">
                      Responsable marketing
                    </span>
                    <div class="about-testimonial-content">
                      <p class="about-testimonial-quote">
                       Marketeur, Chargé des relations externes à Groupe C.
                      </p>
                    </div>
                  </li>
                  -->


             <!--   </ul>
              </div>
            </section>
          </div>-->
          <!--testimonial end-->

          <!--tab start-->
          <section class="tab wow fadeInLeft">
            <header class="panel-heading tab-bg-dark-navy-blue">
              <ul class="nav nav-tabs nav-justified ">
                <!--<li class="active">
                  <a data-toggle="tab" href="#news">
                    Actualités
                  </a>
                </li>-->
                <li class="active">
                  <a  data-toggle="tab" href="#events">
                    ACTUALITES
                  </a>
                </li>
                <!--<li class="">
                  <a data-toggle="tab" href="#notice-board">
                    A propos de nous
                  </a>
                </li>-->
              </ul>
            </header>
            <div class="panel-body">
              <div class="tab-content tasi-tab">
                <div id="events" class="tab-pane fade in active">

                   <div id="myCarousel" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                      <div class="active item">
                        <img src="<?php echo base_url('assets/img/service3.jpg') ?>" alt="">
                        <div class="carousel-caption">
                          <p>
                            Réalisez votre future vie professionnelle avec GROUPE C.
                          </p>
                        </div>
                      </div>
                      <div class="item">
                        <img src="<?php echo base_url('assets/img/service2.jpg') ?>" alt="">
                        <div class="carousel-caption">
                          <p>
                            GROUPE C. Réalisez votre rêve en informatique
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                      <i class="fa fa-angle-left">
                      </i>
                    </a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next" id="nextslide">
                      <i class="fa fa-angle-right">
                      </i>
                    </a>
                  </div>

                </div>
                
              </div>
            </div>
          </section>
          <!--tab end-->

        </div>
        </div>
      </div>

     

 

    <!--container end-->
   


     
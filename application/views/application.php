
     <!--container start-->
   <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>APPLICATIONS</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?php echo site_url('accueil') ?>">Accueil</a></li>
                        <li><a href="#">Services</a></li>
                        <li class="active">Applications</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="white-bg">

        <!-- career -->
    <div class="container career-inner">

    <!-- Titre et sous titre -->
      <div class="text-center mar-b-30">
          <h1 class="wow flipInX animated" data-wow-animation-name="flipInX" style="visibility: visible; animation-name: flipInX;">Nos applications métiers</h1>
          <hr>
      </div>

      <!-- Contenu -->
      <div class="row mar-b-30">
      <?php  if (isset($application)) : ?>
      <?php  foreach ($application as $ligne) : ?>
             <!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">-->
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="faq-square">
                    <a href="<?php  if(isset($ligne->lien)){echo $ligne->lien;}else{echo '#';} ?>" title="<?php  if(isset($ligne->lien)){echo 'Télécharger l\' application';}else{echo 'Pas de lien disponible pour cette application.';} ?>" style="color:#fff;">
                    <div class="icon-wrap ico-bg round-five wow pulse animated" data-wow-duration="2s" data-wow-delay=".1s" data-wow-animation-name="pulse" style="visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: pulse;  padding: initial;">
                    
                        <?php if(isset($ligne->image)) :  ?>
                        <img src="<?php  echo base_url('assets/uploads/img').'/'.$ligne->image; ?>" width="50" height="50">
                        <?php else :  ?>
                        <?php 
                        switch ($ligne->categorieid) {
                          case "1":
                            echo '<i class="fa fa-globe"></i>'; // Site web
                            break;

                          case "2":
                            echo '<i class="fa fa-android"></i>'; // Android
                            break;

                          case "3":
                            echo '<i class="fa fa-desktop"></i>'; // Logiciel
                            break;

                          case "4":
                            echo '<i class="fa fa-leaf"></i>'; // Autre
                            break;
                          
                          default:
                            echo '<i class="fa fa-leaf"></i>'; // Autre
                            break;
                        }
                        ?>  
                       
                       <?php endif;  ?>  
                   
                    </div>
                    </a>
                    <div class="content">
                     <a href="<?php  if(isset($ligne->lien)){echo $ligne->lien;}else{echo '#';} ?>" title="<?php  if(isset($ligne->lien)){echo 'Télécharger l\' application';}else{echo 'Pas de lien disponible pour cette application.';} ?>" style="color:#fff;">
                        <h3 class="title wow flipInX animated" data-wow-animation-name="flipInX" style="visibility: visible; animation-name: flipInX;">
                         
                        <?php  echo $ligne->titre; ?>

                        </h3>
                        </a>

                         <p style="text-align: justify;"><?php  echo $ligne->description; ?></p>
                         <p style="text-align: justify;"><strong>Catégorie : </strong><?php  echo $ligne->categorie; ?></p>

                        <p style="text-align: justify;">
                        <?php 
                        if(isset($ligne->datecreationapp)) 
                        {
                          setlocale(LC_TIME, 'fra_fra');
                          $dateFormat = $ligne->datecreationapp; 
                          echo "Crée-le : ".utf8_encode(strftime("%d %B %Y",strtotime("$dateFormat")));
                        }
                        else
                        {
                          echo "<h4 style='color: #48CFB4;'>COMING SOON...</h4>";
                        }
                        ?>
                        </p>

                    </div>
                </div>
            </div><!-- end col-lg-4 -->
    <?php  endforeach; ?>
    <?php  endif; ?>
     </div>
        
            
    <!-- career -->
       </div>
    </div>

    <!--container end-->



     
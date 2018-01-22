
     <!--container start-->
   <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>COURS VIDEOS</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?php echo site_url('accueil') ?>">Accueil</a></li>
                        <li><a href="#">Cours</a></li>
                        <li class="active">Vidéos</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="white-bg">




    <!-- Contenu -->
    <div class="container career-inner">

    <div class="row">
        <div class="col-md-12 career-head text-center">
            <h2 class="wow fadeIn animated" data-wow-animation-name="fadeIn" style="visibility: visible; animation-name: fadeIn;">Découvrez-ici les liens vers les meilleurs cours vidéos </h2>
            <hr>
        </div>
    </div>


       <div class="row">

          <div class="col-md-12" style="margin-top: 15px; margin-bottom: 70px;">
          <span class="pull-left"> 
          <select name="sexe" class="form-control" style="color: black;" id="categorie" onchange="searchFilter2()">
           <option value="">Toutes les vidéos</option>
           <?php  if (isset($categoriecours)) : ?>
           <?php  foreach ($categoriecours as $ligne) : ?>
           <option value="<?php echo $ligne->categorieid; ?>"><?php echo $ligne->titre; ?></option>
           <?php  endforeach; ?>
           <?php  endif; ?>
          </select>
           </span>
           <span class="pull-right"><input type="text" name="motcle" style="color: black; width: 250px;" class="form-control " id="motcle" onkeyup="searchFilter2()" placeholder="Rechercher" ></span>
          </div>

           <div style="clear: both; margin-bottom: 5px;"> </div>

           <div id="postList">

              <?php if ($posts==false ) :  ?>

              <?php else :  ?>
        

               <?php  if (isset($posts) ) : ?>
                   <?php  foreach ($posts as $ligne) : ?>  
                  <div class="col-md-3">
                    <div class="video-container single-video">
                    <iframe width="560" height="315" src="<?php  echo $ligne['lien']; ?>" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <h6 style='color: #415B76; text-transform: uppercase; text-align: center;'><a href="<?php  echo $ligne['lien']; ?>" title="Accéder à la vidéo sur Youtube"><?php  echo $ligne['titre']; ?></a></h6>

                  </div>

                  <?php  endforeach; ?>
                  <?php  endif; ?>

                   <?php endif;  ?>

            <div style="clear: both; margin-bottom: 5px;"> </div>
            <!-- Pagination Ajax -->
            <div class="row text-center" style="margin-top: 28px;">
              
              <?php 
              if(isset($posts[0]['coursid']))
              {
                echo $this->ajax_pagination->create_links(); 
              }
              else
              {
                echo "<h4>Eléments trouvés : 0</h4>";
              }
              ?>

            </div>


        </div>
          
        </div>



    </div>


    


    <!-- Contenu Fin-->    

    </div>

    <!--container end-->



     
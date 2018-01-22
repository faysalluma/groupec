
     <!--container start-->
   <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>COURS PDF</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?php echo site_url('accueil') ?>">Accueil</a></li>
                        <li><a href="#">Cours</a></li>
                        <li class="active">Pdf</li>
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
            <h2 class="wow fadeIn animated" data-wow-animation-name="fadeIn" style="visibility: visible; animation-name: fadeIn;">Découvrez-ici les liens vers les meilleurs cours numériques </h2>
            <hr>
        </div>
    </div>


       <div class="row">

          <div class="col-md-12" style="margin-top: 15px; margin-bottom: 70px;">
          <span class="pull-left"> 
          <select name="sexe" class="form-control" style="color: black;" id="categorie" onchange="searchFilter()">
           <option value="">Tous les cours</option>
           <?php  if (isset($categoriecours)) : ?>
           <?php  foreach ($categoriecours as $ligne) : ?>
           <option value="<?php echo $ligne->categorieid; ?>"><?php echo $ligne->titre; ?></option>
           <?php  endforeach; ?>
           <?php  endif; ?>
          </select>
           </span>
           <span class="pull-right"><input type="text" name="motcle" style="color: black;width: 250px;" class="form-control" id="motcle" onkeyup="searchFilter()" placeholder="Rechercher" ></span>
          </div>

           <div style="clear: both; margin-bottom: 5px;"> </div>

           <div id="postList">

              <?php if ($posts==false ) :  ?>

              <?php else :  ?>
        

               <?php  if (isset($posts) ) : ?>
                   <?php  foreach ($posts as $ligne) : ?>  
                  <div class="col-md-3">
                    <div class="thumbnail" style="padding: 10px 0px 0px 10px; background: #F7F7F7;height: 85px;">
                      <div class="image view view-first">
                        <a href="<?php echo $ligne['lien']; ?>" title="Télécharger" target="_blank"><img style="width: 50px; height: 50px; display: block; background: #F7F7F7;" src="<?php echo base_url('assets/img/cours.png'); ?>" alt="image"></a>
                      </div>
                      <div class="caption">
                        <p style="margin-left: 50px;"><a href="<?php echo $ligne['lien']; ?>" target="_blank" title="Télécharger"><?php echo $ligne['titre']; ?></a></p>
                      </div>
                    </div>
                  </div>

                  <?php  endforeach; ?>
                  <?php  endif; ?>

                   <?php endif;  ?>

            <div style="clear: both; margin-bottom: 5px;"> </div>
            <!-- Pagination Ajax -->
            <div class="row text-center" >
              
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



     
 <?php if ($posts==false ) :  ?>

              <?php else :  ?>
        

               <?php  if (isset($posts) ) : ?>
                   <?php  foreach ($posts as $ligne) : ?>  
                  <div class="col-md-3">
                    <div class="video-container single-video">
                    <iframe width="560" height="315" src="<?php  echo $ligne['lien']; ?>" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <h6 style='color: #415B76;text-transform: uppercase; text-align: center;'><a href="<?php  echo $ligne['lien']; ?>" title="Accéder à la vidéo sur Youtube"><?php  echo $ligne['titre']; ?></a></h6>

                  </div>

                  <?php  endforeach; ?>
                  <?php  endif; ?>

                   <?php endif;  ?>

            <div style="clear: both; margin-bottom: 5px;"> </div>
            <!-- Pagination Ajax -->
            <div class="row text-center" style="margin-top: 25px;">
              
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
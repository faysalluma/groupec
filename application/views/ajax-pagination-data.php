       <?php if ($posts==false ) :  ?>
       <?php else :  ?>
        

       <?php  if (isset($posts)) : ?>
           <?php  foreach ($posts as $ligne) : ?>  
          <div class="col-md-3">
            <div class="thumbnail" style="padding: 10px 0px 0px 10px; background: #F7F7F7; height: 85px;">
              <div class="image view view-first">
                <a href="<?php echo $ligne['lien']; ?>" title="Télécharger"><img style="width: 50px; height: 50px; display: block; background: #F7F7F7;" src="<?php echo base_url('assets/img/cours.png'); ?>" alt="image"></a>
              </div>
              <div class="caption">
                <p style="margin-left: 50px;"><a href="<?php echo $ligne['lien']; ?>" title="Télécharger"><?php echo $ligne['titre']; ?></a></p>
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
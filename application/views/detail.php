
     <!--container start-->
   <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>DETAIL FORMATION</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?php echo site_url('accueil') ?>">Accueil</a></li>
                        <li class="active">S'inscrire</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="white-bg">

        <!-- career -->
    <div class="container career-inner">
       

         <div class="row">
            <div class="col-md-6">
               <h3 class="appcolor">
                Détail formation
              </h3>
              <hr>

             <div class="col-md-12" style="padding-left: 0px;">
               <p>
                 <strong>TITRE : </strong><?php  echo $formation->titre; ?> 
               </p>
               <p>
                 <strong>DESCRIPTION : </strong><?php  if(! empty($formation->description)){echo $formation->description;}else{echo "AUCUN";} ?> 
               </p>
               <p>
                 <strong>LIEU : </strong><?php  echo $formation->lieu; ?> 
               </p>
               <p>
                  <strong>DATE DEBUT : </strong><?php $dateFormat = $formation->datedebut; 
                  echo utf8_encode(strftime("%d %B %Y",strtotime("$dateFormat"))); ?> 
               </p>
               <p>
                 <strong>DATE LIMITE INSCRIPTION : </strong><?php  $dateFormat = $formation->datelimiteins; 
                  echo utf8_encode(strftime("%d %B %Y",strtotime("$dateFormat"))); ?> 
               </p>
               <p>
                  <strong>DUREE : </strong><?php  echo $formation->duree; ?> 
               </p>
             </div>

            </div>

            <div class="col-md-6">
               
               <h3 class="appcolor">
                Formulaire d'inscription
              </h3>
              <hr>

             <div class="col-md-12" style="padding-left: 0px;">
              <div class="form-example">
                <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('Accueil') ?>">
                
                <input type="hidden" name="formationid" value="<?php  echo $formation->formationid; ?>">
                
                 <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Nom</label>
                    <div class="col-sm-10">
                      <input type="text" name="nom" style="color: black;" class="form-control" id="input1" placeholder="Nom" required>
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="input2" class="col-sm-2 control-label">Prénoms</label>
                    <div class="col-sm-10">
                      <input type="text" name="prenoms" style="color: black;" class="form-control" id="input2" placeholder="Prénom(s)" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" onkeyup="verifier_inscrit();" onchange="verifier_inscrit();" id="inputEmail3" placeholder="Email" required>
                      <span style="color: red; display: none;" id="message-email" >Cet email est déjà inscrit pour cette formation.</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="input2" class="col-sm-2 control-label">Sexe</label>
                    <div class="col-sm-10">
                     <select name="sexe" class="form-control" style="color: black;" required>
                       <option value="">Sélectionnez</option>
                       <option value="Masculin">Masculin</option>
                       <option value="Masculin">Féminin</option>
                     </select>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="input3" class="col-sm-2 control-label">Adresse</label>
                    <div class="col-sm-10">
                      <input type="text" name="adresse" style="color: black;" class="form-control" id="input3" placeholder="Adresse" required>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="input2" class="col-sm-2 control-label">Téléphone</label>
                    <div class="col-sm-10">
                      <input type="text" name="telephone" style="color: black;" onkeyup="verif_nombre(this)" class="form-control" id="input2" placeholder="Téléphone" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button class="btn btn-success" type="submit">S'inscrire</button>
                    </div>
                  </div>
                </form>
              </div>
             </div>



        </div>

    <!-- career -->
       </div>
    </div>

    <!--container end-->



     
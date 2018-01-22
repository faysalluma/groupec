
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>CONNEXION</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?php echo site_url('accueil') ?>">Accueil</a></li>
                        <li class="active">Connexion</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="login-bg">
        <div class="container">
            <div class="form-wrapper">
            <form class="form-signin wow fadeInUp" action="index.html">
            <h2 class="form-signin-heading">CONNECTEZ VOUS MAINTENANT</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Email" autofocus>
                <input type="password" class="form-control" placeholder="Mot de passe">
                <label class="checkbox">
                    <!--<input type="checkbox" value="remember-me"> Se souvenir de moi -->
                    <span class="pull-right">
                        <a data-toggle="modal" href="#myModal"> Mot de passe oublié</a>

                    </span>
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit">Se connecter</button>
                <!--<p>or you can sign in via social network</p>
                <div class="login-social-link">
                    <a href="index.html" class="facebook">
                        <i class="fa fa-facebook"></i>
                        Facebook
                    </a>
                    <a href="index.html" class="twitter">
                        <i class="fa fa-twitter"></i>
                        Twitter
                    </a>
                </div>-->
                <div class="registration">
                  Pas encore membre ?
                    <a class="" href="<?php echo site_url('inscription') ?>">
                       Inscrivez-vous gratuitement
                    </a>
                </div>

            </div>

              <!-- Modal -->
              <div aria-hidden="true" aria-labelledby="myModal" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Forgot Password ?</h4>
                          </div>
                          <div class="modal-body">
                              <p>Enter your e-mail address below to reset your password.</p>
                              <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                          </div>
                          <div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                              <button class="btn btn-success" type="button">Submit</button>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- modal -->

          </form>
          </div>
        </div>
    </div>
    <!--container end-->


     
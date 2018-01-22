 <!--footer start-->
    <footer class="footer" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-sm-5 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <h1>
              contact info
            </h1>
            <address>
              <p><i class="fa fa-home pr-10"></i>Adresse: Cotonou  (Bénin)</p>
              <p><i class="fa fa-globe pr-10"></i>Fifadji</p>
              <!--<p><i class="fa fa-phone pr-10"></i>Phone : (00229) 67590465 </p>-->
              <p><i class="fa fa-envelope-o pr-10"></i>groupectechnologies@gmail.com</p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63439.48224468019!2d2.3648583095419924!3d6.3981716148212096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102355f4996e1555%3A0xf931cc11fdcad03c!2sFifadji%2C+Cotonou!5e0!3m2!1sfr!2sbj!4v1491828525525" width="400" height="300" frameborder="1" style="border:0" allowfullscreen></iframe>
              <p>


             </p>
            </address>
          </div>
          <div class="col-lg-7 col-sm-7 address">
              <h4 style="color: white">
            Remplissez les informations
          </h4>
          <div class="contact-form">
            <form role="form" action="<?php echo site_url('Accueil/contact'); ?>" method="post">
              <div class="form-group">
                <label for="name">
                  Nom et prénoms
                </label>
                <input type="text" style="color: black;" id="name" class="form-control" name="nom" required>
              </div>
              <div class="form-group">
                <label for="email">
                  Email
                </label>
                <input type="email" style="color: black;" id="email" class="form-control" name="email" required>
              </div>
              <div class="form-group">
                <label for="phone">
                Téléphone
                </label>
                <input type="text" id="phone" style="color: black;" class="form-control" name="tel" required>
              </div>
              <div class="form-group">
                <label for="phone">
                  Message
                </label>
                <textarea placeholder="" style="color: black;" rows="5" class="form-control" name="message" required></textarea>
              </div>
              <button class="btn btn-info" type="submit">
                Envoyer
              </button>
            </form>

          </div>
        </div>
            
        </div>
      </div>
    </footer>
    <!-- footer end -->
    <!--small footer start -->
    <footer class="footer-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 pull-right">
                    <ul class="social-link-footer list-unstyled">
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="https://www.facebook.com/groupectechnologies" target="_blank"><i class="fa fa-facebook"></i></a></li>
                       <!--<li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                      <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="https://www.youtube.com/channel/UCGhWx5AmRpmorI8EkL4E00w" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                  <div class="copyright">
                      <p>GROUPE C  &nbsp;&nbsp; &copy; Copyright - 2017</p>
                  </div>
                </div>
            </div>
        </div>
    </footer>
    <!--small footer end-->

   
  




     <!-- PAGE SCRIPTS  -->
    <script src="<?php echo base_url('assets') ?>/js/jquery-1.8.3.min.js">
    </script>
    <script src="<?php echo base_url('assets') ?>/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url('assets') ?>/js/hover-dropdown.js">
    </script>
    <script defer src="<?php echo base_url('assets') ?>/js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url('assets') ?>/assets/bxslider/jquery.bxslider.js">
    </script>

     <!-- PAGE SCRIPTS  -->
   <script src="<?php echo base_url('assets/scroll') ?>/js/jquery.easing.min.js"></script>
   <script src="<?php echo base_url('assets/scroll') ?>/js/scrolling-nav.js"></script>


    <script type="text/javascript" src="<?php echo base_url('assets') ?>/js/jquery.parallax-1.1.3.js">
    </script>
    <script src="<?php echo base_url('assets') ?>/js/wow.min.js">
    </script>
    <script src="<?php echo base_url('assets') ?>/assets/owlcarousel/owl.carousel.js">
    </script>

    <script src="<?php echo base_url('assets') ?>/js/jquery.easing.min.js">
    </script>
    <script src="<?php echo base_url('assets') ?>/js/link-hover.js">
    </script>
    <script src="<?php echo base_url('assets') ?>/js/superfish.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url('assets') ?>/js/parallax-slider/jquery.cslider.js">
    </script>
    <script type="text/javascript">
      $(function() {

        $('#da-slider').cslider({
          autoplay    : true,
          bgincrement : 100
        });

      });
    </script>



    <!--common script for all pages-->
    <script src="<?php echo base_url('assets') ?>/js/common-scripts.js">
    </script>

    <script type="text/javascript">
      jQuery(document).ready(function() {


        $('.bxslider1').bxSlider({
          minSlides: 5,
          maxSlides: 6,
          slideWidth: 360,
          slideMargin: 2,
          moveSlides: 1,
          responsive: true,
          nextSelector: '#slider-next',
          prevSelector: '#slider-prev',
          nextText: 'Onward â†’',
          prevText: 'â† Go back'
        });

      });


    </script>


    <script>
      $('a.info').tooltip();

      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        });
      });

      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

          items : 4

        });

      });

      jQuery(document).ready(function(){
        jQuery('ul.superfish').superfish();
      });

      new WOW().init();


    </script>

    <!--SCRIPT PAGES COURS-->
    <script src="<?php echo base_url('assets') ?>/js/mixitup.js"></script>
    <script src="<?php echo base_url('assets') ?>/js/jquery.magnific-popup.js"></script>

    <script type="text/javascript">
    $('.image-caption a').tooltip();

    $(function () {

        var filterList = {

            init: function () {

                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist-three').mixitup({
                    targetSelector: '.portfolio',
                    filterSelector: '.filter',
                    effects: ['fade'],
                    easing: 'snap',
                    // call the hover effect
                    onMixEnd: filterList.hoverEffect()
                });

            },

            hoverEffect: function () {
                $("[rel='tooltip']").tooltip();
                // Simple parallax effect
                $('#portfoliolist-three .portfolio .portfolio-hover').hover(
                function(){
                    $(this).find('.image-caption').slideDown(250); //.fadeIn(250)
                },
                function(){
                    $(this).find('.image-caption').slideUp(250); //.fadeOut(205)
                }
            );
            }

        };

        // Run the show!
        filterList.init();


    });

    $( document ).ready(function() {
       $('.magnefig').each(function(){
            $(this).magnificPopup({
                    type:'image',
                    removalDelay: 300,
                    mainClass: 'mfp-fade'
               })
        });
    });
    </script>

  <script>



      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3],
            stopOnHover : true,

        });

      });

      new WOW().init();


  </script>

  <!-- FIN SCRIPTS  -->


<!-- ADMIN SCRIPTS GENERAL ELEMENTS  -->
  <!-- jQuery 
    <script src="<?php echo base_url('assets/gentelella-master') ?>/vendors/jquery/dist/jquery.min.js"></script>-->
    <!-- Bootstrap 
    <script src="<?php echo base_url('assets/gentelella-master') ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>-->
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/gentelella-master') ?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/gentelella-master') ?>/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('assets/gentelella-master') ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets/gentelella-master') ?>/vendors/iCheck/icheck.min.js"></script>
    <!-- PNotify -->
    <script src="<?php echo base_url('assets/gentelella-master') ?>/vendors/pnotify/dist/pnotify.js"></script>
    <script src="<?php echo base_url('assets/gentelella-master') ?>/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="<?php echo base_url('assets/gentelella-master') ?>/vendors/pnotify/dist/pnotify.nonblock.js"></script>

    <!-- Custom Theme Scripts 
    <script src="<?php echo base_url('assets/gentelella-master') ?>/build/js/custom.min.js"></script>-->

    <!-- PNotify -->
    <script>

      $(document).ready(function() {

        var res="<?php if(isset($resultat)){echo $resultat;} ?>";

        if (res)
        {

           if (res=="formationins")
            {
               var text="Vous avez été bien inscrit à la formation, vous serez informés d’ici peu pour les autres démarches à suivre .";
               var type="success";
               var title="SUCCES";
             

            }
            else if (res=="contact")
            {
              var text="Merci de nous avoir contactés, votre demande a été bien prise en compte.";
              var type="success";
              var title="SUCCES";
            }
            else if (res=="erreur")
            {
              var text="Echec de l'opération.";
              var type="error";
              var title="ECHEC";
            }

         new PNotify({
          title: title,
          type: type,
          text: text,
          styling: 'bootstrap3',
          hide: true,
          delay: 8000,
          width:"390px"
          });

         // Changer l'url du navigateur
         window.history.pushState(document.title,document.title,"<?php echo site_url('Accueil'); ?>");

        }
       

      });
    </script>
    <!-- /PNotify -->
    
    <!-- ADMIN FIN SCRIPTS GENERAL ELEMENTS  -->

    <!-- SCRIPT FAYSAL  -->
    <script type="text/javascript">

      function verif_nombre(champ)
      {

      var chiffres = new RegExp("[0-9]");
      var verif;
      var points = 0;
     
      for(x = 0; x < champ.value.length; x++)
      {
                verif = chiffres.test(champ.value.charAt(x));
          if(champ.value.charAt(x) == "."){points++;}
                if(points > 1){verif = false; points = 1;}
            if(verif == false){champ.value = champ.value.substr(0,x) + champ.value.substr(x+1,champ.value.length-x+1); x--;}
      }
      
      }

      


      function verifier_inscrit()
      {

        var formationid="<?php if(isset($formation->formationid)) {echo $formation->formationid;} ?>";
        var email=$('input[name=email]').val();

         $.ajax({//envoi de requete 
        url : '<?php echo site_url('Detail/verifier_inscrit?formationid='); ?>'+formationid+'&email='+email, //chargement de l'url associé au lien
        cache    : false,
        type: "POST",//envoi de requete ajax de type post
        dataType : "json",//format de données de type json
        error    : function(request, error) { // Info Debuggage si erreur         
                     alert("Erreur : responseText: "+request.responseText);
                   },
        success  : function(data) {  //si succès
                if (data.result>0)
                {
                  $('#message-email').show();
                  $(':input[type="submit"]').prop('disabled', true);
                }
                else
                {
                  $('#message-email').hide();
                  $(':input[type="submit"]').prop('disabled', false);
                }
           }       
         });        
        return false; //rupture de flux
      }

      $('#sabonner').click(function(e){

        e.preventDefault();

        var email=$('input[name=newsletter]').val();

        if(! verifMail(email))
        {
          alert('La valeur saisie ne correspond pas à un email, Veuillez saisir un email correct.');
          exit();
        }

         $.ajax({//envoi de requete 
        url : '<?php echo site_url('Accueil/addnewsletter?email='); ?>'+email, //chargement de l'url associé au lien
        cache    : false,
        type: "POST",//envoi de requete ajax de type post
        dataType : "json",//format de données de type json
        error    : function(request, error) { // Info Debuggage si erreur         
                     alert("Erreur : responseText: "+request.responseText);
                   },
        success  : function(data) {  //si succès

                if (data.result>0)
                {
                  // Vider le champ
                  $('input[name=newsletter]').val('');

                  // Aller en haut
                  $('#back-to-top').trigger('click');

                   new PNotify({
                  title: "INSCRIPTION",
                  type: "success",
                  text: "Vous avez été bien inscrit à notre Newsletter, vous recevrez des maintenant toutes les informations relatives aux activités du GROUPE C.",
                  styling: 'bootstrap3',
                  hide: true,
                  delay: 8000,
                  width:"390px"
                  });

                }
           }       
         });        
        return false; //rupture de flux

      });


       function verifier_newsletter()
      {
        var email=$('input[name=newsletter]').val();

         $.ajax({//envoi de requete 
        url : '<?php echo site_url('Accueil/verifier_newsletter?email='); ?>'+email, //chargement de l'url associé au lien
        cache    : false,
        type: "POST",//envoi de requete ajax de type post
        dataType : "json",//format de données de type json
        error    : function(request, error) { // Info Debuggage si erreur         
                     alert("Erreur : responseText: "+request.responseText);
                   },
        success  : function(data) {  //si succès
                if (data.result>0)
                {
                  $('#message-email').show();
                  $('#sabonner').prop('disabled', true);

                  // Probleme button qui decale
                  $('#sabonner').attr('style','margin-top: -20px;');
                }
                else
                {
                  $('#message-email').hide();
                  $('#sabonner').prop('disabled', false);

                  // Probleme button qui decale
                  $('#sabonner').attr('style','margin-top: 0px;');
                }
           }       
         });        
        return false; //rupture de flux
      }


      function verifMail(email)
      {
      var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
      if(!regex.test(email))
      {
      return false;
      }
      else
      {
      return true;
      }
      }


       /* PAGINATION AJAX */
     function searchFilter(page_num) {
        page_num = page_num?page_num:0;
        var categorie = $('#categorie').val();
        var motcle = $('#motcle').val();

        $.ajax({
            type: 'POST',
            url: '<?php echo site_url(); ?>/Pdf/ajaxPaginationData/'+page_num,
            data:'page='+page_num+'&categorie='+categorie+'&motcle='+motcle,
            beforeSend: function () {
                //$('.loading').show();
            },
            success: function (html) {
                //$('#fay').text(data.testval);
                $('#postList').html(html);

                // Chargeer le loader
               // $('.loading').fadeOut("slow");
        }

        });

        }

         function searchFilter2(page_num) {
        page_num = page_num?page_num:0;
        var categorie = $('#categorie').val();
        var motcle = $('#motcle').val();

        $.ajax({
            type: 'POST',
            url: '<?php echo site_url(); ?>/Video/ajaxPaginationData/'+page_num,
            data:'page='+page_num+'&categorie='+categorie+'&motcle='+motcle,
            beforeSend: function () {
                //$('.loading').show();
            },
            success: function (html) {
                //$('#fay').text(data.testval);
                $('#postList').html(html);

                // Chargeer le loader
               // $('.loading').fadeOut("slow");
        }

        });

        }

        
    /* FIN AJAX PAGINATION */

        
    /* RESPONSIVE NEWSLETTER */
     $( document ).ready(function() {
      responsive(); 
     });

    // QUAND LA PAGE EST REDIMENSIONNEE
    $(window).resize(function() {
     responsive(); 
    });

    function responsive()
    {
      var x = $(window).width();
      if(x<999)
      {
        $('#newsletter-faq').attr('style', 'margin-bottom: 70px; margin-top: 0px;padding: 30px;');
      }
      else
      {
        $('#newsletter-faq').attr('style', 'margin-bottom: 70px; margin-top: 0px;padding: 30px; height: 110px;');
      }
    }
     

    </script>





  </body>
</html>
<?php
include("inc/header.php");
?>

   <!--/ Le bloc affichage de l'image de fond de page  /-->
  <!-- Dans background-image vous pouvez mettre votre photo -->
  <div id="home" class="intro route bg-image" style="background-image: url(img/technologic-74SD-gif-.webp)">
    <div class="overlay-itro"></div> <!-- Fin du bloc DIV Overlay -->
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">74SD-Technologie</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Contacter Nous, Art Design, Copyright ©Décembre-2022-2023</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div> <!-- Fin du bloc DIV Container -->
      </div> <!-- Fin du bloc DIV table Cell-->
    </div> <!-- Fin du bloc DIV Intro Content -->
  </div> <!-- Fin DIV id HOME -->
  <!--/ Section Services Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/exosquellette-74.gif)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Envoyer Un Mail
                    </h5>
                  </div>
                  <div>
                      <form action="" method="post" role="form" class="contactForm">
                      <div id="sendmessage">Votre Message A Bien Eté Envoyer. Merci!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input pattern="[a-zA-Z ]{2,10}" title="Veuillez écrire un nom valide" type="text" name="name" class="form-control" id="name" placeholder="Votre Nom Et Prénoms"/>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input  title="Veuillez entrée une adresse valide"  type="email" class="form-control" name="email" id="email" placeholder="Votre Email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input pattern="[a-zA-Z ]{20,60}" title="Veuillez écrire un minum de 20 caractéres"  type="text" class="form-control" name="subject" id="subject" placeholder="Sujet"  />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea maxlength="200" minlength="20" title="Veuillez écrire un message de minimum de 20 caractéres"  class="form-control" name="message" rows="5" data-rule="required" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Envoyer</a></button>
                        </div>
                        
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Entrer En Contact
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                    La technologie peut être utilisée à différentes fins : pour faciliter la communication entre les acteurs, 
                    pour faire circuler l’information utile aux activités économiques en zones rurales, 
                    pour améliorer des services existants, ou encore pour en créer de nouveaux.
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span>1 Avenue De Verdun 92390</li>
                      <li><span class="ion-ios-telephone"></span> (33) 0664146730</li>
                      <li><span class="ion-email"></span><a href="mailto:james.dan9392@gmail.com">james.dan9392@gmail.com</a> </li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="https://fr-fr.facebook.com/"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href="https://www.instagram.com/"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href="https://twitter.com/"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href="https://www.pinterest.fr/"><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
include("traitement.php");
include("inc/footer.php");
?>
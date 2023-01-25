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
                            <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom Et Prénoms" data-rule="minlen:4" data-msg="Veuillez entrer au moins 4 caractéres" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Veuillez Inscrire une adresse mail valide" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="Ecrire" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Veuillez saisir au moins 8 caractéres d'objet" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="S'il vous plaît écrivez quelque chose pour nous" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Envoyer</button>
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
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                      expedita aperiam aliquid at.
                      Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                      mollitia inventore?
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span>1 Avenue De Verdun 92390</li>
                      <li><span class="ion-ios-telephone"></span> (33) 0664146730</li>
                      <li><span class="ion-email"></span>james.dan9392@gmail.com</li>
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
include("inc/footer.php");
?>
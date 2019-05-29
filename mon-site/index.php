<?php
    // message vars
    $msg = '';
    $msgClass = '';

    //check for submit
    if(filter_has_var(INPUT_POST, 'submit')){

        // get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        //check required filds
        if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
            //passed
            //check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //failed
                $msg = 'plese use ¨¤ valide email';
                $msgClass = 'alert-danger';
            } else {
                //passsed
                $toEmail = 'jackobsmith282@gmail.com';
                $subject = 'Contact request From '.$name;
                $body = '<h2>Contact Request</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Subject</h4><p>'.$subject.'</p>
                        <h4>Message</h4><p>'.$message.'</p>
                        ';

                        //Email Headers
                        $headers = "MIME-Version: 1.0" ."\r\n";
                        $headers .="Content-Type:text/html;charset=UTF-8" . " \r\n";

                        //additional header
                        $headers .= "from: " .$name. "<".$email.">". "\r\n";

                        if(mail($toEmail, $subject, $body, $headers)){
                           //email send
                            $msg = 'email send';
                            $msgClass = 'alert-success';

                        } else {
                            $msg = 'not send';
                            $msgClass = 'alert-danger';


                        }
            }
        } else {
            //not passed
            $msg = 'plese fil all the field';
            $msgClass = 'alert-danger';
        }
        echo $msg;

    }
?>

<!DOCTYPE html>
<html>
<!-- head -->
<head>
  <meta charset="utf-8">
  <title>mon portfolio</title>
  <!-- css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="src/css/main.css">
  <link rel="stylesheet" href="css/uikit.min.css" />
  <link rel="stylesheet" href="css/ulkit.css">
  <link rel="stylesheet" href="css/ulkit-rtl.css">
  <link rel="stylesheet" href="css/ulkit-rtl.min.css">
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!-- css -->

  <!-- font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- font-->


  <!-- meta seo-->
  <meta name="description" content="La description de votre site ! PRIMORDIAL : mettre des bons mots clés !">
  <meta 
  <!-- meta seo-->


</head>
<!-- head -->

<!-- body-->
<body>
        
        <!-- header -->
        <div class="block"> 
                <header class="header">
                        <a href="#" class="header-logo">mon portfolio</a>
                        <nav class="header-menu"> 
                                <a href="#">Accueil</a>
                                <a href="#">À propos</a>
                                <a href="#">Mes travaux</a>
                                <a href="#">Contact</a>

                        </nav>     
                </header>
        </div>        
        <!-- header -->

        <!-- banner-->
        <div class="block">
                <div class="banner">
                     <img src="src/img/gg.jpg" alt="un ordinateur avec du code" class="banner-image">
                     <div class="banner-content">
                             <h1 class="title is_1"> Bienvenu sur mon portfolio</h1>
                             <h2 class="subtitle">Découvrez mes travaux et mon univers !</h2>
                             <button class="button is-link" id="open-modal">contactez-moi</button>
                     </div>
                </div>
        </div>
        <!-- banner-->

        <!--modal-->
        <div class="modal" id="modal-to-open">
            <div class="modal-background"></div>
            <div class="modal-card">
              <header class="modal-card-head">
                <p class="modal-card-title">Modal title</p>
                <button class="delete" aria-label="close" id="close-modal"></button>
              </header>
              <section class="modal-card-body">
                <!-- Content ... -->
              </section>
              <footer class="modal-card-foot">
                <button class="button is-link">Save changes</button>
                
              </footer>
            </div>
          </div>
        <!--modal-->
        <!-- section : à propos -->
        <div class="block">
                        <h2 class="subtitle heading-site">À propos</h2>
                <div class="container about">
                        <div class="columns">
                                        <div class="columns about-single-element">
                                                <i class="fas fa-code icon"></i>
                                                <p>Ce n’est pas la liste exhaustive des raisons qui pourraient pousser une personne à choisir la carrière
                                                    de développeur. Votre expérience est peut-être totalement différente. N’hésitez donc pas à la partager. </p>
                                        </div>
                                        <div class="columns about-single-element">
                                                        <i class="fas fa-mug-hot icon"></i>
                                                        <p>Il y a d’abord les passionnés, ceux qui répondraient qu’ils sont devenus développeurs parce qu’ils aiment 
                                                            tout simplement le code. C’est parmi ces personnes qu’on trouve en général ceux qui
                                                             accordent une grande importance à l’esthétique dans leur code.</p>
                                                        
                                        </div>
                                        <div class="columns about-single-element">
                                                        <i class="fas fa-pencil-alt icon"></i>
                                                        <p>De manière générale, le bon développeur doit prendre le temps de la réflexion avant de foncer, tête baissée / écouteurs aux oreilles, sur son clavier. C’est d’ailleurs l’un des principaux problèmes des développeurs débutants : ils foncent dans le code sans réfléchir aux implications que leur tâche aura sur le reste de l’application.</p>

                                        </div>
                        </div>
                </div>
        </div>

        <!-- section : à propos -->
        <!--portfolio-->
        
        <div class="block">
                <h2 class="subtitle heading-site"> Mon portfolio</h2>
                <div class="container">
                                <div class="tile is-ancestor">
                                                <div class="tile is-vertical is-8">
                                                  <div class="tile">
                                                    <div class="tile is-parent is-vertical">
                                                      <article class="tile is-child notification is-primary">
                                                        <p class="title">Vertical...</p>
                                                        <p class="subtitle">Top tile</p>
                                                        <img src="src/img/animation.png" alt="annimation" class="annima">
                                                      </article>
                                                      <article class="tile is-child notification is-warning">
                                                        <p class="title">...tiles</p>
                                                        <p class="subtitle">Bottom tile</p>
                                                        <img src="src/img/speach.PNG" alt="project" class="speach">

                                                        
                                                      </article>
                                                    </div>
                                                    <div class="tile is-parent">
                                                      <article class="tile is-child notification is-info">
                                                        <p class="title">Middle tile</p>
                                                         <!-- animation avec image-->
                                                          <div class="uk-animation-toggle" tabindex="0">
                                                              <div class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom">
                                                                  <p class="uk-text-center">Yaacoub Abouayad</p>
                                                                  <img src="src/img/jack.jpg" alt="ma photo" class="maphoto">
                                                              </div>
                                                          <!-- animation avec image-->
                                                        
                                                       
                                                      </article>
                                                    </div>
                                                  </div>
                                                  <div class="tile is-parent">
                                                    <article class="tile is-child notification is-danger">
                                                      <p class="title">Wide tile</p>
                                                      <p class="subtitle">Aligned with the right tile</p>
                                                      <img src="src/img//clock.PNG" alt="project" class="clocky">
                                                      <div class="content">
                                                        <!-- Content -->
                                                      </div>
                                                    </article>
                                                  </div>
                                                </div>
                                                <div class="tile is-parent">
                                                  <article class="tile is-child notification is-success">
                                                    <div class="content">
                                                      <p class="title">Tall tile</p>
                                                      <p class="subtitle">With even more content</p>
                                                      <img src="src/img/gallery.PNG" alt="project" class="clocky">
                                                      <p>hvqj</p>
                                                      <img src="src/img/click.PNG" alt="project" class="click">
                                                      <p>hvqj</p>
                                                      <img src="src/img/flex.png" alt="project" class="flex">
                                                      <p>gjlkj</p>
                                                      <img src="src/img/band.PNG" alt="project" class="band">


                                                      <div class="content">
                                                        <!-- Content -->
                                                      </div>
                                                    </div>
                                                  </article>
                                                </div>
                                              </div>

                </div>

        </div>

        <!--portfolio-->

        <!--Contact-->
        <!-- <form action="" method="post" role="form" class="contactForm">
                      <div id="sendmessage"></div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"  data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control " name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <input type="submit" value="" name="submit" class="button button-a button-big button-rouded"/>
                        </div>
                      </div>
                    </form> -->
        <!--Contact-->

<!--Section: Contact v.2-->


<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
         <form action="" method="post" role="form" class="contactForm">
                      <div id="sendmessage"></div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                          <label class="col-md-3 control-label" for="email">Your name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"  data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                          <label class="col-md-3 control-label" for="email">Your E-mail</label>
                            <input type="email" class="form-control " name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <label class="col-md-3 control-label" for="email">Subject</label>
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                          <label class="col-md-3 control-label" for="email">Message</label>
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                        <button type="submit"  name="submit"  class="btn btn-primary btn-lg">Submit</button>
                         
                        </div>
                      </div>
                     </form> 
        </div>
      </div>
	</div>
</div>
        
        
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 <script src="src/js/main.js"></script>
</body>
<!-- body



</html>
<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');

if(isset($_POST['forminscription'])) {
   $nom = htmlspecialchars($_POST['nom']);
   $prenom = htmlspecialchars($_POST['prenom']);
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $nomlength = strlen($nom);
      $prenomlength = strlen($prenom);
      $pseudolength = strlen($pseudo);

      if($nomlength <= 255) {
         if($prenomlength <= 255) {
            if($pseudolength <= 255) {
               if($mail == $mail2) {
                  if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                     $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
                     $reqmail->execute(array($mail));
                     $mailexist = $reqmail->rowCount();
                     if($mailexist == 0) {
                        if($mdp == $mdp2) {
                           $insertmbr = $bdd->prepare("INSERT INTO membres(nom, prenom, pseudo, mail, motdepasse) VALUES(?, ?, ?, ?, ?)");
                           $insertmbr->execute(array($nom, $prenom, $pseudo, $mail, $mdp));
                           $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                        } else {
                           $erreur = "Vos mots de passes ne correspondent pas !";
                        }
                     } else {
                        $erreur = "Adresse mail déjà utilisée !";
                     }
                  } else {
                     $erreur = "Votre adresse mail n'est pas valide !";
                  }
               } else {
                  $erreur = "Vos adresses mail ne correspondent pas !";
               }
            } else {
               $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
            } 
         } else {
            $erreur = "Votre prenom ne doit pas dépasser 255 caractères !";
         }
      } else {
         $erreur = "Votre nom ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>CV - Boxed</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="CSS/bootstrap.css" rel="stylesheet">
	
	<link href="CSS/ionicons.css" rel="stylesheet">
	
	<link href="CSS/fluidbox.min.css" rel="stylesheet">
	
	<link href="CSS/styles.css" rel="stylesheet">
	
	<link href="CSS/responsive.css" rel="stylesheet">
	
</head>
<body>
	
	<header>
		<div class="container">
			<div class="heading-wrapper">
				<div class="row">

				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="info">
						<div class="right-area">
							<nav class="navbar navbar-expand-lg navbar-light bg-light">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarNav">
                           <ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link" href="index.php">Home</a>
										</li>
										<?php
											if(isset($_SESSION['id'])) {
											?>
											<li class="nav-item">
												<a class="nav-link" href="profil.php">Mon profil</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="deconnexion.php">Se déconnecter</a>
											</li>
											<?php
											} else {
											?>
											<li class="nav-item active">
												<a class="nav-link" href="inscription.php">Inscription <span class="sr-only">(current)</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="connexion.php">Connexion</a>
											</li>
										<?php
											}
										?>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="info">
							<i class="icon ion-ios-location-outline"></i>
							<div class="right-area">
								<h5>3008 Sarah Drive</h5>
								<h5>Franklin,LA 70538</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-3 -->
					
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="info">
							<i class="icon ion-ios-telephone-outline"></i>
							<div class="right-area">
								<h5>337-4139538</h5>
								<h6>MIN - FRI,8AM - 7PM</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-3 -->
					
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="info">
							<i class="icon ion-ios-chatboxes-outline"></i>
							<div class="right-area">
								<h5>contact@colorlib.com</h5>
								<h6>REPLY IN 24 HOURS</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-3 -->

				</div><!-- row -->
			</div><!-- heading-wrapper -->
			
			<a class="downlad-btn" href="#">Download CV</a>
		</div><!-- container -->
	</header>
	
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					
					<div class="intro">
					
               <div align="center">
         <h2>Inscription</h2>
         <br /><br />
         <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="nom">Nom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="prenom">Prénom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre prénom" id="prenom" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="pseudo">Pseudo :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail">Mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail2">Confirmation du mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp2">Confirmation du mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
					</div><!-- intro -->
						</nav>
					</div>
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->

   
	
	
	<!-- SCRIPTS -->
	
	<script src="JS/jquery-3.2.1.min.js"></script>
	
	<script src="JS/tether.min.js"></script>
	
	<script src="JS/bootstrap.js"></script>
	
	<script src="JS/isotope.pkgd.min.js"></script>
	
	<script src="JS/jquery.waypoints.min.js"></script>
	
	<script src="JS/progressbar.min.js"></script>
	
	<script src="JS/jquery.fluidbox.min.js"></script>
	
	<script src="JS/scripts.js"></script>
	
</body>
</html>
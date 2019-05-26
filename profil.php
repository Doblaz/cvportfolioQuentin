<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');

if(isset($_GET['id']) AND $_GET['id'] >= 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
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
												<a class="nav-link" href="editionprofil.php">Mon profil</a>
											</li>
											<li class="nav-item active">
												<a class="nav-link" href="profil.php">Mon profil <span class="sr-only">(current)</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="deconnexion.php">Se déconnecter</a>
											</li>
											<?php
											} else {
											?>
											<li class="nav-item">
												<a class="nav-link" href="inscription.php">Inscription</a>
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
         <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
         <br /><br />
         Pseudo = <?php echo $userinfo['pseudo']; ?>
         <br />
         Prénom = <?php echo $userinfo['prenom']; ?>
         <br />
         Nom = <?php echo $userinfo['nom']; ?>
         <br />
         Mail = <?php echo $userinfo['mail']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
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
<?php   
}
?>
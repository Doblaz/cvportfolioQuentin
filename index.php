<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');
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
										<li class="nav-item active">
											<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
								<h5>5 Rue de Fontenelle</h5>
								<h5>76000 ROUEN</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-3 -->
					
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="info">
							<i class="icon ion-ios-telephone-outline"></i>
							<div class="right-area">
								<h5>07.80.57.80.84</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-3 -->
					
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="info">
							<i class="icon ion-ios-chatboxes-outline"></i>
							<div class="right-area">
								<h5>quentin.quibel76@gmail.com</h5>
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
					
						<div class="profile-img"><img src="images/profile-1-250x250.jpg" alt=""></div>
						<h2><b>Quentin Quibel</b></h2>
						<h4 class="font-yellow">Developpeur web junior</h4>
						<ul class="information margin-tb-30">
							<li><b>NÉE : </b>15 Janvier 1996</li>
							<li><b>EMAIL : </b>quentin.quibel76@gmail.com</li>
						</ul>
						<ul class="social-icons">
							<li><a href="#"><i class="ion-social-linkedin"></i></a></li>
						</ul>
					</div><!-- intro -->
						</nav>
					</div>
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->
	
	<section class="portfolio-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Portfolio</b></h3>
						<h6 class="font-lite-black"><b>MES TRAVAUX</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="portfolioFilter clearfix margin-b-80">
						<a href="#" data-filter="*" class="current"><b>TOUT</b></a>
					</div><!-- portfolioFilter -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
		<div class="portfolioContainer">
			
			<div class="p-item web-design">
				<a href="images/code-ia-664x441.jpg" data-fluidbox>
					<img src="images/code-ia-664x441.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item branding">
				<a href="images/Infographic-Branding.jpg" data-fluidbox>
					<img src="images/Infographic-Branding.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item web-design">
				<a href="images/definition_developpement_web.jpg" data-fluidbox>
					<img src="images/definition_developpement_web.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item p-item-2 graphic-design">
				<a class="img" href="images/Graphic-_Design.jpg" data-fluidbox>
					<img src="images/Graphic-_Design.jpg" alt=""></a>
				<a class="img" href="images/Graphic-_Design.jpg" data-fluidbox>
					<img src="images/Graphic-_Design.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item branding">
				<a href="images/Infographic-Branding.jpg" data-fluidbox>
					<img src="images/Infographic-Branding.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item web-design">
				<a href="images/definition_developpement_web.jpg" data-fluidbox>
					<img src="images/definition_developpement_web.jpg" alt=""></a>
			</div><!-- p-item -->
			
			<div class="p-item graphic-design">
				<a href="images/Graphic-_Design.jpg" data-fluidbox>
					<img src="images/Graphic-_Design.jpg" alt=""></a>
			</div><!-- p-item -->
				
			<div class="p-item web-design">
				<a href="images/code-ia-664x441.jpg" data-fluidbox>
					<img src="images/code-ia-664x441.jpg" alt=""></a>
			</div><!-- p-item -->

			<div class="p-item p-item-2 graphic-design">
				<a class="img" href="images/Graphic-_Design.jpg" data-fluidbox>
					<img src="images/Graphic-_Design.jpg" alt=""></a>
				<a class="img" href="images/Graphic-_Design.jpg" data-fluidbox>
					<img src="images/Graphic-_Design.jpg" alt=""></a>
			</div><!-- p-item -->
		
		</div><!-- portfolioContainer -->
		
	</section><!-- portfolio-section -->
	
	
	<section class="about-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>A propos de moi</b></h3>
						<h6 class="font-lite-black"><b>EXPERIENCES PROFESSIONELLES</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<p class="margin-b-50">Joueur professionnel CSGO.</p>
					
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent="1.00">
									<div></div>
									<h6 class="progress-title">AWP</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
					
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".78">
									<div></div>
									<h6 class="progress-title">HEADSHOT</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
						
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".69">
									<div></div>
									<h6 class="progress-title">GUNROUND</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
						
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-50">
								<div class="radial-progress" data-prog-percent=".97">
									<div></div>
									<h6 class="progress-title">FUN</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
					
					</div><!-- row -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->
	
	<section class="experience-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Work Experience</b></h3>
						<h6 class="font-lite-black"><b>PREVIOUS JOBS</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">

					<div class="experience margin-b-50">
						<h4><b>JUNIOR PROJECT MANAGER</b></h4>
						<h5 class="font-yellow"><b>DESIGN STUDIO</b></h5>
						<h6 class="margin-t-10">MARCH 2015 - PRESENT</h6>
						<p class="font-semi-white margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit,
							quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu,
							eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
						<ul class="list margin-b-30">
							<li>Duis non volutpat arcu, eu mollis tellus.</li>
							<li>Quis consequat nulla effi citur at.</li>
							<li>Sed finibus aliquam neque sit.</li>
						</ul>
					</div><!-- experience -->

				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- experience-section -->
	
	<section class="education-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Education</b></h3>
						<h6 class="font-lite-black"><b>Parcours scolaire</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="education-wrapper">
						<div class="education margin-b-50">
							<h4><b>FORMATION REFERENT DIGITAL</b></h4>
							<h5 class="font-yellow"><b>NFACTORY SCHOOL</b></h5>
							<h6 class="font-lite-black margin-t-10">OBTENU EN 2019</h6>
							<p class="margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
							quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
							eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4><b>BAC STI2D</b></h4>
							<h5 class="font-yellow"><b>LYCÉE PABLO NERUDA</b></h5>
							<h6 class="font-lite-black margin-t-10">OBTENU EN 2016</h6>
							<p class="margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit,
							quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu,
							eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
						</div><!-- education -->


					</div><!-- education-wrapper -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- about-section -->
	
	<section class="counter-section" id="counter">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="400" data-count="1">0</span></b></h1>
						<h5 class="desc"><b>Projet en cours</b></h5>
					</div><!-- counter -->
				</div><!-- col-md-3-->
				
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="1400" data-count="1">0</span></b></h1>
						<h5 class="desc"><b>Projet effectué</b></h5>
					</div><!-- counter -->
				</div><!-- col-md-3-->
				
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="700" data-count="25">0</span></b></h1>
						<h5 class="desc"><b>Heures de dev</b></h5>
					</div><!-- counter -->
				</div><!-- col-md-3-->
				
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="counter margin-b-30">
						<h1 class="title"><b><span class="counter-value" data-duration="2000" data-count="0">0</span></b></h1>
						<h5 class="desc"><b>J'ai pas commit mdrrr</b></h5>
					</div><!-- margin-b-30 -->
				</div><!-- col-md-3-->
				
			</div><!-- row-->
		</div><!-- container-->
    </section><!-- counter-section-->

	
	
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
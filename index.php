<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données
    $cnx = mysqli_connect("localhost", "root", "", "facilix");

    if (!$cnx) {
        die("Échec de connexion : " . mysqli_connect_error());
    }

    // Récupération des données du formulaire
    $nom = mysqli_real_escape_string($cnx, $_POST['nom']);
	$Prenom = mysqli_real_escape_string($cnx, $_POST['Prenom']);
    $tel = mysqli_real_escape_string($cnx, $_POST['tel']);
    $email = mysqli_real_escape_string($cnx, $_POST['email']);
    $message = mysqli_real_escape_string($cnx, $_POST['message']);

    // Requête d'insertion
    $sql = "INSERT INTO contact (nom,Prenom, tel, email, message) 
            VALUES ('$nom','$Prenom', '$tel', '$email', '$message')";

    if (mysqli_query($cnx, $sql)) {
        echo "<script>alert('Message envoyé avec succès !');</script>";
    } else {
        echo "<script>alert('Erreur lors de l\'envoi : " . mysqli_error($cnx) . "');</script>";
    }

    // Fermeture de la connexion
    mysqli_close($cnx);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>facilix</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="shortcut icon" type="image/png" href="facilix2.jpg">
<!--

Template 2075 Digital Team

http://www.tooplate.com/view/2075-digital-team

-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-circle">
       <div class="sk-circle1 sk-circle"></div>
       <div class="sk-circle2 sk-circle"></div>
       <div class="sk-circle3 sk-circle"></div>
       <div class="sk-circle4 sk-circle"></div>
       <div class="sk-circle5 sk-circle"></div>
       <div class="sk-circle6 sk-circle"></div>
       <div class="sk-circle7 sk-circle"></div>
       <div class="sk-circle8 sk-circle"></div>
       <div class="sk-circle9 sk-circle"></div>
       <div class="sk-circle10 sk-circle"></div>
       <div class="sk-circle11 sk-circle"></div>
       <div class="sk-circle12 sk-circle"></div>
    </div>
</div>

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Facilix</a>
			<img src="facilixRr.png">
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="smoothScroll">Accueil</a></li>
				<li><a href="#work" class="smoothScroll">A Vous</a></li>
				<li><a href="#about" class="smoothScroll">À Propos</a></li>
				<li><a href="#team" class="smoothScroll">Équipe</a></li>
				<li><a href="#portfolio" class="smoothScroll">Portefeuille</a></li>
				<li><a href="#pricing" class="smoothScroll">Projet</a></li>
				<li><a href="#contact" class="smoothScroll">Contact</a></li>
			</ul>
		</div>
	</div>
</section>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>WEB DESIGN / WEB DEVELOPMENT / SOCIAL MEDIA</h3>
				<h1>Facilix</h1>
				<hr>
				<a href="#work" class="smoothScroll btn btn-danger">Ce Que Nous Faisons</a>
				<a href="#contact" class="smoothScroll btn btn-default">Contacter Nous</a>
			</div>
		</div>
	</div>		
</section>

<!-- work section -->
<section id="work">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>01</strong>
					<h1 class="heading bold">Ce Que Nous Faisons</h1>
					<hr>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<i class="icon-cloud medium-icon"></i>
					<h3>WEB MARKETING</h3>
					<hr>
					<p>Le web marketing désigne l’ensemble des techniques en ligne utilisées pour promouvoir et vendre des produits ou services.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<i class="icon-mobile medium-icon"></i>
					<h3>UI &amp; UX DESIGN</h3>
					<hr>
					<p>UI & UX Design consiste à concevoir des interfaces web ou mobiles qui soient à la fois esthétiques (UI) et faciles à utiliser (UX).</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
				<i class="icon-laptop medium-icon"></i>
					<h3>E-COMMERCE</h3>
					<hr>
					<p>L’e-commerce permet d’acheter et de vendre en ligne, facilement et à tout moment.L’e-commerce est un système de transactions commerciales réalisées via internet.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
				<i class="icon-compass medium-icon"></i>
					<h3>MOBILE APP</h3>
					<hr>
					<p>Une mobile app est une application conçue pour être utilisée sur smartphone ou tablette.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
				<i class="icon-chat medium-icon"></i>
					<h3>SOCIAL MEDIA</h3>
					<hr>
					<p>Le social media regroupe les plateformes en ligne permettant de créer, partager et interagir avec du contenu.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
				<i class="icon-browser medium-icon"></i>
					<h3>RESPONSIVE LAYOUT</h3>
					<hr>
					<p>Le responsive layout permet à un site de s’adapter automatiquement à tous les formats d’écran (mobile, tablette, desktop).</p>
			</div>
		</div>
	</div>
</section>

<!-- about section -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<strong>02</strong>
					<h1 class="heading bold">Notre Agence</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<img src="facilix.jpg" class="img-responsive" alt="about img">
			</div>
			<div class="col-md-6 col-sm-12">
				<h3 class="bold">Facilix</h3>
				<h1 class="heading bold">Meilleur Agence En Tunis</h1>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#design" aria-controls="design" role="tab" data-toggle="tab">Tradi-x</a></li>
					<li><a href="#mobile" aria-controls="mobile" role="tab" data-toggle="tab">Emploi-x</a></li>
					<li><a href="#social" aria-controls="social" role="tab" data-toggle="tab">Stage-x</a></li>
				</ul>
				<!-- tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="design">
						<p>Bienvenue sur <a href="..\..\projet facilix\Tradi-x\index.php">Tradi-x</a>  votre boutique en ligne dédiée à l'artisanat traditionnel tunisien. Nous vous proposons une large gamme d’articles authentiques fabriqués à la main : tapis, poteries, objets en bois d’olivier, bijoux berbères et bien d’autres trésors.</p>
						<p>Chaque création incarne le savoir-faire ancestral de nos artisans et célèbre la richesse du patrimoine tunisien. Avec Tradi-X, offrez-vous un bout de tradition, directement chez vous.</p>
					</div>
					<div role="tabpanel" class="tab-pane" id="mobile">
						<p>Bienvenue sur <a href="..\..\projet facilix\emploi-x1\View\frontoffice\index.php">Emploi-x</a> la plateforme dédiée aux Tunisiens à la recherche d’opportunités dans le domaine de l’informatique. Que vous soyez développeur, designer, analyste ou expert en cybersécurité, nous vous aidons à trouver des offres d’emploi adaptées à vos compétences, en Tunisie et à l’international.</p>
						<p>Avec Emploi-x, boostez votre carrière dans le numérique en toute simplicité.</p>
					</div>
					<div role="tabpanel" class="tab-pane" id="social">
						<p>Bienvenue sur <a href="..\..\projet facilix\stage-x\index.html">Stage-x</a>  la plateforme dédiée aux étudiants tunisiens en quête de stages. Que vous soyez en licence, en master ou en formation professionnelle, nous vous aidons à trouver des opportunités de stage adaptées à votre profil, partout en Tunisie et à l’étranger.</p>
						<p>Avec Stage-x, démarrez votre parcours professionnel en toute confiance.</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>03</strong>
					<h1 class="heading bold">Notre Equipe</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="images/amine.jpg"  class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Mohamed Amine Sallami</h4>
							<h3>Chef d'equipe</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.3s">
				<div class="team-wrapper">
					<img src="images/minyar.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Minyar Zorgui</h4>
							<h3>développeuse</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<img src="images/makrem.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Makrem Awai</h4>
							<h3>Marketing</h3>
							<hr>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
								<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
								<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
							</ul>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- portfolio section -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<strong>04</strong>
					<h1 class="heading bold">NOTRE PORTEFEUILLE</h1>
					<hr>
				</div>
				<!-- ISO section -->
				<div class="iso-section">
					<ul class="filter-wrapper clearfix">
                   		 <li><a href="#" data-filter="*" class="selected opc-main-bg">Tous</a></li>
                   		 <li><a href="#" class="opc-main-bg" data-filter=".html">Notre Projet</a></li>
                   		 <li><a href="#" class="opc-main-bg" data-filter=".photoshop">Flayer</a></li>
                    	 <li><a href="#" class="opc-main-bg" data-filter=".wordpress">provocation</a></li>
               		</ul>
               		<div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
               			<div class="iso-box-wrapper col4-iso-box">

               				 <div class="iso-box html wordpress mobile col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/Tradi-x.png" data-lightbox-gallery="portfolio-gallery"><img src="images/Tradi-x.png" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box html mobile col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/satge-x.png" data-lightbox-gallery="portfolio-gallery"><img src="images/satge-x.png" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/hhhh.png" data-lightbox-gallery="portfolio-gallery"><img src="images/hhhh.png" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box html photoshop col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/Emploi-x.png" data-lightbox-gallery="portfolio-gallery"><img src="images/Emploi-x.png" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/flayer.png" data-lightbox-gallery="portfolio-gallery"><img src="images/flayer.png" alt="portfolio img"></a>
               				 </div>

							 <div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/facilix1.jpeg" data-lightbox-gallery="portfolio-gallery"><img src="images/facilix1.jpeg" alt="portfolio img"></a>
               				 </div>

							 <div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/facilix2.jpeg" data-lightbox-gallery="portfolio-gallery"><img src="images/facilix2.jpeg" alt="portfolio img"></a>
               				 </div>

							 <div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/emploi-x1.jpeg" data-lightbox-gallery="portfolio-gallery"><img src="images/emploi-x1.jpeg" alt="portfolio img"></a>
               				 </div>

							 <div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/emploi-x2.jpeg" data-lightbox-gallery="portfolio-gallery"><img src="images/emploi-x2.jpeg" alt="portfolio img"></a>
               				 </div>

							 <div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/stage-x1.jpeg" data-lightbox-gallery="portfolio-gallery"><img src="images/stage-x1.jpeg" alt="portfolio img"></a>
               				 </div>

							 <div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6">
               				 	<a href="images/stage-x2.jpeg" data-lightbox-gallery="portfolio-gallery"><img src="images/stage-x2.jpeg" alt="portfolio img"></a>
               				 </div>




               			</div>
               		</div>

				</div>
			</div>
		</div>
	</div>
</div>		

<!-- pricing section -->
<section id="pricing">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<strong>05</strong>
					<h1 class="heading bold">Notre Projet</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="plan plan-one wow bounceIn" data-wow-delay="0.3s">
					<div class="plan_title">
						 <img src="projet/Emploi-x.png" > 
						<h3>Pour L employer</h3>
					</div>
					<ul>
                    	<li>Recherche De Emploi</li>
					</ul>
					<a href="..\..\projet facilix\emploi-x1\View\frontoffice\index.php" ><button class="btn btn-warning">Visiter</button> </a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="plan plan-two wow bounceIn" data-wow-delay="0.3s">
					<div class="plan_title">
						<img src="projet/Tradi-x.png">
						<h3>E-commercial</h3>
					</div>
					<ul>
                        <li>Traditionel Produit Tunisien</li>
					</ul>
				<a href="..\..\projet facilix\Tradi-x\index.php" >	<button class="btn btn-warning">Visiter </button></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="plan plan-three wow bounceIn" data-wow-delay="0.3s">
					<div class="plan_title">
						<img src="projet/satge-x.png">
						<h3>Pour Stagiaire</h3>
					</div>
					<ul>
                        <li>Recherche De Stage</li>
					</ul>
					<a href="..\..\projet facilix\stage-x\index.html" ><button class="btn btn-warning">Visiter</button></a>
				</div>
			</div>
		</div>
	</div>		
</section>

<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<strong>06</strong>
					<h1 class="heading bold">Contacter Nous</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 contact-info">
				<h2 class="heading bold">CONTACT INFOS</h2>
				<p>Vous souhaitez créer un site web ou un marketing digital ou une conception UI & UX d'APPLICATION MOBILE RESPONSIVE LAYOUT Contacter Nous.</p>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
					<p>ffacilix@gmail.com</p>
				</div>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> Telephone</h3>
					<p>+216 55013665 | +216 92737668</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<form action="index.php" method="POST" class="wow fadeInUp" data-wow-delay="0.6s">
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" placeholder="Nom" name="nom" required>
					</div>
					
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" placeholder="Prenom" name="Prenom" required>
					</div>

					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" placeholder="Téléphone" name="tel" required>
					</div>

					<div class="col-md-6 col-sm-6">
						<input type="email" class="form-control" placeholder="Email" name="email" required>
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="Message" rows="7" name="message" required></textarea>
					</div>
					<div class="col-md-offset-4 col-md-8 col-sm-offslet-4 col-sm-8">
						<input type="submit" class="form-control" value="Envoyer Message ">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<hr>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="0.9s"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
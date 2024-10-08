<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
$isLoggedIn = isset($_SESSION['user']) && $_SESSION['user'] === true;

?>
<!DOCTYPE html>
	<html lang="en">
<head>
	<title>GESTION DU COURRIER</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

        
<body>
<!-- header -->
		<div class="banner-top">
			<div class="contact-bnr-w3-agile">
			<ul>
				<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">gestioncourrier@gmail.com</a></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>+229 99 23 92 87</li>	
					</ul>
				</div>
				<div class="clearfix"></div>
		</div>
		<div class="w3_navigation">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div><h1><a class="navbar-brand" href="">GESTION <span>COURIIER</span><p class="logo_w3l_agile_caption">Controle le flux des courriers</p></a></h1>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="menu menu--iris">
							<ul class="nav navbar-nav menu__list">
								<li class="menu__item menu__item--current"><a href="" class="menu__link">Acceuil</a></li>
								<li class="menu__item">
                					<a href="<?php echo $isLoggedIn ? 'http://localhost:8080/dashboard/' : 'http://localhost:8080/connexion.php'; ?>" class="">Mes Courriers</a>
            					</li>
								<li class="menu__item"><a href="#contact" class="menu__link scroll">Contact </a></li>
								<li class="menu__item"><a href="connexion.php" class="">Mon compte </a></li>
                                <!-- <li class="menu__item"><a href="admin.php" class="">Admin</a></li> -->
							</ul>
						</nav>
					</div>
				</nav>

			</div>
		</div>
	<!-- //header -->
<!-- banner -->
<div id="home" class="w3ls-banner">
			<!-- banner-text -->
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider4">
						<li>
							<div class="w3layouts-banner-top">

								<div class="container">
									<div class="agileits-banner-info">
									<h4>GESTION DES COURRIERS</h4>
										<h3>Controler l'etat de vos courrier</h3>
											<p>Bienvenue sur la Plateforme </p>
										<div class="agileits_w3layouts_more menu__item">
											<a href="connexion.php" class="menu__link" data-toggle="modal" data-target="#myModal"> Inscrivez-vous</a>
										</div>
									</div>	
								</div>
							</div>
						</li>
						<li>
							<div class="w3layouts-banner-top w3layouts-banner-top1">
								<div class="container">
									<div class="agileits-banner-info">
									<h4>GESTION DES COURRIERS</h4>
										<h3>Faciliter la gestion des courriers de votre entreprise</h3>
											<p>Inscrivez vous pour acceder à la plateforme</p>
										<div class="agileits_w3layouts_more menu__item">
					<a href="connexion.php" class="menu__link" data-toggle="modal" data-target="#myModal">Inscrivez-vous</a>
				</div>
									</div>	
								</div>
							</div>
						</li>
						<li>
							<div class="w3layouts-banner-top w3layouts-banner-top2">
								<div class="container">
									<div class="agileits-banner-info">
									<h4>GESTION DES COURRIERS</h4>
									<h3>Welcom Welcom Welcom</h3>
											<p>tak tak tak</p>
										<div class="agileits_w3layouts_more menu__item">
												<a href="connexion.php" class="menu__link" data-toggle="modal" data-target="#myModal">Inscrivez-vous</a>
											</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div> 

			

        <!-- COURRIER DES SOCIETES -->
        <!-- <div id="availability-agileits">
        <div class="col-md-12 book-form-left-w3layouts">
            <a href="admin/reservation.php"><h2>COURRIER DES SOCIETES</h2></a>
        </div>
            <div class="clearfix"> </div>
        </div> -->

        <?php
			$server = "localhost";
			$login = "root";
			$pass = "1234";
			$dbname = "gestion_courrier";
			$resultat = "";
			$connexe = new mysqli("localhost", "root", "1234", "gestion_courrier");
			$requette = "SELECT * FROM courrier ";
			$resultat = $connexe->query($requette);
		?>


  

<!-- <div id = "about" class="container">
	<h3 class="title-w3-agileits title-black-wthree">LES COURRIERS</h3>
		<div class="priceing-table-main">
			<div class="row">

			<?php while ($row = mysqli_fetch_assoc($resultat)) { ?>

				<div class="col-md-3 price-grid" style="margin-bottom: 12px;">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/r1.jpg" alt=" " class="img-responsive" />
								<h4><?php echo utf8_encode($row['ref_courrier']) ?></h4>
						</div>
						
						<div class="price-gd">
						    <div style="margin-top:25px">
							<p>Exp : <?php echo utf8_encode($row['expe']) ?></p>
							<p>Dest : <?php echo utf8_encode($row['desti']) ?></p>
						    </div>
						    <div class="price-selet">	
							
						    <h5><span>Envoyé le </span><?php echo utf8_encode($row['date_time_act']) ?></h5>						
						    <a href="#" >Detail</a>
					        </div>
				        </div>
			        </div>
		        </div>
			<?php } ?>
            </div>
		</div>
</div> -->

<!-- contact -->
<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Contactez Nous</h4>
				<form  action="/action/contact.php" method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
                        
                            <label class="contact-p1">Votre :</label>
                            <input type="text" class="form-control" name="name" id="name" required >
                            <p class="help-block"></p>
                       
                    </div>	
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Telephone:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required >
							<p class="help-block"></p>
						
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Address Email:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
							<p class="help-block"></p>
						
                    </div>
                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary">	
				</form>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4>Nos Adresses</h4>
			<p class="contact-agile1"><strong>Phone :</strong>+229 99 23 92 87</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">INFO@gestion.COM</a></p>
			<p class="contact-agile1"><strong>Address :</strong> Alger, Algerie, Afrique</p>
																
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								
							</ul>
			</div>
			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.7905052320443!2d-77.84987248482734!3d39.586871613613056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c9f6a80ccf0661%3A0x7210426c67abc40!2sVirginia+Welcome+Center%2FSafety+Rest+Area!5e0!3m2!1sen!2sin!4v1485760915662" ></iframe> -->
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /contact -->

        <!-- /contact -->
        <div class="copy">
            <p>© 2024 GESTION CORRIER . Tous droits réservés | Plateforme gerer avec PHP / JAVASCRIPT <a href="index.php">FIDWIN</a> </p>
        </div>
            <!--/footer -->
            <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- contact form -->
        <script src="js/jqBootstrapValidation.js"></script>

        <!-- /contact form -->	
        <!-- Calendar -->
                <script src="js/jquery-ui.js"></script>
                <script>
                        $(function() {
                        $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
                        });
                </script>
        <!-- //Calendar -->
        <!-- gallery popup -->
        <link rel="stylesheet" href="css/swipebox.css">
                        <script src="js/jquery.swipebox.min.js"></script> 
                            <script type="text/javascript">
                                jQuery(function($) {
                                    $(".swipebox").swipebox();
                                });
                            </script>
        <!-- //gallery popup -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){		
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        <!-- flexSlider -->
                        <script defer src="js/jquery.flexslider.js"></script>
                        <script type="text/javascript">
                        $(window).load(function(){
                        $('.flexslider').flexslider({
                            animation: "slide",
                            start: function(slider){
                            $('body').removeClass('loading');
                            }
                        });
                        });
                    </script>
                    <!-- //flexSlider -->
        <script src="js/responsiveslides.min.js"></script>
                    <script>
                                // You can also use "$(window).load(function() {"
                                $(function () {
                                // Slideshow 4
                                $("#slider4").responsiveSlides({
                                    auto: true,
                                    pager:true,
                                    nav:false,
                                    speed: 500,
                                    namespace: "callbacks",
                                    before: function () {
                                    $('.events').append("<li>before event fired.</li>");
                                    },
                                    after: function () {
                                    $('.events').append("<li>after event fired.</li>");
                                    }
                                });
                            
                                });
                    </script>
                <!--search-bar-->
                <script src="js/main.js"></script>	
        <!--//search-bar-->
        <!--tabs-->
        <script src="js/easy-responsive-tabs.js"></script>
        <script>
			$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true,   // 100% fit in a container
			closed: 'accordion', // Start closed if in accordion view
			activate: function(event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
			}
			});
			$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
			});
			});
        </script>
        <!--//tabs-->
        <!-- smooth scrolling -->
            <script type="text/javascript">
                $(document).ready(function() {
                /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                    };
                */								
                $().UItoTop({ easingType: 'easeOutQuart' });
                });
            </script>
            
            <div class="arr-w3ls">
            <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
            </div>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>

    </html>
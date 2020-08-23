<?php 
session_start();
require('./translate.php');
include $_SESSION['idioma'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Chong Qing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+351 968 485 955</span>
					    </div>
					    
					    <div class="col-md-6 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"> <?php echo $trad['open'] ?></p>
              </div>
              <div class="col-md-2 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                <a href="./?idioma=pt" class="icon flag"><img src="images/pt.svg" alt="" width="20px" height="20px"></a>

                <a href="./?idioma=zh" class="icon flag"><img src="images/cn.svg" alt="" width="20px" height="20px" style="margin-left: 4px;"></a>      
              </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Chong Qing </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> <?php echo $trad['menu'];?>
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        
				<li class="nav-item"><a href="index.php" class="nav-link"><?php echo $trad['inicio'];?></a></li>
	        <li class="nav-item"><a href="menu.php" class="nav-link"><?php echo $trad['cardapio'];?></a></li>
				  <li class="nav-item"><a href="contact.php" class="nav-link"><?php echo $trad['contacto'];?></a></li>
				  <li class="nav-item cta"><a href="reservation.php" class="nav-link"><?php echo constant("reservar");?></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
 
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/alternatives/back.jpg');" data-stellar-background-ratio="0.5">
      
      <div class="overlay"></div>

      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread"><?php echo $trad['contacto'];?></h1>
            <p class="breadcrumbs"><span class="mr-2"><?php echo $trad['contacto_1'];?></p>
           </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 pt-5 px-2 pb-2 p-md-5 ">
						<h2 class="h4 mb-2 mb-md-5 font-weight-bold"><?php echo $trad['contacto_2'];?></h2>
						<form action="#">
              <div class="form-group">
                
              </div>
              <div class="form-group">
                <div class="dbox">
                <p><span><?php echo $trad['morada'];?></span> Rua António Pereira Carrilho 18a 1000-035, 1000-047 Lisboa.</p>
                </div>
              </div>
              <div class="form-group">
                <div class="dbox">
                  <p><span><span class="icon-phone2"></span> <a href="tel://1234567920">+ +351 968 485 955</a></p>
                </div>
              </div>
              <div class="form-group">
              </div>
              <div class="form-group">
              </div>
            </form>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12449.146748248815!2d-9.1356437!3d38.734183!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd74be9c4b139389f!2sRestaurante%20Chong%20Qing%20Pot!5e0!3m2!1sen!2spt!4v1597660589686!5m2!1sen!2spt" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</section>
		
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><?php echo $trad['chongqing'];?></h2>
              <p><?php echo $trad['atrai_cliente'];?></p>
              <strong style="color: white;"><?php echo $trad['morada'];?></strong><p>Rua António Pereira Carrilho 18a 1000-035, 1000-047 Lisboa.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="https://www.tripadvisor.pt/Restaurant_Review-g189158-d13976473-Reviews-Restaurant_China_Chongqing-Lisbon_Lisbon_District_Central_Portugal.html"><span class="icon-tripadvisor"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><?php echo $trad['aberto1'];?></h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span><?php echo $trad['2f'];?></span><span>12:00 - 15:00, 18:00-23:00</span></li>
                <li class="d-flex"><span><?php echo $trad['3f'];?></span><span>12:00 - 15:00, 18:00-23:00</span></li>
                <li class="d-flex"><span><?php echo $trad['4f'];?></span><span><?php echo $trad['encerrado'];?></span></li>
                <li class="d-flex"><span><?php echo $trad['5f'];?></span><span>12:00 - 15:00, 18:00-23:00</span></li>
                <li class="d-flex"><span><?php echo $trad['6f'];?></span><span>12:00 - 15:00, 18:00-23:00</span></li>
                <li class="d-flex"><span><?php echo $trad['7f'];?></span><span>12:00 - 15:00, 18:00-23:00</span></li>
                <li class="d-flex"><span><?php echo $trad['1f'];?></span><span>12:00 - 15:00, 18:00-23:00</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><?php echo $trad['instgram']?></h2>
              <div class="thumb d-sm-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
	            	</a>
	            </div>
	            <div class="thumb d-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
	            	</a>
	            </div>
            </div>
          </div>
        
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p ><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved ChongQing
             <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiw4JZABgjSha9WVRKLp5Q6fPu_uEy97g&callback=initMap"></script>
  <script src="js/google-map.js"></script>
  -->
  <script src="js/main.js"></script>
  
  </body>
</html>
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
		  <div id="idiomas">
                <a href="./?idioma=pt" class="icon flag"><img src="images/pt.svg" alt="" width="20px" height="20px"></a>
                <a href="./?idioma=zh" class="icon flag"><img src="images/cn.svg" alt="" width="20px" height="20px" style="margin-left: 4px;"></a>      
          </div>
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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/alternatives/restaurante.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread"><?php echo constant("reservar");?></h1>
            <p class="breadcrumbs"><span class="mr-2"><?php echo $trad['conheca'] ?></p>
			</div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row d-flex no-gutters">
					<div class="col-md-3  ftco-animate makereservation p-4 p-md-5 pt-5"></div>
          <div class="col-md-6  ftco-animate makereservation p-4 p-md-5 pt-5">
			
			<div class="py-md-5">
	          	<div class="heading-section ftco-animate mb-5 text-center">
					<span class="subheading"><?php echo $trad['reservar1']; ?></span>
				  <h2 class="mb-4"><?php echo constant("reservar");?></h2>
				</div>
				<div id="msg"></div>
				<div><p><?php echo $trad['nota']; ?></p></div>
	            <form id="contact-form" name="contact-form" >
	              <div class="row">
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="inputName"><?php echo $trad['nome']; ?></label>
	                    <input type="text" class="form-control contact-input" id="inputName" name="inputName" placeholder="<?php echo $trad['nome']; ?>">
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="inputEmail"><?php echo $trad['email']; ?></label>
                    	<input type="text" class="form-control contact-input" id="inputEmail" name="inputEmail" placeholder="<?php echo $trad['email']; ?>">
                   	</div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="inputTelefone"><?php echo $trad['telefone']; ?></label>
                		<input type="text" class="form-control contact-input" id="inputTelefone" name="inputTelefone" placeholder="<?php echo $trad['telefone']; ?>">
                       </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="inputData"><?php echo $trad['data'];?></label>
						  <input type="text" class="form-control contact-input" id="inputData" name="inputData" placeholder="<?php echo $trad['data'];?>">
						 </div>
					  </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="inputHora"><?php echo $trad['hora'];?></label>
                    <input type="text" class="form-control" id="book_time" name="book_time" placeholder="<?php echo $trad['hora'];?>">
                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
							<label for="inputPessoa"><?php echo $trad['n_pessoa']; ?></label>
						<div class="select-wrap one-third">
						<div class="icon"><span class="ion-ios-arrow-down"></span></div>
						<select name="inputPessoa" id="inputPessoa" name="inputPessoa" class="form-control">
							<option value=""><?php echo $trad['pessoa']; ?></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4+</option>
                      </select>
	                    </div>
	                  </div>
	                </div>
	                <div class="col-md-12 mt-3">
	                  <div class="form-group">
	                    <input type="submit" id="sub_reserva" value="<?php echo $trad['reservar1']; ?>" class="btn btn-primary py-3 px-5">
	                  </div>
	                </div>
	              </div>
	            </form>
	          </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
			<div class="img" style="background-image: url(images/alternatives/hotpot.jpg);"></div>
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
                <li class="ftco-animate"><a href="https://www.instagram.com/yao.weiwei/"><span class="icon-instagram"></span></a></li>
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
	            	<a href="https://www.instagram.com/yao.weiwei/" class="thumb-menu img" style="background-image: url(images/alternatives/restaurante.jpg);">
	            	</a>
	            	<a href="https://www.instagram.com/yao.weiwei/" class="thumb-menu img" style="background-image: url(images/alternatives/hotpotmenu.jpg);">
	            	</a>
	            	<a href="https://www.instagram.com/yao.weiwei/" class="thumb-menu img" style="background-image: url(images/alternatives/bears.jpg);">
	            	</a>
	            </div>
	            <div class="thumb d-flex">
	            	<a href="https://www.instagram.com/yao.weiwei/" class="thumb-menu img" style="background-image: url(images/alternatives/frigorifico.jpg);">
	            	</a>
	            	<a href="https://www.instagram.com/yao.weiwei/" class="thumb-menu img" style="background-image: url(images/alternatives/hotpotgif.gif);">
	            	</a>
	            	<a href="https://www.instagram.com/yao.weiwei/" class="thumb-menu img" style="background-image: url(images/alternatives/vacacozidacompicante.jpg);">
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
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script src="js/contact.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript">
    $('#sub_reserva').click(function(e){
		e.preventDefault();
		console.log("Chegou aqui");
		var name = $('#inputName').val();
		var email = $('#inputEmail').val();
		var telefone = $('#inputTelefone').val();
		var data = $('#inputData').val();
		var hora = $('#book_time').val();
		var nP = $('#inputPessoa').val();
		console.log("Com:"+name+email+telefone+data+hora+nP);

		$.ajax({
			type: "POST",
            url: "./make_revervation.php",
			data: {inputName: name,inputEmail: email, inputTelefone: telefone, inputData:data, book_time: hora, inputPessoa:nP},
			success:function (data) {
				if (data.toString() == 'success') {
                    $('#msg').php('<div class="alert alert-success"><button data-dismiss="alert" class="close">×</button><strong>Reservado!</strong> Reserva Efectuada.</div>').show(300).delay(5000).hide(300);
                    $(".form-control").val(""); //limpa todos inputs do formulário
					return false;
                }else{
					$('#msg').php('<div class="alert alert-danger"><button data-dismiss="alert" class="close">×</button><strong>Não Reservado!</strong> Verifique se preencheu todos os campos ou contacte o restaurante</div>').show(300).delay(5000).hide(300);
					$(".form-control").val(""); //limpa todos inputs do formulário
					return false;
				}
			}
		});

	});
  </script>
  </body>
</html>
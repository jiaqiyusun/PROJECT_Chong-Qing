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
	        
	        <li class="nav-item"><a href="menu.php" class="nav-link"><?php echo $trad['cardapio'];?></a></li>
				  <li class="nav-item"><a href="contact.php" class="nav-link"><?php echo $trad['contacto'];?></a></li>
				  <li class="nav-item cta"><a href="reservation.php" class="nav-link"><?php echo constant("reservar");?></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/alternatives/resmenu.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread"><?php echo $trad['cardapio'];?></h1>
            <p class="breadcrumbs"><span class="mr-2"><?php echo $trad['sentence_of_menu'] ;?></p>
          </div>
        </div>
      </div>
    </section>


		<section class="ftco-section">
    	<div class="container">
        <div class="ftco-search">
					<div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><?php echo $trad['c1'] ;?></a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"><?php echo $trad['c2'] ;?></a>

				  <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"><?php echo $trad['c3'] ;?></a>
				  
	              <a class="nav-link ftco-animate" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false"><?php echo $trad['c4'] ;?></a>

				  <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false"><?php echo $trad['c5'] ;?></a>

	              <a class="nav-link ftco-animate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false"><?php echo $trad['c6'] ;?></a>

	            </div>
	          </div>
	          <div class="col-md-12 tab-wrap">
	            
	            <div class="tab-content" id="v-pills-tabContent">
					
	              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
					  <div class="row">
						   <div class="col-md-12 col-lg-12">
							   <p><h6><?php echo $trad['adulto'] ;?>: 14.95€</h6></p>
							   <p><h6><?php echo $trad['crianca'] ;?>: 7.95€<?php echo $trad['limCrianca'] ;?></h6></p>
						   </div>
					  </div>
					<div class="row no-gutters d-flex align-items-stretch">
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/sopatipicadechongqing.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_a'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/sopadevaca.jpeg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_b'] ;?></h3>
							                </div>
							              <br>
						              </div>
					              </div>
								</div>
					        		</div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/sopadeossocabrito.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_c'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/sopadefungue.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_d'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/sopadevegetais.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_e'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<hr>
							<h2><?php echo $trad['ingre'] ;?></h4>
						</div>
				   </div>
					<div class="row no-gutters d-flex align-items-stretch">

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/carne.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
												<div class="d-flex flex-column">
													<div class="one-half">
														<h3><?php echo $trad['c1_f'] ;?></h3>
													  </div>
													<div class="p-2"><?php echo $trad['c1_f_vaca'] ;?></div>
													<div class="p-2"><?php echo $trad['c1_f_cabrito'] ;?></div>
													<div class="p-2"><?php echo $trad['c1_f_porco'] ;?></div>
												</div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
									<div class="menu-img img " style="background-image: url(images/alternatives/dobrado.jpg);"></div>
									<div class="text d-flex align-items-center">
														<div>
											<div class="d-flex">
												<div class="one-half">
												<h3><?php echo $trad['c1_g'] ;?></h3>
												</div>
											</div>
											<br>
										</div>
									</div>
									</div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/sanguedepato.jpg);"></div>
								  <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_h'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/persunto.jpeg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_i'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/carnelatas.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_j'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/peledeporco.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_k'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/peixetirturado.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_l'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/cilantroalmondegas.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3> <?php echo $trad['c1_m'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/camaraopequeno.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_n'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>

								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/varadecaranguejo.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>    <?php echo $trad['c1_o'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>

								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/tofu.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_p'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>

								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/pasteisdearroz.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_q'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>

								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/massabatatadoce.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_r'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/salada.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_s'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>

								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/pepino.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_t'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>


								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/brassicachines.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_u'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>

								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/repolho.jpeg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_v'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>

								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/cogumeloshimeji.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3> <?php echo $trad['c1_x'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>

								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/cogumeloenokitake.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_z'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>

								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/cogumelodeshilitake.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_z_1'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>

								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/cogumelos.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_z_2'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>

								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/orelhadejudas.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_z_3'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>

								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/brotosdebambu.png);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_z_4'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>

								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/massachinesa.jpeg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['c1_z_5'] ;?></h3>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-lg-12">
							<hr>
							<h2><?php echo $trad['c1_frutas_sazonais'].$trad['Ofertas'] ;?></h4>
						</div>
					</div>
					<div class="row no-gutters d-flex align-items-stretch">
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
						  <div class="menu-img img " style="background-image: url(images/alternatives/frutassazonais.jpg);"></div>
						  <div class="text d-flex align-items-center">
											<div>
								  <div class="d-flex">
									<div class="one-half">
									  <h3><?php echo $trad['c1_frutas_sazonais'] ;?></h3>
									</div>
								  </div>
								  <br>
							  </div>
						  </div>
						</div>
						</div>

						

						<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							<div class="menus d-sm-flex ftco-animate align-items-stretch">
						  <div class="menu-img img " style="background-image: url(images/alternatives/dimsum.jpg);"></div>
						  <div class="text d-flex align-items-center">
											<div>
								  <div class="d-flex">
									<div class="one-half">
									  <h3><?php echo $trad['c1_g'] ;?></h3>
									</div>
								  </div>
								  <br>
							  </div>
						  </div>
						</div>
						</div>
					</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
						
							<div class="col-md-12 col-lg-12">
								<hr>

								<h2><?php echo $trad['pf_0'] ;?></h4>
							</div>
					   
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/frangocoaidocom\ molhopicantechongqingstyle.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['pf_1'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">4.95€</span>
							                </div>
							              </div>
							              
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/carnenovilhocommolhopicante.jpeg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['pf_2'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">4.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/doubradocommolhopicante.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['pf_3'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">4.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/saladacomorelhadeporco.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['pf_4'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">4.95</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/saladadesoja.jpeg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['pf_5'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">3.75€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/salsadadepepino.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['pf_6'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">3.75€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/saladadealgas.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['pf_7'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">3.75€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>

								<div class="col-md-12 col-lg-12">
									<hr>

									<h2><?php echo $trad['msa_0'] ;?></h4>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/massachongqing.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['msa_1'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">4.50€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/massadebatatadice.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['msa_2'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">4.50€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/massacomcarnedenovilho.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['msa_3'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">5.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/massaensopadacomcrnedeporco.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['msa_4'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">5.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/raciolafrito.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['msa_5'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">5€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/raciolacozido.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['msa_6'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">5€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
								</div>
								
								</div>
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/massafinacommolhopicante.jpeg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['msa_7'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">4.50€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/gelatinacommolhopiacnte.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['msa_8'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">4.50€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/pasteisdearroasalteado.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['msa_9'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">6.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/raviolidecamarao.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['msa_10'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">2.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/arrozchaochaozhou.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">

							                  <h3><?php echo $trad['msa_11'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">5.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
										<div class="menus d-sm-flex ftco-animate align-items-stretch">
									<div class="menu-img img" style="background-image: url(images/alternatives/arrozchaochaocomcamarao.jpg);"></div>
									<div class="text d-flex align-items-center">
														<div>
											<div class="d-flex">
												<div class="one-half">

												<h3><?php echo $trad['msa_12'] ;?></h3>
												</div>
												<div class="one-forth">
												<span class="price">6.95€</span>
												</div>
											</div>
											<br>
										</div>
									</div>
									</div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
									<div class="menus d-sm-flex ftco-animate align-items-stretch">
								<div class="menu-img img" style="background-image: url(images/alternatives/massadearrozcomlegumessalteados.jpg);"></div>
								<div class="text d-flex align-items-center">
													<div>
										<div class="d-flex">
											<div class="one-half">

											<h3><?php echo $trad['msa_13'] ;?></h3>
											</div>
											<div class="one-forth">
											<span class="price">5.95€</span>
											</div>
										</div>
										<br>
									</div>
								</div>
								</div>
								</div>

							<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
								<div class="menus d-sm-flex ftco-animate align-items-stretch">
							<div class="menu-img img" style="background-image: url(images/alternatives/arroz.jpeg);"></div>
							<div class="text d-flex align-items-center">
												<div>
									<div class="d-flex">
										<div class="one-half">

										<h3><?php echo $trad['msa_14'] ;?></h3>
										</div>
										<div class="one-forth">
										<span class="price">1.00€</span>
										</div>
									</div>
									<br>
								</div>
							</div>
							</div>
							</div>
					        </div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/entremeadapicante.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_1'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">5.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/frangosalteadocompiripiri.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_2'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">8.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/camaraokongbao.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_3'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">9.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/entrecostocommolhoagridoce.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_4'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">6.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/feijaosalteado.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_5'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">5.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/carnedeporcocom\ sabordepeixe.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_6'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">6.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/tofucommolhopiacnte.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_7'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">6.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/frangocominhame.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_8'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">8.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/tofudacasa.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_9'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">6.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/carnedeporcocomlegumessichuan.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_10'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">6.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/carnenocilhocomcaldopicante.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_11'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">9.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/intestinosdeporco.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_12'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">7.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/entrecostocompiripiri.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_13'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">7.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/couvecompiripiriealho.png);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_14'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">6.50€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/legumessalteados.jpeg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_15'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">6.50€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/pratotipicochongqiong.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_16'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">17.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/filetecomcaldopiripiri.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_14'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">14.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/filetecomcaldodepikles.jpeg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_18'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">14.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/filetefritocommolhoagridoce.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_19'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">14.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/peixeagridoe.jpeg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_20'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">19.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/peixecomfeijaopreto.jpeg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_21'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">19.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/camaraocommolhosichuanpicante.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_22'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">24.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/camaraocommanteigaealho.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_23'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">24.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/legumesavapor.jpeg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3><?php echo $trad['pts_24'] ;?></h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">19.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        </div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/massadearrozsalteado.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Massa de Arroz Salteado</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">5.95€</span>
							                </div>
							              </div>
							              <p style="font-size: small;"><span>Frango</span>/<span>Porco</span>/<span>Novilho</span>/<span>Camarão</span>/<span>Mix</span></p>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/chaomingsalteado.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Chao Ming Salteado</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">5.95€</span>
							                </div>
							              </div>
							              <p style="font-size: small;"><span>Frango</span>/<span>Porco</span>/<span>Novilho</span>/<span>Camarão</span>/<span>Mix</span></p>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/frangosalteadpcpmamendoaselegumes.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Frango Salteado com Amêndoas e Legumes</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">5.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/chopsoy.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Chopsoy</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">5.95€</span>
							                </div>
							              </div>
							              <p style="font-size: small;"><span>Frango</span>/<span>Porco</span>/<span>Novilho</span>/<span>Camarão</span>/<span>Mix</span></p>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/carnedenovilhocommolhodeostras.JPG);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Carne de Novilho com Molho de Ostras</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">6.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/porcocommolhoagridoce.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Porco com Molho Agridoce</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">5.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/frangocommolhodecaril.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Frango com Molho de Caril</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">5.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/patoapequim.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Pato à Pequim</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">8.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/cogumeloschineseebambu.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Cogumelos Chineses e Bambu</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">6.95€</span>
							                </div>
							              </div>
										  <br>
							              <p style="font-size: small;"><span>Frango</span>/<span>Porco</span>/<span>Novilho</span>/<span>Camarão</span>/<span>Mix</span></p>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/laranjapato.jpeg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Pato Frito com Laranja</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">8.50€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/gambaclegumesealho.png);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Gambas c/legumes e alho na chapa quente</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">8.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/familiafeliz.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Familia Feliz na Chapa Quente</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">7.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
								</div>
								
								<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/tofunacaçarola.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Tofu na Caçarola</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">7.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        </div>
	              </div>

				  <!-- Sobremesas -->
	              <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-day-6-tab">
	              	<div class="row no-gutters d-flex align-items-stretch">
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/bananafrita.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Banana ou Maçã Frita</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">1.95€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(images/alternatives/bananafasi.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
												<h3>Banana ou Maçã Fasi</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">2.25€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/geladofrito.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Gelado Frito</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">2.50€</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img " style="background-image: url(images/alternatives/geladoflanbe.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Gelado Flambé</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">2.95$</span>
							                </div>
							              </div>
							              <br>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
									<div class="menus d-sm-flex ftco-animate align-items-stretch">
										<div class="menu-img img" style="background-image: url(images/alternatives/lichiaataça.jpg);"></div>
										<div class="text d-flex align-items-center">
														<div>
											<div class="d-flex">
												<div class="one-half">
													<h3>Lichias à Taça</h3>
												</div>
												<div class="one-forth">
													<span class="price">1.75$</span>
												</div>
											</div>
												<br>
											</div>
										</div>
									</div>
					        	</div>
					        	
					        </div>
				  </div>
				 <!--End Sopas -->


				 <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-day-7-tab">
					<div class="row no-gutters d-flex align-items-stretch">
							  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
								  <div class="menus d-sm-flex ftco-animate align-items-stretch">
								<div class="menu-img img" style="background-image: url(images/alternatives/sopapicante.jpg);"></div>
								<div class="text d-flex align-items-center">
												  <div>
										<div class="d-flex">
										  <div class="one-half">
											<h3>Sopa Picante</h3>
										  </div>
										  <div class="one-forth">
											<span class="price">PQ 2.00€/GD 6.00€</span>
										  </div>
										</div>
										<br>
									</div>
								</div>
							  </div>
							  </div>
							  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
								  <div class="menus d-sm-flex ftco-animate align-items-stretch">
								<div class="menu-img img" style="background-image: url(images/alternatives/sopademilho.jpg);"></div>
								<div class="text d-flex align-items-center">
												  <div>
										<div class="d-flex">
										  <div class="one-half">
											  <h3>Sopa de Milho</h3>
										  </div>
										  <div class="one-forth">
											<span class="price">PQ 2.00€/GD 6.00€</span>
										  </div>
										</div>
										<br>
									</div>
								</div>
							  </div>
							  </div>

							  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
								  <div class="menus d-sm-flex ftco-animate align-items-stretch">
								<div class="menu-img img " style="background-image: url(images/alternatives/sopadeovoetomate.jpg);"></div>
								<div class="text d-flex align-items-center">
												  <div>
										<div class="d-flex">
										  <div class="one-half">
											<h3>Sopa de Ovo e Tomate</h3>
										  </div>
										  <div class="one-forth">
											<span class="price">PQ 2.00€/GD 6.00€</span>
										  </div>
										</div>
										<br>
									</div>
								</div>
							  </div>
							  </div>
							  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
								  <div class="menus d-sm-flex ftco-animate align-items-stretch">
								<div class="menu-img img " style="background-image: url(images/alternatives/sopademarisco.jpg);"></div>
								<div class="text d-flex align-items-center">
												  <div>
										<div class="d-flex">
										  <div class="one-half">
											<h3>Sopa de Mariscos</h3>
										  </div>
										  <div class="one-forth">
											<span class="price">PQ 2.00€/GD 6.00€</span>
										  </div>
										</div>
										<br>
									</div>
								</div>
							  </div>
							  </div>
							  
						  </div>
				</div>
			   <!--End Sopas -->

	            </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>
		
	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
		  <div class="row mb-5">
			<div class="col-md-6 col-lg-4">
			  <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">ChongQing</h2>
				<p>Venha experimentar esta iguaria, estamos a sua espera.</p>
				<strong style="color: white;">Morada: </strong><p>Rua António Pereira Carrilho 18a 1000-035, 1000-047 Lisboa.</p>
				<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
				  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
				</ul>
			  </div>
			</div>
			<div class="col-md-6 col-lg-5">
			  <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">Aberto:</h2>
				<ul class="list-unstyled open-hours">
				  <li class="d-flex"><span>Segunda-feira</span><span>12:00 - 15:00, 18:00-23:00</span></li>
				  <li class="d-flex"><span>Terça-feira</span><span>12:00 - 15:00, 18:00-23:00</span></li>
				  <li class="d-flex"><span>Quarta-feita</span><span>Encerrado</span></li>
				  <li class="d-flex"><span>Quinta-feira</span><span>12:00 - 15:00, 18:00-23:00</span></li>
				  <li class="d-flex"><span>Sexta-feira</span><span>12:00 - 15:00, 18:00-23:00</span></li>
				  <li class="d-flex"><span>Sábado</span><span>12:00 - 15:00, 18:00-23:00</span></li>
				  <li class="d-flex"><span>Domingo</span><span>12:00 - 15:00, 18:00-23:00</span></li>
				</ul>
			  </div>
			</div>
			<div class="col-md-6 col-lg-3">
			   <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">Instagram</h2>
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
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
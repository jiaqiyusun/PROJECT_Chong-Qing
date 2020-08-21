<?php 
session_start();
require('./translate.php');
include $_SESSION['idioma'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Chong Qing j</title>
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
						    <p class="mb-0 register-link"><span>Aberto:</span> <span>Todos Dias(excepto Quarta-feira)</span> <span>12:00 - 15:00, 18:00-23:00</span></p>
              </div>
              <div class="col-md-2 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                <a href="#" class="icon flag"><img src="images/pt.svg" alt="" width="20px" height="20px"></a>

                <a href="#" class="icon flag"><img src="images/cn.svg" alt="" width="20px" height="20px" style="margin-left: 4px;"></a>      
              </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Chong Qing </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> <?php echo $trad['menu'];?>
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        
	        	<li class="nav-item"><a href="menu.html" class="nav-link"><?php echo $trad['cardapio'];?></a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link"><?php echo $trad['contacto'];?></a></li>
	          <li class="nav-item cta"><a href="reservation.html" class="nav-link"><?php echo $trad['reservar'];?></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image: url(images/alternatives/restaurante.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading"><?php echo $trad['titulo'];?> </span>
              <h1 class="mb-4"><?php echo $trad['img1'];?></h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/alternatives/hotpotmenu.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading"><?php echo $trad['titulo'];?></span>
              <h1 class="mb-4"><?php echo $trad['img2'];?></h1>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/alternatives/bears.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate" style="margin-top: -150px;">
            	<span class="subheading"><?php echo $trad['titulo'];?></span>
              <h1 class="mb-4"><?php echo $trad['img3'];?></h1>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/alternatives/frigorifico.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading"><?php echo $trad['titulo'];?></span>
              <h1 class="mb-4"><?php echo $trad['img4'];?></h1>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="featured">
    					<div class="row">
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(images/alternatives/hotpotgif.gif);"></div>
			              <div class="text text-center">
		                  <h3><?php echo $trad['fondue_hot_pot'][0];?></h3>
				              <p><span><?php echo $trad['fondue_hot_pot'][1][0]; ?></span>, <span><?php echo $trad['fondue_hot_pot'][1][1]; ?></span></p>
			              </div>
			            </div>
    						</div>
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(images/alternatives/galinhapicantegif.gif);"></div>
			              <div class="text text-center">
		                  <h3><?php echo $trad['galinha_com_picante'][0];?></h3>
				              <p><span><?php echo $trad['galinha_com_picante'][1][0]; ?></span>, <span><?php echo $trad['galinha_com_picante'][1][1]; ?></span>, <span><?php echo $trad['galinha_com_picante'][1][2]; ?></span></p>
			              </div>
			            </div>
    						</div>
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(images/alternatives/mapotofugif.gif);"></div>
			              <div class="text text-center">
		                  <h3><?php echo $trad['mapo_tofu'][0];?></h3>
				              <p><span><?php echo $trad['mapo_tofu'][1][0]; ?></span>, <span><?php echo $trad['mapo_tofu'][1][1]; ?></span>, <span><?php echo $trad['mapo_tofu'][1][2]; ?></span></p>
			              </div>
			            </div>
    						</div>
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(images/alternatives/raviolidecamaraogif.gif);"></div>
			              <div class="text text-center">
                    <h3><?php echo $trad['ravioli_de_camarao'][0];?></h3>
				              <p><span><?php echo $trad['ravioli_de_camarao'][1][0]; ?></span>, <span><?php echo $trad['ravioli_de_camarao'][1][1]; ?></span>, <span><?php echo $trad['ravioli_de_camarao'][1][2]; ?></span></p>
			              </div>
			            </div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
	

		<section class="ftco-section ftco-wrap-about">
			<div class="container">
				<div class="row">
					<div class="col-md-7 d-flex">
						<div class="img img-1 mr-md-2" style="background-image: url(images/alternatives/hotpot.jpg);"></div>
						<div class="img img-2 ml-md-2" style="background-image: url(images/alternatives/chefe.jpg);"></div>
					</div>
					<div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading"><?php echo $trad['sobre'];?></span>
	            <h2 class="mb-4"><?php echo $trad['restaurante'];?></h2>
	          </div>
            <?php echo $trad['sobre_descricao'];?>
					</div>
				</div>
			</div>
		</section>

		
		<section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
    	<div class="container">
    		<div class="row d-md-flex">
    			<div class="col-md-12">
    				<div class="row d-md-flex align-items-center">
              <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong style=font-size:22.5px><a href="#"><?php echo $trad['unico'] ;?> </a></strong>
		                <span><?php echo $trd['hot_pot_tradicional_em_portugal']?></span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="10">0</strong>
		                <span><?php echo $trd['ano_expriencia']?></span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="73">0</strong>
		                <span><?php echo $trd['menus']?></span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="15000">0</strong>
		                <span><?php echo $trd['clientes_satisfeitos']?></span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
          
        </div>
    	</div>
    </section>


    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading"><?php echo $trd['especiais']?></span>
            <h2 class="mb-4"><?php echo $trd['nosso_menu']?></h2>
          </div>
        </div>
        <div class="row no-gutters d-flex align-items-stretch">
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(images/alternatives/hotpotmenu.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3><?php echo $trd['hot_pot_buffet']?></h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">Adulto: 14.95€<br>Criança: 7.95€</span>
		                </div>
		              </div>
		              <p><a href="menu.html" class="btn btn-primary">Ver Menu</a></p>
	              </div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(images/alternatives/lagostino.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Lagostins Picantes</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">xxxxx€</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="menu.html" class="btn btn-primary">Ver Menu</a></p>
	              </div>
              </div>
            </div>
        	</div>

        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img " style="background-image: url(images/alternatives/vacacozidacompicante.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Vaca Cozida com Picante</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">9.95€</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="menu.html" class="btn btn-primary">Ver Menu</a></p>
	              </div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img " style="background-image: url(images/alternatives/carnedeporcocom\ sabordepeixe.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Carne de Porco com Sabor de Peixe</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">6.95€</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="menu.html" class="btn btn-primary">Ver Menu</a></p>
	              </div>
              </div>
            </div>
        	</div>

        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(images/alternatives/massachongqing.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Massa ChongQing</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">4.50€</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="menu.html" class="btn btn-primary">Ver Menu</a></p>
	              </div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(images/alternatives/raviolidecamarao.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Ravioli Frito</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">5.00€</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="menu.html" class="btn btn-primary">Ver Menu</a></p>
	              </div>
              </div>
            </div>
        	</div>
        </div>
    	</div>
    </section>
    

		<section class="ftco-section img" style="background-image : url(images/alternatives/back.jpg)" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row d-flex">
          <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
          	<div class="heading-section ftco-animate mb-5 text-center">
	          	<span class="subheading">Reservar</span>
	            <h2 class="mb-4">Reservar uma mesa</h2>
	          </div>
            <form action="#">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" placeholder="Nome">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Telefone</label>
                    <input type="text" class="form-control" placeholder="Telefone">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Data</label>
                    <input type="text" class="form-control" id="book_date" placeholder="Data">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Hora</label>
                    <input type="text" class="form-control" id="book_time" placeholder="Hora">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Nº de Pessoa</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Pessoas</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group text-center">
                    <input type="submit" value="Reservar" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
			</div>
    </section>

		
		<section class="ftco-section testimony-section img">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Testemunho</span>
            <h2 class="mb-4">Cliente Feliz</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/alternatives/consumer1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Uma forma diferente de degustar a gastronomia chinesa, atendimento e cuidado com os clientes, muito bom recomendo 👍 restaurante a voltar em breve com certeza</p>
                    <p class="name">Saúl Ribeiro</p>
                    <span class="position">Cliente</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/alternatives/consumer2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Restaurante asiático com a típica lista interminável de pratos para escolher, e apetece escolher todos!Óptima relação qualidade preço!</p>
                    <p class="name">Mariana Damião De Lemos</p>
                    <span class="position">Cliente</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/alternatives/consumer3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Um restaurante chinês mais “caseiro” e cheio de orientais. A comida apesar de não ser transcendente, em conjunto com a simpatia do atendimento faz valer as 4 estrelas.</p>
                    <p class="name">João Pereira</p>
                    <span class="position">Cliente</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/alternatives/consumer4.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Exceeded my expectations pleasantly judging by its poor publicity on the net. Don't think twice and don't hesitate to go! Tip: watch out for the spicy 😂.</p>
                    <p class="name">Pablo D.</p>
                    <span class="position">Cliente</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/alternatives/consumer5.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Excellent service, beautiful interior. In the presence there are many interesting dishes.</p>
                    <p class="name">Oliver Hunt</p>
                    <span class="position">Cliente</span>
                  </div>
                </div>
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

<!DOCTYPE HTML>
<html>
<head>
<title>La Inmobiliaria CO</title>
<link href="<?php echo RUTA; ?>disenio/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="<?php echo RUTA; ?>disenio/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?php echo RUTA; ?>disenio/js/jquery.min.js"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="<?php echo RUTA; ?>disenio/css/fwslider.css" media="all">
<script src="<?php echo RUTA; ?>disenio/js/jquery-ui.min.js"></script>
<script src="<?php echo RUTA; ?>disenio/js/fwslider.js"></script>
<!--end slider -->
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
</head>
<body>
	<style>
		body{
			overflow-x: hidden;
		}
	</style>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="<?php echo RUTA; ?>disenio/index.html"><img src="<?php echo RUTA; ?>disenio/images/Logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="<?php echo RUTA; ?>disenio/images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="<?php echo RUTA; ?>SI/catalogo/catalogo">Inmuebles</a></li>
								<li><a href="<?php echo RUTA; ?>SI/login/login">Iniciar Sesion</a></li>			
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="<?php echo RUTA; ?>disenio/js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  <!-- start search-->
				     
						<!----search-scripts---->
						<script src="<?php echo RUTA; ?>disenio/js/classie.js"></script>
						<script src="<?php echo RUTA; ?>disenio/js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
				    <ul class="icon1 sub-icon1 profile_img">
						<ul class="sub-icon1 list">
						  <div class="product_control_buttons">
						  	<a href="#"><img src="<?php echo RUTA; ?>disenio/images/edit.png" alt=""/></a>
						  		<a href="#"><img src="<?php echo RUTA; ?>disenio/images/close_edit.png" alt=""/></a>
						  </div>
						   <div class="clear"></div>
						  <li class="list_img"><img src="<?php echo RUTA; ?>disenio/images/1.jpg" alt=""/></li>
						  <li class="list_desc"><h4><a href="#">velit esse molestie</a></h4><span class="actual">1 x
                          $12.00</span></li>
						  <div class="login_buttons">
							 <div class="check_button"><a href="<?php echo RUTA; ?>disenio/checkout.html">Check out</a></div>
							 <div class="login_button"><a href="<?php echo RUTA; ?>disenio/login.html">Login</a></div>
							 <div class="clear"></div>
						  </div>
						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		           <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	</div>
	<div class="banner">
	<!-- start slider -->
       <div id="fwslider">
         <div class="slider_container">
            <div class="slide" name="Caja_Inicio"> 
                <!-- Slide image -->
               <img src="<?php echo RUTA; ?>disenio/images/IMG/alberto-castillo-q-mx4mSkK9zeo-unsplash.jpg" class="img-responsive" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h3 class="title">La casa de tus sueños<br></h1>
                        <!-- /Text title -->
                        <div class="button"><a href="#">Buscar</a></div>
                    </div>
                </div>
               <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
               <img src="<?php echo RUTA; ?>disenio/images/IMG/jimmy-dean-_GoBSreu1a4-unsplash.jpg" class="img-responsive" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h3 class="title">Inmuebles en arriendo y venta<br></h1>
                       	<div class="button"><a href="#">Buscar</a></div>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
       </div>
       <!--/slider -->
      </div>
	  <div class="main">
		<div class="content-top">
			<h2>Inmuebles</h2>
			<p>Compra vende o arrienda tus Inmuebles</p>
			<div class="close_but"><img src="<?php echo RUTA; ?>disenio/images/casita.png"> </div>
				<ul id="flexiselDemo3">
				<li><img src="<?php echo RUTA; ?>disenio/images/2.jpg" /></li>
				<li><img src="<?php echo RUTA; ?>disenio/images/3.jpg" /></li>
				<li><img src="<?php echo RUTA; ?>disenio/images/4.jpg" /></li>
				<li><img src="<?php echo RUTA; ?>disenio/images/5.jpg" /></li>
				<li><img src="<?php echo RUTA; ?>disenio/images/6.jpg" /></li>
				<li><img src="<?php echo RUTA; ?>disenio/images/7.jpg" /></li>
			</ul>
		<h3></h3>
			<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
		</script>
		<script type="text/javascript" src="<?php echo RUTA; ?>disenio/js/jquery.flexisel.js"></script>
		</div>
	</div>
	
	<div class="features">
		<div class="container">
			
			<div class="close_but"><img src="<?php echo RUTA; ?>disenio/images/casita.png"></div>
			  <div class="row">
				<div class="col-md-3 top_box">
				  <div class="view view-ninth"><a href="<?php echo RUTA; ?>disenio/single.html">
                    <img src="<?php echo RUTA; ?>disenio/images/pic1.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Tu Inmuebles</h2>
                        <p>Busca tu hogar ya amueblado</p>
                      </div>
                   </a> </div>
                  </div>
                  <h4 class="m_4"><a href="#">Productos</a></h4>
                  <p class="m_5">Los Mejores Inmuebles</p>
                </div>
                <div class="col-md-3 top_box">
					<div class="view view-ninth"><a href="<?php echo RUTA; ?>disenio/single.html">
                    <img src="<?php echo RUTA; ?>disenio/images/pic2.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Tu Hogar</h2>
                        <p>No hay lugar como el hogar.</p>
                      </div>
                    </a> </div>
                   <h4 class="m_4"><a href="#">Tu casa ideal</a></h4>
                   <p class="m_5">La que mas se ajuste a ti</p>
				</div>
				<div class="col-md-3 top_box">
					<div class="view view-ninth"><a href="<?php echo RUTA; ?>disenio/single.html">
                    <img src="<?php echo RUTA; ?>disenio/images/pic3.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Tu Cosina</h2>
                        <p>Elige tu cosina ideal</p>
                      </div>
                    </a> </div>
                   <h4 class="m_4"><a href="#">Buscas algo diferente?</a></h4>
                   <p class="m_5">La cosina de tus sueños?</p>
				</div>
				<div class="col-md-3 top_box1">
					<div class="view view-ninth"><a href="<?php echo RUTA; ?>disenio/single.html">
                    <img src="<?php echo RUTA; ?>disenio/<?php echo RUTA; ?>disenio/images/pic4.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Tu Estilo</h2>
                        <p>Escoge la que desees.</p>
                      </div>
                     </a> </div>
                   <h4 class="m_4"><a href="#">Buscas casa en arriendo?</a></h4>
                   <p class="m_5">La que mas se ajuste a ti</p>
				</div>
			</div>
		 </div>
	    </div>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Inmuebles</h4>
							<li><a href="#">Casa</a></li>
							<li><a href="#">Apartamento</a></li>
							<li><a href="#">Oficina</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Nuestro equipo</h4>
							<li><a href="#">Carlos el Desarrollador</a></li>
							<li><a href="#">Cristian el Diseñador</a></li>
							<li><a href="#">Un tal Kevin</a></li>
						</ul>
					</div>
					
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Registrate</h4>
							<div class="footer_search">
				    		   <form>
				    			<input type="text" value="Ingresa tu Correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Ingresa tu Correo';}">
				    			<input type="submit" value="Ir">
				    		   </form>
					        </div>
							<ul class="social">	
							  <li class="facebook"><a href="#"><span> </span></a></li>
							  <li class="twitter"><a href="#"><span> </span></a></li>
							  <li class="instagram"><a href="#"><span> </span></a></li>	
							  <li class="pinterest"><a href="#"><span> </span></a></li>	
							  <li class="youtube"><a href="#"><span> </span></a></li>										  				
						    </ul>
		   					
						</ul>
					</div>
				</div>
				<div class="row footer_bottom">
				    <div class="copy">
			           <p>© 2021 Politecnico Grancolombiano <a href="https://www.poli.edu.co/content/estudiantes" target="_blank">Politecnico</a></p>
		            </div>
					  <dl id="sample" class="dropdown">
					        <dd>
				            <ul>
				                <li><a href="#">Australia<img class="flag" src="<?php echo RUTA; ?>disenio/images/as.png" alt="" /><span class="value">AS</span></a></li>
				                <li><a href="#">Sri Lanka<img class="flag" src="<?php echo RUTA; ?>disenio/images/srl.png" alt="" /><span class="value">SL</span></a></li>
				                <li><a href="#">Newziland<img class="flag" src="<?php echo RUTA; ?>disenio/images/nz.png" alt="" /><span class="value">NZ</span></a></li>
				                <li><a href="#">Pakistan<img class="flag" src="<?php echo RUTA; ?>disenio/images/pk.png" alt="" /><span class="value">Pk</span></a></li>
				                <li><a href="#">United Kingdom<img class="flag" src="<?php echo RUTA; ?>disenio/images/uk.png" alt="" /><span class="value">UK</span></a></li>
				                <li><a href="#">United States<img class="flag" src="<?php echo RUTA; ?>disenio/images/us.png" alt="" /><span class="value">US</span></a></li>
				            </ul>
				         </dd>
	   				  </dl>
   				</div>
			</div>
		</div>
</body>	

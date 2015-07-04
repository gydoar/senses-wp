<?php
   if(isset($_POST['submitted'])) {
    if(trim($_POST['contactName']) === '') {
        $nameError = 'Por favor ingrese su nombre.';
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }

    $email = echo of_get_option('email');

     if(trim($_POST['telefono']) === '') {
        $telError = 'Por favor ingrese su teléfono.';
        $hasError = true;
    } else {
        $telefono = trim($_POST['telefono']);
    }

    if(trim($_POST['comments']) === '') {
        $commentError = 'Por favor ingresa un mensaje.';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['comments']));
        } else {
            $comments = trim($_POST['comments']);
        }
    }

    if(!isset($hasError)) {
        $emailTo = get_option('tz_email');
        if (!isset($emailTo) || ($emailTo == '') ){
            $emailTo =  echo of_get_option('email');
        }
        $subject = '[Contacto Senses] From '.$name;
        $body = "Nombre: $name \n\nTeléfono: $telefono \n\nMensaje: $comments";
        $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }

} ?>

<?php get_header(); ?>

<header>
	<div class="container">
		<div class="four columns logo">
			<a href="#"><img class="twelve columns" width="332" src="<?php bloginfo('template_url' ); ?>/library/img/logo.png" alt=""></a>
		</div>
		<nav class="six columns offset-by-two nav" id="menu-header">
			<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
		</nav>
	</div>
</header>

<!-- Seccion banner 1 -->
<!--
<div class="banner-1">
	<div class="container cont__bnn1">
		<h3>DISEÑO, <span>CALIDAD Y</span> SERVICIO <br>
		<img src="<?php bloginfo('template_url' ); ?>/library/img/sent-decoracion.png" alt="">
		</h3>
		<a href="#enrollable"><img class="animated infinite bounce"  width="50" src="<?php bloginfo('template_url' ); ?>/library/img/icon-scroll.png" alt=""></a>
	</div>
</div>
-->

<div id="owl-demo" class="owl-carousel owl-theme">
 
	 <div class="item"><img src="<?php bloginfo('template_url' ); ?>/library/img/bg-1.jpg">
		<div class="container cont__bnn1">
			<h3>DISEÑO, <span>CALIDAD Y</span> SERVICIO <br>
			<img src="<?php bloginfo('template_url' ); ?>/library/img/sent-decoracion.png" alt="">
			</h3><br>
			<a id="btn-scroll" href="#enrollable"><img width="60" src="<?php bloginfo('template_url' ); ?>/library/img/icon-scroll.png" alt=""></a>
		</div>
	 </div>
	 
	 <div class="item"><img src="<?php bloginfo('template_url' ); ?>/library/img/bg-1-1.jpg">
		<div class="container cont__bnn1">
			<h3 style="color:#fff;">LÍDERES EN AUTOMATIZACIÓN, MONITORIZACIÓN Y DOMÓTICA<br>
			<img src="<?php bloginfo('template_url' ); ?>/library/img/sent-decoracion.png" alt="">
			</h3>
			<a id="btn-scroll" href="#enrollable"><img width="60" src="<?php bloginfo('template_url' ); ?>/library/img/icon-scroll.png" alt=""></a>
		</div>
	 </div>

	  <div class="item"><img src="<?php bloginfo('template_url' ); ?>/library/img/bg-1-2.jpg">
		<div class="container cont__bnn1">
			<h3>VISITE NUESTRA MODERNA SALA DE EXHIBICIÓN<br>
			<img src="<?php bloginfo('template_url' ); ?>/library/img/sent-decoracion.png" alt="">
			</h3>
			<a id="btn-scroll" href="#enrollable"><img width="60" src="<?php bloginfo('template_url' ); ?>/library/img/icon-scroll.png" alt=""></a>
		</div>
	 </div>

</div>

<!-- Seccion tab 2 -->

<div class="tab">
	<div class="container">

		<div id="carousel">
					<div class="slide">
						<div class="text">
							<h2>NOSOTROS</h2>
							<p><?php echo of_get_option('nosotros'); ?></p>
						</div>
					</div>
					
					<div class="slide">
						<div class="text">
							<h2>MISIÓN</h2>
							<p><?php echo of_get_option('mision'); ?></p>
						</div>
					</div>
					
					<div class="slide">
						<div class="text">
							<h2>VISIÓN</h2>
							<p><?php echo of_get_option('vision'); ?></p>
						</div>
					</div>		
				</div>
				<a href="#" id="ui-carousel-next"><span>next</span></a>
				<a href="#" id="ui-carousel-prev"><span>prev</span></a>
				<div id="pages"></div>
	</div>
</div>

<!-- Seccion 2 -->
<div class="banner-2" id="enrollable">
	<div class="container">
		<div class="five columns">
			<h3 class="four columns">ENROLLABLE</h3><br><br><br>
			<?php echo of_get_option('enrro_des'); ?>
		</div>
	</div>
	
</div>

<!-- seccion enrollable -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;ENROLABLE</h3>

	<p>
		<a class="fancybox" href="<?php echo of_get_option('enrro_1'); ?>" data-fancybox-group="gallery1"><img width="300" src="<?php echo of_get_option('enrro_1'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('enrro_2'); ?>" data-fancybox-group="gallery1"><img width="300" src="<?php echo of_get_option('enrro_2'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('enrro_3'); ?>" data-fancybox-group="gallery1"><img width="300" src="<?php echo of_get_option('enrro_3'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('enrro_4'); ?>" data-fancybox-group="gallery1"><img width="300" src="<?php echo of_get_option('enrro_4'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('enrro_5'); ?>" data-fancybox-group="gallery1"><img width="300" src="<?php echo of_get_option('enrro_5'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('enrro_6'); ?>" data-fancybox-group="gallery1"><img width="300" src="<?php echo of_get_option('enrro_6'); ?>" alt="" /></a>

	</p>
	
	<a class="btn__vermas" target="new" href="<?php echo of_get_option('enrro_link'); ?>">Ver más</a>
</div>



<!-- Seccion 3 -->
<div class="banner-3" id="en-madera">
	<div class="container">
		<div class="five columns">
			<h3 class="">PERSIANA EN MADERA</h3><br>
			<?php echo of_get_option('made_des'); ?>
		</div>
	</div>
	
</div>

<!-- seccion Persiana en madera -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;PERSIANA EN MADERA</h3>

	<p>
		<a class="fancybox" href="<?php echo of_get_option('made_1'); ?>" data-fancybox-group="gallery2"><img width="300" src="<?php echo of_get_option('made_1'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('made_2'); ?>" data-fancybox-group="gallery2"><img width="300" src="<?php echo of_get_option('made_2'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('made_3'); ?>" data-fancybox-group="gallery2"><img width="300" src="<?php echo of_get_option('made_3'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('made_4'); ?>" data-fancybox-group="gallery2"><img width="300" src="<?php echo of_get_option('made_4'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('made_5'); ?>" data-fancybox-group="gallery2"><img width="300" src="<?php echo of_get_option('made_5'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('made_6'); ?>" data-fancybox-group="gallery2"><img width="300" src="<?php echo of_get_option('made_6'); ?>" alt="" /></a>

	</p>
	
	<a class="btn__vermas" target="new" href="<?php echo of_get_option('made_link'); ?>">Ver más</a>
</div>


<!-- Seccion 4 -->
<div class="banner-4" id="panel-japones">
	<div class="container">
		<div class="five columns">
			<h3 class="">PANEL JAPONES</h3><br>
			<?php echo of_get_option('jap_des'); ?>		
		</div>
	</div>
	
</div>

<!-- seccion Panel japones -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;PANEL JAPONES</h3>

	<p>
		<a class="fancybox" href="<?php echo of_get_option('jap_1'); ?>" data-fancybox-group="gallery3"><img width="300" src="<?php echo of_get_option('jap_1'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('jap_2'); ?>" data-fancybox-group="gallery3"><img width="300" src="<?php echo of_get_option('jap_2'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('jap_3'); ?>" data-fancybox-group="gallery3"><img width="300" src="<?php echo of_get_option('jap_3'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('jap_4'); ?>" data-fancybox-group="gallery3"><img width="300" src="<?php echo of_get_option('jap_4'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('jap_5'); ?>" data-fancybox-group="gallery3"><img width="300" src="<?php echo of_get_option('jap_5'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('jap_6'); ?>" data-fancybox-group="gallery3"><img width="300" src="<?php echo of_get_option('jap_6'); ?>" alt="" /></a>

	</p>
	
	<a class="btn__vermas" target="new" href="<?php echo of_get_option('jap_link'); ?>">Ver más</a>
</div>



<!-- Seccion 5 -->
<div class="banner-5" id="en-aluminio">
	<div class="container">
		<div class="six columns">
			<h3 class="">PERSIANA EN ALUMINIO</h3><br>
			<?php echo of_get_option('alu_des'); ?>
		</div>
	</div>
	
</div>

<!-- seccion Persiana en aluminio -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;PERSIANA EN ALUMINIO</h3>

	<p>
		<a class="fancybox" href="<?php echo of_get_option('alu_1'); ?>" data-fancybox-group="gallery4"><img width="300" src="<?php echo of_get_option('alu_1'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('alu_2'); ?>" data-fancybox-group="gallery4"><img width="300" src="<?php echo of_get_option('alu_2'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('alu_3'); ?>" data-fancybox-group="gallery4"><img width="300" src="<?php echo of_get_option('alu_3'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('alu_4'); ?>" data-fancybox-group="gallery4"><img width="300" src="<?php echo of_get_option('alu_4'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('alu_5'); ?>" data-fancybox-group="gallery4"><img width="300" src="<?php echo of_get_option('alu_5'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('alu_6'); ?>" data-fancybox-group="gallery4"><img width="300" src="<?php echo of_get_option('alu_6'); ?>" alt="" /></a>

	</p>
	
	<a class="btn__vermas" target="new" href="<?php echo of_get_option('alu_link'); ?>">Ver más</a>
</div>




<!-- Seccion 6 -->
<div class="banner-6" id="romanas">
	<div class="container">
		<div class="five columns">
			<h3 class="">ROMANAS</h3><br>
			<?php echo of_get_option('rom_des'); ?>
		</div>
	</div>
	
</div>

<!-- seccion Romanas -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;ROMANAS</h3>

	<p>
		<a class="fancybox" href="<?php echo of_get_option('rom_1'); ?>" data-fancybox-group="gallery5"><img width="300" src="<?php echo of_get_option('rom_1'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('rom_2'); ?>" data-fancybox-group="gallery5"><img width="300" src="<?php echo of_get_option('rom_2'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('rom_3'); ?>" data-fancybox-group="gallery5"><img width="300" src="<?php echo of_get_option('rom_3'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('rom_4'); ?>" data-fancybox-group="gallery5"><img width="300" src="<?php echo of_get_option('rom_4'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('rom_5'); ?>" data-fancybox-group="gallery5"><img width="300" src="<?php echo of_get_option('rom_5'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('rom_6'); ?>" data-fancybox-group="gallery5"><img width="300" src="<?php echo of_get_option('rom_6'); ?>" alt="" /></a>

	</p>
	
	<a class="btn__vermas" target="new" href="<?php echo of_get_option('rom_link'); ?>">Ver más</a>
</div>



<!-- Seccion 7 -->
<div class="banner-7" id="sheer">
	<div class="container">
		<div class="five columns">
			<h3 class="">SHEER ELEGANCE</h3><br>
			<?php echo of_get_option('she_des'); ?>
		</div>
	</div>
	
</div>

<!-- seccion Sheer elegance -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;SHEER ELEGANCE</h3>

	<p>
		<a class="fancybox" href="<?php echo of_get_option('she_1'); ?>" data-fancybox-group="gallery6"><img width="300" src="<?php echo of_get_option('she_1'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('she_2'); ?>" data-fancybox-group="gallery6"><img width="300" src="<?php echo of_get_option('she_2'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('she_3'); ?>" data-fancybox-group="gallery6"><img width="300" src="<?php echo of_get_option('she_3'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('she_4'); ?>" data-fancybox-group="gallery6"><img width="300" src="<?php echo of_get_option('she_4'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('she_5'); ?>" data-fancybox-group="gallery6"><img width="300" src="<?php echo of_get_option('she_5'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('she_6'); ?>" data-fancybox-group="gallery6"><img width="300" src="<?php echo of_get_option('she_6'); ?>" alt="" /></a>

	</p>
	
	<a class="btn__vermas" target="new" href="<?php echo of_get_option('she_link'); ?>">Ver más</a>
</div>



<!-- Seccion 8 -->
<div class="banner-8" id="verticales">
	<div class="container">
		<div class="five columns">
			<h3 class="">VERTICALES</h3><br>
			<?php echo of_get_option('ver_des'); ?>
		</div>
	</div>
	
</div>

<!-- seccion Verticales -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;VERTICALES</h3>

	<p>
		<a class="fancybox" href="<?php echo of_get_option('ver_1'); ?>" data-fancybox-group="gallery7"><img width="300" src="<?php echo of_get_option('ver_1'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('ver_2'); ?>" data-fancybox-group="gallery7"><img width="300" src="<?php echo of_get_option('ver_2'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('ver_3'); ?>" data-fancybox-group="gallery7"><img width="300" src="<?php echo of_get_option('ver_3'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('ver_4'); ?>" data-fancybox-group="gallery7"><img width="300" src="<?php echo of_get_option('ver_4'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('ver_5'); ?>" data-fancybox-group="gallery7"><img width="300" src="<?php echo of_get_option('ver_5'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('ver_6'); ?>" data-fancybox-group="gallery7"><img width="300" src="<?php echo of_get_option('ver_6'); ?>" alt="" /></a>

	</p>
	
	<a class="btn__vermas" target="new" href="<?php echo of_get_option('ver_link'); ?>">Ver más</a>
</div>



<!-- Seccion 9 -->
<div class="banner-9" id="strings">
	<div class="container">
		<div class="five columns">
			<h3 class="">STRINGS</h3><br>
			<?php echo of_get_option('stri_des'); ?>
		</div>
	</div>
	
</div>

<!-- seccion Strings -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;STRINGS</h3>

	<p>
		<a class="fancybox" href="<?php echo of_get_option('stri_1'); ?>" data-fancybox-group="gallery8"><img width="300" src="<?php echo of_get_option('stri_1'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('stri_2'); ?>" data-fancybox-group="gallery8"><img width="300" src="<?php echo of_get_option('stri_2'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('stri_3'); ?>" data-fancybox-group="gallery8"><img width="300" src="<?php echo of_get_option('stri_3'); ?>" alt="" /></a>

	</p>
	
	<a class="btn__vermas" target="new" href="<?php echo of_get_option('stri_link'); ?>">Ver más</a>
</div>


<!-- Seccion 10 -->
<div class="banner-10" id="personalizadas">
	<div class="container">
		<div class="five columns">
			<h3 class="">PERSONALIZADAS</h3><br>
			<?php echo of_get_option('per_des'); ?>
		</div>
	</div>
	
</div>

<!-- seccion Personalizadas -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;PERSONALIZADAS</h3>

	<p>
		<a class="fancybox" href="<?php echo of_get_option('per_1'); ?>" data-fancybox-group="gallery9"><img width="300" src="<?php echo of_get_option('per_1'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('per_2'); ?>" data-fancybox-group="gallery9"><img width="300" src="<?php echo of_get_option('per_2'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('per_3'); ?>" data-fancybox-group="gallery9"><img width="300" src="<?php echo of_get_option('per_3'); ?>" alt="" /></a>

	</p>
	
	<a class="btn__vermas" target="new" href="<?php echo of_get_option('per_link'); ?>">Ver más</a>
</div>


<!-- Seccion 11 -->
<div class="banner-11" id="paredes-3d">
	<div class="container">
		<div class="five columns">
			<h3 class="">PAREDES 3D</h3><br>
			<?php echo of_get_option('pare_des'); ?>		
		</div>
	</div>
	
</div>

<!-- seccion Paredes 3D -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;PAREDES 3D</h3>

	<p>
		<a class="fancybox" href="<?php echo of_get_option('pare_1'); ?>" data-fancybox-group="gallery10"><img width="300" src="<?php echo of_get_option('pare_1'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('pare_2'); ?>" data-fancybox-group="gallery10"><img width="300" src="<?php echo of_get_option('pare_2'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('pare_3'); ?>" data-fancybox-group="gallery10"><img width="300" src="<?php echo of_get_option('pare_3'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('pare_4'); ?>" data-fancybox-group="gallery10"><img width="300" src="<?php echo of_get_option('pare_4'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('pare_5'); ?>" data-fancybox-group="gallery10"><img width="300" src="<?php echo of_get_option('pare_5'); ?>" alt="" /></a>

		<a class="fancybox" href="<?php echo of_get_option('pare_6'); ?>" data-fancybox-group="gallery10"><img width="300" src="<?php echo of_get_option('pare_6'); ?>" alt="" /></a>

	</p>
	
	<a class="btn__vermas" target="new" href="<?php echo of_get_option('pare_link'); ?>">Ver más</a>
</div>


<!-- Contactenos -->

<div class="map container">
	<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo of_get_option('mapa'); ?>"></iframe>
</div>

<div class="container" id="contactenos">
	<div class="ten columns offset-by-one form-cont">
		<h2>CONTÁCTENOS</h2>
		 <?php if(isset($emailSent) && $emailSent == true) { ?>
             <div class="alert alert-success">
                <p>Gracias, su mensaje ha sido bien recibido.</p>
            </div>
            <?php } else { ?>

            <?php if(isset($hasError) || isset($captchaError)) { ?>
            <div class="alert alert-danger alert-dismissable">
                <a class="close" data-dismiss="alert">×</a>
                <h4 class="alert-heading">Disculpe, existen algunos errores.</h4>
                <p class="error">Por favor inténtalo de nuevo!<p>
            </div>
                <?php } ?>

                <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                    <fieldset>
                    	<div class="six columns">
                    		<div class="form-group">
								<label for="">Nombre
									<input class="form-control" type="text" name="contactName" id="contactName" value=""/>
								</label>
	                            
	                            <span class="input-icon fui-check-inverted"></span>
	                            <?php if(isset($nameError)) { ?>
	                            <p><span class="error"><?=$nameError;?></span></p>
	                            <?php } ?>
	                             <br>

	                        </div>
                    	</div>

                    	<div class="six columns">
                    		<div class="form-group">
								<label for="">Teléfono
									<input class="form-control" type="text" name="telefono" id="telefono" value=""/>
								</label>
	                            
	                            <span class="input-icon fui-check-inverted"></span>
	                            <?php if(isset($telError)) { ?>
	                            <p><span class="error"><?=$telError;?></span></p>
	                            <?php } ?>

	                             <br>
	                        </div>
                    	</div>
	                        
                      	<div class="twelve columns">
	                      	<div class="form-group">
								<label for="">Mensaje
									<textarea class="form-control" name="comments" id="commentsText" rows="100" cols="10"></textarea>
								</label>
	                            
	                            <?php if(isset($commentError)) { ?>
	                            <p><span class="error"><?=$commentError;?></span></p>
	                            <?php } ?>
	                             <br>
	                        </div>
	                        <div class="form-actions">
	                            <button style="float:right;"type="submit" class="btn btn-success button-primary">Enviar</button>
	                        </div>
	                        <input type="hidden" name="submitted" id="submitted" value="true" />
                      	</div>
                        
                       
                    </fieldset>
                </form>
            <?php } ?>
	</div>
</div>


<!-- footer menu -->
<div class="footer__menu">
	<div class="container">
		<div class="ten columns offset-by-one">
			<div class="six columns">
				<div class="five columns">
					<nav class="menu__footer">
						<?php wp_nav_menu(array('theme_location' => 'footer-1')); ?>
					</nav>
				</div>
				<div class="five columns">
					<nav class="menu__footer">
						<?php wp_nav_menu(array('theme_location' => 'footer-2')); ?>
					</nav>
				</div>
			</div>

			<div class="six columns">
				<div class="ten columns">
					<h4>CONTÁCTENOS</h4>
					<ul class="contact">
						<li><img width="15" src="<?php bloginfo('template_url' ); ?>/library/img/icon-map.png" alt=""><?php echo of_get_option('direccion'); ?></li>
						<li><img width="19" src="<?php bloginfo('template_url' ); ?>/library/img/icon-mail.png" alt=""><a href="mailto:<?php echo of_get_option('email'); ?>"><?php echo of_get_option('email'); ?></a></li>
						<li><img width="13" src="<?php bloginfo('template_url' ); ?>/library/img/icon-tel.png" alt=""><?php echo of_get_option('telefono'); ?></li>
					</ul>
				</div>
				<div class="two columns">
					<ul class="icon-social">
						<li><a target="new" href="<?php echo of_get_option('facebook'); ?>"><img width="35" src="<?php bloginfo('template_url' ); ?>/library/img/icon-facebook.png" alt=""></a></li>
						
						<li><a target="new" href="<?php echo of_get_option('twitter'); ?>"><img width="35" src="<?php bloginfo('template_url' ); ?>/library/img/icon-twitter.png" alt=""></a></li>

						<li><a target="new" href="<?php echo of_get_option('pinterest'); ?>"><img width="35" src="<?php bloginfo('template_url' ); ?>/library/img/icon-pinterest.png" alt=""></a></li>
					</ul>
				</div>
				
			</div>
			
		</div>
	</div>
</div>




<!-- aliados -->

<div class="container aliados">
	<ul class="aliados">
		<li>Nuestros Aliados</li>
		<li><a href="#"><img src="<?php bloginfo('template_url' ); ?>/library/img/aliado-1.png" alt=""></a></li>
		<li><a href="#"><img src="<?php bloginfo('template_url' ); ?>/library/img/aliado-2.png" alt=""></a></li>
		<li><a href="#"><img src="<?php bloginfo('template_url' ); ?>/library/img/aliado-3.png" alt=""></a></li>
	</ul>

</div>
<?php get_footer(); ?>
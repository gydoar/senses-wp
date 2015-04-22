<?php
   if(isset($_POST['submitted'])) {
    if(trim($_POST['contactName']) === '') {
        $nameError = 'Por favor ingrese su nombre.';
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }

    if(trim($_POST['email']) === '')  {
        $emailError = 'Por favor ingrese su email.';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = 'Dirreción de email invalida.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }

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
            $emailTo = get_option('admin_email');
        }
        $subject = '[Contacto axemos] From '.$name;
        $body = "Nombre: $name \n\nEmail: $email \n\nTeléfino: $telefono \n\nComments: $comments";
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
		<nav class="six columns offset-by-two" id="menu-header">
			<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
		</nav>
	</div>
</header>

<!-- Seccion banner 1 -->

<div class="banner-1">
	<div class="container cont__bnn1">
		<h3>DISEÑO, <span>CALIDAD Y</span> SERVICIO <br>
		<img src="<?php bloginfo('template_url' ); ?>/library/img/sent-decoracion.png" alt="">
		</h3>
		
	</div>
</div>

<!-- Seccion tab 2 -->

<div class="tab">
	<div class="container">
		<h2>NOSOTROS</h2>
		<div id="carousel">
					<div class="slide">
						<div class="text">
							<p><strong>SENSES COTINAS Y DECORACIÓN</strong> es una empresa que ofrece  asesoría en la decoración de espacios y ambientes, manejando tres líneas principales como lo son; cortinas-persianas, paredes en 3 dimensiones,  piso laminado y en madera. <br><br>
							Ponemos a disposición los sentidos en decoración para cada ambiente y cada personalidad, contando   con el respaldo de empresas de calidad,  las cuales suministran productos óptimos para el diseño.
							</p>
						</div>
					</div>
					
					<div class="slide">
						<div class="text">
							<p><strong>SENSES COTINAS Y DECORACIÓN</strong> es una empresa que ofrece  asesoría en la decoración de espacios y ambientes, manejando tres líneas principales como lo son; cortinas-persianas, paredes en 3 dimensiones,  piso laminado y en madera. <br><br>
							Ponemos a disposición los sentidos en decoración para cada ambiente y cada personalidad, contando   con el respaldo de empresas de calidad,  las cuales suministran productos óptimos para el diseño.
							</p>
						</div>
					</div>
					
					<div class="slide">
						<div class="text">
							<p><strong>SENSES COTINAS Y DECORACIÓN</strong> es una empresa que ofrece  asesoría en la decoración de espacios y ambientes, manejando tres líneas principales como lo son; cortinas-persianas, paredes en 3 dimensiones,  piso laminado y en madera. <br><br>
							Ponemos a disposición los sentidos en decoración para cada ambiente y cada personalidad, contando   con el respaldo de empresas de calidad,  las cuales suministran productos óptimos para el diseño.
							</p>
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
			<p>Este es un sistema práctico y moderno, consta de un eje 100% en aluminio, ensamblado con un engranaje que permite dar control al paso de luz según se prefiera; se fabrica con el material que ofrezca el nivel de privacidad deseado (transparente, trasluz, opaco, blackout).
			<br><br>
			Todas las cortinas y persianas se pueden automatizar. </p>
			<br><br>
			<li>Practico para mantenimiento y limpieza.</li>
			<li>Se emplea para ventanas altas.</li>
			<li>Genera ambientes sobrios.</li>
			<li>Materiales con propiedades de protección solar.</li>
			<li>Tejidos con diferentes porcentajes de paso de luz.</li>
			<li>Un portafolio con más de 2.500 referencias entre 
				sintéticos y fibras.</li>
		</div>
	</div>
	
</div>

<!-- seccion enrollable -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;ENROLABLE</h3>

	<p>
		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/enrollable/01-big.png" data-fancybox-group="gallery1"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/enrollable/01.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/enrollable/02-big.png" data-fancybox-group="gallery1"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/enrollable/02.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/enrollable/03-big.png" data-fancybox-group="gallery1" title="Lorem ipsum dolor sit amet"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/enrollable/03.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/enrollable/04-big.png" data-fancybox-group="gallery1" title="Lorem ipsum dolor sit amet"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/enrollable/04.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/enrollable/05-big.png" data-fancybox-group="gallery1" title="Lorem ipsum dolor sit amet"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/enrollable/05.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/enrollable/06-big.png" data-fancybox-group="gallery1" title="Lorem ipsum dolor sit amet"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/enrollable/06.png" alt="" /></a>

	</p>
	
	<a class="btn__vermas" href="#">Ver más</a>
</div>



<!-- Seccion 3 -->
<div class="banner-3">
	<div class="container">
		<div class="five columns">
			<h3 class="">PERSIANA EN MADERA</h3><br><br><br>
			<p>Es fabricada en madera natural, lo que permite una absorción de los rayos del sol, protege los espacios internos de los rayos UV, dando a su vez un entorno cálido y elegante; las láminas tienen un ancho de 5 cm y estas tienen una capacidad de giro de 180° lo que permite tener un control gradual sobre la cantidad de iluminación y privacidad que se requiera.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>Crea un ambiente cálido y elegante.</li>
			<li>Graduación para la entrada de luz hasta de 180°.</li>
			<li>Láminas horizontales con desplazamiento vertical.</li>
			<li>Con más de 60 referencias en colores y diseños de madera.</li>
			
		</div>
	</div>
	
</div>

<!-- seccion Persiana en madera -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;PERSIANA EN MADERA</h3>

	<p>
		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-madera/01-big.png" data-fancybox-group="gallery2"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-madera/01.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-madera/02-big.png" data-fancybox-group="gallery2"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-madera/02.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-madera/03-big.png" data-fancybox-group="gallery2"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-madera/03.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-madera/04-big.png" data-fancybox-group="gallery2"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-madera/04.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-madera/05-big.png" data-fancybox-group="gallery2"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-madera/05.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-madera/06-big.png" data-fancybox-group="gallery2"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-madera/06.png" alt="" /></a>

	</p>
	
	<a class="btn__vermas" href="#">Ver más</a>
</div>


<!-- Seccion 4 -->
<div class="banner-4">
	<div class="container">
		<div class="five columns">
			<h3 class="">PANEL JAPONES</h3><br><br><br>
			<p>Es uno de los sistemas más imponentes y elegantes, Ideal para puerta-ventana, balcones, ventanas anchas y altas; está compuesto por paños o lamas con unas dimensiones   entre 45 cm y 80 cm de ancho que se desprenden de forma vertical y se desplazan de manera horizontal por medio de un riel fabricado en aleaciones de metales.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>Practico para su mantenimiento y limpieza.</li>
			<li>Sistema imponente y elegante.</li>
			<li>Funcional para puerta-ventana y/o con salida a balcón, ventanas amplias.</li>
			<li>Los paños o lamas son fabricadas con el material que ofrezca el nivel de privacidad deseado 
(transparente, trasluz, opaco, blackout.).</li>
			<li>Más de 2.500 referencias entre fibras y sintéticos.</li>
			
		</div>
	</div>
	
</div>

<!-- seccion Panel japones -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;PANEL JAPONES</h3>

	<p>
		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/panel-japones/01-big.png" data-fancybox-group="gallery3"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/panel-japones/01.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/panel-japones/02-big.png" data-fancybox-group="gallery3"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/panel-japones/02.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/panel-japones/03-big.png" data-fancybox-group="gallery3"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/panel-japones/03.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/panel-japones/04-big.png" data-fancybox-group="gallery3"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/panel-japones/04.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/panel-japones/05-big.png" data-fancybox-group="gallery3"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/panel-japones/05.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/panel-japones/06-big.png" data-fancybox-group="gallery3"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/panel-japones/06.png" alt="" /></a>

	</p>
	
	<a class="btn__vermas" href="#">Ver más</a>
</div>



<!-- Seccion 5 -->
<div class="banner-5">
	<div class="container">
		<div class="six columns">
			<h3 class="">PERSIANA EN ALUMINIO</h3><br><br><br>
			<p>Persiana tradicional en láminas 100% aluminio, con gran capacidad de dilatación al calor del sol, evita el deterioro del entorno o ambiente interno en donde sea empleada, las láminas van de manera horizontal y se desplazan verticalmente, tienen un ángulo de giro de hasta 180°, permitiendo un control gradual al paso de luz.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>Aunque está hecha a base de un metal, es una persiana muy liviana.</li>
			<li>Láminas de 2.5 cm de ancho.</li>
			<li>Composición del metal, 100% aluminio.</li>
			<li>Más de 60 referencias distintas en acabados y colores.</li>
		</div>
	</div>
	
</div>

<!-- seccion Persiana en aluminio -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;PERSIANA EN ALUMINIO</h3>

	<p>
		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-aluminio/01-big.png" data-fancybox-group="gallery4"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-aluminio/01.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-aluminio/02-big.png" data-fancybox-group="gallery4"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-aluminio/02.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-aluminio/03-big.png" data-fancybox-group="gallery4"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-aluminio/03.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-aluminio/04-big.png" data-fancybox-group="gallery4"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-aluminio/04.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-aluminio/05-big.png" data-fancybox-group="gallery4"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-aluminio/05.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-aluminio/06-big.png" data-fancybox-group="gallery4"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/persianas-aluminio/06.png" alt="" /></a>

	</p>
	
	<a class="btn__vermas" href="#">Ver más</a>
</div>




<!-- Seccion 6 -->
<div class="banner-6">
	<div class="container">
		<div class="five columns">
			<h3 class="">ROMANAS</h3><br><br><br>
			<p>Este es un diseño occidental sencillo y elegante, con un accionamiento plegable de forma vertical, el material empleado para este estilo de cortina se divide en secciones iguales que permitan un desplazamiento uniforme.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>Uniformidad visual entre pliegues.</li>
			<li>Elegancia y sencillez.</li>
			<li>2.500 referencias disponibles para su fabricación.</li>
		</div>
	</div>
	
</div>

<!-- seccion Romanas -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;ROMANAS</h3>

	<p>
		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/romanas/01-big.png" data-fancybox-group="gallery5"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/romanas/01.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/romanas/02-big.png" data-fancybox-group="gallery5"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/romanas/02.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/romanas/03-big.png" data-fancybox-group="gallery5"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/romanas/03.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/romanas/04-big.png" data-fancybox-group="gallery5"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/romanas/04.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/romanas/05-big.png" data-fancybox-group="gallery5"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/romanas/05.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/romanas/06-big.png" data-fancybox-group="gallery5"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/romanas/06.png" alt="" /></a>

	</p>
	
	<a class="btn__vermas" href="#">Ver más</a>
</div>



<!-- Seccion 7 -->
<div class="banner-7">
	<div class="container">
		<div class="five columns">
			<h3 class="">SHEER ELEGANCE</h3><br><br><br>
			<p>Es uno de los diseños más modernos y eficientes que existen, tiene dos funciones principales en una misma cortina se puede obtener la función de velo para la claridad del día, y  de cortina pesada para la privacidad de la noche; este sistema emplea un eje en aluminio de donde se desprenden dos capas de telas, siendo una de ellas  la que se desplaza sobre la otra, cuando las dos franjas oscuras coinciden en la misma posición se cumple la función del velo, cuando no, se cumple la función de la cortina pesada.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>Diseño elegante, innovador, sencillo, eficiente.</li>
			<li>Función de dos cortinas en una misma persiana.</li>
			<li>Recogimiento total en la parte superior para permitir una vista completa.</li>
			<li>Fácil mantenimiento y limpieza.</li>
			<li>Un portafolio con más de 180 referencias entrecolores, materiales y acabados distintos.</li>
		</div>
	</div>
	
</div>

<!-- seccion Sheer elegance -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;SHEER ELEGANCE</h3>

	<p>
		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/sheer-elegance/01-big.png" data-fancybox-group="gallery6"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/sheer-elegance/01.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/sheer-elegance/02-big.png" data-fancybox-group="gallery6"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/sheer-elegance/02.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/sheer-elegance/03-big.png" data-fancybox-group="gallery6"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/sheer-elegance/03.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/sheer-elegance/04-big.png" data-fancybox-group="gallery6"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/sheer-elegance/04.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/sheer-elegance/05-big.png" data-fancybox-group="gallery6"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/sheer-elegance/05.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/sheer-elegance/06-big.png" data-fancybox-group="gallery6"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/sheer-elegance/06.png" alt="" /></a>

	</p>
	
	<a class="btn__vermas" href="#">Ver más</a>
</div>



<!-- Seccion 8 -->
<div class="banner-8">
	<div class="container">
		<div class="five columns">
			<h3 class="">VERTICALES</h3><br><br><br>
			<p>Persianas elegantes, funcionales y muy prácticas, empleadas en áreas sociales. Es un sistema que emplea un riel en aluminio el cual sostiene lamas verticales de 10 cm, esta tienen una rotación máxima de 180° para la graduación en el ángulo de entrada u obstrucción del rayo luminoso. Las lamas pueden tener máximo dos sentidos de desplazamiento horizontal.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>Fácil mantenimiento y limpieza.</li>
			<li>Diseño, elegancia y funcionamiento.</li>
			<li>180° de rotación en lamas que permiten tener control sobre la cantidad de luz y dirección de la misma.</li>
			<li>Más de 140 referencias en colores y materiales.</li>
		</div>
	</div>
	
</div>

<!-- seccion Verticales -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;VERTICALES</h3>

	<p>
		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/verticales/01-big.png" data-fancybox-group="gallery7"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/verticales/01.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/verticales/02-big.png" data-fancybox-group="gallery7"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/verticales/02.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/verticales/03-big.png" data-fancybox-group="gallery7"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/verticales/03.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/verticales/04-big.png" data-fancybox-group="gallery7"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/verticales/04.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/verticales/05-big.png" data-fancybox-group="gallery7"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/verticales/05.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/verticales/06-big.png" data-fancybox-group="gallery7"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/verticales/06.png" alt="" /></a>

	</p>
	
	<a class="btn__vermas" href="#">Ver más</a>
</div>



<!-- Seccion 9 -->
<div class="banner-9">
	<div class="container">
		<div class="five columns">
			<h3 class="">STRINGS</h3><br><br><br>
			<p>Es la persiana más moderna actualmente en el mercado, es la transformación de la persiana vertical que relaciona un diseño clásico con materiales modernos y de última tecnología. Ideal para dar tranquilidad y frescura.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>Fácil mantenimiento y limpieza.</li>
			<li>Diseño, elegancia y funcionamiento.</li>
			<li>180° de rotación en lamas que permiten tener control sobre la cantidad de luz y dirección de la misma.</li>
			<li>Actualmente existen 4 colores. - Blanco - negro - gris y - beige.</li>
		</div>
	</div>
	
</div>

<!-- seccion Strings -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;STRINGS</h3>

	<p>
		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/strings/01-big.png" data-fancybox-group="gallery8"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/strings/01.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/strings/02-big.png" data-fancybox-group="gallery8"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/strings/02.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/strings/03-big.png" data-fancybox-group="gallery8"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/strings/03.png" alt="" /></a>

	</p>
	
	<a class="btn__vermas" href="#">Ver más</a>
</div>


<!-- Seccion 10 -->
<div class="banner-10">
	<div class="container">
		<div class="five columns">
			<h3 class="">PERSONALIZADAS</h3><br><br><br>
			<p>Todas nuestras Persianas son personalizables, lo que indica que se puede integrar el estilo de cortina deseado y plasmar en ella la figura o diseño que se quiera.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>El diseño depende de su creatividad.</li>
			<li>En esta opción se ofrece la posibilidad de crear una persiana única en el mundo.</li>
		</div>
	</div>
	
</div>

<!-- seccion Personalizadas -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;PERSONALIZADAS</h3>

	<p>
		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/personalizadas/01-big.png" data-fancybox-group="gallery9"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/personalizadas/01.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/personalizadas/02-big.png" data-fancybox-group="gallery9"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/personalizadas/02.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/personalizadas/03-big.png" data-fancybox-group="gallery9"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/personalizadas/03.png" alt="" /></a>

	</p>
	
	<a class="btn__vermas" href="#">Ver más</a>
</div>


<!-- Seccion 11 -->
<div class="banner-11" id="paredes-3d">
	<div class="container">
		<div class="five columns">
			<h3 class="">PAREDES 3D</h3><br><br><br>
			<p>Es un producto novedoso y económico, permite darle un contraste no convencional a la decoración en el contorno interno de los espacios y paredes; por sus diseños en alto relieve y gran variedad en el portafolio, es posible adecuar cualquier ambiente que vaya acorde con el objetivo del espacio, siempre teniendo en cuenta que la decoración de los ambientes van acordes a la personalidad de cada persona.</p>
			
		</div>
	</div>
	
</div>

<!-- seccion Paredes 3D -->
<div id="enrollable" class="container enrollable">
	<h3><img width="46" src="<?php bloginfo('template_url' ); ?>/library/img/icon-enrollable.png" alt="">&nbsp;&nbsp;PAREDES 3D</h3>

	<p>
		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/paredes-3d/01-big.png" data-fancybox-group="gallery10"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/paredes-3d/01.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/paredes-3d/02-big.png" data-fancybox-group="gallery10"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/paredes-3d/02.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/paredes-3d/03-big.png" data-fancybox-group="gallery10"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/paredes-3d/03.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/paredes-3d/04-big.png" data-fancybox-group="gallery10"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/paredes-3d/04.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/paredes-3d/05-big.png" data-fancybox-group="gallery10"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/paredes-3d/05.png" alt="" /></a>

		<a class="fancybox" href="<?php bloginfo('template_url' ); ?>/library/img/persianas/paredes-3d/06-big.png" data-fancybox-group="gallery10"><img width="300" src="<?php bloginfo('template_url' ); ?>/library/img/persianas/paredes-3d/06.png" alt="" /></a>

	</p>
	
	<a class="btn__vermas" href="#">Ver más</a>
</div>


<!-- Contactenos -->

<div class="map">
	<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?q=4.815901,-74.362058&amp;num=1&amp;ie=UTF8&amp;ll=4.815687,-74.362067&amp;spn=0.001719,0.002411&amp;t=m&amp;z=14&amp;output=embed"></iframe>
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
						<li><img width="15" src="<?php bloginfo('template_url' ); ?>/library/img/icon-map.png" alt="">Carrera 45 a 134 a 60, Prado Veraniego</li>
						<li><img width="19" src="<?php bloginfo('template_url' ); ?>/library/img/icon-mail.png" alt=""><a href="mailto:ventas@sensescortinasdeco.com">ventas@sensescortinasdeco.com</a></li>
						<li><img width="13" src="<?php bloginfo('template_url' ); ?>/library/img/icon-tel.png" alt="">+57 301 5477676  /  +57 445 2644</li>
					</ul>
				</div>
				<div class="two columns">
					<ul class="icon-social">
						<li><a href="#"><img width="35" src="<?php bloginfo('template_url' ); ?>/library/img/icon-facebook.png" alt=""></a></li>
						
						<li><a href="#"><img width="35" src="<?php bloginfo('template_url' ); ?>/library/img/icon-twitter.png" alt=""></a></li>

						<li><a href="#"><img width="35" src="<?php bloginfo('template_url' ); ?>/library/img/icon-pinterest.png" alt=""></a></li>
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
	</ul>

</div>
<?php get_footer(); ?>
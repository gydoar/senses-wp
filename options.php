<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'theme-textdomain' ),
		'two' => __( 'Two', 'theme-textdomain' ),
		'three' => __( 'Three', 'theme-textdomain' ),
		'four' => __( 'Four', 'theme-textdomain' ),
		'five' => __( 'Five', 'theme-textdomain' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'theme-textdomain' ),
		'two' => __( 'Pancake', 'theme-textdomain' ),
		'three' => __( 'Omelette', 'theme-textdomain' ),
		'four' => __( 'Crepe', 'theme-textdomain' ),
		'five' => __( 'Waffle', 'theme-textdomain' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'INICIO', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Nosotros', 'theme-textdomain' ),
		'desc' => __( 'Texto Nosotros', 'theme-textdomain' ),
		'id' => 'nosotros',
		'std' => '<strong>SENSES COTINAS Y DECORACIÓN</strong> es una empresa que ofrece  asesoría en la decoración de espacios y ambientes, manejando tres líneas principales como lo son; cortinas-persianas, paredes en 3 dimensiones,  piso laminado y en madera. <br><br>
			Ponemos a disposición los sentidos en decoración para cada ambiente y cada personalidad, contando   con el respaldo de empresas de calidad,  las cuales suministran productos óptimos para el diseño.',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Misión', 'theme-textdomain' ),
		'desc' => __( 'Texto Misión', 'theme-textdomain' ),
		'id' => 'mision',
		'std' => '<br>Senses ofrece a los clientes diseño, calidad  y servicio satisfaciendo sus necesidades, generando un ambiente agradable.',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Visión', 'theme-textdomain' ),
		'desc' => __( 'Texto Visión', 'theme-textdomain' ),
		'id' => 'vision',
		'std' => '<br>Obtener el reconocimiento como la mejor alternativa en cortinas-persianas y decoración.',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'MAPA', 'theme-textdomain' ),
		'desc' => __( 'iframe Mapa', 'theme-textdomain' ),
		'id' => 'mapa',
		'std' => 'https://maps.google.es/maps?q=4.72051,-74.052713&amp;num=1&amp;ie=UTF8&amp;ll=4.720071,-74.051585&amp;spn=0.001719,0.002411&amp;t=m&amp;z=14&amp;output=embed',
		'type' => 'textarea'
	);


	// Secciones
	//Enrrollable

	$options[] = array(
		'name' => __( 'ENRROLLABLE', 'theme-textdomain' ),
		'type' => 'heading'
	);
	
	$options[] = array(
		'name' => __( 'Descripción', 'theme-textdomain' ),
		'desc' => __( 'Descripción de la seccion', 'theme-textdomain' ),
		'id' => 'enrro_des',
		'std' => '<p>Este es un sistema práctico y moderno, consta de un eje 100% en aluminio, ensamblado con un engranaje que permite dar control al paso de luz según se prefiera; se fabrica con el material que ofrezca el nivel de privacidad deseado (transparente, trasluz, opaco, blackout).
			<br><br>
			Todas las cortinas y persianas se pueden automatizar. </p>
			<br><br>
			<li>Practico para mantenimiento y limpieza.</li>
			<li>Se emplea para ventanas altas.</li>
			<li>Genera ambientes sobrios.</li>
			<li>Materiales con propiedades de protección solar.</li>
			<li>Tejidos con diferentes porcentajes de paso de luz.</li>
			<li>Un portafolio con más de 2.500 referencias entre 
				sintéticos y fibras.</li>',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'IMG 1', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'enrro_1',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 2', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'enrro_2',
		'std' => '',
		'type' => 'upload'
	);

		$options[] = array(
		'name' => __( 'IMG 3', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'enrro_3',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 4', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'enrro_4',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 5', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'enrro_5',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 6', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'enrro_6',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'LINK VER MÁS', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'enrro_link',
		'std' => 'https://es.pinterest.com/sensescd/cortinas-y-persianas/',
		'type' => 'text'
	);


	// En Madera

	$options[] = array(
		'name' => __( 'EN MADERA', 'theme-textdomain' ),
		'type' => 'heading'
	);
	
	$options[] = array(
		'name' => __( 'Descripción', 'theme-textdomain' ),
		'desc' => __( 'Descripción de la seccion', 'theme-textdomain' ),
		'id' => 'made_des',
		'std' => '<p>Es fabricada en madera natural, lo que permite una absorción de los rayos del sol, protege los espacios internos de los rayos UV, dando a su vez un entorno cálido y elegante; las láminas tienen un ancho de 5 cm y estas tienen una capacidad de giro de 180° lo que permite tener un control gradual sobre la cantidad de iluminación y privacidad que se requiera.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>Crea un ambiente cálido y elegante.</li>
			<li>Graduación para la entrada de luz hasta de 180°.</li>
			<li>Láminas horizontales con desplazamiento vertical.</li>
			<li>Con más de 60 referencias en colores y diseños de madera.</li>',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'IMG 1', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'made_1',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 2', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'made_2',
		'std' => '',
		'type' => 'upload'
	);

		$options[] = array(
		'name' => __( 'IMG 3', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'made_3',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 4', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'made_4',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 5', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'made_5',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 6', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'made_6',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'LINK VER MÁS', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'made_link',
		'std' => 'https://es.pinterest.com/sensescd/cortinas-y-persianas/',
		'type' => 'text'
	);


	// Japones

	$options[] = array(
		'name' => __( 'JAPONES', 'theme-textdomain' ),
		'type' => 'heading'
	);
	
	$options[] = array(
		'name' => __( 'Descripción', 'theme-textdomain' ),
		'desc' => __( 'Descripción de la seccion', 'theme-textdomain' ),
		'id' => 'jap_des',
		'std' => '<p>Es uno de los sistemas más imponentes y elegantes, Ideal para puerta-ventana, balcones, ventanas anchas y altas; está compuesto por paños o lamas con unas dimensiones   entre 45 cm y 80 cm de ancho que se desprenden de forma vertical y se desplazan de manera horizontal por medio de un riel fabricado en aleaciones de metales.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>Practico para su mantenimiento y limpieza.</li>
			<li>Sistema imponente y elegante.</li>
			<li>Funcional para puerta-ventana y/o con salida a balcón, ventanas amplias.</li>
			<li>Los paños o lamas son fabricadas con el material que ofrezca el nivel de privacidad deseado 
(transparente, trasluz, opaco, blackout.).</li>
			<li>Más de 2.500 referencias entre fibras y sintéticos.</li>',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'IMG 1', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'jap_1',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 2', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'jap_2',
		'std' => '',
		'type' => 'upload'
	);

		$options[] = array(
		'name' => __( 'IMG 3', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'jap_3',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 4', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'jap_4',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 5', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'jap_5',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 6', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'jap_6',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'LINK VER MÁS', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'jap_link',
		'std' => 'https://es.pinterest.com/sensescd/cortinas-y-persianas/',
		'type' => 'text'
	);


	//aluminio

	$options[] = array(
		'name' => __( 'ALUMINIO', 'theme-textdomain' ),
		'type' => 'heading'
	);
	
	$options[] = array(
		'name' => __( 'Descripción', 'theme-textdomain' ),
		'desc' => __( 'Descripción de la seccion', 'theme-textdomain' ),
		'id' => 'alu_des',
		'std' => '<p>Persiana tradicional en láminas 100% aluminio, con gran capacidad de dilatación al calor del sol, evita el deterioro del entorno o ambiente interno en donde sea empleada, las láminas van de manera horizontal y se desplazan verticalmente, tienen un ángulo de giro de hasta 180°, permitiendo un control gradual al paso de luz.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>Aunque está hecha a base de un metal, es una persiana muy liviana.</li>
			<li>Láminas de 2.5 cm de ancho.</li>
			<li>Composición del metal, 100% aluminio.</li>
			<li>Más de 60 referencias distintas en acabados y colores.</li>',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'IMG 1', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'alu_1',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 2', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'alu_2',
		'std' => '',
		'type' => 'upload'
	);

		$options[] = array(
		'name' => __( 'IMG 3', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'alu_3',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 4', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'alu_4',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 5', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'alu_5',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 6', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'alu_6',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'LINK VER MÁS', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'alu_link',
		'std' => 'https://es.pinterest.com/sensescd/cortinas-y-persianas/',
		'type' => 'text'
	);

	//Romanas

		$options[] = array(
		'name' => __( 'ROMANAS', 'theme-textdomain' ),
		'type' => 'heading'
	);
	
	$options[] = array(
		'name' => __( 'Descripción', 'theme-textdomain' ),
		'desc' => __( 'Descripción de la seccion', 'theme-textdomain' ),
		'id' => 'rom_des',
		'std' => '<p>Este es un diseño occidental sencillo y elegante, con un accionamiento plegable de forma vertical, el material empleado para este estilo de cortina se divide en secciones iguales que permitan un desplazamiento uniforme.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>Uniformidad visual entre pliegues.</li>
			<li>Elegancia y sencillez.</li>
			<li>2.500 referencias disponibles para su fabricación.</li>',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'IMG 1', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'rom_1',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 2', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'rom_2',
		'std' => '',
		'type' => 'upload'
	);

		$options[] = array(
		'name' => __( 'IMG 3', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'rom_3',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 4', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'rom_4',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 5', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'rom_5',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 6', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'rom_6',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'LINK VER MÁS', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'rom_link',
		'std' => 'https://es.pinterest.com/sensescd/cortinas-y-persianas/',
		'type' => 'text'
	);

	//Sheer Elegance

	$options[] = array(
		'name' => __( 'SHEER', 'theme-textdomain' ),
		'type' => 'heading'
	);
	
	$options[] = array(
		'name' => __( 'Descripción', 'theme-textdomain' ),
		'desc' => __( 'Descripción de la seccion', 'theme-textdomain' ),
		'id' => 'she_des',
		'std' => '<p>Es uno de los diseños más modernos y eficientes que existen, tiene dos funciones principales en una misma cortina se puede obtener la función de velo para la claridad del día, y  de cortina pesada para la privacidad de la noche; este sistema emplea un eje en aluminio de donde se desprenden dos capas de telas, siendo una de ellas  la que se desplaza sobre la otra, cuando las dos franjas oscuras coinciden en la misma posición se cumple la función del velo, cuando no, se cumple la función de la cortina pesada.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>Diseño elegante, innovador, sencillo, eficiente.</li>
			<li>Función de dos cortinas en una misma persiana.</li>
			<li>Recogimiento total en la parte superior para permitir una vista completa.</li>
			<li>Fácil mantenimiento y limpieza.</li>
			<li>Un portafolio con más de 180 referencias entrecolores, materiales y acabados distintos.</li>',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'IMG 1', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'she_1',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 2', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'she_2',
		'std' => '',
		'type' => 'upload'
	);

		$options[] = array(
		'name' => __( 'IMG 3', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'she_3',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 4', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'she_4',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 5', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'she_5',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 6', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'she_6',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'LINK VER MÁS', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'she_link',
		'std' => 'https://es.pinterest.com/sensescd/cortinas-y-persianas/',
		'type' => 'text'
	);

	// Verticales

		$options[] = array(
		'name' => __( 'VERTICALES', 'theme-textdomain' ),
		'type' => 'heading'
	);
	
	$options[] = array(
		'name' => __( 'Descripción', 'theme-textdomain' ),
		'desc' => __( 'Descripción de la seccion', 'theme-textdomain' ),
		'id' => 'ver_des',
		'std' => '<p>Persianas elegantes, funcionales y muy prácticas, empleadas en áreas sociales. Es un sistema que emplea un riel en aluminio el cual sostiene lamas verticales de 10 cm, esta tienen una rotación máxima de 180° para la graduación en el ángulo de entrada u obstrucción del rayo luminoso. Las lamas pueden tener máximo dos sentidos de desplazamiento horizontal.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>Fácil mantenimiento y limpieza.</li>
			<li>Diseño, elegancia y funcionamiento.</li>
			<li>180° de rotación en lamas que permiten tener control sobre la cantidad de luz y dirección de la misma.</li>
			<li>Más de 140 referencias en colores y materiales.</li>',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'IMG 1', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'ver_1',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 2', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'ver_2',
		'std' => '',
		'type' => 'upload'
	);

		$options[] = array(
		'name' => __( 'IMG 3', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'ver_3',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 4', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'ver_4',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 5', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'ver_5',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 6', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'ver_6',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'LINK VER MÁS', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'ver_link',
		'std' => 'https://es.pinterest.com/sensescd/cortinas-y-persianas/',
		'type' => 'text'
	);

	//STRINGS

		$options[] = array(
		'name' => __( 'STRING', 'theme-textdomain' ),
		'type' => 'heading'
	);
	
	$options[] = array(
		'name' => __( 'Descripción', 'theme-textdomain' ),
		'desc' => __( 'Descripción de la seccion', 'theme-textdomain' ),
		'id' => 'stri_des',
		'std' => '<p>Es la persiana más moderna actualmente en el mercado, es la transformación de la persiana vertical que relaciona un diseño clásico con materiales modernos y de última tecnología. Ideal para dar tranquilidad y frescura.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>Fácil mantenimiento y limpieza.</li>
			<li>Diseño, elegancia y funcionamiento.</li>
			<li>180° de rotación en lamas que permiten tener control sobre la cantidad de luz y dirección de la misma.</li>
			<li>Actualmente existen 4 colores. - Blanco - negro - gris y - beige.</li>',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'IMG 1', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'stri_1',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 2', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'stri_2',
		'std' => '',
		'type' => 'upload'
	);

		$options[] = array(
		'name' => __( 'IMG 3', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'stri_3',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 4', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'stri_4',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 5', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'stri_5',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 6', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'stri_6',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'LINK VER MÁS', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'stri_link',
		'std' => 'https://es.pinterest.com/sensescd/cortinas-y-persianas/',
		'type' => 'text'
	);

	//Personalizadas

			$options[] = array(
		'name' => __( 'PERSONAL', 'theme-textdomain' ),
		'type' => 'heading'
	);
	
	$options[] = array(
		'name' => __( 'Descripción', 'theme-textdomain' ),
		'desc' => __( 'Descripción de la seccion', 'theme-textdomain' ),
		'id' => 'per_des',
		'std' => '<p>Todas nuestras Persianas son personalizables, lo que indica que se puede integrar el estilo de cortina deseado y plasmar en ella la figura o diseño que se quiera.
			<br><br>
			Todas las cortinas y persianas se pueden automatizar.</p>
			<br><br>
			<li>El diseño depende de su creatividad.</li>
			<li>En esta opción se ofrece la posibilidad de crear una persiana única en el mundo.</li>',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'IMG 1', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'per_1',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 2', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'per_2',
		'std' => '',
		'type' => 'upload'
	);

		$options[] = array(
		'name' => __( 'IMG 3', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'per_3',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 4', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'per_4',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 5', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'per_5',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 6', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'per_6',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'LINK VER MÁS', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'per_link',
		'std' => 'https://es.pinterest.com/sensescd/cortinas-y-persianas/',
		'type' => 'text'
	);

	// 3D

		$options[] = array(
		'name' => __( '3D', 'theme-textdomain' ),
		'type' => 'heading'
	);
	
	$options[] = array(
		'name' => __( 'Descripción', 'theme-textdomain' ),
		'desc' => __( 'Descripción de la seccion', 'theme-textdomain' ),
		'id' => 'pare_des',
		'std' => '<p>Es un producto novedoso y económico, permite darle un contraste no convencional a la decoración en el contorno interno de los espacios y paredes; por sus diseños en alto relieve y gran variedad en el portafolio, es posible adecuar cualquier ambiente que vaya acorde con el objetivo del espacio, siempre teniendo en cuenta que la decoración de los ambientes van acordes a la personalidad de cada persona.</p>',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'IMG 1', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'pare_1',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 2', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'pare_2',
		'std' => '',
		'type' => 'upload'
	);

		$options[] = array(
		'name' => __( 'IMG 3', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'pare_3',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 4', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'pare_4',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 5', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'pare_5',
		'std' => '',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'IMG 6', 'theme-textdomain' ),
		'desc' => __( 'Tamaño 624 x 400 px', 'theme-textdomain' ),
		'id' => 'pare_6',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'LINK VER MÁS', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'pare_link',
		'std' => 'https://es.pinterest.com/sensescd/cortinas-y-persianas/',
		'type' => 'text'
	);

	//Footer

	$options[] = array(
		'name' => __( 'PIE DE PAGINA', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Dirección', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'direccion',
		'std' => 'Carrera 45 a 134 a 60, Prado Veraniego',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Email', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'email',
		'std' => 'ventas@sensescortinasdeco.com',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Teléfono', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'telefono',
		'std' => '+57 301 5477676 / +57 445 2644',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Link Facebook', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'facebook',
		'std' => 'https://www.facebook.com/pages/SENSES-Cortinas-y-Decoraci%C3%B3n/1552745068342412',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Link Twitter', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'twitter',
		'std' => 'https://twitter.com/sensesdeco',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Link Pinterest', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'pinterest',
		'std' => 'https://es.pinterest.com/sensescd/',
		'type' => 'text'
	);
	
	return $options;
}
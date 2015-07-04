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

	// Secciones
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
		'name' => __( 'LINK VER MÁS', 'theme-textdomain' ),
		'desc' => __( '', 'theme-textdomain' ),
		'id' => 'enrro_link',
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
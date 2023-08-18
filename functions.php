<?php
 
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css');
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js');
	
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');




// Получение данных из полей ACF


function get_car_price_callback() {
	$car = $_POST['car'];
	$season = $_POST['season'];
	$price = 0;
	
	// Рассчитываем цену в зависимости от выбранного автомобиля и времени года
	switch ($car) {
	   case 'porsche':
		  $price = ($season == 'summer') ? 10000 : 12000;
		  break;
	   case 'bmw':
		  $price = ($season == 'summer') ? 12000 : 14000;
		  break;
	   case 'chevrolet':
		  $price = ($season == 'summer') ? 20000 : 25000;
		  break;
	}
	
	echo $price;
	wp_die();
 }
 add_action('wp_ajax_get_car_price', 'get_car_price_callback');
 add_action('wp_ajax_nopriv_get_car_price', 'get_car_price_callback');
?>


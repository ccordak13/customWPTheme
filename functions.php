<?php 

function cierra_theme_support(){
//dynamic title tags
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');	
add_theme_support('custom-background',$args);
} 

add_action('after_setup_theme', 'cierra_theme_support');

$args = array(
    'default-color' => '');


function cierra_menus(){ 

    $locations = array(
        'primary' => "Desktop top nav"
    );

    register_nav_menus($locations);
}

add_action('init','cierra_menus');



function cierra_register_styles(){ 

// MY CSS
    wp_enqueue_style('cierra-style', get_template_directory_uri()."/style.css", array('theme-bootstrap','cierra-bootstrap'), '1.4.42', 'all');

// BOOTSTRAP CSS
    wp_enqueue_style('theme-bootstrap', get_template_directory_uri()."/theme/plugins/bootstrap/bootstrap.min.css", array(), '1.0.0', 'all');
    wp_enqueue_style('cierra-bootstrap', get_template_directory_uri()."/theme/css/style.css", array(), '1.3.4', 'all');
    wp_enqueue_style('cierra-fonts', get_template_directory_uri()."/theme/plugins/themefisher-fonts/themefisher-fonts.css", array(), '1.0.0', 'all');
    wp_enqueue_style('cierra-carousel', get_template_directory_uri()."/theme/plugins/owl-carousel/owl.carousel.css", array(), '1.0.0', 'all');
    wp_enqueue_style('cierra-popups', get_template_directory_uri()."/theme/plugins/magnific-popup/magnific-popup.css", array(), '1.0.0', 'all');

    
}


    add_action('wp_enqueue_scripts','cierra_register_styles');

//GOOGLE FONTS
function wpb_add_google_fonts() {
 
    wp_enqueue_style('wpb-google-fonts',"https://fonts.googleapis.com/css?family=Droid+Serif:400i|Source+Sans+Pro:300,400,600,700", false ); 

    wp_enqueue_style('wpb-google-fonts-two',"https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700", false ); 

    wp_enqueue_style('wpb-google-fonts-three',"https://fonts.googleapis.com/css2?family=Bungee&family=Manrope:wght@200;400;500&family=Permanent+Marker&family=Rock+Salt&display=swap", false ); 

    wp_enqueue_style('wpb-google-fonts-four',"https://fonts.googleapis.com/css?family=Ewert", false ); 

    wp_enqueue_style('wpb-google-fonts-five',"https://fonts.googleapis.com/css?family=Kumar+One+Outline", false ); 

    wp_enqueue_style('wpb-google-fonts-six',"https://fonts.googleapis.com/css?family=Righteous", false ); 

    wp_enqueue_style('wpb-google-fonts-seven',"https://fonts.googleapis.com/css?family=Be+Vietnam+Pro:wght@300;400", false ); 
    
}
     
    add_action('wp_enqueue_scripts', 'wpb_add_google_fonts' );


//JAVASCRIPT 

   function cierra_register_scripts(){ 

    wp_enqueue_script('cierra-jquery', get_template_directory_uri()."/theme/plugins/jquery-2.1.1.min.js",array(),true); /* true puts it in footer*/
    wp_enqueue_script('cierra-bootstrap-js', get_template_directory_uri()."/theme/plugins/bootstrap/bootstrap.min.js",array(),true); 
    wp_enqueue_script('cierra-carousel-js', get_template_directory_uri()."/theme/plugins/owl-carousel/owl.carousel.min.js",array(),true); 
    wp_enqueue_script('cierra-popup-js', get_template_directory_uri()."/theme/plugins/magnific-popup/jquery.magnific.popup.min.js",array(),true); 

    // MY JAVASCRIPT
    wp_enqueue_script('cierra-main-js', get_template_directory_uri()."/assets/js/main.js",array(),true); 

   }

   add_action('wp_enqueue_scripts','cierra_register_scripts');
?>
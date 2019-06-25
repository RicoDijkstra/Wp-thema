<?php

function RicoThema_bronnen(){
  wp_enqueue_script('rico-scripts', get_theme_file_uri('js/scriptRico.js'), NULL, '1.0', true);
  wp_enqueue_style('mijnGooglefonts', '//fonts.googleapis.com/css?family=Quicksand&display=swap');
  wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'RicoThema_bronnen');


// registreer menu's van het thema
register_nav_menus( array (
    'hoofd' =>__('Hoofd menu'),
    'footer' =>__('Menu in footer'),
));

// registreer/initialiseer widgets

function RicoThema_widgets() {
  register_sidebar( array(
    'name'          => __( 'Widget aside' ),
    'id'            => __('widget_aside'),    // ID should be LOWERCASE  ! ! !
    'description'   => __('Hier de widgets voor de aside plaatsen'),
          'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>'
  ));
}
add_action('widgets_init', 'RicoThema_widgets');
?>

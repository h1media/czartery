<?php 

function my_scripts() {

    wp_enqueue_script('jquery'); 

    wp_register_script('rs1',get_stylesheet_directory_uri().'/rs-plugin/js/jquery.themepunch.tools.min.js' , '', '', true);
    wp_register_script('rs2',get_stylesheet_directory_uri().'/rs-plugin/js/jquery.themepunch.revolution.min.js' , '', '', true);
    wp_register_script('owl',get_stylesheet_directory_uri().'/js/owl.carousel.min.js' , '', '', true);
    wp_register_script('pretty',get_stylesheet_directory_uri().'/js/jquery.prettyPhoto.js' , '', '', true);
    wp_register_script('rev_video',get_stylesheet_directory_uri().'/rs-plugin/js/extensions/revolution.extension.video.min.js' , '', '', true);
    wp_register_script('rev_slide',get_stylesheet_directory_uri().'/rs-plugin/js/extensions/revolution.extension.slideanims.min.js' , '', '', true);
    wp_register_script('rev_layer',get_stylesheet_directory_uri().'/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js' , '', '', true);
    wp_register_script('rev_nav',get_stylesheet_directory_uri().'/rs-plugin/js/extensions/revolution.extension.navigation.min.js' , '', '', true);
    wp_register_script('myjs',get_stylesheet_directory_uri().'/js/scripts.js' , '', '', true);
    wp_register_script('gapi', 'http://maps.google.com/maps/api/js?sensor=false' , '', '', false);
    wp_register_script('fa',get_stylesheet_directory_uri().'/js/fontawesome-markers.min.js' , '', '', false);

    wp_register_style('css_style',get_stylesheet_directory_uri().'/style.css');
    wp_register_style('css_blue',get_stylesheet_directory_uri().'/css/color-blue.css');
    wp_register_style('css_rwd',get_stylesheet_directory_uri().'/css/responsive.css');
    wp_register_style('css_fa',get_stylesheet_directory_uri().'/css/font-awesome.css');
    wp_register_style('css_set',get_stylesheet_directory_uri().'/rs-plugin/css/settings.css');
    wp_register_style('css_lay',get_stylesheet_directory_uri().'/rs-plugin/css/layers.css');
    wp_register_style('css_nav',get_stylesheet_directory_uri().'/rs-plugin/css/navigation.css');
    wp_register_style('css_car',get_stylesheet_directory_uri().'/css/owl.carousel.css');
    wp_register_style('css_pretty',get_stylesheet_directory_uri().'/css/prettyPhoto.css');
    wp_register_style('css_imhov',get_stylesheet_directory_uri().'/css/imagehover.min.css');
    wp_register_style('pr_mobile','//fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic|Source+Serif+Pro:400,600,700');

    wp_enqueue_script('rs1', true);
    wp_enqueue_script('rs2', true);
    wp_enqueue_script('owl', true);
    wp_enqueue_script('pretty', true);
    wp_enqueue_script('rev_video', true);
    wp_enqueue_script('rev_slide', true);
    wp_enqueue_script('rev_layer', true);
    wp_enqueue_script('rev_nav', true);
    wp_enqueue_script('myjs', true);
    wp_enqueue_script('gapi', true);
    wp_enqueue_script('fa', true);

    wp_enqueue_style( 'css_style');
    wp_enqueue_style('css_blue');
    wp_enqueue_style( 'css_rwd');
    wp_enqueue_style('css_fa');
    wp_enqueue_style( 'css_set');
    wp_enqueue_style('css_lay');
    wp_enqueue_style( 'css_nav');
    wp_enqueue_style('css_car');
    wp_enqueue_style( 'css_pretty');
    wp_enqueue_style('css_imhov');
    wp_enqueue_style( 'pr_mobile');

}
add_action( 'wp_enqueue_scripts', 'my_scripts' );



function custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'Menu główne' ));
  register_nav_menu('my-custom-menu2',__( 'Menu dolne' ));
}
add_action( 'init', 'custom_new_menu' );


add_theme_support( 'post-thumbnails' );
add_image_size( 'yacht-thumbs', 263, 182, array( 'center', 'center' ));
add_image_size( 'yacht-listing-thumbs', 357, 248, array( 'center', 'center' ));
add_image_size( 'gallery-listing-thumbs', 210, 210, array( 'center', 'center' ));
add_image_size( 'yacht-gallery', 710, 440, array( 'center', 'center' ));


flush_rewrite_rules( false );


if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Opcje',
    'menu_title'  => 'Opcje',
    'menu_slug'   => 'options',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Stopka',
    'menu_title'  => 'Stopka',
    'parent_slug' => 'options',
  ));
  
}


function custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function arphabet_widgets_init() {

  register_sidebar( array(
    'name'          => 'Sidebar domyślny',
    'id'            => 'single_default',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3><div class="title-block5"></div>',
  ) );

  register_sidebar( array(
    'name'          => 'Sidebar yacht',
    'id'            => 'single_yacht',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3><div class="title-block5"></div>',
  ) );

  register_sidebar( array(
    'name'          => 'Sidebar galeria',
    'id'            => 'single_gallery',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3><div class="title-block5"></div>',
  ) );

  register_sidebar( array(
    'name'          => 'Sidebar blog',
    'id'            => 'single_blog',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3><div class="title-block5"></div>',
  ) );
  register_sidebar( array(
    'name'          => 'Sidebar osprzęt',
    'id'            => 'single_osprzet',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3><div class="title-block5"></div>',
  ) );
  register_sidebar( array(
    'name'          => 'Sidebar sklejka',
    'id'            => 'single_sklejka',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3><div class="title-block5"></div>',
  ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


function custom_loginlogo() {
echo '<style type="text/css">
h1 a {display:none!important; }
</style>';
}
add_action('login_head', 'custom_loginlogo');

/*

add_action('get_header', 'my_filter_head');

  function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }


add_filter( 'wp_nav_menu_items', 'your_custom_menu_item', 10, 2 );
function your_custom_menu_item ( $items, $args ) {
    if ($args->theme_location == 'main-menu') {
        $items .= '';
    }
    return $items;
}

function wpb_adding_scripts() {
wp_register_script('bioep', get_stylesheet_directory_uri('bioep.js', __FILE__), array('jquery'),'1.1', true);
wp_enqueue_script('bioep');
}
 
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  

function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


add_image_size( 'blog-thumbs', 360, 220, array( 'center', 'center' ));
add_image_size( 'gallery-thumbs', 360, 270, array( 'center', 'center' ));
add_image_size( 'blog-listing', 720, 490, array( 'center', 'center' ));

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }


  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&nbsp;'),
    'next_text'       => __('&nbsp;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='post-pagination'>";
      echo $paginate_links;
    echo "</nav>";
  }

}

add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
function bootstrap3_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    
    $fields   =  array(
        'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
        'url'    => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website' ) . '</label> ' .
                    '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>'        
    );
    
    return $fields;
}

add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
function bootstrap3_comment_form( $args ) {
    $args['comment_field'] = '<div class="form-group comment-form-comment">
            <label for="comment">' . _x( 'Comment', 'noun' ) . '</label> 
            <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
        </div>';
    $args['class_submit'] = 'btn btn-default'; // since WP 4.1
    
    return $args;
}

function crunchify_disable_comment_url($fields) { 
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','crunchify_disable_comment_url');
*/
?>
<?php

register_nav_menus( array('starter' => 'Starter') );

add_theme_support( 'post-thumbnails' );

register_sidebar( array(
		'name'          => __( 'Sidebar' ),
		'id'            => 'sidebar',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

wp_enqueue_style( 'starter', get_stylesheet_uri(), array(), '1.0', 'all' );

wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '3.1.1', 'all' );

function page_nav_link() {
    global $wp_query;  
    $total_pages = $wp_query->max_num_pages;  
    
    if ($total_pages > 1){  
    $current_page = max(1, get_query_var('paged'));  
    
    echo '<section>';  
    echo paginate_links(array(  
        'base' => get_pagenum_link(1) . '%_%',  
        'format' => 'page/%#%',  
        'current' => $current_page,  
        'total' => $total_pages,  
        'prev_text' => '&laquo; Precedente',  
        'next_text' => 'Successivo &raquo;'  
        ));  
    echo '</section>';
    }
}

?>
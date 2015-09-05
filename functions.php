<?php

add_theme_support('menus');


if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) )
register_sidebars(1,
    array(
    'name'=>'サイドバー1',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));
register_sidebars(1,
    array(
    'name'=>'サイドバー2',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));
register_sidebars(1,
    array(
    'name'=>'サイドバー3',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));
register_sidebars(1,
    array(
    'name'=>'サイドバー4',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));
register_sidebars(1,
    array(
    'name'=>'サイドバー5',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));


add_theme_support('post-thumbnails');

function shortcode_tw() {
    return '<a href="http://twitter.com/niigatari">@niigatari</a>をフォローしてね';
}
add_shortcode('tw','shortcode_tw');

 ?>

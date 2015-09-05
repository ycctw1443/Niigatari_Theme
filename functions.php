<?php

add_theme_support('menus');

register_sidebar(
    array(
        'name' => 'ウィジェット1'
        'id' => '1'
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_titile' => '</h3>',
    )
    array(
        'name' => 'ウィジェット2'
        'id' => '2'
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_titile' => '</h3>',
    )
);

add_theme_support('post-thumbnails');

function shortcode_tw() {
    return '<a href="http://twitter.com/niigatari">@niigatari</a>をフォローしてね';
}
add_shortcode('tw','shortcode_tw');

 ?>

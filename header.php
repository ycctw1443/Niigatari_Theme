<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    </head>

    <body>
        <div class="container">
            <div class="header">
                <div class="header-title">
                    <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/niigatari_title.jpg"></a>
                </div>
                <div class="header-contents">
                    <p class="copy">「新潟を語り、新潟から語りかける」</p>
                    新潟りは、そんなことを思い描きながら<br>
                    「新潟」と「語り」に関する活動を行っています。
                </div>
                <div class="header-right">
                    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
                    <?php endif; ?>
                </div>
            </div>

            <?php wp_nav_menu(); ?>

<?php wp_head(); ?>

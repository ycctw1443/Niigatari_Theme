<div class="sidebar">
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
    <?php endif; ?>

    <div class="sidebar-posts">

    <?php
        if (have_posts()) :
            while (have_posts()) :
                    the_post();
    ?>

    <div class="sidebar-post">
            <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(150,150)); ?></a>
            <br>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/niigatari_thumbnail.jpg" width="100" height="100">
                <?php endif; ?>

    <?php
            endwhile;
        else:
    ?>
        <p>記事はありません</p>
    <?php
            endif;
    ?>
    </div>
    </div>

</div>

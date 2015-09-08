<div class="sidebar">
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
    <?php endif; ?>

    <div class="sidebar-posts">
	最近の記事<br>
    <?php query_posts('post_type=post&paged='.$paged); ?>
    <?php
    	if (have_posts()) :
        	while (have_posts()) :
                	the_post();
    ?>
        <div class="sidebar-post">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(150,150)); ?></a>
	        <br>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php
        	endwhile;
        else:
    ?>
    	<p>記事はありません</p>
    <?php
    		endif;
    ?>
    <?php wp_reset_query(); ?>
	    </div>
    </div>


</div>

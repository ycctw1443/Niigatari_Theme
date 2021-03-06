<?php get_header(); ?>
        <div class="main">
            <div class="contents">
                <?php if(is_home()): ?>
                    <div class="slider">
                        <!--640*360-->
                		<!-- Start cssSlider.com -->
                		<!-- Generated by cssSlider.com 2.1 -->
                		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/cssslider_files/csss_engine1/style.css">
                		<!--[if IE]><link rel="stylesheet" href="cssslider_files/csss_engine1/ie.css"><![endif]-->
                		<!--[if lte IE 9]><script type="text/javascript" src="cssslider_files/csss_engine1/ie.js"></script><![endif]-->
                		 <div class="csslider1 autoplay ">
                		<input name="cs_anchor1" id="cs_slide1_0" type="radio" class="cs_anchor slide">
                		<input name="cs_anchor1" id="cs_slide1_1" type="radio" class="cs_anchor slide">
                		<input name="cs_anchor1" id="cs_slide1_2" type="radio" class="cs_anchor slide">
                		<input name="cs_anchor1" id="cs_play1" type="radio" class="cs_anchor" checked="">
                		<input name="cs_anchor1" id="cs_pause1_0" type="radio" class="cs_anchor pause">
                		<input name="cs_anchor1" id="cs_pause1_1" type="radio" class="cs_anchor pause">
                		<input name="cs_anchor1" id="cs_pause1_2" type="radio" class="cs_anchor pause">
                		<ul>
                			<li class="cs_skeleton"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/cssslider_files/csss_images1/niigatari.jpg" style="width: 100%;"></a></li>
                			<li class="num0 img slide"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/cssslider_files/csss_images1/niigatari.jpg" alt="サンプル" title="サンプル"></a></li>
                			<li class="num1 img slide"><a href="<?php echo home_url('/'); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/cssslider_files/csss_images1/niigatari.jpg" alt="サンプル2" title="サンプル2"></a></li>
                			<li class="num2 img slide"><a href="<?php echo home_url('/'); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/cssslider_files/csss_images1/niigatari.jpg" alt="サンプル3" title="サンプル3"></a></li>
                		</ul><div class="cs_engine"><a href="http://cssslider.com">bootstrap slider</a> by cssSlider.com v2.1m</div>
                		<div class="cs_description">
                			<label class="num0"><span class="cs_title"><span class="cs_wrapper">サンプル</span></span></label>
                			<label class="num1"><span class="cs_title"><span class="cs_wrapper">サンプル2</span></span></label>
                			<label class="num2"><span class="cs_title"><span class="cs_wrapper">サンプル3</span></span></label>
                		</div>
                		<div class="cs_play_pause">
                			<label class="cs_play" for="cs_play1"><span><i></i><b></b></span></label>
                			<label class="cs_pause num0" for="cs_pause1_0"><span><i></i><b></b></span></label>
                			<label class="cs_pause num1" for="cs_pause1_1"><span><i></i><b></b></span></label>
                			<label class="cs_pause num2" for="cs_pause1_2"><span><i></i><b></b></span></label>
                			</div>
                		<div class="cs_arrowprev">
                			<label class="num0" for="cs_slide1_0"><span><i></i><b></b></span></label>
                			<label class="num1" for="cs_slide1_1"><span><i></i><b></b></span></label>
                			<label class="num2" for="cs_slide1_2"><span><i></i><b></b></span></label>
                		</div>
                		<div class="cs_arrownext">
                			<label class="num0" for="cs_slide1_0"><span><i></i><b></b></span></label>
                			<label class="num1" for="cs_slide1_1"><span><i></i><b></b></span></label>
                			<label class="num2" for="cs_slide1_2"><span><i></i><b></b></span></label>
                		</div>
                		<div class="cs_bullets">
                			<label class="num0" for="cs_slide1_0"> <span class="cs_point"></span>
                				</label>
                			<label class="num1" for="cs_slide1_1"> <span class="cs_point"></span>
                				</label>
                			<label class="num2" for="cs_slide1_2"> <span class="cs_point"></span>
                				</label>
                		</div>
                		</div>
                		<!-- End cssSlider.com -->
                    </div>
                <?php endif; ?>

                <div class="posts">
                    <?php query_posts('post_type=post&paged='.$paged); ?>
                    <?php
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                    ?>

                    <div class="post">
                        <div class="post-header">
                            <h2>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="post-meta">
                                <?php echo get_the_date(); ?> 【<?php the_category(', '); ?>】
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="post-image">
                                <?php the_post_thumbnail(array(100,100)); ?>
                            </div>
                            <div class="post-body">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>

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

                <div class="navigation">
                    <div class="prev"><?php previous_posts_link() ?></div>
                    <div class="next"><?php next_posts_link() ?></div>
                </div>

            </div>

            <?php get_sidebar(); ?>
        </div>
            <?php get_footer(); ?>

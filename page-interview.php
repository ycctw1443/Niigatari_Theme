<?php get_header(); ?>
        <div class="main">
            <div class="contents">
                <div class="posts">
                    <div class="post">
                        <div class="post-header">
                            <h2>
                                <?php the_title(); ?>
                            </h2>
                        </div>
                    </div>

                    <?php $paged = get_query_var('paged'); ?>
                    <?php query_posts("cat=3&posts_per_page=10&paged=$paged"); ?>
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
                   else: ?>
                       <div class="post">記事がありません。</div>
                   <?
                       endif;
                   ?>
               </div>
               <?php wp_reset_query(); ?>

               <div class="posts">

                  <?php
                  if (have_posts()) :
                      while (have_posts()) :
                          the_post();
                  ?>

                  <div class="post">
                      <div class="post-content">

                          <div class="post-body">
                              <?php the_content(); ?>
                          </div>
                      </div>
                  </div>


                  <?php
                      endwhile;
                  else:
                      endif;
                  ?>

              　</div>

            </div>

            <?php get_sidebar(); ?>
        </div>
            <?php get_footer(); ?>

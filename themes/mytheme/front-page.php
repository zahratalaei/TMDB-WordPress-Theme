<?php get_header('secondary');?>
<section class="page-wrap">
     <div class="container">


          <div class="bg">
               <div>
                    <img src="images/logo.jpg" alt="">

               </div>
          </div>
          <?php get_template_part('includes/section', 'content');?>

     </div>

     <?php get_search_form();?> <br><br><br>

     <section class="movie-archive">
          <h2>Popular Movies</h2>

          <div class="movie-wrap">

               <?php
                    $movieArchive = new WP_Query(array(
                         'post_per_page'=>8,
                         'post_type'=>'movies'
                    ));
                    ?>
               <?php if ($movieArchive->have_posts()): while ($movieArchive->have_posts()): $movieArchive->the_post();?>



               <div class="card-body ">
                    <div class="thumbnail-wrapper">
                         <?php if (has_post_thumbnail()):?>
                         <a href="<?php the_permalink(); ?>">
                              <figure class="wp-block-image alignfull size-large">
                                   <img src="<?php echo get_field('image'); ?>" alt=""
                                        class="img-fluid mb-3 img-thumbnail mr-4" style="border-radius: 8px;">
                              </figure>
                         </a>
                         <?php endif;?>
                         <div id="rate" class="d-flex align-center">
                              <strong><?php echo get_post_meta(get_the_ID(), 'rate', true);?>%</strong>

                         </div>
                    </div>
                    <div class="blog-content">
                         <h5><?php the_title();?></h5>
                         <h6><?php echo get_post_meta(get_the_ID(), 'month', true);?>
                              <?php echo get_post_meta(get_the_ID(), 'year', true);?></h6>

                    </div>
               </div>
               <?php endwhile; else:endif;?>
          </div>

     </section>

     <?php get_footer();?>
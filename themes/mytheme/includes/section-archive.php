<?php if (have_posts()): while (have_posts()): the_post();?>

<div class="card mb-3">

     <div class="card-body d-flex flex-column justify-center-center align-center">

          <?php if (has_post_thumbnail()):?>
          <a href="<?php the_permalink(); ?>">
               <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title();?>"
                    class="img-fluid mb-3 img-thumbnail mr-4">
          </a>
          <?php endif;?>
          <div class="blog-content">
               <h3><?php the_title();?></h3>
               <?php the_excerpt();?>

          </div>
     </div>
     <?php endwhile; else:endif;?>
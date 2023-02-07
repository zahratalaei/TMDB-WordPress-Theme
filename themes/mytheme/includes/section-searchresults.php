<?php if (have_posts()): while (have_posts()): the_post();?>
<div>

     <div class="card-body d-flex justify-content-center ">
          <div>
               <?php if (has_post_thumbnail()):?>
               <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title();?>"
                         class="img-fluid mb-3 img-thumbnail mr-4">
               </a>
               <?php endif;?>
          </div>
          <div>
               <h2><?php the_title();?></h2>


          </div>
     </div>
     <?php endwhile; else:endif;?>
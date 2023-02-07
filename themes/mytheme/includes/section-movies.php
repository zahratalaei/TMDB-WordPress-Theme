<?php if (have_posts()): while (have_posts()): the_post();?>
<?php the_content();?>


<div class="movie-card row row-cols-2 row-cols-md-2 ">
     <div class="movie-img col-xs-6 col-sm-4 col-lg-3 col-md-3">
          <figure class="wp-block-image alignfull img">
               <img src="<?php echo get_field('image'); ?>" alt="" class="img-fluid ml-3 mr-4"
                    style="border-radius: 10px;">
          </figure>
     </div>
     <div class="movie-detail col-sm-4 col-lg-3 col-md-3">
          <h1 class=""><?php echo get_post_meta(get_the_ID(), 'name', true);?></h1><br>
          <div class="info mt-2 mt-lg-5 ">
               <h4><?php echo get_post_meta(get_the_ID(), 'year', true);?> .
                    <?php echo get_post_meta(get_the_ID(), 'rate', true);?>/100
               </h4>
               <h4>
                    <?php echo get_post_meta(get_the_ID(), 'run_time', true);?>
               </h4>
          </div>

     </div>

</div>

<section id="review">
     <hr>
     <h2>Review</h2>
     <div>
          <p><?php echo get_post_meta(get_the_ID(), 'review', true);?></p>
     </div>

</section>
<?php //comments_template();?>

<?php endwhile; else:endif;?>
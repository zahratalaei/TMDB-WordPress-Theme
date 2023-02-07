<?php get_header('secondary');?>
<section class="page-wrap">
     <div id="single-movie">
          <?php if (has_post_thumbnail()):?>

          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" class="img-fluid mb-3 ">
          <?php endif;?>

          <a href="../../" class="previous"><i class="fas fa-arrow-left "></i></a>
     </div>


     <?php get_template_part('includes/section', 'movies');?>
     <?php wp_link_pages();?>

</section>
<?php get_footer();?>
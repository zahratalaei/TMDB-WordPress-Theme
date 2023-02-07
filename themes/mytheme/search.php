<?php get_header('secondary');?>
<section class="page-wrap">
     <div class="container">
          <a href="./" class="previous"><i class="fas fa-arrow-left "></i></a>

          <div class="result-container">
               <h1>Search Results for <?php echo get_search_query();?></h1>
               <div>
                    <?php get_template_part('includes/section', 'searchresults');?>
               </div>
          </div>
          <?php previous_posts_link(); ?>
          <?php next_posts_link();?>

     </div>
</section>
<?php get_footer();?>
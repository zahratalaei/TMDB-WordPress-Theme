<?php if (have_posts()): while (have_posts()): the_post();?>
<p><?php echo get_the_date('h:i:s d/m/y');?></p>
<?php the_content();?>

<p><?php $fname = get_the_author_meta('first_name');
$lname = get_the_author_meta('last_name');
echo $fname.' '.$lname;?></p>
<?php
$tags= get_the_tags();
if ($tags) {
    foreach ($tags as $tag):?>
<a href="<?php echo get_tag_link($tag->term_id)?>"><?php echo $tag->name?></a>

<?php endforeach;
}?>
<?php $categories = get_the_category();?>
<?php foreach ($categories as $cat):?>
<?php echo $cat->name;?>
<?php endforeach;?>


<?php //comments_template();?>

<?php endwhile; else:endif;?>
<?php
 get_header();

while(have_posts()) {

the_post();  //function that keeps track of which post we are working on and get the next one ready
?>
<h2><?php the_title() ?> </h2>
<?php the_content(); ?>


<?php }
 get_footer();
 ?>

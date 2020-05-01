
<?php get_header();

//get_header() - will get contents from the header.php file
//get_footer(); will get contents from the footer.php file


// have_posts() - keep looping as long as we have posts
//the_post() - function that keeps track of which post we are working on and get the next one ready
//the_title()- post title
//the_content()- post contnet
//the_permalink() = link to page

//theme folder files matter: index: main, single: one post, page: single page
//the famous wordpress loop => while loop!
//header -> content meat - > footer 

while(have_posts()) {

the_post();  //function that keeps track of which post we are working on and get the next one ready
?>
<h2><a href='<?php the_permalink();?>' ><?php the_title() ?> </a></h2>
<?php the_content(); ?>

<hr>

<?php }

get_footer();
 ?>

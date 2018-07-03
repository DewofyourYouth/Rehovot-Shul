<?php
/**
* Template Name: Home Page
*
*
*
*/
?>
<?php get_header(); ?>

 <?php if (have_posts() ) : ?>
                <?php while (have_posts() ) : the_post(); ?>
    <div class="jumbotron jumbotron-fluid  gradient-bg">
        <div class="container">
            <h2 class="display-2 text-center" style="color: white;"><?php bloginfo('name'); ?></h2>
            <h4 class="text-center" style="color: white;"><?php bloginfo("description"); ?></h4>
        </div>
    
    
    </div>
    <div class="container">
        <div class="row">
            <?php the_content(); ?>
        </div>
                <?php endwhile; ?>
                <?php endif; ?> 
            </div>
    </div>
<?php get_footer(); ?>
<?php
/**
* Template Name: Slim Page
*
*
*
*/
?>
<?php get_header(); ?>

 <?php if (have_posts() ) : ?>
                <?php while (have_posts() ) : the_post(); ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="text-center"><?php bloginfo('name'); ?></h2>
            <h1 class="display-3 text-center"><?php the_title(); ?></h1>
        </div>
    
    
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div>
                    <p class="text-center">
                      <?php the_content(); ?>
                    </p>
                </div>
                <?php endwhile; ?>
                <?php endif; ?> 
            </div>
        </div>
    </div>
<?php get_footer(); ?>
<?php
/**
 * The template for displaying the index page
 * 
 * 
 * @package RehovotMinyan
 * 
*/

?>


<?php get_header(); ?>
   <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3"><?php bloginfo('name'); ?></h1>

            <h4><?php bloginfo("description"); ?></h4>
        </div>


    </div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php if (have_posts() ) : ?>
                <?php while (have_posts() ) : the_post(); ?>
                       <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink() ) ), '</a></h2>'); ?>
                    <p>
                         <small>
                           Written by <strong><?php the_author(); ?></strong> | <?php the_time('l, F jS, Y'); ?>
                        </small>
                    </p>


                <div>
                    <p>
                      <?php the_content(); ?>
                    </p>
                </div>
                <?php endwhile; ?>
            <?php endif; ?> 
          
</div>
        
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>

 
<?php get_footer(); ?>
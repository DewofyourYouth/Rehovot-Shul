<?php get_header(); ?>
 <?php if (have_posts() ) : ?>
                <?php while (have_posts() ) : the_post(); ?>
   <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3"><?php bloginfo('name'); ?></h1>

            <h4><?php the_title(); ?></h4>
        </div>


    </div>
<div class="container">


                <div>
                    <p>
                      <?php the_content(); ?>
                    </p>
                </div>
                <?php endwhile; ?>
            <?php endif; ?> 
</div>
<?php get_footer(); ?>
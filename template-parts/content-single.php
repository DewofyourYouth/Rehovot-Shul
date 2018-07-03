<?php
/**
 * The template partial for displaying single blog post content
 * 
 * @package RehovotMinyan
 * 
*/

?>

 <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <h1>
       <?php the_title(); ?>
    </h1>
        <p>
             <small>
               Written by <strong><?php the_author(); ?></strong> | <?php the_time('l, F jS, Y'); ?>
            </small>
        </p>
    
    
    
          <?php the_content(); ?>
         
         <?php
          wp_link_pages(array(
              'before' => '<div class="page-links"><span class="page-links-title">'. __('Pages: ', 'RehovotMinyan').'</span>',
              'after'  => '</div>',
              'link_before' => '<span>',
              'link_after' => '</span>',
              'separator' => ' | '
              ));
          ?>
</div>
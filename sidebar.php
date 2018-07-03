<?php
/**
 * The template for displaying the sidebar and widgets
 * 
 * 
 * @package RehovotMinyan
 * 
*/

?>

<?php if (is_active_sidebar( 'sidebar-1' )) : ?>
    <aside id="secondary" class="sidebar widget-area" role="complememtary">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside>
<?php endif; ?>
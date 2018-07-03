 <?php
/**

*This is the footer
* @package Rehovot Minyan theme

*/
?>
<footer id="site-footer">
   
    <div class="container">
	<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'RehovotMinyan' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'RehovotMinyan' ), 'WordPress' ); ?></a>         <hr>
        <p class="copyright">
            &copy; 2018 Designed and Developed by <a href="https://dewofyouryouth.com" target="_blank">Dew of your Youth</a>
        </p> 
    </div>
</footer>
  <?php wp_footer(); ?>
</body>
</html>
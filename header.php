<?php
/**

*This is the header - it displays the navbar and the title area of the site
*
* @package Rehovot_Minyan

*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

 <nav class="navbar navbar-expand-lg gradient-bg">
  <a class="navbar-brand" href="<?php echo home_url(); ?>"><img width="30" height="auto" src="https://rehovot-shul-yshore.c9users.io/wp-content/uploads/2018/02/cropped-Magen-David.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i>
</span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="nav navbar-nav">
      <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'primary-menu',
            'container' => false,
            'items_wrap' => '%3$s'
            ));


      ?>

    </ul>
  </div>
</nav>

 

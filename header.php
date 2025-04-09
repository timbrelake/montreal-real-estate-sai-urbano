<?php
if ( !defined( 'ABSPATH' ) )
exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php // add font code here ?> <link rel="stylesheet" href="https://use.typekit.net/idj0cmj.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class='align-right'>
   <button class='hide-text'>Menu</button>
</div>

<header>
<div class='branding'>
    <?php
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
    ?>

    <div class="siteinfo">
        <a href='<?php echo esc_url(home_url()); ?>'>
        <?php bloginfo( 'name' );
        ?>
        </a>
       

        <div class='description'>
        <?php bloginfo( 'description' );
        ?>
        </div> 
    </div>
</div>

<?php get_search_form(); ?>
</header>


<nav class="primary-nav">
<?php
wp_nav_menu( array(
'menu_class'	  	=> 'primary-menu',  // adds: class = 'primary-menu'
'theme_location' 	=> 'header-menu',   // is controlled as the 'header menu' in the backend
'menu_id'	    	=> 'menu',          // adds: id = 'menu'
'container'         => 'div',           // menu is inside a div class="menu-header-container"
) );
?>
</nav>

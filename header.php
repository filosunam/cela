<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage CELA
 * @since CELA 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery/jquery-1.4.2.min.js"></script>	
	
<!-- Scripts de la galería del encabezado -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.cross-slide.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(function() {
    $('#slideshow').crossSlide({
      sleep: 2,
      fade: 1
    }, [
      { src: '<?php bloginfo('template_directory'); ?>/images/encabezado/1.png' },
      { src: '<?php bloginfo('template_directory'); ?>/images/encabezado/4.png' },
      { src: '<?php bloginfo('template_directory'); ?>/images/encabezado/5.png' },
      { src: '<?php bloginfo('template_directory'); ?>/images/encabezado/6.png' }
    ])
  });
</script>

<!-- Scripts para el fondo reajustable -->
<script src="<?php bloginfo('template_directory'); ?>/js/fondo-reajustable.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
	$('#background').smartBackgroundResize({ image: "<?php bloginfo('template_directory'); ?>/images/fondo-rectoria-2.jpg"});
	});
</script>

<style type="text/css">
	.encabezado{
		background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/background-header-middle.png);
		background-repeat: repeat-x;
		width:100%;
		padding:0px;
		margin:0px;
		height:103px;
		border: 0;
	}
</style>

</head>

<body <?php body_class(); ?>>
<!-- Fondo reajustable -->	
<div id="background"></div>
<!-- Termina fondo reajustable -->

	
<!-- Centra la pagina -->
<div class="main">	
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
		<!-- Encabezado -->
		<div class='encabezado'>
    		<a href='http://www.unam.mx' target='_blank'><img src='<?php bloginfo('template_directory'); ?>/images/encabezado-unam.png' alt='Universidad Nacional Autónoma de México' /></a>    
	        
	        		<!-- logo -->        
					<div class='cela-title'><a href="<?php bloginfo('home'); ?>" title="<?php bloginfo('title'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-45-cela.png" alt="logo" /></a></div>
					
					<!-- Rotacion de imagenes del encabezado --> 	
					<div id='slideshow'>
					</div>
		</div>			
<!-- Termina Encabezado -->

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->

		</header><!-- #masthead -->
		

		<div id="main" class="site-main">
			
<!-- Menú izquierdo -->

			<div class='menu-container clear'>
       				<div id='navigation'>
        				<?php wp_nav_menu (array( 'theme_location' => 'main-nav-menu') ); ?>
    	    		</div>
			</div>



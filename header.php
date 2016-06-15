<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iteach
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Bootstrap core CSS -->
<link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- FontAwesome Icons -->
<link href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'iteach' ); ?></a>

        <!-- HEADER
        ========================================================= -->    	
        <header class="site-header" role="banner">
            
             <!-- NAVBAR
            ========================================================= -->    	           
            <div class="navbar-wrapper">
                
                <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                  <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="/"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/logo.png" alt="iTeach WordPress"></a>
                    </div><!-- navbar-header -->
                
                    <?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'container' => 'nav',
							'container_class' => 'collapse navbar-collapse',
							'menu_class' => 'nav navbar-nav navbar-right',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker()
						));
					?>
                    
                  </div><!-- container -->
                </div><!-- navbar --> 
                
             </div><!-- navbar-wrapper -->
                 	
        </header>

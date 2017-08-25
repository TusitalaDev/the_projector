<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theProjector
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- 
		ASSETS 
	-->
	<!-- bootstrap core css -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">

	<!-- font awesome icons -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">


	<!-- slick -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/vendor/slick/slick-theme.css">

	<!-- pickadate -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/bower_components/pickadate/lib/themes/default.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/bower_components/pickadate/lib/themes/default.date.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/bower_components/pickadate/lib/themes/default.time.css">
	<!-- <link rel="stylesheet" type="text/css" href="bower_components/pickadate/lib/themes/classic.css">
	<link rel="stylesheet" type="text/css" href="bower_components/pickadate/lib/themes/classic.date.css">
	<link rel="stylesheet" type="text/css" href="bower_components/pickadate/lib/themes/classic.time.css"> -->
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<!-- typekit font -->
	<!-- for minified version add this -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/fonts/proxima-nova/fonts/fonts.min.css" />
	<!-- 
		END OF ASSETS 
	-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'theprojector' ); ?></a>

	<!-- HEADER
	================================================== -->
	<header class="site-header" role="banner">
		<!-- HERO
	    ================================================== -->
	  <!--   <section id="hero" data-type="background" data-speed="5">
	    	<article>
	    		<div class="container clearfix">
	    			<div class="row">

			    		
	    			</div>
	    		</div>
	    	</article>
	    </section> -->


		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>
		 
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      	<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/movieposters/moonlight-movie-reviews.jpg" alt="...">
		      	<div class="carousel-caption hero">
		      		<h3>MOONLIGHT</h3>
		      		<p class="carousel-caption-p">The long-awaited Oscar Best Picture winner finally comes to our screen.</p>
		      	</div>
		    </div>
		    <div class="item">
		      	<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/movieposters/o-MANHATTAN-BRIAN-HAMILL-facebook.jpg" alt="...">
		      	<div class="carousel-caption hero">
		      		<h3>Caption Text</h3>
		      		<p class="carousel-caption-p">The long-awaited Oscar Best Picture winner finally comes to our screen.</p>
		      	</div>
		    </div>
		    <div class="item">
		      	<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/images_for_website/movieposters/misshokusai_a.jpg" alt="...">
		      	<div class="carousel-caption hero">
		      		<h3>Caption Text</h3>
		      		<p class="carousel-caption-p">The long-awaited Oscar Best Picture winner finally comes to our screen.</p>
		      	</div>
		    </div>
		  	</div>
		 
		  	<!-- Controls -->
		  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    	<i class="fa fa-angle-left " aria-hidden="true" style="font-size:50px; font-weight:100"></i>
		  	</a>
		  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    	<i class="fa fa-angle-right " aria-hidden="true" style="font-size:50px; font-weight:100"></i>
		  	</a>
		</div> <!-- Carousel -->
		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper">
			
			<div class="navbar" role="navigation">
				<div class="">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<?php
						wp_nav_menu( array(
							
							'theme_location'      => 'menu-1',
							'container'           => 'div',
							'container_class'     => 'navbar-collapse collapse',
							'sub_container'       => 'div',
							'sub_container_class' => 'col-md-12',
							'menu_class'          => 'nav navbar-nav'

						));
					?>
					<!-- <div class="navbar-collapse collapse">
						<div class="col-md-12">
							<ul class="nav navbar-nav ">
								<li class=""><a href="films.html">FILMS +</a></li>
								<li><a href="events.html">EVENTS +</a></li>
								<li><a href="resources.html">STUFF</a></li>
								<li class="main-nav-title"><a href="/"><img width="150px" src="assets/img/images_for_website/Logo/logo-header.png"></a></li>
								<li><a href="/">CAFÉ BAR</a></li>
								<li><a href="blog.html">HIRE</a></li>
								<li><a href="resources.html">ABOUT +</a></li>

							</ul>
						</div>
						
					</div> -->
				</div>
			</div>
		
		</div> <!-- navbar wrapper -->
	</header>

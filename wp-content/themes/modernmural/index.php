<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="img/favicon.png" rel="shortcut icon" type="image/png"/>
		<meta name="description" content="">

		<link rel="stylesheet" href="css/vendor/normalize.min.css">
		<link rel="stylesheet" href="wp-content\themes\modernmural\style.css" type="text/css" media="screen, projection" />

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<div class="page"> <!-- used for grid -->

		  <nav>
		    <!-- Navigation -->
		      <div id="social_media" class="topnav">
		        <ul class="social">
		          <!-- Social Media NEEDS UPDATED TO THE MODERN MURAL -->
		          <!-- Facebook -->
		          <li class="social"><a href="https://www.facebook.com/SimpleStencils/?ref=br_rs">
		            <img src="wp-content\themes\modernmural\img\facebook.png" alt="facebook" title="Like us on Facebook">
		          </a></li>

		          <!-- Twitter -->
		          <li class="social"><a href="https://twitter.com/SimpleStencils">
		            <img src="wp-content\themes\modernmural\img\twitter.png" alt="twitter" title="Follow us on Twitter">
		          </a></li>

		          <!-- Pinterest -->
		          <li class="social"><a href="https://www.pinterest.com/simplestencils/">
		            <img src="wp-content\themes\modernmural\img\pinterest.png" alt="pinterest" title="Pin with us on Pinterest">
		          </a></li>

		          <!-- YouTube  -->
		          <li class="social"><a href="https://www.youtube.com/user/simplestencils">
		            <img src="wp-content\themes\modernmural\img\youtube.png" alt="youtube" title="Watch our videos on Youtube">
		          </a></li>

		          <!-- Mail -->
		          <li class="social"><a href="mailto:TheModernMural@gmail.com">
		            <img src="wp-content\themes\modernmural\img\emailicon.png" alt="email" title="Email us about your mural">
		          </a></li>
		        </ul>
		      </div>

		      <!-- Contact us CTA -->
		      <div class="contact_btn"><a href="contact.html">
		        <h3>Contact Us</h3>
		      </a></div>

		      <div class="sister topnav"><a href="https://www.thesimplestencil.com">
		        <p>Visit our sister site</p>
		        <img src="wp-content\themes\modernmural\img\simplestencil.png" alt="sister site" title="Visit our Sister Site, The Simple Stencil">
		      </a></div>

		  </nav>

	<main role="main">
		<!-- section -->
		<section>

			<!-- Page Title -->

			<header class="header">
			  <h1 class="page-title">Blog</h1>
			  <h3 class="page-title_tertiary">Designing Your Walls</h3>
			</header>

			<!-- Content -->

			<?php if (have_posts()) : ?>
			  <div class="blog-grid">
			    <?php while (have_posts()) : the_post(); ?>

			      <div class="blog-card">
								<?php
								the_content($more_link_text,$strip_teaser,$more_file);
								?>
			          <h3 class="blog-card__category"><?php
			          $all_categories = get_the_category('');
			          foreach ($all_categories as $one) { ?>
			            <a href="<?=$one->slug; ?>"><?= $one->name; ?></a>&nbsp;
			            <?php }
			          ?></h3>
			          <h2 class="blog-card__title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>

			      </div>

			    <?php endwhile; ?>
			  </div>
			<?php else: ?>
				<h2>Sorry nothing was found.</h2>
			<?php endif; ?>


		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

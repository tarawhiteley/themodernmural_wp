<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="img/favicon.png" rel="shortcut icon" type="image/png"/>
		<meta name="description" content="">

		<link rel="stylesheet" href="css/vendor/normalize.min.css">
		<link rel="stylesheet" href="<php bloginfo('stylesheet_directory'); ?>style.css" type="text/css" media="screen, projection" />

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
		            <img src="img/facebook.svg" alt="facebook" title="Like us on Facebook">
		          </a></li>

		          <!-- Twitter -->
		          <li class="social"><a href="https://twitter.com/SimpleStencils">
		            <img src="img/twitter.svg" alt="twitter" title="Follow us on Twitter">
		          </a></li>

		          <!-- Pinterest -->
		          <li class="social"><a href="https://www.pinterest.com/simplestencils/">
		            <img src="img/pinterest.svg" alt="pinterest" title="Pin with us on Pinterest">
		          </a></li>

		          <!-- YouTube  -->
		          <li class="social"><a href="https://www.youtube.com/user/simplestencils">
		            <img src="img/youtube.svg" alt="youtube" title="Watch our videos on Youtube">
		          </a></li>

		          <!-- Mail -->
		          <li class="social"><a href="mailto:TheModernMural@gmail.com">
		            <img src="img/mail.svg" alt="email" title="Email us about your mural">
		          </a></li>
		        </ul>
		      </div>

		      <!-- Contact us CTA -->
		      <div class="contact_btn"><a href="contact.html">
		        <h3>Contact Us</h3>
		      </a></div>

		      <div class="sister topnav"><a href="https://www.thesimplestencil.com">
		        <p>Visit our sister site</p>
		        <img src="img/simplestencil.png" alt="sister site" title="Visit our Sister Site, The Simple Stencil">
		      </a></div>

		  </nav>

		<header>
		  <img src="img/header_mural.png" alt="mural and desk" title="Bring design to your walls with our murals!" id="hero">

		  <!-- striped border
		  <div class="striped_border"><img src="img/greenstripeborder.png" alt="border"></div>
		  -->

		  <!-- logo -->
		  <div class="logo"><img src="img/signature.png" alt="logo" title="The Modern Mural"> </div>

		  <!-- call to action -->
		  <div class="create"><img src="img/create.png" alt="create your own" title="Create your own design"> </div>
		</header>

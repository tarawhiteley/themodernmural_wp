<?php
/*
Template Name: Home
*/
get_header(); ?>

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

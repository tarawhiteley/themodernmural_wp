<?php get_header(); ?>
	<main role="main">
		<!-- section -->
		<section>

			<!-- Page Title -->

			<header class="header">
			  <h2 class="page-title">Blog</h2>
			  <h3 class="page-title_tertiary">Designing Your Walls</h3>
			</header>

			<!-- Content -->

			<?php if (have_posts()) : ?>
			  <div class="blog-grid">
			    <?php while (have_posts()) : the_post(); ?>

			      <div class="blog-card">
			        <a href="#">
			          <img src="http://via.placeholder.com/700x455" alt="" />
			          <h3 class="blog-card__category"><?php
			          $all_categories = get_the_category('');
			          foreach ($all_categories as $one) { ?>
			            a href="<?=$one->slug; ?>"><?= $one->name; ?></a>&nbsp;
			            <?php }
			          ?></h3>
			          <h2 class="blog-card__title"><?php the_title(); ?></h2>
			        </a>
			      </div>

			    <?php endwhile; ?>
			  </div>
			<?php else: ?>
				echo "Sorry nothing was found." ;
			<?php endif; ?>


		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

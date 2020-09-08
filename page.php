<?php
/*
Template Name: page
*/

get_header(); ?>

<main>
	<div class="inner1000">
		<!-- header start -->
		<div class="main-header">
			<div class="main-header-title">
				<p>社会人のための</p>
				<h1><span class="title">ヒューマン</span><span class="title">アートスクール</span></h1>
				<h2><span class="subtitle"><?php echo the_title(); ?></span></h2>
			</div>
		</div>
		<!-- header end -->

		<!-- main start -->
		<?php the_post(); ?>
    <?php the_content(); ?>
		<!-- main end -->
	</div>
</main>

<?php get_footer(); ?>

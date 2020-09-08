<?php
/*
Template Name: お問い合わせ
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
			<section class="box">
				<div class="contact-text">
					<h3><span class="underline">ヒューマン<br class="pc-none">アートスクールの<br>資料請求・お問い合わせ</span></h3>
					<p>お問い合わせをいただきますと、<br class="pc-none">メールにてスクールの資料をお送りいたします。<br>別途郵送をご希望の方は、<br class="pc-none">郵便番号と住所の欄にもご記入ください。</p>
				</div>

				<div class="contact-form">
					<?php the_post(); ?>
					<?php the_content(); ?>
				</div>
			</section>
			<!-- main end -->
		</div>
	</main>

<?php get_footer(); ?>

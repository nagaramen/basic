<?php
/*
Template Name: コースのご紹介
*/

get_header();

$cat_info = get_category($cat); //get_category($cat)でも可能。$catは現在のカテゴリーIDは入る。
$cat_name = $cat_info -> cat_name; //現在表示のカテゴリー名
$cat_id = $cat_info -> cat_ID;
$cat_slug = $cat_info -> slug;
$cat_parent = $cat_info -> parent;

$cat_children = get_term_children($cat_id, 'category');
?>

<?php if($cat_slug == "epithese"): ?>
<main class="<?php echo $cat_slug ?> body">
<?php else: ?>
<main class="<?php echo $cat_slug ?>">
<?php endif; ?>
	<div class="inner1000">
		<!-- header start -->
		<div class="main-header">
			<div class="main-header-title">
				<p>社会人のための</p>
				<h1><span class="title">ヒューマン</span><span class="title">アートスクール</span></h1>
				<h2><span class="subtitle"><?php echo $cat_name; ?></span></h2>
			</div>
		</div>
		<!-- header end -->

		<?php
			$page = get_query_var('page') ? get_query_var('page'): 1;
			$args = array(
				'post_type' => array('post'),
				'post_status' => array('publish'),
				'category_name' => $cat_slug,
				'orderby' => 'date',
				'order' => 'DESC',
				'paged' => $page
			);

			$query = new WP_Query($args);
			if($query -> have_posts() && 1 < $query -> post_count) :
		?>

		<section class="course">
			<?php if($cat_children): ?>
				<div class="course-button">
					<?php
						foreach($cat_children as $cat_child):
							$child_info = get_category($cat_child);
							$child_slug = $child_info -> slug;
							$child_name = $child_info -> cat_name;
					?>
					<button href="#" id="<?php echo $child_slug ?>">
						<?php echo $child_name ?>
					</button>
					<?php endforeach; ?>
				</div>

				<div class="course-3">
					<?php
						while($query -> have_posts()) : $query -> the_post();
							$category = get_the_category($post -> ID);
							$child_slug = $category[0] -> slug;
					?>
						<div class="<?php echo "course-3-" . $post -> post_name . " " . $child_slug ?>">
							<a href="#<?php echo $post -> post_name ?>">
								<?php the_post_thumbnail($size, $attr); ?>
								<h4><?php echo the_title(); ?></h4>
								<p><?php echo the_excerpt(); ?></p>
							</a>
						</div>
					<?php
						endwhile;
					?>
				</div>
			<?php else: ?>
				<div class="course-3">
				<?php
					while($query -> have_posts()) : $query -> the_post();
				?>
					<div class="<?php echo "course-3-" . $post -> post_name ?>">
						<a href="#<?php echo $post -> post_name ?>">
							<?php the_post_thumbnail($size, $attr); ?>
							<h4><?php echo the_title(); ?></h4>
							<p><?php echo the_excerpt(); ?></p>
						</a>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</section>

		<?php endif; ?>

		<?php if(have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile;?>
		<?php endif; ?>
	</div>
</main>


<?php get_footer(); ?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<main>
	<div class="inner1000">
		<!-- header start -->
		<div class="main-header">
			<div class="main-header-title">
				<p>社会人のための</p>
				<h1><span class="title">ヒューマン</span><span class="title">アートスクール</span></h1>
			</div>

			<h2>
				<span class="underline">笑顔を増やす技術が、</span><br><span class="underline">ここにある。</span>
			</h2>

			<div class="lead">
				<div class="lead-text">
					<p>・傷痕や身体的欠損を補うエピテーゼ制作<br>・特殊メイク技法を活用したリカバリーメイク<br>などの技術をレクチャーし、医療支援活動の一環を担うスペシャリストに育成します。</p>
				</div>
				<div class="lead-cv">
					<p>
						日本で唯一の<br>
						医療支援技術スクール<br>
						受講⽣を<br>
						限定募集中！
					</p>
					<a href="<?php echo get_permalink(21);?>" class="cv-btn">資料請求する<span class="arrow-double"></span></a>
				</div>
			</div>
		</div>
		<!-- header end -->

		<!-- main start -->
		<section class="voice">
			<h3>卒業生の声</h3>
			<p>
				現在まで100名以上の<br class="pc-none">卒業生を輩出しています。<br>
				卒業生には独立だけでなく、<br>
				1年後に講師になれるよう<br class="pc-none">「技術の継承」を行っています。<br>
				スクールの卒業後も<br class="pc-none">サポートを継続しています。
			</p>
			<ul class="voice-students">
				<li class="voice-students-student">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ogawa.jpg" alt="小川さん">
					<h4>小川さん</h4>
					<ul>
						<li><a href="<?php echo get_category_link(4);?>" class="purple">⼿指エピテーゼコース</a></li>
						<li><a href="<?php echo get_category_link(4);?>" class="purple">乳房エピテーゼコース</a></li>
					</ul>
					<p>医療職の資格等は所持しておらず、初⼼者でもできるか不安でしたが、⼀から丁寧に教えていただき、本物そっくりの指を作ることができて感動しました。練習した分だけ、沢⼭のアドバイスやヒントを教えてくださいます。<br>
					<p>物作りが好きな⽅。⼈の役に⽴ちたい⽅。⼈体に興味がある⽅にもおすすめです！</p>
				</li>
				<li class="voice-students-student">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/miyazaki.jpg" alt="宮崎さん">
					<h4>宮崎さん</h4>
					<ul>
						<li><a href="<?php echo get_category_link(4);?>" class="purple">⼿指エピテーゼコース</a></li>
						<li><a href="<?php echo get_category_link(5);?>" class="cyan">あざ・タトゥカバー・コース</a></li>
						<li><a href="<?php echo get_category_link(5);?>" class="cyan">ニップルコース</a></li>
					</ul>
					<p>1対1のマンツーマンレッスンで、細かく⼯程を聞くことも出来、写真や動画の撮影も可能なので、後から⾒直しも出来て確実な学習が出来ました。</p>
					<p>牧野先⽣の⽣徒さんは全国にいるので、私よりも先に活動している⽅達からのお話も聞く事が出来、モチベーションも上がりました。</p>
				</li>
				<li class="voice-students-student">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arakawa.jpg" alt="荒川さん">
					<h4>荒川さん</h4>
					<ul>
						<li><a href="<?php echo get_category_link(4);?>" class="purple">⼿指エピテーゼコース</a></li>
						<li><a href="<?php echo get_category_link(4);?>" class="purple">乳房エピテーゼコース</a></li>
						<li><a href="<?php echo get_category_link(5);?>" class="cyan">傷跡・熱傷カバーコース</a></li>
						<li><a href="<?php echo get_category_link(6);?>" class="salmon">エアブラシエンゼルメイクコース</a></li>
					</ul>
					<p>特筆すべきは先⽣の知識の深さ、⽣徒への愛情、そして当事者の⽅の⼼に寄り添うお気持ちです。納得いくまで指導していただき、卒業後のフォローもきめ細かくしてくださり遠⽅でも安⼼して通えます。</p>
					<p>がん患者様のサポート団体での活動や、エピテーゼやリカバリーメイクを必要としている⽅々に、選択肢の提案や資料等の展⽰・デモなどを⾏っています。</p>
				</li>
			</ul>
		</section>

		<section class="what_is_human_art_school">
			<div class="what_is_human_art_school-text">
				<h3>『ヒューマンアートスクール』とは</h3>
				<div class="what_is_human_art_school-text-block">
					<p>医療行為により生じた傷や身体的な欠損を補うエピテーゼなどの医療支援技術を、「レッスン形式」で教える日本で唯一の医療支援スクールです。高度な専門技術を未経験者でも習得できるように、1人1人に合わせたカリキュラムを提供しております。</p>
					<p>ヒューマンアートスクールは、今までの医療支援技術の教育を更に充実させると共に、近年注目度の高まっている「感性工学」を取り入れ、より審美性の高い技術の習得が図れる教育機関を目指しております。</p>
				</div>
			</div>
			<div class="what_is_human_art_school-image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/what_is_human_art_school-1.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/what_is_human_art_school-2.jpg">
			</div>
			<a href="<?php echo get_permalink(21);?>" class="cv-btn">資料請求する<span class="arrow-double"></span></a>
		</section>

		<section class="course">
			<h3>ヒューマン<br>アートスクール</h3>
			<p>3つのコース</p>

			<div class="course-3">
				<?php
					$args = array(
						'type'					=> 'post',
						'parent'				=> 2,
						'order'   			=> 'ASC',
						'hide_empty'		=> FALSE,
						'hierarchical'	=> 1,
						'taxonomy'			=> 'category',
					);
					$categories = get_categories($args);
					foreach($categories as $category):
				?>
					<div class="course-3-<?php echo $category -> slug ?>">
						<a href="/course/<?php echo $category -> slug ?>/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $category -> slug ?>.jpg" alt="">
							<h4><?php echo $category -> name ?></h4>
							<p><?php echo category_description($category -> term_id); ?></p>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</section>

		<section class="features">
			<div class="features-text">
				<h3>『ヒューマンアートスクール』<br><span class="small">３つの特徴</span></h3>
				<h4><span class="underline">スクールの卒業後は<br>コースで学んだ内容での<br>独立や講師のキャリアも</span></h4>
				<p>
					本校卒業後の進路について大別すると、独立して起業する（副業を含む）方と、講師としての進路を選ぶ方の2つに別れます。当校の卒業生の方の多くは独立起業され、独自営業や病院と提携して患者様に対処することで、自営業者として営業されています。また、製造する側では無く、医療支援の技術や知識を活かして、講師として活動される方がいらっしゃいます。主として看護師や義肢装具士としての資格を持つ方々が、後者のコースを選択されています。当校に於いて講師として残って戴く道も、選択肢としては有ることを申し添えます。
				</p>
			</div>
			<div class="features-image">
				<ul>
					<li>リカバリーメイク・<br>エピテーゼ制作の<br>スペシャリストに</li>
					<li>未経験の<br>生徒さんも<br>多数参加</li>
					<li>1人1人に合わせた<br>カリキュラムと<br>時間割</li>
				</ul>
			</div>
			<a href="<?php echo get_permalink(21);?>" class="cv-btn">資料請求する<span class="arrow-double"></span></a>
		</section>
		<!-- main end -->
	</div>
</main>

<?php get_footer(); ?>

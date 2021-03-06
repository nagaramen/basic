<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
  	<title>ヒューマンアートスクール｜Human Art School</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
    <meta name="google-site-verification" content="SXJ4sf6pRNprEetBGLVSgPG_53opCuoP5OVNCdbhZh0" />

  	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon-180x180.png">

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-592840185"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'AW-592840185');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177655820-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-177655820-1');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W9Z9PSB');</script>
    <!-- End Google Tag Manager -->
		<?php wp_head(); ?>
  </head>

  <body class="loading">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9Z9PSB"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

  	<header>
  		<div class="inner1200">
  			<a href="/" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Human Art Schoolロゴ"></a>
  			<nav>
  				<address><span class="tel">TEL</span><a href="tel:03-6380-1149">03-6380-1149</a><span class="small">（平⽇9:00〜17:00）</span></address>
  				<ul class="parent">
  					<li><a href="<?php echo get_permalink(19);?>">スクールについて</a></li>
  					<li class="course">
              <span>コースのご案内</span>
              <ul class="child">
                <li class="epithese"><a href="<?php echo get_category_link(4);?>">エピテーゼ製作</a></li>
                <li class="recovery"><a href="<?php echo get_category_link(5);?>">リカバリーメイク</a></li>
                <li class="angel"><a href="<?php echo get_category_link(6);?>">エアブラシエンゼルメイク</a></li>
              </ul>
            </li>
  					<li class="line-through">コースの様子</li>
  					<li class="line-through">ブログ記事</li>
  					<li class="contact"><a href="<?php echo get_permalink(21);?>">お問い合わせ</a></li>
  				</ul>
  				<div id="hamburger">
  					<span></span>
  					<span></span>
  					<span></span>
  				</div>
  			</nav>
  		</div>
  	</header>

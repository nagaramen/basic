<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */
?>

  <footer>
    <div class="inner1000">
      <div class="footer-header">
        <a href="./index.html" class="footer-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-black.svg" alt="Human Art Schoolロゴ"></a>
        <nav class="footer-header-nav">
          <ul>
            <li><a href="<?php echo get_permalink(19);?>">スクールについて</a></li>
            <li class="line-through">コースの様子</li>
            <li class="line-through">ブログ記事</li>
            <li class="contact"><a href="<?php echo get_permalink(21);?>">お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
      <div class="footer-main">
        <address class="footer-main-address">
          <p>
            ヒューマンアートスクール<br>
            <span class="line"></span><br>
            〒166-0003<br>
            東京都杉並区高円寺南1-25-6<br>
            コスモリード高円寺サウス306<br>
            TEL: 03-3311-9339<br>
          </p>
          <p>
            運営<br>
            ベイシック株式会社<br>
            <span class="line"></span><br>
            〒150-0001<br>
            東京都渋谷区神宮前4-18-4<br>
            TEL: 03-6380-1149
          </p>
        </address>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0844098640614!2d139.6571801155369!3d35.69954038019006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f28d6b678975%3A0xd7bc4de558dd65b7!2z44CSMTY2LTAwMDMg5p2x5Lqs6YO95p2J5Lim5Yy66auY5YaG5a-65Y2X77yR5LiB55uu77yS77yV4oiS77yW!5e0!3m2!1sja!2sjp!4v1598431412471!5m2!1sja!2sjp" class="footer-main-map" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </footer>

  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "ヒューマンアートスクール｜Human Art School",
      "url": "https://humanartschool.co.jp/",
      "author": {
        "@context": "http://schema.org",
        "@type": "Person",
        "name": "",
        "worksFor": {
          "@type": "Corporation",
          "name": ["Basic Inc.", "ベイシック株式会社"],
          "url": "https://humanartschool.co.jp/"
        }
      }
    }
  </script>

  <script type="application/ld+json">
    {
      "@context" : "https://schema.org",
      "@type" : "Organization",
      "name" : "ベイシック株式会社",
      "founder":"",
      "foundingDate":"", //設立日
      "description" : "",
      "url" : "https://humanartschool.co.jp/",
      "logo": "https://humanartschool.co.jp/wp-content/themes/basic/assets/img/logo.png",
      "telephone" : "+81-03-6380-1149", //電話番号
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "渋谷区神宮前",
        "addressRegion": "東京都",
        "postalCode": "151-0001",
        "streetAddress": "4-18-4",
        "addressCountry": "JP"
      },
      "contactPoint": {
        "@type" : "ContactPoint",
        "telephone" : "+81-03-6380-1149",
        "contactType" : "customer service"
      }
    }
  </script>

  <script defer src="https://unpkg.com/web-vitals@0.2.2/dist/web-vitals.es5.umd.min.js"></script>
  <script>
    addEventListener('DOMContentLoaded', function() {
      webVitals.getCLS(console.log);
      webVitals.getFID(console.log);
      webVitals.getLCP(console.log);
    });
  </script>

  <?php wp_footer(); ?>
</body>
</html>

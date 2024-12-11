<!DOCTYPE html>
<html data-wf-domain="makeopinion.com" data-wf-page="64180ac3118cc5475656367e" data-wf-site="64180342570b0dc26c6fd2d1" lang="en" class="w-mod-js w-mod-ix wf-inter-n4-active wf-inter-n5-active wf-inter-n6-active wf-plusjakartasans-n3-active wf-plusjakartasans-n4-active wf-plusjakartasans-n5-active wf-plusjakartasans-n6-active wf-plusjakartasans-n7-active wf-plusjakartasans-n8-active wf-active" data-lt-installed="true">

<head>
    <?php
        // Dynamically generate base URL
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'];
        $base_url = $protocol . $host; // Example: http://localhost:8090
        $base_path = $base_url . '/assets';

        // Get the current page address
        $current_page = $_SERVER['REQUEST_URI'];

        // Define page titles and descriptions
        $page_titles = array(
            "/en/index.php" => "アンケートの作成・配信・集計をワンストップで",
            "/en/audience.php" => "実際の人々の、リアルな声を、世界中から。",
            "/en/pricing.php" => "調査ごとの課金システムで、初期費用・月額費用は０！"
        );
        $page_descriptions = array(
            "/en/index.php" => "Make Opinionは、企業が世界中の実際の人々から素早くユーザーのインサイトを集めることのできる、完全な市場調査プラットフォームです。",
            "/en/audience.php" => "世界数百万人の回答者に数分でアクセス可能、支払い前にリアルタイムで調査の価格と実現可能性を確認可能です。",
            "/en/pricing.php" => "サブスクリプションなしで、必要な時に必要な分だけ調査を実施！市場調査予算から最大限の価値を引き出せるのがMake Opinionです。"
        );

        // Determine title and description dynamically
        if (array_key_exists($current_page, $page_titles)) {
            $title = $page_titles[$current_page];
            $description = $page_descriptions[$current_page];
        } else {
            $title = "アンケートを作成。実際の回答者。結果を理解する。";
            $description = "Make Opinionは、企業が世界中の実際の人々からリアルなカスタマーインサイトを得るのを助けます。";
        }

        // Output dynamic <title> and <meta> tags
        echo "
        <title>$title</title>
        <meta name=\"description\" content=\"$description\">";

        // Special case for imprint page
        if ($current_page == '/en/imprint.php') {
            echo '<meta name="robots" content="noindex, nofollow">';
        }
    ?>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo $base_path; ?>/css/zeta-template.webflow.00f8545d6.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base_path; ?>/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo $base_path; ?>/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php echo $base_path; ?>/css/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo $base_path; ?>/css/style.css" rel="stylesheet" media="all">
    <link href="<?php echo $base_path; ?>/css/responsive.css" rel="stylesheet">
    <script src="<?php echo $base_path; ?>/js/webfont.js" type="text/javascript"></script>
    <script src="<?php echo $base_path; ?>/js/jquery.min.js"></script>
    <script src="<?php echo $base_path; ?>/js/jquery.marquee.min.js"></script>
    <script src="<?php echo $base_path; ?>/js/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="<?php echo $base_path; ?>/css/jquery.fancybox.min.css">
</head>

<body cz-shortcut-listen="true" class="audi-P  P-dsign">
   <header class="nevigation wf-section">
      <div data-w-id="aa47c58e-d18c-9f72-b96c-cee67149e1dc" data-animation="over-left" data-collapse="medium" data-duration="1000" data-easing="ease" data-easing2="ease" role="banner" class="navbar-main w-nav" id="header-sections" style="will-change: background; background-color: rgb(255, 255, 255);">
         <div class="navbar-container w-container">
            <a href="https://www.makeopinion.com/jp/index.php" style="width: 244px;height: auto;padding-left:0px" class="zeta-template w-nav-brand" aria-label="home"><img src="https://makeopinion.com/logo-main.png" loading="lazy" alt="Brand Logo" style="margin:-16px"></a>
            <nav role="navigation" class="navbar-menu-block w-nav-menu">
               <div class="navbar-menu-wrapper">
                  <div class="navbar-menu">
                     <div class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;display: none">
                        <div class="menu-font w-dropdown-toggle" role="button" tabindex="0">
                           <div onClick="window.location='<?php echo $base_url; ?>/index.php';" class="menu-font">ホーム</div>
                        </div>
                     </div>
                     <div data-hover="true" data-delay="0" data-w-id="aa47c58e-d18c-9f72-b96c-cee67149e1f9" class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;">
                        <div class="menu-font w-dropdown-toggle" id="w-dropdown-toggle-2" aria-controls="w-dropdown-list-2" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                           <div class="nevigation-icon w-icon-dropdown-toggle" aria-hidden="true"></div>
                           <div class="menu-font">サービス</div>
                        </div>
                        <nav class="nevigation-dropdown-list w-dropdown-list" style="transform: translate3d(0px, 10px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; padding: 10px" id="w-dropdown-list-2" aria-labelledby="w-dropdown-toggle-2">
                           <a href="<?php echo $base_url; ?>/index.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Make Opinionオンラインリサーチ</a>
                           <a style="display: none" href="live-interview.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Make Opinionライブインタビュー</a>
                           <a href="<?php echo $base_url; ?>/audience.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Make Opinionのオーディエンス</a>
                        </nav>
                     </div>

                     <div data-hover="true" data-delay="0" data-w-id="aa47c58e-d18c-9f72-b96c-cee67149e1ef"
                        class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;">
                        <div class="menu-font w-dropdown-toggle" id="w-dropdown-toggle-1"
                           aria-controls="w-dropdown-list-1" aria-haspopup="menu" aria-expanded="false"
                           role="button" tabindex="0">
                           <div class="nevigation-icon w-icon-dropdown-toggle" aria-hidden="true"></div>
                           <div class="menu-font">ソリューション</div>
                        </div>
                        <nav class="nevigation-dropdown-list w-dropdown-list"
                           style="transform: translate3d(0px, 10px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                           id="w-dropdown-list-1" aria-labelledby="w-dropdown-toggle-1">
                           <div class="dropdown__menu__wrapper">
                              <div class="dropdown__menu__left">
                                 <h3 class="dropdown__menu__title">目的から</h3>
                                 <a href="<?php echo $base_url; ?>/uc-brand.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">ブランド認知度・競合調査</a>
                                 <a href="<?php echo $base_url; ?>/uc-concept-test.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">コンセプトテスト</a>
                                 <a href="<?php echo $base_url; ?>/uc-landing-page.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">ランディングページ最適化</a>
                                 <a href="<?php echo $base_url; ?>/uc-messaging.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">広告メッセージの効果検証</a>
                                 <a href="<?php echo $base_url; ?>/uc-package-design.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">パッケージデザイン</a>
                                 <a href="<?php echo $base_url; ?>/uc-price.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">価格分析</a>
                                 <a href="<?php echo $base_url; ?>/uc-usage-attitudes.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">使用実態調査</a>
                                 <a href="<?php echo $base_url; ?>/uc-ux-research.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">UX検証</a>
                              </div>
                              <div class="dropdown__menu__right">
                                 <h3 class="dropdown__menu__title">職種から</h3>
                                 <a href="<?php echo $base_url; ?>/user-designer.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">デザイナー</a>
                                 <a href="<?php echo $base_url; ?>/user-ecommerce.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Eコマース</a>
                                 <a href="<?php echo $base_url; ?>/user-marketing.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">マーケティング</a>
                                 <a href="<?php echo $base_url; ?>/user-eshop.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">eストア</a>
                                 <a href="<?php echo $base_url; ?>/user-product.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">製品開発者</a>
                                 <a href="<?php echo $base_url; ?>/user-researcher.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">研究者</a>
                                 <a href="<?php echo $base_url; ?>/user-startup.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">スタートアップ</a>
                                 <a href="<?php echo $base_url; ?>/user-students.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">学生</a>
                              </div>
                           </div>
                        </nav>
                     </div>

                     <div class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;">
                        <div class="menu-font w-dropdown-toggle">
                           <div onClick="window.location='<?php echo $base_url; ?>/pricing.php';" class="menu-font">料金</div>
                        </div>
                     </div>
                     <div class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;">
                        <div class="menu-font w-dropdown-toggle">
                           <div onClick="window.open('https://makeopinion.com/en/blog.php', '_blank')" class="menu-font">ブログ</div>
                        </div>
                     </div>

                     <div data-hover="true" data-delay="0" data-w-id="aa47c58e-d18c-9f72-b96c-cee67149e1f9" class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;">
                        <div class="menu-font w-dropdown-toggle" id="w-dropdown-toggle-3" aria-controls="w-dropdown-list-3" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                           <div class="nevigation-icon w-icon-dropdown-toggle" aria-hidden="true"></div>
                           <div class="menu-font">About Us</div>
                        </div>
                        <nav class="nevigation-dropdown-list w-dropdown-list" style="transform: translate3d(0px, 10px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; padding: 10px" id="w-dropdown-list-3" aria-labelledby="w-dropdown-toggle-3">
                           <a href="<?php echo $base_url; ?>/about-us-mission.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">私たちのミッション</a>
                           <a href="<?php echo $base_url; ?>/about-us-conferences.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">イベントレポート</a>
                        </nav>
                     </div>

                     <div data-hover="true" data-delay="0" data-w-id="aa47c58e-d18c-9f72-b96c-cee67149e1f9" class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;">
                        <div class="menu-font w-dropdown-toggle" id="w-dropdown-toggle-3" aria-controls="w-dropdown-list-3" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                           <div class="nevigation-icon w-icon-dropdown-toggle" aria-hidden="true"></div>
                           <div class="menu-font"><img src="https://makeopinion.com/en/assets/images_new/earth.svg" loading="lazy" width="25" height="25" alt="Language"></div>
                        </div>
                        <nav class="nevigation-dropdown-list w-dropdown-list" style="transform: translate3d(0px, 10px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; padding: 10px" id="w-dropdown-list-3" aria-labelledby="w-dropdown-toggle-3">
                           <a href="https://makeopinion.com/en" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">English</a>
                           <a href="<?php echo $base_url; ?>" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">日本語 (Japanese)</a>
                        </nav>
                     </div>

                  </div>
               </div>
            </nav>

            <div data-w-id="aa47c58e-d18c-9f72-b96c-cee67149e229" class="hamburger">
               <div class="humburger-bar-one"></div>
               <div class="humburger-bar-two"></div>
            </div>
            <div class="smart-application-hero-button responsive-button-off" style="background-color:transparent">
               <div class="smart-application-hero-button-bg" style="background-color:transparent"></div>
               <a role="button" href="https://next.makeopinion.com/" class="trial-button feature-button w-inline-block" style="padding-left:20px; padding-right:20px;margin-right:10px;">
                  <div class="trail-text-two-home">ログイン</div>
               </a>
            </div>
            <div class="smart-application-hero-button responsive-button-off">
               <div class="smart-application-hero-button-bg"></div>
               <a role="button" data-fancybox="register" href="#registerbox" class="trial-button bg-yellow w-inline-block" style="background: #0070DF;color:#fff;padding-left:20px; padding-right:20px;">
                  <div class="trail-text-two-home">新規登録</div>
               </a>
            </div>
         </div>
         <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
      </div>
   </header>
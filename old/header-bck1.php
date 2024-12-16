<!DOCTYPE html>
<html data-wf-domain="makeopinion.com" data-wf-page="64180ac3118cc5475656367e" data-wf-site="64180342570b0dc26c6fd2d1" lang="en" class="w-mod-js w-mod-ix wf-inter-n4-active wf-inter-n5-active wf-inter-n6-active wf-plusjakartasans-n3-active wf-plusjakartasans-n4-active wf-plusjakartasans-n5-active wf-plusjakartasans-n6-active wf-plusjakartasans-n7-active wf-plusjakartasans-n8-active wf-active" data-lt-installed="true">

<head>
   <?php

   // Dynamically generate base URL
   $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
   $host = $_SERVER['HTTP_HOST'];
   $server = $protocol . $host; // Example: http://localhost:8090
   $base_path = $server . '/assets';
   // Get the current page address
   $current_page = $_SERVER['REQUEST_URI'];

   // Define an array to store page titles and their corresponding URLs
   $page_titles = array(
      "/en/index.php" => "アンケートの作成・配信・集計をワンストップで",
      "/en/audience.php" => "実際の人々の、リアルな声を、世界中から。",
      "/en/uc-brand.php" => "ブランド認知度",
      "/en/uc-concept-test.php" => "コンセプトテスト",
      "/en/uc-landing-page.php" => "ランディングページ最適化",
      "/en/uc-messaging.php" => "広告メッセージテスト",
      "/en/uc-package-design.php" => "パッケージデザイン検証",
      "/en/uc-price.php" => "価格分析",
      "/en/uc-usage-attitudes.php" => "使用実態調査",
      "/en/uc-ux-research.php" => "UX Research Survey",
      "/en/pricing.php" => "調査ごとの課金システムで、初期費用・月額費用は０！!",
      "/en/blog.php" => "Make Opinionブログ",
      "/en/about-us-mission.php" => "Make Opinionのミッション",
      "/en/about-us-conferences.php" => "イベントレポート",
      "/en/research-students.php" => "学生向けの調査プラットフォーム",
      "/en/user-designer.php" => "デザイナー向け",
      "/en/user-ecommerce.php" => "Eコマース向け",
      "/en/user-eshop.php" => "オンラインストア向け",
      "/en/user-marketing.php" => "マーケティングチーム向け",
      "/en/user-product.php" => "製品開発チーム向け",
      "/en/user-researcher.php" => "研究者向け",
      "/en/user-startup.php" => "スタートアップ向け",
      "/en/user-students.php" => "学生向け"
   );
   $page_descriptions = array(
      "/en/index.php" => "Make Opinionは、企業が世界中の実際の人々から素早くユーザーのインサイトを集めることのできる、完全な市場調査プラットフォームです。",
      "/en/audience.php" => "世界数百万人の回答者に数分でアクセス可能、支払い前にリアルタイムで調査の価格と実現可能性を確認可能です。",
      "/en/uc-brand.php" => "ブランドイメージや競合他社、ユーザーの製品利用の理由や障壁をを理解するため、Make Opinionのブランド認知度調査をご利用ください。",
      "/en/uc-concept-test.php" => "コンセプトテストで顧客のニーズや好みを特定し、実際のフィードバックに基づいた製品を開発しましょう。",
      "/en/uc-landing-page.php" => "ランディングページのパフォーマンス調査から、ユーザーがどんなデザインやコンテンツを好むのか理解を深めることができます。",
      "/en/uc-messaging.php" => "説得力のあるコンテンツを作成し、メッセージング調査で、どのような内容がより効果的かを理解しましょう。",
      "/en/uc-package-design.php" => "パッケージテ調査で、製品の完璧なデザインとキャッチコピーを見つけ、素晴らしい製品パッケージでリリースしましょう。",
      "/en/uc-price.php" => "価格分析調査でユーザーの期待値を理解することによって、既存価格を最適化および新製品の適正価格を見極めることが可能です。",
      "/en/uc-usage-attitudes.php" => "あなたのブランドの顧客層を理解しましょう：どんな人なのか、どのようにターゲティングし、どんあ製品を提供するのか。",
      "/en/uc-ux-research.php" => "実際の人々からのフィードバックを元に、優れたユーザーエクスペリエンスを設計しましょう。UXリサーチでユーザーの嗜好を理解することが可能です。",
      "/en/pricing.php" => "サブスクリプションなしで、必要な時に必要な分だけ調査を実施！市場調査予算から最大限の価値を引き出せるのがMake Opinionです。",
      "/en/blog.php" => "Make Opinionブログでは、市場調査の世界を紹介しています。アンケートデザイン、対象の定義、および特定の方法論を、簡潔で分かりやすい記事で説明しています。",
      "/en/about-us-mission.php" => "Make Opinionのミッションは、規模や予算に関係なく、企業が市場と顧客を理解することを可能にすることです。",
      "/en/about-us-conferences.php" => "メインスピーカーとして様々な市場調査トピックに関するインサイトを共有したイベントのレポートをご確認いただけます。",
      "/en/research-students.php" => "手軽な設定、迅速な回答データ取得、手頃な価格のオールインワンプラットフォームで実際の調査データに基づいたハイレベルな論文を執筆可能です。",
      "/en/marketing.php" => "マーケティングチームが素晴らしい体験を設計する手助けをします。ブランドやメッセージを調整し、顧客の意見に基づいたプレゼンテーションでクライアントを感動させましょう。",
      "/en/user-designer.php" => "実際の人々とのUXをテストしてみませんか？UXリサーチでユーザーからの実際のフィードバックに基づいたデザインが可能になります。",
      "/en/user-ecommerce.php" => "競合を理解し、顧客の製品購入理由や障壁を把握しましょう。顧客が求めているものを見つけ、改善し、売上に繋げます。",
      "/en/user-eshop.php" => "ブランディングやメッセージングを調整し、ユーザー意見に裏付けられたプレゼンテーションでクライアントを感動させましょう。",
      "/en/user-marketing.php" => "売上につながる製品の写真や説明をテストすることでユーザー体験を最適化、売り上げを伸ばします。",
      "/en/user-product.php" => "開発に投資する前にアイデアを検証しましょう。最も反響のある機能の優先順位づけが可能です。",
      "/en/user-researcher.php" => "ユーザーフレンドリーなプラットフォーム、高度な質問タイプ、サーベイロジックで、リアルな人々からの迅速な回答取得と、データ可視化が可能です。",
      "/en/user-startup.php" => "実際の人々とビジネスアイデアを検証し、磨き上げましょう。顧客に愛される製品作りに貢献します。",
      "/en/user-students.php" => "手軽な設定、迅速な回答データ取得、手頃な価格のオールインワンプラットフォームで実際の調査データに基づいたハイレベルな論文を執筆可能です。"
   );

   // Check if the current page exists in the array
   if (array_key_exists($current_page, $page_titles)) {
      // Set the title based on the current page
      $title = $page_titles[$current_page];
      $description = $page_descriptions[$current_page];
   } else {
      // Set a default title if the current page is not found in the array
      $title = "アンケートを作成。実際の回答者。結果を理解する。";
      $description = "Make Opinionは、企業が世界中の実際の人々からリアルなカスタマーインサイトを得るのを助けます。";
   }


   // Output the HTML with the dynamic title
   echo "
      <title>$title</title>
      <meta name=\"description\" content=\"$description\">";

   if ($current_page == '/en/imprint.php') {
      // Print the meta tags to prevent indexing
      echo '<meta name="robots" content="noindex, nofollow">';
   }
   ?>

   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta property="og:type" content="website">
   <meta content="width=device-width, initial-scale=1" name="viewport">
   <link href="<?php echo $server; ?>/assets/css/zeta-template.webflow.00f8545d6.css?update=20240324" rel="stylesheet" type="text/css">
   <style>
      .wf-force-outline-none[tabindex="-1"]:focus {
         outline: none;
      }
   </style>
   <style>
      @media (min-width:992px) {
         html.w-mod-js:not(.w-mod-ix) [data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9b"] {
            -webkit-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee99"] {
            -webkit-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0eea0"] {
            -webkit-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9e"] {
            -webkit-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="a2e1b4f5-690a-4192-4b72-e267dd57c374"] {
            -webkit-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="a2e1b4f5-690a-4192-4b72-e267dd57c372"] {
            -webkit-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="b058aca7-51b0-c67f-d1b1-0a60c6f3ef17"] {
            -webkit-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            color: rgb(0, 0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="eaa33a40-e23a-6100-1c87-d34d4cb5eff6"] {
            -webkit-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            color: rgb(0, 0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="c8a50175-fa21-af14-854d-ec827ba7cacb"] {
            -webkit-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 50px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }

         html.w-mod-js:not(.w-mod-ix) [data-w-id="c8a50175-fa21-af14-854d-ec827ba7cac9"] {
            -webkit-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
         }
      }
   </style>
   <link href="https://fonts.googleapis.com/" rel="preconnect">
   <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous">
   <!--<script src="https://makeopinion.com/en/assets/js/webfont.js" type="text/javascript"></script>
      <link rel="stylesheet" href="https://makeopinion.com/en/assets/css/owl.carousel.min.css" >
      <link rel="stylesheet" href="https://makeopinion.com/en/assets/css/owl.theme.default.min.css" >
      <link rel="stylesheet" href="https://makeopinion.com/en/assets/css/magnific-popup.css" >
      <link rel="stylesheet" href="https://makeopinion.com/en/assets/css/style.css?15" media="all">
      <link rel="stylesheet" href="https://makeopinion.com/en/assets/css/responsive.css?22" > -->
   <!-- local -->

   <script src="<?php echo $server; ?>/assets/js/webfont.js" type="text/javascript"></script>
   <link rel="stylesheet" href="<?php echo $server; ?>/assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?php echo $server; ?>/assets/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="<?php echo $server; ?>/assets/css/magnific-popup.css">
   <link rel="stylesheet" href="<?php echo $server; ?>/assets/css/style.css?15" media="all">
   <link rel="stylesheet" href="<?php echo $server; ?>/assets/css/responsive.css?22">
   <script type="text/javascript">
      WebFont.load({
         google: {
            families: ["Inter:regular,500,600", "Plus Jakarta Sans:300,regular,500,600,700,800"]
         }
      });
   </script>
   <script type="text/javascript">
      ! function(o, c) {
         var n = c.documentElement,
            t = " w-mod-";
         n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);
   </script>
   <script type="text/javascript">
      window.__WEBFLOW_CURRENCY_SETTINGS = {
         "currencyCode": "USD",
         "symbol": "$",
         "decimal": ".",
         "fractionDigits": 2,
         "group": ",",
         "template": "{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} {{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} {{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}",
         "hideDecimalForWholeNumbers": false
      };
   </script>
   <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
   <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.6.0/jquery.marquee.min.js"></script>

   <!-- Include Easy FancyBox -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


</head>

<body cz-shortcut-listen="true" class="audi-P  P-dsign">
   <header class="nevigation wf-section">
      <div data-w-id="aa47c58e-d18c-9f72-b96c-cee67149e1dc" data-animation="over-left" data-collapse="medium" data-duration="1000" data-easing="ease" data-easing2="ease" role="banner" class="navbar-main w-nav" id="header-sections" style="will-change: background; background-color: rgb(255, 255, 255);">
         <div class="navbar-container w-container">
            <a href="<?php echo $server; ?>/index.php" style="width: 244px;height: auto;padding-left:0px" class="zeta-template w-nav-brand" aria-label="home"><img src="https://makeopinion.com/logo-main.png" loading="lazy" alt="Brand Logo" style="margin:-16px"></a>
            <nav role="navigation" class="navbar-menu-block w-nav-menu">
               <div class="navbar-menu-wrapper">
                  <div class="navbar-menu">
                     <div class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;display: none">
                        <div class="menu-font w-dropdown-toggle" role="button" tabindex="0">
                           <div onClick="window.location='<?php echo $server; ?>/index.php';" class="menu-font">ホーム</div>
                        </div>
                     </div>
                     <div data-hover="true" data-delay="0" data-w-id="aa47c58e-d18c-9f72-b96c-cee67149e1f9" class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;">
                        <div class="menu-font w-dropdown-toggle" id="w-dropdown-toggle-2" aria-controls="w-dropdown-list-2" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                           <div class="nevigation-icon w-icon-dropdown-toggle" aria-hidden="true"></div>
                           <div class="menu-font">サービス</div>
                        </div>
                        <nav class="nevigation-dropdown-list w-dropdown-list" style="transform: translate3d(0px, 10px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; padding: 10px" id="w-dropdown-list-2" aria-labelledby="w-dropdown-toggle-2">
                           <a href="<?php echo $server; ?>/index.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Make Opinionオンラインリサーチ</a>
                           <a style="display: none" href="live-interview.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Make Opinionライブインタビュー</a>
                           <a href="<?php echo $server; ?>/audience.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Make Opinionのオーディエンス</a>
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
                                 <a href="<?php echo $server; ?>/uc-brand.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">ブランド認知度・競合調査</a>
                                 <a href="<?php echo $server; ?>/uc-concept-test.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">コンセプトテスト</a>
                                 <a href="<?php echo $server; ?>/uc-landing-page.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">ランディングページ最適化</a>
                                 <a href="<?php echo $server; ?>/uc-messaging.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">広告メッセージの効果検証</a>
                                 <a href="<?php echo $server; ?>/uc-package-design.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">パッケージデザイン</a>
                                 <a href="<?php echo $server; ?>/uc-price.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">価格分析</a>
                                 <a href="<?php echo $server; ?>/uc-usage-attitudes.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">使用実態調査</a>
                                 <a href="<?php echo $server; ?>/uc-ux-research.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">UX検証</a>
                              </div>
                              <div class="dropdown__menu__right">
                                 <h3 class="dropdown__menu__title">職種から</h3>
                                 <a href="<?php echo $server; ?>/user-designer.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">デザイナー</a>
                                 <a href="<?php echo $server; ?>/user-ecommerce.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">Eコマース</a>
                                 <a href="<?php echo $server; ?>/user-marketing.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">マーケティング</a>
                                 <a href="<?php echo $server; ?>/user-eshop.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">eストア</a>
                                 <a href="<?php echo $server; ?>/user-product.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">製品開発者</a>
                                 <a href="<?php echo $server; ?>/user-researcher.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">研究者</a>
                                 <a href="<?php echo $server; ?>/user-startup.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">スタートアップ</a>
                                 <a href="<?php echo $server; ?>/user-students.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">学生</a>
                              </div>
                           </div>
                        </nav>
                     </div>

                     <div class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;">
                        <div class="menu-font w-dropdown-toggle">
                           <div onClick="window.location='<?php echo $server; ?>/pricing.php';" class="menu-font">料金</div>
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
                           <a href="https://makeopinion.com/jp/about-us-mission.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">私たちのミッション</a>
                           <a href="https://makeopinion.com/jp/about-us-conferences.php" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">イベントレポート</a>
                        </nav>
                     </div>

                     <div data-hover="true" data-delay="0" data-w-id="aa47c58e-d18c-9f72-b96c-cee67149e1f9" class="nav-dropdown dropdown-border w-dropdown" style="max-width: 1290px;">
                        <div class="menu-font w-dropdown-toggle" id="w-dropdown-toggle-3" aria-controls="w-dropdown-list-3" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                           <div class="nevigation-icon w-icon-dropdown-toggle" aria-hidden="true"></div>
                           <div class="menu-font"><img src="https://makeopinion.com/en/assets/images_new/earth.svg" loading="lazy" width="25" height="25" alt="Language"></div>
                        </div>
                        <nav class="nevigation-dropdown-list w-dropdown-list" style="transform: translate3d(0px, 10px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; padding: 10px" id="w-dropdown-list-3" aria-labelledby="w-dropdown-toggle-3">
                           <a href="https://makeopinion.com/en" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">English</a>
                           <a href="https://makeopinion.com/jp" class="menu-font margin-off padding-off w-dropdown-link single__font__list" tabindex="0">日本語 (Japanese)</a>
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
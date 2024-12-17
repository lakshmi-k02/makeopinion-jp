<?php include('header.php'); ?>
<style>
   h1.home-hero-heading {
      font-size: 48px
   }
</style>
<!-- Mobile Styles for hero images-->
<style>
   @media screen and (max-width: 767px) {
      .float-image {
         border-radius: 6px;
      }

      img {
         max-width: 100%;
         vertical-align: middle;
         display: inline-block;
      }

      img {
         border: 0;
      }

      * {
         box-sizing: border-box;
      }

      img {
         overflow-clip-margin: content-box;
         overflow: clip;
      }

      body {
         color: #333;
         font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
         font-size: 14px;
         line-height: 20px;
      }


      html {
         -ms-text-size-adjust: 100%;
         -webkit-text-size-adjust: 100%;
         font-family: sans-serif;
      }

      .home-hero-image-block {
         width: 100%;
         grid-column-gap: 20px;
         grid-row-gap: 20px;
         /* flex-direction: column; */
         justify-content: center;
         align-items: center;
         padding-left: 0;
      }

      .home-hero-image-block {
         width: 100%;
         background-image: none;
         background-repeat: repeat;
         background-size: auto;
         justify-content: center;
         display: flex;
      }

      .overlay-image {
         width: 180px;
         /* Smaller size for overlay images on mobile */
      }

      .master-container {
         position: relative;
         display: inline-block;
         max-width: 60%;
      }

      .master-image {
         width: 100%;
         height: auto;
      }

      .overlay {
         left: calc(100% + 10px);
         /* Adds some space between the container and the overlay */
      }

      .banner-float-images {
         /* width: 93%; */
         grid-column-gap: 20px;
         grid-row-gap: 20px;
         flex-direction: column;
         align-items: flex-start;
         margin-left: -66px;
         display: flex;
      }

      img {
         max-width: 100%;
         vertical-align: middle;
         display: inline-block;
      }

      .overlay {
         position: absolute;
         top: 50%;
         left: 100%;
         /* Moves the overlay to the right side of the container */
         transform: translate(0, -50%);
         /* Centers overlay vertically */
         display: flex;
         flex-direction: column;
         align-items: flex-start;
         /* Aligns overlay images to the left within the overlay */
         gap: 20px;
      }

      .overlay-image {
         width: 80px;
         /* Set a fixed width for the overlay images */
         height: auto;
         border-radius: 5px;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }



      /* Animation keyframes */
      @keyframes floatImageAnimation {
         from {
            opacity: 0;
            transform: translateY(5px);
         }

         to {
            opacity: 1;
            transform: translateY(0);
         }
      }

      /* Float images with animation */
      .float-image {
         border-radius: 6px;
         opacity: 0;
         transform: translateY(50px);
         /* Start slightly below the final position */
         animation: floatImageAnimation 1s ease-in-out forwards;
      }

      /* Animation delays for sequential appearance */
      .float-image-one {
         animation-delay: 0.2s;
      }

      .float-image-two {
         animation-delay: 0.4s;
      }

      .float-image-three {
         animation-delay: 0.6s;
      }

   }
</style>

<section class="home-hero-section-one wf-section desktop-only" style="background-image: url('./assets/images_new/bg-final.png');background-size: cover;background-position: 0 0">
   <div class="home-hero-container-large w-container">
      <div class="home-hero-main-block price_hero">
         <div class="home-hero-caption-block">
            <div class="overflow-off">
               <div data-w-id="1fd6d305-6679-7cb9-fb3a-46939f11c7c4" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; margin-bottom: 10px !important;" class="heading-scroll w-clearfix">
                  <h1 class="home-hero-heading v2"><br>より低価格で<br>もっと調査を</h1>

               </div>
            </div>
            <div class="overflow-off">
               <p data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee95" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;font-size: 17px" class="hero-para-two">Make Opinionは調査予算の価値を最大限に引き出します。<br>
                  初期費用や月額利用料はなし、調査結果に応じてご利用料金が発生します。</p>
            </div>
            <div class="overflow-off">
               <div class="hero-caption-buttons-one">
                  <a role="button" data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee98" data-fancybox="register2" href="#registerbox" class="trial-button w-inline-block">
                     <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee99" class="trail-text-two-home" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">無料アカウントを作成</div>
                     <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9b" class="trail-text-two" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">無料アカウントを作成</div>
                  </a>
                  <a role="button" data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9d" onclick="book_a_demo()" class="trial-button feature-button w-inline-block">
                     <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9e" class="trail-text-two-home" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">デモを予約する</div>
                     <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0eea0" class="trail-text-two" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">デモを予約する</div>
                  </a>
               </div>
            </div>
            <div class="overflow-off">
               <div class="users-count-block-two">
                  <div class="home-page-creative-list-block">
                     <div class="home-page-creative-check-icon"><img src="./assets/images_new/check.png" loading="lazy" alt="Check" class="checked-icon-blue-circle"></div>
                     <p class="creative-text-list-content" style="font-size:16px"><span class="creative-list-span-text-content">ツール利用料、サブスク費用は一切なし！ </span><br>固定費なしでMake Opinionのプラットフォームを試してみませんか？</p>
                  </div>
                  <div class="users-image-block-two" style="display: none">
                     <div class="girl-one-user"><img src="./assets/images/641814c85537da72cc313b9e_Mask group (11) - Copy.webp" loading="lazy" alt="User" class="girl-one-image"></div>
                     <div class="girl-two-user"><img src="./assets/images/641814c77701c2df88cb28d4_Mask group (12) - Copy.webp" loading="lazy" alt="User" class="girl-two-image"></div>
                     <div class="boy-user"><img src="./assets/images/641814c7628839df4541db86_Mask group (13).webp" loading="lazy" alt="User" class="boy-image"></div>
                  </div>
                  <div class="user-count" style="display: none">
                     <div class="bold-text tech-headings">月額料金なし</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="home-hero-image-block">
            <div data-w-id="b3ab55ef-0bde-ad3e-dba8-997bea786104" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
               <div class="home-hero-image-block">
                  <div class="banner-girl-image-block"><img src="./assets/images_new/pay-photo.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 56vw, (max-width: 991px) 54vw, (max-width: 1439px) 26vw, 347.671875px" srcset="./assets/images_new/pay-photo.png 500w, ./assets/images_new/pay-photo.png 770w" alt="Banner Girl Image" class="hero-main-image"></div>
                  <div class="banner-float-images">
                     <div class="float-image-one"><img src="./assets/images_new/pay-results.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 52vw, (max-width: 991px) 50vw, (max-width: 1439px) 25vw, 323.328125px" srcset="./assets/images_new/pay-results.png 500w, ./assets/images_new/pay-results.png 714w" alt="Banner Image One" class="float-image"></div>

                     <div class="float-image-two"><img src="./assets/images_new/pay-methods.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 52vw, (max-width: 991px) 50vw, (max-width: 1439px) 25vw, 323.328125px" srcset="./assets/images_new/pay-methods.png 500w, ./assets/images_new/pay-methods.png 710w" alt="Finance" class="float-image"></div>

                     <div class="float-image-three"><img src="./assets/images_new/pay-realtime.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 52vw, (max-width: 991px) 50vw, (max-width: 1439px) 25vw, 323.328125px" srcset="./assets/images_new/pay-realtime.png 500w, ./assets/images_new/pay-realtime.png 714w" alt="Order Value" class="float-image"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Mobile Hero section -->
<section class="home-hero-section-one wf-section mobile-only" style="background: #fff; padding-top: 80px; background-image: url('./assets/images_new/bg-final.png'); background-size: cover; background-position: center;">
   <div class="home-hero-container-large w-container" style="max-width: 1200px; margin: 0 auto;">
      <!-- Main Block -->
      <div class="home-hero-main-block" style="display: flex; flex-direction: column; gap: 2rem;">
         <!-- Text Content Block -->
         <div class="home-hero-caption-block" style="width: 100%; display: flex; flex-direction: column;">
            <div class="overflow-off">
               <h1 class="home-hero-heading v2"><br>より低価格で<br>もっと調査を</h1>
            </div>
            <div class="overflow-off">
               <p data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee95" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;font-size: 17px" class="hero-para-two">Make Opinionは調査予算の価値を最大限に引き出します。<br>
                  初期費用や月額利用料はなし、調査結果に応じてご利用料金が発生します。</p>
            </div>
            <!-- CTA Buttons -->
            <div class="overflow-off" style="display: flex; flex-direction: column; gap: 1rem; align-items: center;">
               <a href="#registerbox" data-fancybox="register5" class="trial-button w-inline-block" style="width: 100%; max-width: 300px;">
                  <div class="trail-text-two-home">無料アカウントを作成</div>
               </a>
               <a onclick="book_a_demo();" class="trial-button feature-button w-inline-block" style="width: 100%; max-width: 300px;">
                  <div class="trail-text-two-home">デモを予約する</div>
               </a>
            </div>
         </div>
         <!-- Image Block -->
         <div class="home-hero-image-block">
            <div class="banner-girl-image-block">
               <img src="./assets/images_new/pay-photo.png" alt="バナーガールイメージ" class="hero-main-image" style="max-width: 100%;">
            </div>
            <div class="banner-float-images">
               <img src="./assets/images_new/pay-results.png" alt="イメージ1" class="float-image">
               <img src="./assets/images_new/pay-methods.png" alt="イメージ2" class="float-image">
               <img src="./assets/images_new/pay-realtime.png" alt="イメージ3" class="float-image">
            </div>
         </div>
         <div class="home-page-creative-list-block">
                     <div class="home-page-creative-check-icon"><img src="./assets/images_new/check.png" loading="lazy" alt="Check" class="checked-icon-blue-circle"></div>
                     <p class="creative-text-list-content" style="font-size:16px"><span class="creative-list-span-text-content">ツール利用料、サブスク費用は一切なし！ </span><br>固定費なしでMake Opinionのプラットフォームを試してみませんか？</p>
                  </div>
      </div>
   </div>
</section>


<section class="ideas-section wf-section" style="padding-top:50px">
   <div class="page-container w-container">
      <div class="ideas-main-block">
         <div class="ideas">
            <div class="ideas-main-image-block">
               <div data-w-id="9d91c234-c3c2-f525-4953-53e5a0bff13f" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;border-radius: 6px" class="ideas-main-banner"><img src="./assets/images_new/pricing-2-back.png" loading="lazy" sizes="(max-width: 479px) 81vw, (max-width: 767px) 70vw, (max-width: 991px) 75vw, (max-width: 1439px) 37vw, 496.1458435058594px" srcset="./assets/images_new/pricing-2-back.png 500w, ./assets/images_new/pricing-2-back.png 800w, ./assets/images_new/pricing-2-back.png 996w" alt="Employee Image" class="ideas-main-image"></div>
            </div>
            <a data-fancybox="register3" href="#registerbox">
               <div data-w-id="9d91c234-c3c2-f525-4953-53e5a0bff141" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;border-radius: 6px" class="ideas-float-image"><img src="./assets/images_new/pricing-2-front.png" loading="lazy" sizes="(max-width: 479px) 56vw, (max-width: 991px) 58vw, (max-width: 1439px) 32vw, 416.4757080078125px" srcset="./assets/images_new/pricing-2-front.png 500w, ./assets/images_new/pricing-2-front.png 800w, ./assets/images_new/pricing-2-front.png 856w" alt="Chat" class="idea-float"></div>
            </a>
         </div>
         <div class="service-creative-text-block">
            <div class="overflow-off">
               <h2 data-w-id="9d91c234-c3c2-f525-4953-53e5a0bff144" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="why-creative-heading">調査結果に応じた課金システム</h2>
            </div>
            <div class="overflow-off">
               <p data-w-id="9d91c234-c3c2-f525-4953-53e5a0bff146" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="building-creative-paragraph">月額費用なしで必要なときにのみ調査を実施可能なので、調査予算を一銭も無駄にせずに価値出すことが可能です。</p>
            </div>
            <div class="creative-check-list-block">
               <div class="home-page-creative-list-block">
                  <div class="creative-check-icon"><img src="./assets/images_new/check.png" loading="lazy" alt="Check" class="checked-icon-blue-circle"></div>
                  <p class="creative-text-list-content"><span class="creative-list-span-text-content">サブスクリプションなし</span>、使った分だけのお支払い。好きなだけアンケートを実施、縛りは一切なし！</p>
               </div>
               <div class="home-page-creative-list-block">
                  <div class="creative-check-icon"><img src="./assets/images_new/check.png" loading="lazy" alt="Check" class="checked-icon-blue-circle"></div>
                  <p class="creative-text-list-content list-three"><span class="creative-list-span-text-content">その他固定費用もなし</span>、月額費用なし。アンケート実施のための支払いのみで、他の料金はございません。</p>
               </div>
               <div class="home-page-creative-list-block">
                  <div class="creative-check-icon"><img src="./assets/images_new/check.png" loading="lazy" alt="Check" class="checked-icon-blue-circle"></div>
                  <p class="creative-text-list-content list-two"><span class="creative-list-span-text-content">安全性の高いお支払い方法：</span>クレジットカードやPayPalのような信頼性の高いオプションでお支払いいただけます。</p>
               </div>
            </div>
            <div class="learn-button-block">
               <a data-w-id="9d91c234-c3c2-f525-4953-53e5a0bff15f" data-fancybox="register4" href="#registerbox" class="start-free-trial-button-block feature-block footer-buttons-start discover-more learn w-inline-block" style="background-color:#0070DF">
                  <div class="start-trial-text-block feature-text-block discover-text" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">登録する</div>
                  <div class="start-trial-text-block feature-text-block text-two discover-more-text" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">登録する</div>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>


<section class="home-page-solutions-section wf-section" style="display: none">
   <div class="home-page-solutions-container w-container">
      <div class="home-page-solutions-main-block">
         <h2 class="home-page-solutions-heading">料金セクションを確認 - 非表示にする</h2>
         <p class="home-page-solutions-caption">リアルタイム料金計算機</p>
      </div>
   </div>
</section>

<section class="home-cta-section wf-section">
   <div class="container-big w-container">
      <div class="hiring-main-block-one">
         <div class="hiring-image-block-home">

         </div>
         <div class="hiring-text-block-home">
            <h2 class="hirring-text-main-heading">より詳細を確認しますか？</h2>
            <p class="hiring-description-text">メールまたはお電話でお気軽にご連絡ください。</p>
            <div style="display: flex">
               <a role="button" data-w-id="eaa33a40-e23a-6100-1c87-d34d4cb5eff3" href="mailto:hello@makeopinion.com" class="sign-up-button link-button-one hirring-button w-inline-block" style="margin-right:20px; ">
                  <div class="sign-up-text-home get-start-today" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">お問い合わせ</div>
                  <div data-w-id="eaa33a40-e23a-6100-1c87-d34d4cb5eff6" class="sign-up-text-two" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; color: rgb(0, 0, 0);">お問い合わせ</div>
               </a>
               <a role="button" data-w-id="eaa33a40-e23a-6100-1c87-d34d4cb5eff3" onclick="book_a_demo()" class="sign-up-button link-button-one hirring-button w-inline-block">
                  <div class="sign-up-text-home get-start-today" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">デモを予約する</div>
                  <div data-w-id="eaa33a40-e23a-6100-1c87-d34d4cb5eff6" class="sign-up-text-two" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; color: rgb(0, 0, 0);">デモを予約する</div>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include('footer.php'); ?>
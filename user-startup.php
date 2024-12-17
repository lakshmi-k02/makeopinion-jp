<?php include('header.php'); ?>
<style>
    h1.home-hero-heading {
        font-size: 44px
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

<section class="home-hero-section-one wf-section desktop-only" style="background: #fff;padding-bottom: 170px;padding-top:130px;background-image: url('./assets/images_new/bg-final.png');background-size: cover;background-position: 0 0">
    <div class="home-hero-container-large w-container">
        <div class="home-hero-main-block">
            <div class="home-hero-caption-block">
                <div class="overflow-off">
                    <div data-w-id="1fd6d305-6679-7cb9-fb3a-46939f11c7c4" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d" class="w-clearfix">
                        <h1 class="home-hero-heading">
                            <span>スタートアップを<span style="color:#0070DF">成功へ導く</span></span><br>
                            早期にアイデアを<span style="color:#0070DF">検証する</span><br />
                            機能の<span style="color:#0070DF">優先順位をつける</span><br />
                            製品を<span style="color:#0070DF">市場に出す</span>
                        </h1>
                    </div>
                </div>
                <div class="overflow-off">
                    <p data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee95" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; margin-top: 50px" class="hero-para-two">次のグーグルになりませんか？：実際の人々とビジネスアイデアを検証し、磨き上げ、顧客に愛され、売れる製品を作りましょう。</p>
                </div>
                <div class="overflow-off">
                    <div class="hero-caption-buttons-one">
                        <a role="button" data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee98" data-fancybox="register2" href="#registerbox" class="trial-button w-inline-block">
                            <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee99" class="trail-text-two-home" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">無料アカウントを作成</div>
                            <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9b" class="trail-text-two" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">無料アカウントを作成</div>
                        </a>
                        <a role="button" data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9d" onclick="book_a_demo();" class="trial-button feature-button w-inline-block">
                            <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9e" class="trail-text-two-home" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">デモを予約する</div>
                            <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0eea0" class="trail-text-two" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">デモを予約する</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="home-hero-image-block">
                <div data-w-id="b3ab55ef-0bde-ad3e-dba8-997bea786104" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="home-hero-image-block">
                        <div class="banner-girl-image-block">
                            <img src="./assets/images_new/startup-back.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 56vw, (max-width: 991px) 54vw, (max-width: 1439px) 26vw, 347.671875px" srcset="
                          ./assets/images_new/startup-back.png 500w, 
                          ./assets/images_new/startup-back.png 770w" alt="Banner Girl Image" class="hero-main-image">
                        </div>
                        <div class="banner-float-images">
                            <div class="float-image-one">
                                <img src="./assets/images_new/startup-1.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 52vw, (max-width: 991px) 50vw, (max-width: 1439px) 25vw, 323.328125px" srcset="
                             ./assets/images_new/startup-1.png 500w, 
                             ./assets/images_new/startup-1.png 714w" alt="Banner Image One" class="float-image">
                            </div>
                            <div class="float-image-two">
                                <img src="./assets/images_new/startup-2.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 52vw, (max-width: 991px) 50vw, (max-width: 1439px) 25vw, 323.328125px" srcset="
                             ./assets/images_new/startup-2.png 500w, 
                             ./assets/images_new/startup-2.png 710w" alt="Finance" class="float-image">
                            </div>
                            <div class="float-image-three">
                                <img src="./assets/images_new/startup-3.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 52vw, (max-width: 991px) 50vw, (max-width: 1439px) 25vw, 323.328125px" srcset="
                             ./assets/images_new/startup-3.png 500w, 
                             ./assets/images_new/startup-3.png 714w" alt="Order Value" class="float-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mobile Hero Section -->
<section class="home-hero-section-one wf-section mobile-only" style="background: #fff; padding-top: 80px; background-image: url('./assets/images_new/bg-final.png'); background-size: cover; background-position: center;">
    <div class="home-hero-container-large w-container" style="max-width: 1200px; margin: 0 auto;">
        <!-- Main Block -->
        <div class="home-hero-main-block" style="display: flex; flex-direction: column; gap: 2rem;">
            <!-- Text Content Block -->
            <div class="home-hero-caption-block" style="width: 100%; display: flex; flex-direction: column;">
                <div class="overflow-off">
                    <h1 class="home-hero-heading" style="text-align: center; margin-bottom: 1.5rem;">
                        <span style="font-size: clamp(24px, 4vw, 36px);">スタートアップを<span style="color:#0070DF">成功へ導く</span></span><br>
                        早期にアイデアを<span style="color:#0070DF">検証する</span><br />
                        機能の<span style="color:#0070DF">優先順位をつける</span><br />
                        製品を<span style="color:#0070DF">市場に出す</span>
                    </h1>
                </div>
                <div class="overflow-off">
                    <p class="hero-para-two" style="margin: 1.5rem 0; text-align: center; font-size: 15px;">
                        次のグーグルになりませんか？：実際の人々とビジネスアイデアを検証し、磨き上げ、顧客に愛され、売れる製品を作りましょう。
                    </p>
                </div>
                <!-- CTA Buttons -->
                <div class="overflow-off" style="display: flex; flex-direction: column; gap: 1rem; align-items: center;">
                    <a href="#registerbox" data-fancybox="register6" class="trial-button w-inline-block" style="width: 100%; max-width: 300px;">
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
                    <img src="./assets/images_new/startup-back.png" alt="バナーガールイメージ" class="hero-main-image" style="max-width: 100%;">
                </div>
                <div class="banner-float-images">
                    <img src="./assets/images_new/startup-1.png" alt="イメージ1" class="float-image">
                    <img src="./assets/images_new/startup-2.png" alt="イメージ2" class="float-image">
                    <img src="./assets/images_new/startup-3.png" alt="イメージ3" class="float-image">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="strategy-section wf-section" style="background-color: #f9fafb;padding-top: 50px;background-image: url('./assets/images_new/bg4.png');background-size: cover;background-position: 0 0">
    <div class="page-container w-container">
        <div class="services-block">

            <h2 class="strategy-heading"><span style="color:#0070DF">より良い</span>製品、<span style="color:#0070DF">成功する</span>マーケティング、<span style="color:#0070DF">さらなる</span>売上へ</h2>

            <div class="testimonial-slider owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-2556px, 0px, 0px); transition: all; width: 6390px;">
                        <div class="owl-item active" style="width: 1258px; margin-right: 20px;">
                            <div class="testimonial-single-slide">
                                <img src="assets/images_new/alexa-t.png" alt="">
                                <div class="testimonial-slide-content">
                                    <p>"Make Opinionは、私たちの製品戦略にとって重要な役割を果たしました。洞察に富んだオンライン調査を実施し、ユーザーの報酬期待を理解し、コピーとチェックアウト体験を最適化するのに役立ちました。これにより、製品のローンチを大幅に促進することができました。"</p>
                                    <div class="testimonial-viewer">
                                        <div class="testimonial-name">
                                            <a href="#">Alexa Cotiaux (アレクサ・コティオー)</a>
                                            <span>プロダクトリード at Oaks</span>
                                        </div>
                                        <a href="#"><img src="assets/images_new/oaks-logo.png" alt="" height="48" style="width:98px"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                <div class="owl-dots disabled"></div>
            </div>


            <div class="features-services" style="padding-top:25px">
                <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22d4-d8996253" class="features-services-block">
                    <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22d5-d8996253" data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22d5" class="analytics" style="background-color: #CBE5FF">
                        <div class="services-title">
                            <div class="service-features-icon" style="display:none"><img src="./assets/images/6449eb8c75b83703f4cebd26_Group%202490.svg" loading="lazy" alt="Save" class="feature-icon"></div>
                            <div data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22d9" class="bold-text" style="color: rgb(34, 34, 34);">アイデアを検証する</div>
                        </div>
                        <ul style="margin-left:-25px">
                            <li>ユーザーのニーズと欲求を理解する</li>
                            <li>有望な製品を特定する</li>
                            <li>需要と実現可能性を理解する</li>
                        </ul>
                        <div class="your-balance-block">
                            <div class="balance-image-block">
                                <img src="./assets/images_new/startup-left.png" loading="lazy" sizes="(max-width: 479px) 85vw, (max-width: 746px) 82vw, (max-width: 991px) 612px, (max-width: 1439px) 24vw, 324.65625px" srcset="
                                                       ./assets/images_new/startup-left.png 500w,
                                                       ./assets/images_new/startup-left.png       612w
                                                   " alt="Growth" class="balance-image">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22ec-d8996253" data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22ec" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="features-services-block">
                    <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22ed-d8996253" data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22ed" class="analytics" style="background-color: #CBE5FF">
                        <div class="services-title">
                            <div class="service-features-icon" style="display:none"><img src="./assets/images/6449eb90f0acdd8695d10564_Group%202493.svg" loading="lazy" alt="Settings" class="feature-icon"></div>
                            <div data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22f1" class="bold-text" style="color: rgb(34, 34, 34);">適切な製品を開発する</div>
                        </div>
                        <ul style="margin-left:-25px">
                            <li>消費者の好みを特定</li>
                            <li style="font-size: 16px">最も魅力的・最も魅力的でない機能を見つける</li>
                            <li>UXを改善</li>
                        </ul>
                        <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22f5-d8996253" class="your-balance-block">
                            <div class="balance-image-block">
                                <img src="./assets/images_new/startup-center.png" loading="lazy" sizes="(max-width: 479px) 85vw, (max-width: 746px) 82vw, (max-width: 991px) 612px, (max-width: 1439px) 24vw, 324.671875px" srcset="
                                                          ./assets/images_new/startup-center.png 500w,
                                                          ./assets/images_new/startup-center.png       612w
                                                      " alt="Analytics" class="balance-image">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e0-d8996253" data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e0" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="features-services-block">
                    <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e1-d8996253" data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e1" class="analytics" style="background-color: #CBE5FF">
                        <div class="services-title">
                            <div class="service-features-icon" style="display:none"><img src="./assets/images-new/6449eb8e4d0a0bf03087dc0a_Logo%20Two.svg" loading="lazy" alt="Globe" class="feature-icon"></div>
                            <div data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e5" class="bold-text" style="color: rgb(34, 34, 34);">製品を市場に出す</div>
                        </div>
                        <ul style="margin-left:-25px">
                            <li style="font-size: 16px">説得力と信頼性の高いキャッチコピーを書く</li>
                            <li>売れるキャンペーンスローガンを見つける</li>
                            <li>ランディングページを最適化</li>
                        </ul>
                        <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e9-d8996253" class="your-balance-block">
                            <div class="balance-image-block">
                                <img src="./assets/images_new/startup-right.png" loading="lazy" sizes="(max-width: 479px) 85vw, (max-width: 746px) 82vw, (max-width: 991px) 612px, (max-width: 1439px) 24vw, 324.671875px" srcset="
                                                       ./assets/images_new/startup-right.png 500w,
                                                       ./assets/images_new/startup-right.png       612w
                                                   " alt="Target" class="balance-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


<section class="ideas-section wf-section" style="background-color: #fff; background-image: url('./assets/images_new/bg5.png');background-size: cover;background-position: 0 0;padding-top: 50px">
    <div class="page-container w-container">

        <div class="overflow-off">
            <h2 data-w-id="9d91c234-c3c2-f525-4953-53e5a0bff144" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="why-creative-heading">調査結果に応じた課金システム</h2>
        </div>
        <div class="overflow-off">
            <p data-w-id="9d91c234-c3c2-f525-4953-53e5a0bff146" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; border-bottom: 0px" class="building-creative-paragraph">月額費用なしで必要なときにのみ調査を実施可能なので、調査予算を一銭も無駄にせずに価値出すことが可能です。</p>
        </div>
        <div class="ideas-main-block">
            <div class="ideas">
                <div class="ideas-main-image-block">
                    <div data-w-id="9d91c234-c3c2-f525-4953-53e5a0bff13f" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;border-radius: 6px" class="ideas-main-banner"><img src="./assets/images_new/pricing-2-back.png" loading="lazy" sizes="(max-width: 479px) 81vw, (max-width: 767px) 70vw, (max-width: 991px) 75vw, (max-width: 1439px) 37vw, 496.1458435058594px" srcset="./assets/images_new/pricing-2-back.png 500w, ./assets/images_new/pricing-2-back.png 800w, ./assets/images_new/pricing-2-back.png 996w" alt="Employee Image" class="ideas-main-image"></div>
                </div>
                <a data-fancybox="register3" href="#registerbox" class="">
                    <div data-w-id="9d91c234-c3c2-f525-4953-53e5a0bff141" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;border-radius: 6px" class="ideas-float-image"><img src="./assets/images_new/pricing-2-front.png" loading="lazy" sizes="(max-width: 479px) 56vw, (max-width: 991px) 58vw, (max-width: 1439px) 32vw, 416.4757080078125px" srcset="./assets/images_new/pricing-2-front.png 500w, ./assets/images_new/pricing-2-front.png 800w, ./assets/images_new/pricing-2-front.png 856w" alt="Chat" class="idea-float"></div>
                </a>
            </div>
            <div class="service-creative-text-block">

                <div class="creative-check-list-block">
                    <div class="home-page-creative-list-block">
                        <div class="creative-check-icon"><img src="./assets/images_new/check.png" loading="lazy" alt="Check" class="checked-icon-blue-circle"></div>
                        <p class="creative-text-list-content" style="padding-bottom:20px"><span class="creative-list-span-text-content">サブスクリプションなし</span>、使った分だけのお支払い。好きなだけアンケートを実施、縛りは一切なし！</p>
                    </div>
                    <div class="home-page-creative-list-block">
                        <div class="creative-check-icon"><img src="./assets/images_new/check.png" loading="lazy" alt="Check" class="checked-icon-blue-circle"></div>
                        <p class="creative-text-list-content list-three" style="padding-bottom:20px"><span class="creative-list-span-text-content">その他固定費用もなし</span>、月額費用なし。アンケート実施のための支払いのみで、他の料金はございません。</p>
                    </div>
                    <div class="home-page-creative-list-block">
                        <div class="creative-check-icon"><img src="./assets/images_new/check.png" loading="lazy" alt="Check" class="checked-icon-blue-circle"></div>
                        <p class="creative-text-list-content list-two" style="padding-bottom:20px"><span class="creative-list-span-text-content">安全性の高いお支払い方法：</span> クレジットカードやPayPalのような信頼性の高いオプションでお支払いいただけます。</p>
                    </div>
                </div>
                <div class="learn-button-block">
                    <a data-w-id="9d91c234-c3c2-f525-4953-53e5a0bff15f" data-fancybox="register5" href="#registerbox" class="start-free-trial-button-block feature-block footer-buttons-start discover-more learn w-inline-block" style="background-color:#0070DF">
                        <div class="start-trial-text-block feature-text-block discover-text" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">登録する</div>
                        <div class="start-trial-text-block feature-text-block text-two discover-more-text" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">登録する</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="pricing-page-solutions-section wf-section" style="background-color: #fff;background-image: url('./assets/images_new/bg7.png');background-size: cover;background-position: 0 0">
    <div class="pricing-page-solutions-container w-container">
        <div class="pricing-page-solutions-main-block">

            <h2 class="pricing-solutions-heading" style="width:70%">私たちは<span style="color:#0070DF">市場調査の専門家</span>です</h2>

            <div class="testimonial-slider owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-2556px, 0px, 0px); transition: all; width: 6390px;">
                        <div class="owl-item active" style="width: 1258px; margin-right: 20px;">
                            <div class="testimonial-single-slide">
                                <img src="assets/images_new/christian-t.png" alt="">
                                <div class="testimonial-slide-content">
                                    <p>DIYツールは素晴らしいです。設定が簡単で、選択肢が非常に多く、極めて透明性が高いです。配送も非常に迅速でした。最終的に、私たちの調査はピッチでの成功を確実にしました。なぜなら、ターゲットグループからの事前知識で光ることができたからです。</p>
                                    <div class="testimonial-viewer">
                                        <div class="testimonial-name">
                                            <a href="#">Christian Büchler (クリスチャン・ビュクラー)</a>
                                            <span>創業者 at Social Ninja</span>
                                        </div>
                                        <a href="#"><img src="assets/images_new/social-ninja-logo.png" alt="" height="48" style="width:210px"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                <div class="owl-dots disabled"></div>
            </div>

            <div class="counter-container w-container">
                <div class="counter-main-block">
                    <div id="w-node-af153084-5437-3061-0c79-3ad102f3b066-701548f4" data-w-id="af153084-5437-3061-0c79-3ad102f3b066" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; border-radius: 6px;background: transparent"
                        class="count-main-block">
                        <div class="count-icon-block"><img src="./assets/images_new/g-survey.png" loading="lazy" alt="Feature Icon Three"></div>
                        <div class="tab-items-heading no-margin" style="color:#0070DF">20<br>万以上の</div>
                        <p class="number-details" style="color:#131A3C; font-weight: 500">アンケート</p>
                    </div>
                    <div id="w-node-af153084-5437-3061-0c79-3ad102f3b06d-701548f4" data-w-id="af153084-5437-3061-0c79-3ad102f3b06d" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; border-radius: 6px;background: transparent"
                        class="count-main-block box-two">
                        <div class="count-icon-block"><img src="./assets/images_new/g-answers.png" loading="lazy" alt="Feature Icon One"></div>
                        <div class="tab-items-heading no-margin" style="color:#0070DF">1500<br>万以上の</div>
                        <p class="number-details" style="color:#131A3C; font-weight: 500">回答データ</p>
                    </div>
                    <div id="w-node-af153084-5437-3061-0c79-3ad102f3b074-701548f4" data-w-id="af153084-5437-3061-0c79-3ad102f3b074" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; border-radius: 6px;background: transparent"
                        class="count-main-block box-three">
                        <div class="count-icon-block"><img src="./assets/images_new/g-takers.png" loading="lazy" alt="Feature Icon Two"></div>
                        <div class="tab-items-heading no-margin" style="color:#0070DF">5200<br>万人以上の</div>
                        <p class="number-details" style="color:#131A3C; font-weight: 500">調査モニター</p>
                    </div>
                    <div id="w-node-af153084-5437-3061-0c79-3ad102f3b07b-701548f4" data-w-id="af153084-5437-3061-0c79-3ad102f3b07b" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; border-radius: 6px;background: transparent"
                        class="count-main-block box-four">
                        <div class="count-icon-block four"><img src="./assets/images_new/g-clients.png" loading="lazy" alt="Icon"></div>
                        <div class="tab-items-heading no-margin" style="color:#0070DF">200<br>以上の</div>
                        <p class="number-details" style="color:#131A3C; font-weight: 500">満足しているお客様</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="home-page-solutions-section wf-section" style="background-image: url('./assets/images_new/bg6.png');background-size: cover;background-position: 0 0">
    <div class="home-page-solutions-container w-container">
        <div class="home-page-solutions-main-block">
            <h2 class="home-page-solutions-heading"><span style="color:#0070DF">あなたの成功は</span>私たちの成功です！</h2>

            <div class="testimonial-slider owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-2556px, 0px, 0px); transition: all; width: 6390px;">
                        <div class="owl-item active" style="width: 1258px; margin-right: 20px;">
                            <div class="testimonial-single-slide">
                                <img src="assets/images_new/samia-t.png" alt="">
                                <div class="testimonial-slide-content">
                                    <p style="font-size: 22px">Make Opinionとの仕事は素晴らしい経験でした。彼らのチームは迅速に対応してくれ、私の目標を実現するための強いコミットメントを本当に示してくれました。Make Opinionチームには本当に感謝しています。間違いなく、彼らのサービスは予算に優しく時間を節約できる素晴らしいツールだと思います。</p>
                                    <div class="testimonial-viewer">
                                        <div class="testimonial-name">
                                            <a href="#">Samia McClain (サミア・マクレイン)</a>
                                            <span>ESSEC M1生、パブリックリレーションズ<br>『L'aficionad』の著者</span>
                                        </div>
                                        <a href="#"><img src="assets/images_new/uni11.png" alt="" height="96" style="width:96px"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                <div class="owl-dots disabled"></div>
            </div>
            <div class="home-page-solutions">
                <div id="w-node-d64d79a4-4a4a-794e-205b-03edfbd2fdb2-29476037" data-w-id="d64d79a4-4a4a-794e-205b-03edfbd2fdb2" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;background: #fff" class="home-page-solutions-block">
                    <div class="home-page-solutions-text-block">
                        <div class="header-small width-eighty">まずは相談する</div>
                        <p class="home-page-solutions-sub-paragraph">調査に関する質問、内容の調整、アンケートの設計についてお困りですか？<br>当社の専門家がお手伝いします！</p>
                        <div class="home-page-solutions-button-block">
                            <a data-w-id="d64d79a4-4a4a-794e-205b-03edfbd2fdb9" onclick="book_a_demo()" class="button home-three-start-free-trial creative-block-learn-more-button w-inline-block" style="border: 1px solid #0070DF">
                                <div class="trail-text home-three-text" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; color: #0070DF">デモを予約する</div>
                                <div class="trail-text-two home-three-text" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; color: #0070DF">デモを予約する</div>
                            </a>
                        </div>
                    </div>
                    <div class="home-page-solutions-image-block"><img src="./assets/images_new/expert-advice.png" loading="lazy" alt="Layout" class="solutions-home-three-image"></div>
                </div>
                <div id="w-node-d64d79a4-4a4a-794e-205b-03edfbd2fdc0-29476037" data-w-id="d64d79a4-4a4a-794e-205b-03edfbd2fdc0" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;background: #fff" class="home-page-solutions-block">
                    <div class="home-page-solutions-text-block">
                        <div class="header-small width-eighty">迅速なサポート</div>
                        <p class="home-page-solutions-sub-paragraph">Make Opinionの使用に関するご質問には、いつでも対応する専門のサポートチームがございます。</p>
                        <div class="home-page-solutions-button-block">
                            <a data-w-id="d64d79a4-4a4a-794e-205b-03edfbd2fdb9" data-fancybox="register4" href="#registerbox" class="button home-three-start-free-trial creative-block-learn-more-button w-inline-block" style="border: 1px solid #0070DF">
                                <div class="trail-text home-three-text" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; color: #0070DF">登録する</div>
                                <div class="trail-text-two home-three-text" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; color: #0070DF">登録する</div>
                            </a>
                        </div>
                    </div>
                    <div class="home-page-solutions-image-block"><img src="./assets/images_new/fast-support.png" loading="lazy" alt="Security Image" class="solutions-home-three-image"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ask-for-demo-hero-section wf-section" style="padding-bottom: 400px;background-color: #fff;background-image: url('./assets/images_new/bg8.png');background-size: cover;background-position: 0 0">
    <div class="container-small w-container">
        <div class="demo-main-block">
            <h1 class="demo-heading" style="font-size: 48px">Make Opinionの無料アカウントを作成する</h1>
            <p class="demo-para">今すぐアンケート作成を始めましょう！</p>
            <div class="demo-form-block">
                <div id="w-node-e6190bc3-7b05-8029-1f59-c34b1326c35d-e200f905" class="demo-form" style="background-color: #F9FAFB">
                    <div class="demo" style="background-color: #F9FAFB">
                        <div class="bold-text demo-margin">無料アカウントを作成</div>
                        <div class="sign-up">
                            <div class="w-form">
                                <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="POST" action="https://app.makeopinion.com/index.php?page=register" aria-label="Email Form 2">

                                    <div class="text-field-block">
                                        <input type="tel" class="contact-form-text-field w-input" maxlength="256" name="lastname" data-name="lname" placeholder="姓*" id="lastname" required="">
                                        <input type="text" class="contact-form-text-field w-input" maxlength="256" name="firstname" data-name="fname" placeholder="名*" id="firstname" required="">
                                    </div>


                                    <input type="text" class="contact-form-text-field w-input" maxlength="256" name="email_register" data-name="email_register" placeholder="メールアドレス*" id="email_register" required="">
                                    <input type="password" class="contact-form-text-field w-input" maxlength="256" name="password_register" data-name="password_register" placeholder="パスワード*" id="password_register" required="">
                                    <input type="text" class="contact-form-text-field w-input" maxlength="256" name="company" data-name="company" placeholder="会社名*" id="company" required="">
                                    <input type="hidden" name="source" data-name="source" value="website" id="source">
                                    <input type="hidden" name="register" data-name="register" value="true" id="true">
                                    <input type="hidden" name="street_line1" data-name="street_line1" value="" id="street_line1">
                                    <input type="hidden" name="street_line2" data-name="street_line2" value="" id="street_line2">
                                    <input type="hidden" name="zip_code" data-name="zip_code" value="" id="zip_code">
                                    <input type="hidden" name="city" data-name="city" value="" id="city">
                                    <input type="hidden" name="phoneNumber" data-name="phoneNumber" value="" id="phoneNumber">


                                    <label class="w-checkbox checkbox-field"><input type="checkbox" id="terms1" name="terms" data-name="Checkbox" class="w-checkbox-input"><span class="google-sign-up-text w-form-label" for="checkbox"><a href="https://app.makeopinion.com/Make%20Opinion%20DIY%20Terms%20and%20Conditions.pdf" class="privacy" target="_blank" style="color:#0070DF">利用規約</a>に同意する</span></label>

                                    <input type="submit" value="登録する" data-wait="Please wait..." class="contact-us-submit demo-submit w-button">
                                </form>
                                <div class="w-form-done" tabindex="-1" role="region" aria-label="Email Form 2 success">
                                    <div>ありがとうございます！ご提出いただいた内容を受け付けました。</div>
                                </div>
                                <div class="w-form-fail" tabindex="-1" role="region" aria-label="Email Form 2 failure">
                                    <div>申し訳ございません。フォームの送信中に問題が発生しました。</br>もう一度やり直してください。</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="w-node-e6190bc3-7b05-8029-1f59-c34b1326c36f-e200f905" class="sign-up-image-main-block">
                    <div class="sign-up-banner-image">
                        <div class="girl-image">
                            <img src="./assets/images_new/register.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 77vw, (max-width: 991px) 34vw, (max-width: 1279px) 35vw, 433px"
                                srcset="./assets/images_new/register.webp 500w, 
                                  ./assets/images_new/register.png 800w, 
                                  ./assets/images_new/register.png 1054w" alt="Banner Girl Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
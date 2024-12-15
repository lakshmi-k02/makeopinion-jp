<?php include('header.php'); ?>

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
<section class="home-hero-section-one wf-section desktop-only" style="background: #fff;padding-bottom: 150px;padding-top:130px;background-image: url('./assets/images_new/bg-final.png');background-size: cover;background-position: 0 0">
    <div class="home-hero-container-large w-container">
        <div class="home-hero-main-block">
            <div class="home-hero-caption-block">
                <div class="overflow-off">
                    <div data-w-id="1fd6d305-6679-7cb9-fb3a-46939f11c7c4" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d" class="w-clearfix">
                        <h1 class="home-hero-heading">
                            <span>メッセージと主張</span><br>
                            <span style="color:#0070DF">記憶に残る</span>製品/サービス名<br />
                            <span style="color:#0070DF">最高の</span>ヘッドライン<br />
                            <span style="color:#0070DF">分かりやすい</span> キャッチコピー
                        </h1>
                    </div>
                </div>
                <div class="overflow-off">
                    <p data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee95" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; margin-top: 50px" class="hero-para-two">説得力のある内容で売上に繋げましょう。メッセージング検証で、どんなメッセージがより効果的なのか理解しましょう。</p>
                </div>
                <div class="overflow-off">
                    <div class="hero-caption-buttons-one">
                        <a role="button" data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee98" data-fancybox="register2" href="#registerbox" class="trial-button w-inline-block">
                            <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee99" class="trail-text-two-home" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">無料アカウントを作成</div>
                            <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9b" class="trail-text-two" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">無料アカウントを作成</div>
                        </a>
                        <a role="button" data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9d" href="mailto:hello@makeopinion.com" class="trial-button feature-button w-inline-block">
                            <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0ee9e" class="trail-text-two-home" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">お問い合わせ</div>
                            <div data-w-id="ed211d01-a9c7-1804-c0ae-c31feba0eea0" class="trail-text-two" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">お問い合わせ</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="home-hero-image-block">
                <div data-w-id="b3ab55ef-0bde-ad3e-dba8-997bea786104" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="home-hero-image-block">
                        <div class="banner-girl-image-block">
                            <img src="./assets/images_new/message-back.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 56vw, (max-width: 991px) 54vw, (max-width: 1439px) 26vw, 347.671875px" srcset="
                          ./assets/images_new/message-back.png 500w, 
                          ./assets/images_new/message-back.png 770w" alt="Banner Girl Image" class="hero-main-image">
                        </div>
                        <div class="banner-float-images">
                            <div class="float-image-one">
                                <img src="./assets/images_new/message-1.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 52vw, (max-width: 991px) 50vw, (max-width: 1439px) 25vw, 323.328125px" srcset="
                             ./assets/images_new/message-1.png 500w, 
                             ./assets/images_new/message-1.png 714w" alt="Banner Image One" class="float-image">
                            </div>
                            <div class="float-image-two">
                                <img src="./assets/images_new/message-2.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 52vw, (max-width: 991px) 50vw, (max-width: 1439px) 25vw, 323.328125px" srcset="
                             ./assets/images_new/message-2.png 500w, 
                             ./assets/images_new/message-2.png 710w" alt="Finance" class="float-image">
                            </div>
                            <div class="float-image-three">
                                <img src="./assets/images_new/message-3.png" loading="lazy" sizes="(max-width: 479px) 94vw, (max-width: 767px) 52vw, (max-width: 991px) 50vw, (max-width: 1439px) 25vw, 323.328125px" srcset="
                             ./assets/images_new/message-3.png 500w, 
                             ./assets/images_new/message-3.png 714w" alt="Order Value" class="float-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mobile section for hero component -->
<section class="home-hero-section-one wf-section mobile-only" style="background: #fff; padding-top: 80px; background-image: url('./assets/images_new/bg-final.png'); background-size: cover; background-position: center;">
    <div class="home-hero-container-large w-container" style="max-width: 1200px; margin: 0 auto;">
        <!-- Main Block -->
        <div class="home-hero-main-block" style="display: flex; flex-direction: column; gap: 2rem;">
            <!-- Text Content Block -->
            <div class="home-hero-caption-block" style="width: 100%; display: flex; flex-direction: column;">
                <div class="overflow-off">
                    <h1 class="home-hero-heading" style="text-align: center; margin-bottom: 1.5rem;">
                        <span style="font-size: clamp(24px, 4vw, 36px);">メッセージと主張</span><br>
                        <span style="color:#0070DF">記憶に残る</span>製品/サービス名<br />
                        <span style="color:#0070DF">最高の</span>ヘッドライン<br />
                        <span style="color:#0070DF">分かりやすい</span> キャッチコピー
                    </h1>
                </div>
                <div class="overflow-off">
                    <p class="hero-para-two" style="margin: 1.5rem 0; text-align: center; font-size: 15px;">
                        説得力のある内容で売上に繋げましょう。メッセージング検証で、どんなメッセージがより効果的なのか理解しましょう。
                    </p>
                </div>
                <!-- CTA Buttons -->
                <div class="overflow-off" style="display: flex; flex-direction: column; gap: 1rem; align-items: center;">
                    <a href="#registerbox" class="trial-button w-inline-block" style="width: 100%; max-width: 300px;">
                        <div class="trail-text-two-home">無料アカウントを作成</div>
                    </a>
                    <a href="mailto:hello@makeopinion.com" class="trial-button feature-button w-inline-block" style="width: 100%; max-width: 300px;">
                        <div class="trail-text-two-home">お問い合わせ</div>
                    </a>
                </div>
            </div>
            <!-- Image Block -->
            <div class="home-hero-image-block">
                <div class="banner-girl-image-block">
                    <img src="./assets/images_new/message-back.png" alt="バナーガールイメージ" class="hero-main-image" style="max-width: 100%;">
                </div>
                <div class="banner-float-images">
                    <img src="./assets/images_new/message-1.png" alt="イメージ1" class="float-image">
                    <img src="./assets/images_new/message-2.png" alt="イメージ2" class="float-image">
                    <img src="./assets/images_new/message-3.png" alt="イメージ3" class="float-image">
                </div>
            </div>
        </div>
    </div>
</section>



<section class="home-new-technology-section-one wf-section" style="background-color:#fff;padding-top: 50px!important;background-image: url('./assets/images_new/bg4.png');background-size: cover;background-position: 0 0">
    <div class="new-tech-container w-container">
        <div class="new-tech-main-section" style="padding-bottom: 25px">
            <div class="overflow-off">
                <h2 data-w-id="df73abb0-29b0-e495-8811-9681fc95cc2a" style="width: 70%; opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;font-size: 45px" class="tech-heading-one">どのメッセージが売れるのか、なぜ響くのか</h2>
            </div>
            <div class="overflow-off">
                <p data-w-id="df73abb0-29b0-e495-8811-9681fc95cc2c" style="width: 95%!important; opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="tech-para">ランディングページのヘッドライン、製品名、製品説明、利点は顧客の購買決定に重要な役割を果たします。実際の見込み顧客にどのメッセージが効果的か、または効果的でないかを尋ねて、コンテンツを最適化しましょう。</p>
            </div>

            <div class="features-services">
                <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22d4-d8996253" class="features-services-block">
                    <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22d5-d8996253" data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22d5" class="analytics" style="background-color: #CBE5FF">
                        <div class="services-title">
                            <div class="service-features-icon" style="display:none"><img src="./assets/images/6449eb8c75b83703f4cebd26_Group%202490.svg" loading="lazy" alt="Save" class="feature-icon"></div>
                            <div data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22d9" class="bold-text" style="color: rgb(34, 34, 34);">ネームテスティング</div>
                        </div>
                        <ul style="margin-left:-25px">
                            <li>ブランド名・製品名の評価</li>
                            <li>信頼性があり、記憶に残りやすいか</li>
                            <li>他の名前との類似性の検証<br><br><br></li>
                        </ul>
                        <div class="your-balance-block">
                            <div class="balance-image-block">
                                <img src="./assets/images_new/message-left.png" loading="lazy" sizes="(max-width: 479px) 85vw, (max-width: 746px) 82vw, (max-width: 991px) 612px, (max-width: 1439px) 24vw, 324.65625px" srcset="
                                         ./assets/images_new/message-left.png 500w,
                                         ./assets/images_new/message-left.png       612w
                                     " alt="Growth" class="balance-image">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e0-d8996253" data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e0" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="features-services-block">
                    <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e1-d8996253" data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e1" class="analytics" style="background-color: #CBE5FF">
                        <div class="services-title">
                            <div class="service-features-icon" style="display:none"><img src="./assets/images-new/6449eb8e4d0a0bf03087dc0a_Logo%20Two.svg" loading="lazy" alt="Globe" class="feature-icon"></div>
                            <div data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e5" class="bold-text" style="color: rgb(34, 34, 34);">メッセージングテスト</div>
                        </div>
                        <ul style="margin-left:-25px">
                            <li>ヘッドライン、製品の利点を検証する</li>
                            <li>説得力のある、信頼性の高いキャッチコピーを書く</li>
                            <li>最も効果的なパターンを選択する<br><br></li>
                        </ul>
                        <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22e9-d8996253" class="your-balance-block">
                            <div class="balance-image-block">
                                <img src="./assets/images_new/message-center.png" loading="lazy" sizes="(max-width: 479px) 85vw, (max-width: 746px) 82vw, (max-width: 991px) 612px, (max-width: 1439px) 24vw, 324.671875px" srcset="
                                         ./assets/images_new/message-center.png 500w,
                                         ./assets/images_new/message-center.png       612w
                                     " alt="Target" class="balance-image">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22ec-d8996253" data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22ec" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="features-services-block">
                    <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22ed-d8996253" data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22ed" class="analytics" style="background-color: #CBE5FF">
                        <div class="services-title">
                            <div class="service-features-icon" style="display:none"><img src="./assets/images/6449eb90f0acdd8695d10564_Group%202493.svg" loading="lazy" alt="Settings" class="feature-icon"></div>
                            <div data-w-id="fa1a0254-dc6a-ccfd-1cb6-a3a8553d22f1" class="bold-text" style="color: rgb(34, 34, 34);">ランディングページのヘッドライン</div>
                        </div>
                        <ul style="margin-left:-25px">
                            <li>ランディングページのコンバージョンを向上させる</li>
                            <li>ヘッドラインに対するイメージを理解する</li>
                            <li>最も成果の良いパターンを見極める</li>
                        </ul>
                        <div id="w-node-fa1a0254-dc6a-ccfd-1cb6-a3a8553d22f5-d8996253" class="your-balance-block">
                            <div class="balance-image-block">
                                <img src="./assets/images_new/message-right.png" loading="lazy" sizes="(max-width: 479px) 85vw, (max-width: 746px) 82vw, (max-width: 991px) 612px, (max-width: 1439px) 24vw, 324.671875px" srcset="
                                         ./assets/images_new/message-right.png 500w,
                                         ./assets/images_new/message-right.png       612w
                                     " alt="Analytics" class="balance-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-page-solutions-section wf-section" style="display:none">
    <div class="home-page-solutions-container w-container">
        <div class="home-page-solutions-main-block">
            <h2 class="home-page-solutions-heading">laster - Concept Test Research: success story</h2>
            <p class="home-page-solutions-caption">Privacy first design and development methodology </p>
            <div class="home-page-solutions">
                <div id="w-node-d64d79a4-4a4a-794e-205b-03edfbd2fdb2-29476037" data-w-id="d64d79a4-4a4a-794e-205b-03edfbd2fdb2" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="home-page-solutions-block">
                    <div class="home-page-solutions-text-block">
                        <div class="header-small width-eighty">The business problem</div>
                        <p class="home-page-solutions-sub-paragraph">Platform design and infrastructure, data quality procedures, all deliver a secure experience, compliant with all data protection and privacy regulations.</p>

                    </div>

                </div>
                <div id="w-node-d64d79a4-4a4a-794e-205b-03edfbd2fdc0-29476037" data-w-id="d64d79a4-4a4a-794e-205b-03edfbd2fdc0" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="home-page-solutions-block">
                    <div class="home-page-solutions-text-block">
                        <div class="header-small width-eighty">Research, results and actions</div>
                        <p class="home-page-solutions-sub-paragraph">We got you!‍ Selecting the right solution for you, designing a survey, or maybe a general question: we're always here to help!</p>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="strategy-section wf-section" style="background-color: #f9fafb;display:none">
    <div class="page-container w-container">
        <div class="services-block">
            <h2 class="strategy-heading">later - See data with your own eyes</h2>
            <div class="para-wrapper">
                <p class="strategy-paragraph">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment so blinded.</p>
            </div>
            <div class="strategy-block">

                <div id="w-node-_230a6f64-7085-9715-df7e-f3b4131fbf6b-d77e0ea4" class="hlep-items no-border">
                    <div class="icons"><img src="./assets/images/64460d507773aa7b75219221_Group%202488.svg" loading="lazy" alt="Strategized Icon"></div>
                    <div class="help-text">
                        <div class="bold-text margin">Example 1</div>
                        <p class="help-details">There are many variations of Lorem Ipsum available, but the majority have suffered by injecter.</p>
                        <a data-w-id="230a6f64-7085-9715-df7e-f3b4131fbf73" href="#" class="learn-more-block w-inline-block">
                            <div class="learn-more text-dark" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Learn More</div>
                            <div class="learn-more learn-more-two text-dark" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Learn More</div>
                            <div class="arrow-icon-block"><img src="./assets/images/644250a81691de65edb6384e_Arrow%20154.svg" loading="lazy" alt="Arrow" class="arrow-icon"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="strategy-block">

                <div id="w-node-_230a6f64-7085-9715-df7e-f3b4131fbf6b-d77e0ea4" class="hlep-items no-border">
                    <div class="icons"><img src="./assets/images/64460d507773aa7b75219221_Group%202488.svg" loading="lazy" alt="Strategized Icon"></div>
                    <div class="help-text">
                        <div class="bold-text margin">Example 2</div>
                        <p class="help-details">There are many variations of Lorem Ipsum available, but the majority have suffered by injecter.</p>
                        <a data-w-id="230a6f64-7085-9715-df7e-f3b4131fbf73" href="#" class="learn-more-block w-inline-block">
                            <div class="learn-more text-dark" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Learn More</div>
                            <div class="learn-more learn-more-two text-dark" style="transform: translate3d(0px, 50px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">Learn More</div>
                            <div class="arrow-icon-block"><img src="./assets/images/644250a81691de65edb6384e_Arrow%20154.svg" loading="lazy" alt="Arrow" class="arrow-icon"></div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="ask-for-demo-hero-section wf-section" style="padding-bottom: 400px;background-color: #fff;background-image: url('./assets/images_new/bg8.png');background-size: cover;background-position: 0 0">
    <div class="container-small w-container">
        <div class="demo-main-block">
            <h1 class="demo-heading" style="font-size: 48px">Make Opinionの無料アカウントを作成する</h1>
            <p class="demo-para">一緒に説得力のあるメッセージを作りましょう！</p>
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
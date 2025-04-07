<!DOCTYPE html>
<html lang="ja">
<head>
<?php
$pagetitle = 'サービス';
$description = 'サービスに関するページ。確かな技術力と豊富な実績の基で、信頼性の高いサービス・ソリューションを創造いたします。';
include $_SERVER['DOCUMENT_ROOT'] .'/inc/vars.php';
include $doc_root .'/inc/head.php';
?>
</head>
<body>
<?php include $doc_root .'/inc/cmn-func.php'; ?>
<!-- header -->
<?php include $doc_root .'/inc/header.php'; ?>
<!-- //header -->
<!-- main -->
<main id="main">
    <!-- Head -->
    <section class="section-head">
        <ul class="breadcrumb">
            <li><a href="/">TOP</a></li>
            <li class="current">サービス</li>
        </ul>
        <h1 class="section-head-ttl wrap">サービス</h1>
        <p class="section-head-subttl wrap">Collaboration With Customer</p>
        <p class="section-head-msg wrap">顧客と共に新たな価値を創造し、ビジネスの可能性を最大化する。<br>
        それが私たちのポリシーです。</p>
        <p class="section-head-catch">Create<br>Highly Reliable Services<br>and Solutions</p>
    </section>
    <!-- //Head -->
    <!-- Philosophy -->
    <section class="service-phlosophy sec-bk">
        <div class="service-swiper-doeco">
            <div class="swiper-doeco1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="/img/cmn/swiper01.webp" alt=""></div>
                        <div class="swiper-slide"><img src="/img/cmn/swiper02.webp" alt=""></div>
                        <div class="swiper-slide"><img src="/img/cmn/swiper03.webp" alt=""></div>
                        <div class="swiper-slide"><img src="/img/cmn/swiper04.webp" alt=""></div>
                        <div class="swiper-slide"><img src="/img/cmn/swiper05.webp" alt=""></div>
                        <div class="swiper-slide"><img src="/img/cmn/swiper07.webp" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <p class="subttl wrap" data-aos="fade-down">Our Philosophy</p>
        <h2 class="headttl wrap" data-aos="fade-down">顧客との共創</h2>
        <p class="ttldesc wrap" data-aos="fade-down">
            「競争力のあるサービスを提供しながら、スピード感をもって安定的かつ革新的なシステム開発にチャレンジし続ける」<br>
            これが、私たちのValueです。<br>
            FleGrowthはこれまで金融システム開発という少しのミスも許されない分野の中で、安定性を担保しながらもスピード感を持ってチャレンジングをし続け、顧客の成長を実現する事で私たちも共に成長を実現してきました。<br>
            私たちは、この成長の源泉であるチャレンジマインドを大切にし、フラットで挑戦しやすい環境構築を大切にしています。
        </p>
        <ul class="service-list wrap">
            <li class="list-fintech" data-aos="zoom-in-up">
                <a href="/service/fintech/">
                    <p class="service-list-subttl">Fintech Service</p>
                    <h3>フィンテックサービス</h3>
                        <p>秒間処理能力2万件を超える自社開発の約定エンジンを保有。<br>
                        FX、システムトレード、暗号資産、バイナリーオプションなど、時代に即した取引システムを多数開発。<br>
                        金融商品事業に欠かせない顧客管理システム、帳票システムなども有し、専任のコンサルタントが導入から運用までワンストップでサポートいたします。</p>
                </a>
            </li>
            <li class="list-dx" data-aos="zoom-in-up">
                <a href="/service/dx-web/">
                    <p class="service-list-subttl">DX support / Web development</p>
                    <h3>DX支援・Web制作</h3>
                        <p>金融のみならず、物流や医療、不動産などの幅広い分野でDX化による業務フロー改善やシステムの導入および人材の育成などを包括的に支援し、デジタル化による業務効率の向上、ミスや事故の低減、働きやすい環境づくりをお手伝いいたします。<br>
                            また、コーポレートブランディングや製品のリブランディング、Webサイト制作など、DX支援からWeb制作まで幅広くご相談をいただいております。</p>
                </a>
            </li>
            <li class="list-sales" data-aos="zoom-in-up">
                <a href="/service/sales/">
                    <p class="service-list-subttl">Sales Consulting</p>
                    <h3>セールスコンサルティング</h3>
                        <p>「自社のプロダクトを世に広めたい」「セールスチームの営業戦略を見直し集客を拡大したい」そうしたニーズに応えるため、商品の特性に沿った「ターゲット・攻め方」の立案から、営業資料案・トークスクリプトの作成、営業メンバーの教育研修といった実践まで、幅広く支援いたします。</p>
                </a>
            </li>
        </ul>
    </section>
    <!-- //Philosophy -->
    <!-- svg line -->
    <div class="svgline-spacer">
        <div class="svgline">
            <img src="/img/mv/line1.svg" alt="">
            <img src="/img/mv/line2.svg" alt="">
            <img src="/img/mv/line3.svg" alt="">
            <img src="/img/mv/line4.svg" alt="">
            <img src="/img/mv/line5.svg" alt="">
        </div>
    </div>
    <!-- //svg line -->
    <!-- Bottom Link Section -->
<?php $btm_link="all";$no_btm_spacer=true; include $doc_root .'/inc/btm-link.php'; ?>
    <!-- //Bottom Link Section -->
</main>
<!-- //main -->
<!-- footer -->
<footer id="footer">
<?php include $doc_root .'/inc/footer.php'; ?>
</footer>
<!-- //fotter -->
</body>
</html>

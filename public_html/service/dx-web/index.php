<!DOCTYPE html>
<html lang="ja">
<head>
<?php
$pagetitle = 'DX支援・Web制作';
$description = 'DX支援・Web制作に関するページ。確かな技術力と豊富な実績の基で、信頼性の高いサービス・ソリューションを創造いたします。';
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
            <li><a href="/service/">サービス</a></li>
            <li class="current">DX支援・Web制作</li>
        </ul>
        <p class="section-head-cate wrap">Service</p>
        <h1 class="section-head-ttl wrap">DX支援・Web制作</h1>
        <p class="section-head-msg wrap">ビジネスをもっと効率的に推し進めるために、<br>
        デジタルの活用を。</p>
        <p class="section-head-catch">Create<br>Highly Reliable Services<br>and Solutions</p>
    </section>
    <!-- //Head -->
    <!-- svg line -->
    <div class="svgline-topright">
        <div class="svgline">
            <img src="/img/mv/line1.svg" alt="">
            <img src="/img/mv/line2.svg" alt="">
            <img src="/img/mv/line3.svg" alt="">
            <img src="/img/mv/line4.svg" alt="">
            <img src="/img/mv/line5.svg" alt="">
        </div>
    </div>
    <!-- //svg line -->
    <!-- list menu -->
        <ul class="service-listmenu wrap">
            <li><a href="#dx">DX支援</a></li>
            <li><a href="#web">Web制作</a></li>
        </ul>
    <!-- //list menu -->
    <!-- DX Web -->
    <section class="service-subpage sec-wh">
        <div class="cont1" id="dx">
            <div class="cont-wrap" data-aos="fade-down">
                <p class="subttl" data-aos="fade-down">DX Support</p>
                <h2 class="headttl" data-aos="fade-down">DX支援</h2>
                <p>「エクセルで管理しているが、処理が重くて進まない」「紙ベースの管理から抜け出したいが、現場の人間を大切にしながら変革したい」…お客様ごとに異なるデジタル変化へのニーズを解決に導くため、豊富な経験と知識を持った専門家が、ビジネスプロセスの見直しやクラウドサービスの導入支援など、お客様のビジネスを効率的に運営するためのDX化をサポートいたします。</p>
                <ul class="list-tag">
                    <a href="https://aisupportdesk.jp/" target="_blank" rel="noopener noreferrer"><li>AIサポートデスク</li></a>
                    <a href="./kakiage-kun/" rel="noopener noreferrer"><li>書きあげクン</li></a>
                </ul>
            </div>
            <span class="img-mask1" data-aos="fade-left">
                <img src="/img/service/dx-web_dx.webp" alt="DX支援">
            </span>
        </div>
        <div class="cont2" id="web">
            <span class="img-mask2" data-aos="fade-right">
                <img src="/img/service/dx-web_web.webp" alt="Web制作">
            </span>
            <div class="cont-wrap" data-aos="fade-down">
                <p class="subttl" data-aos="fade-down">Web Production</p>
                <h2 class="headttl" data-aos="fade-down">Web制作</h2>
                <p>Webサイトは、顧客とのコミュニケーションやエンゲージメントを高めるための重要なツールです。弊社では、お客様のご要望に合わせた魅力的なデザインと使いやすい機能を両立したWebサイトを提供いたします。またWebサイトのデザインや開発だけでなく、SEO対策やマーケティングオートメーション、CRMツールの導入支援も行っており、お客様のビジネス拡大をサポートいたします。</p>
            </div>
        </div>
    </section>
    <!-- //DX Web -->
    <!-- Bottom Link Section -->
<?php $btm_link="all"; include $doc_root .'/inc/btm-link.php'; ?>
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

<!DOCTYPE html>
<html lang="ja">
<head>
<?php
$pagetitle = 'セールスコンサルティング';
$description = 'セールスコンサルティングに関するページ。確かな技術力と豊富な実績の基で、信頼性の高いサービス・ソリューションを創造いたします。';
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
            <li class="current">セールスコンサルティング</li>
        </ul>
        <p class="section-head-cate wrap">Service</p>
        <h1 class="section-head-ttl wrap">セールスコンサルティング</h1>
        <p class="section-head-msg wrap">新たな「革新的な商品」を世に広める<br>
        お手伝いをしたい。</p>
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
            <li><a href="#dx">セールスコンサルティング</a></li>
            <li><a href="#web">アポイント取得代行</a></li>
        </ul>
    <!-- //list menu -->
    <!-- Sales -->
    <section class="service-subpage sec-wh">
        <div class="cont1" id="dx">
            <div class="cont-wrap" data-aos="fade-down">
                <p class="subttl" data-aos="fade-down">Sales Consulting</p>
                <h2 class="headttl" data-aos="fade-down">セールスコンサルティング</h2>
                <p>貴社の商品の特性に沿った「ターゲット・攻め方」の立案から、営業資料案・トークスクリプトの作成、営業メンバーの教育研修といった実践まで、幅広く支援します。</p>
                <ul class="list-tag">
                    <a href="/service/sales/karaden/"><li>空電プッシュ</li></a>
                </ul>
                <!-- <p class="service-subpage-dlbtn"><a href="/service/sales/karaden/" download target="_blank" class="doc-dl linkanime">空電プッシュ</a></p> -->
            </div>
            <span class="img-mask1" data-aos="fade-left">
                <img src="/img/service/sales_consul.webp" alt="コンサルティング">
            </span>
        </div>
        <div class="cont2" id="web">
            <span class="img-mask2" data-aos="fade-right">
                <img src="/img/service/sales_apo.webp" alt="セールスアポイント">
            </span>
            <div class="cont-wrap" data-aos="fade-down">
                <p class="subttl" data-aos="fade-down">Sales Agent</p>
                <h2 class="headttl" data-aos="fade-down">アポイント取得代行</h2>
                <p>BtoBセールスの課題を解決するため、一部上場の営業会社にて経験を積んだ「プロの営業」メンバーが「契約のための」アポイント獲得をサポートします。</p>
                <p class="service-subpage-dlbtn"><a href="/pdf/sales_doc_ap.pdf" download target="_blank" class="doc-dl linkanime">資料ダウンロード</a></p>
            </div>
        </div>
    </section>
    <!-- //Sales -->
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

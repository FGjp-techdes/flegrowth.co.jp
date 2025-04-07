<!DOCTYPE html>
<html lang="ja">
<head>
<?php
$pagetitle = 'フィンテックサービス';
$description = 'フィンテックサービスに関するページ。確かな技術力と豊富な実績の基で、信頼性の高いサービス・ソリューションを創造いたします。';
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
            <li class="current">フィンテックサービス</li>
        </ul>
        <p class="section-head-cate wrap">Service</p>
        <h1 class="section-head-ttl wrap">フィンテックサービス</h1>
        <p class="section-head-msg wrap">金融&times;ITで暮らしを豊かに</p>
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
            <li><a href="#trading">取引システム</a></li>
            <li><a href="#backoffice">バックオフィスシステム</a></li>
            <li><a href="#offshore">オフショア開発支援</a></li>
        </ul>
    <!-- //list menu -->
    <!-- Fintech -->
    <section class="service-subpage sec-wh">
        <div class="cont1" id="trading">
            <div class="cont-wrap" data-aos="fade-down">
                <p class="subttl" data-aos="fade-down">Trading System</p>
                <h2 class="headttl" data-aos="fade-down">取引システム</h2>
                <p>秒間処理能力2万件を超える自社開発の約定エンジンを保有。<br>
                FX、システムトレード、暗号資産、バイナリーオプションなど、時代に即した取引システムを多数開発。<br>
                AWS, AZURE等のクラウド環境に対応し、事業規模に合わせたスケーラビリティ確保をサポートします。</p>
                <ul class="list-tag">
                    <li>FX / Option</li>
                    <li>MT4 & MT5</li>
                    <li>付帯サービス</li>
                </ul>
                <!-- <a class="link-view">View Detail</a> -->
            </div>
            <span class="img-mask1" data-aos="fade-left">
                <img src="/img/service/fintech_trading.webp" alt="トレーディングシステム">
            </span>
        </div>
        <div class="cont2" id="backoffice">
            <span class="img-mask2" data-aos="fade-right">
                <img src="/img/service/fintech_backoffice.webp" alt="バックオフィスシステム">
            </span>
            <div class="cont-wrap" data-aos="fade-down">
                <p class="subttl" data-aos="fade-down">Backoffice System</p>
                <h2 class="headttl" data-aos="fade-down">バックオフィスシステム</h2>
                <p>金融商品を提供する際に欠かせない顧客管理システム、帳票システム等を保有。<br>
                    ペイメントゲートウェイやポイントサービスなど、外部SaaSと連携させることでさらなるサービスの拡張をサポートします。</p>
                <ul class="list-tag">
                    <li>顧客管理システム</li>
                    <li>帳票システム</li>
                    <li>データマイニング</li>
                </ul>
                <!-- <a class="link-view">View Detail</a> -->
            </div>
        </div>
        <div class="cont1" id="offshore">
            <div class="cont-wrap" data-aos="fade-down">
                <p class="subttl" data-aos="fade-down">Offshore Development</p>
                <h2 class="headttl" data-aos="fade-down">オフショア開発支援</h2>
                <p>10年を越える中国、ベトナムでの開発拠点運営の経験を元に、現地での開発チーム組成をサポートします。</p>
                <ul class="list-tag">
                    <li>Offshore Labo</li>
                    <li>BPO</li>
                    <li>Bridge SE派遣</li>
                </ul>
                <!-- <a class="link-view">View Detail</a> -->
            </div>
            <span class="img-mask1" data-aos="fade-left">
                <img src="/img/service/fintech_offshore.webp" alt="Offshore Development">
            </span>
        </div>
    </section>
    <!-- //Fintech -->
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

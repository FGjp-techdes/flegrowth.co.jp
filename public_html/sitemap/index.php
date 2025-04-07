<!DOCTYPE html>
<html lang="ja">
<head>
<?php
$pagetitle = 'サイトマップ';
$description = 'サイトマップに関するページ。確かな技術力と豊富な実績の基で、信頼性の高いサービス・ソリューションを創造いたします。';
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
    <section class="section-head bk-changer-before bk-change-bk">
        <ul class="breadcrumb">
            <li><a href="/">TOP</a></li>
            <li class="current">サイトマップ</li>
        </ul>
        <h1 class="section-head-ttl wrap">サイトマップ</h1>
        <p class="section-head-subttl wrap">Sitemap</p>
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
    <!-- Overhang layout -->
    <section class="overhang-wrap sec-bk">
        <span class="overhang-spacer"></span>
        <div class="overhang wrap-min">
            <!-- contents -->
            <div class="sitemap linkanime">
                <div class="sitemap-cate">
                    <h2 class="sitemap-ttl"><a href="/service/">サービス</a></h2>
                    <ul class="sitemap-list">
                        <li><a href="/service/fintech/">フィンテックサービス</a></li>
                        <li><a href="/service/dx-web/">DX支援・Web制作</a></li>
                            <ul>
                                <li><a href="https://aisupportdesk.jp/" target="_blank" class="open-another-window">― AIサポートデスク</a></li>
                                <li><a href="/service/dx-web/kakiage-kun/">― 書きあげクン</a></li>
                            </ul>
                        <li><a href="/service/sales/">セールスコンサルティング</a></li>
                            <ul>
                                <li><a href="/service/sales/karaden/">― 空電プッシュ</a></li>
                            </ul>
                    </ul>
                </div>
                <div class="sitemap-cate">
                    <h2 class="sitemap-ttl"><a href="/company/">会社概要</a></h2>
                    <ul class="sitemap-list">
                        <li><a href="/company/#top-msg">トップメッセージ</a></li>
                        <li><a href="/company/#mvv">ミッション・ビジョン・バリュー</a></li>
                        <li><a href="/company/#com-info">会社情報</a></li>
                    </ul>
                </div>
                <div class="sitemap-cate">
                    <h2 class="sitemap-ttl"><a href="/recruit/">採用情報</a></h2>
                    <ul class="sitemap-list">
                        <li><a href="/recruit/#3min">3分でわかるFleGrowth</a></li>
                        <li><a href="/recruit/#data">データで見るFleGrowth</a></li>
                        <li><a href="/recruit/#rule">FleGrowthの制度・環境</a></li>
                        <li><a href="/recruit/#style">ワークスタイル</a>
                            <ul>
                                <li><a href="/recruit/interview01/">― 社員インタビュー#01</a></li>
                                <li><a href="/recruit/interview02/">― 社員インタビュー#02</a></li>
                                <li><a href="/recruit/interview03/">― 社員インタビュー#03</a></li>
                            </ul>
                        </li>
                        <li><a href="/recruit/#job">募集職種一覧</a></li>
                    </ul>
                </div>
                <div class="sitemap-cate">
                    <h2 class="sitemap-ttl"><a href="/news/">お知らせ</a></h2>
                </div>
                <div class="sitemap-cate">
                    <h2 class="sitemap-ttl"><a href="/contact/form/">お問合せ</a></h2>
                </div>
                <div class="sitemap-cate">
                    <h2 class="sitemap-ttl"><a href="/privacypolicy/">個人情報保護方針</a></h2>
                </div>
                <div class="sitemap-cate">
                    <h2 class="sitemap-ttl"><a href="/security/">情報セキュリティ基本方針</a></h2>
                </div>
            </div>
            <!-- //contents -->
        </div>
        <span class="overhang-spacer"></span>
    </section>
    <!-- //Overhang layout -->
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

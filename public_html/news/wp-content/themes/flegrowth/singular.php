<!DOCTYPE html>
<html lang="ja">
<head>
<?php
$pagetitle = the_title('', '', false);
$description = get_the_excerpt();
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
            <li><a href="/news/">お知らせ</a></li>
            <li class="current"><?php the_title(); ?></li>
        </ul>
        <p class="section-head-catch">Create<br>Highly Reliable Services<br>and Solutions</p>
    </section>
    <!-- //Head -->
    <!-- svg line -->
    <div class="svgline-topright">
        <div class="svgline">
            <img src="../img/mv/line1.svg" alt="">
            <img src="../img/mv/line2.svg" alt="">
            <img src="../img/mv/line3.svg" alt="">
            <img src="../img/mv/line4.svg" alt="">
            <img src="../img/mv/line5.svg" alt="">
        </div>
    </div>
    <!-- //svg line -->
    <!-- News Contents -->
    <section class="overhang-wrap sec-bk">
        <span class="overhang-spacer"></span>
        <div class="overhang wrap">
            <p class="article-date"><?php the_time('Y.m.d'); ?></p>
            <h1 class="article-title"><?php the_title(); ?></h1>
            <div class="article">
                <?php if(has_post_thumbnail()) { ?>
                <?php the_post_thumbnail('large'); ?>
                <?php } ?>
                <?php the_content(); ?>
            </div>
            <div class="news-back">
                <a href="/news/" class="news-back-btn">お知らせ一覧</a>
            </div>
        </div>
        <span class="overhang-spacer"></span>
    </section>
    <!-- //News Contents -->
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
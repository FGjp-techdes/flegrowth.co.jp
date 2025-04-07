<!DOCTYPE html>
<html lang="ja">
<head>
<?php
$pagetitle = 'お知らせ';
$description = '株式会社FleGrowthからのお知らせページです。';
include $_SERVER['DOCUMENT_ROOT'] .'/inc/vars.php';
include $doc_root .'/inc/head.php';
?>
</head>
<body id="page-news">
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
            <li class="current">お知らせ</li>
        </ul>
        <h1 class="section-head-ttl wrap">お知らせ</h1>
        <p class="section-head-subttl wrap">News</p>
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
    <!-- News List -->
    <div class="overhang-wrap sec-bk">
        <span class="overhang-spacer"></span>
        <div class="overhang wrap">
            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <article class="news-list"><a href="<?php the_permalink(); ?>">
                <p class="news-date"><span><?php the_time('Y'); ?></span><span><?php the_time('m/d'); ?></span></p>
                <h2 class="news-title"><?php the_title(); ?></h2>
                <p class="news-link"><span class="link-view-min">View Detail</span></p>
            </a></article>
            <?php endwhile; endif; ?>
            <div class="pager">
                <?php global $wp_rewrite;
                    $paginate_base = get_pagenum_link(1);
                        if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
                        $paginate_format = '';
                        $paginate_base = add_query_arg('paged','%#%');
                    }
                    else{
                        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                        user_trailingslashit('page/%#%/','paged');;
                        $paginate_base .= '%_%';
                    }
                    echo paginate_links(array(
                        'base' => $paginate_base,
                        'format' => $paginate_format,
                        'total' => $wp_query->max_num_pages,
                        'mid_size' => 1,
                        'current' => ($paged ? $paged : 1),
                        'prev_text' => '«',
                        'next_text' => '»',
                    ));
                ?>
            </div>
        </div>
        <span class="overhang-spacer"></span>
    </div>
    <!-- //News List -->
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
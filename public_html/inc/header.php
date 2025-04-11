<header id="header"<?php echo isset($is_home) ? ' class="top"': '' ?>>
<?php
if (isset($is_home)) {
    echo "<h1 class=\"h-logo\"><a href=\"/\"><img src=\"$host_url/img/cmn/logo_vw.svg\" alt=\"FleGrowth\" class=\"logo_vw\"><img src=\"$host_url/img/cmn/logo_w.svg\" alt=\"FleGrowth\" class=\"logo_h\"></a></h1>";
}else{
    echo "<p class=\"h-logo\"><a href=\"/\"><img src=\"$host_url/img/cmn/logo_v.svg\" alt=\"FleGrowth\" class=\"logo_v\"><img src=\"$host_url/img/cmn/logo_w.svg\" alt=\"FleGrowth\" class=\"logo_h\"></a></p>";
}
?>

    <nav>
        <ul class="h-menu">
            <li><a href="<?= $host_url; ?>/service/">サービス</a></li>
            <li><a href="<?= $host_url; ?>/company/">会社概要</a></li>
            <li><a href="<?= $host_url; ?>/recruit/">採用情報</a></li>
            <li><a href="<?= $host_url; ?>/news/">お知らせ</a></li>
            <li><a href="<?= $host_url; ?>/contact/form/">お問合せ</a></li>
            <li class="h-humb"><div class="h-humb-area"><span></span><span></span><span></span></div></li>
        </ul>
    </nav>
</header>
<nav class="mob-menu">
    <p class="mob-menu-logo"><a href="<?= $host_url; ?>/"><img src="<?= $host_url; ?>/img/cmn/logo_vw.svg" alt="FleGrowth"></a></p>
    <ul class="h-menu-m">
        <li><a href="<?= $host_url; ?>/service/">サービス</a>
            <ul class="h-menu-m-i">
                <li><a href="<?= $host_url; ?>/service/fintech/">フィンテックサービス</a></li>
                <li><a href="<?= $host_url; ?>/service/dx-web/">DX支援・Web制作</a></li>
                <li><a href="<?= $host_url; ?>/service/sales/">セールスコンサルティング</a></li>
            </ul>
        </li>
        <li><a href="<?= $host_url; ?>/company/">会社概要</a></li>
        <li><a href="<?= $host_url; ?>/recruit/">採用情報</a>
            <ul class="h-menu-m-i">
                <li><a href="<?= $host_url; ?>/recruit/interview01/">社員インタビュー#01</a></li>
                <li><a href="<?= $host_url; ?>/recruit/interview02/">社員インタビュー#02</a></li>
                <li><a href="<?= $host_url; ?>/recruit/interview03/">社員インタビュー#03</a></li>
            </ul>
        </li>
        <li><a href="<?= $host_url; ?>/news/">お知らせ</a></li>
        <li><a href="<?= $host_url; ?>/contact/form/">お問合せ</a></li>
        <li><a href="<?= $host_url; ?>/privacypolicy/">個人情報保護方針</a></li>
        <li><a href="<?= $host_url; ?>/security/">情報セキュリティ基本方針</a></li>
        <li><a href="<?= $host_url; ?>/sitemap/">サイトマップ</a></li>
    </ul>
</nav>

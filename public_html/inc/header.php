<header id="header"<?php echo isset($is_home) ? ' class="top"': '' ?>>
<?php
if (isset($is_home)) {
    echo "<h1 class=\"h-logo\"><a href=\"/\"><img src=\"./img/cmn/logo_vw.svg\" alt=\"FleGrowth\" class=\"logo_vw\"><img src=\"./img/cmn/logo_w.svg\" alt=\"FleGrowth\" class=\"logo_h\"></a></h1>";
}else{
    echo "<p class=\"h-logo\"><a href=\"/\"><img src=\"./img/cmn/logo_v.svg\" alt=\"FleGrowth\" class=\"logo_v\"><img src=\"./img/cmn/logo_w.svg\" alt=\"FleGrowth\" class=\"logo_h\"></a></p>";
}
?>

    <nav>
        <ul class="h-menu">
            <li><a href="/service/">サービス</a></li>
            <li><a href="/company/">会社概要</a></li>
            <li><a href="/recruit/">採用情報</a></li>
            <li><a href="/news/">お知らせ</a></li>
            <li><a href="/contact/form/">お問合せ</a></li>
            <li class="h-humb"><div class="h-humb-area"><span></span><span></span><span></span></div></li>
        </ul>
    </nav>
</header>
<nav class="mob-menu">
    <p class="mob-menu-logo"><a href="/"><img src="/img/cmn/logo_vw.svg" alt="FleGrowth"></a></p>
    <ul class="h-menu-m">
        <li><a href="/service/">サービス</a>
            <ul class="h-menu-m-i">
                <li><a href="/service/fintech/">フィンテックサービス</a></li>
                <li><a href="/service/dx-web/">DX支援・Web制作</a></li>
                <li><a href="/service/sales/">セールスコンサルティング</a></li>
            </ul>
        </li>
        <li><a href="/company/">会社概要</a></li>
        <li><a href="/recruit/">採用情報</a>
            <ul class="h-menu-m-i">
                <li><a href="/recruit/interview01/">社員インタビュー#01</a></li>
                <li><a href="/recruit/interview02/">社員インタビュー#02</a></li>
                <li><a href="/recruit/interview03/">社員インタビュー#03</a></li>
            </ul>
        </li>
        <li><a href="/news/">お知らせ</a></li>
        <li><a href="/contact/form/">お問合せ</a></li>
        <li><a href="/privacypolicy/">個人情報保護方針</a></li>
        <li><a href="/security/">情報セキュリティ基本方針</a></li>
        <li><a href="/sitemap/">サイトマップ</a></li>
    </ul>
</nav>

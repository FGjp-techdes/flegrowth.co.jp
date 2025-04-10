<!DOCTYPE html>
<html lang="ja">
<head>
<?php
$pagetitle = '株式会社FleGrowth';
$description = '確かな技術力と豊富な実績の基で、信頼性の高いサービス・ソリューションを創造いたします。';
$is_home = true;
include $_SERVER['DOCUMENT_ROOT'] .'/flegrowth.co.jp/public_html/inc/vars.php';
include $doc_root .'/inc/head.php';
// WP読み込み（トップのみ）
include './news/wp-load.php'; 
?>

</head>
<body>
<?php include $doc_root .'/inc/cmn-func.php'; ?>
<!-- header -->
<?php include $doc_root .'/inc/header.php'; ?>
<!-- //header -->
<!-- main -->
<main id="main">
    <!-- Top MV Area -->
    <section class="top-mv">
        <div class="top-mv-msg">
            <h2 class="top-herottl">Building the Evolution</h2>
            <h3 class="top-herotxt">信頼性の高い<br>サービス・ソリューションを<br>創造する</h3>
        </div>
        <div class="video-container">
        <video playsinline autoplay muted loop id="video">
            <source src="./img/mv/top_mv.mp4" type="video/mp4">
        </video>
    </div>
    </section>
    <!-- //Top MV Area -->
    <!--Waves Container-->
    <div class="wave">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 200 40" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 58-18 88-18 v40h-440z" />
        </defs>
        <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="#153364" fill-opacity="0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="#153364" fill-opacity="0.5" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="#153364" fill-opacity="0.3" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#231815" />
        </g>
        </svg>
    </div>
    <!--Waves end-->
    <!-- Top Feature Section -->
    <section class="sec-bk top-feature">
        <div class="top-intro-ttl wrap" data-aos="fade-down">
            <p>INTRODUCTION</p>
            <h2>確かな技術力と豊富な実績</h2>
        </div>
        <div class="cont1">
            <div class="cont-wrap" data-aos="fade-down">
                <dl class="top-feature-dl">
                    <dt>Transactions Per Day</dt>
                    <dd>1,728,000,000</dd>
                </dl>
                <p>金融システムにおいてこれだけのトランザクションを日々処理する堅牢なシステムを構築。<br>
                    市場環境の変化に応じた急なトラフィックの増加にも耐えてきた「確かな実績」がこの処理数を産んでいます。</p>
            </div>
            <div class="swiper-doeco1" data-aos="fade-left">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="./img/cmn/swiper05.webp" alt=""></div>
                        <div class="swiper-slide"><img src="./img/cmn/swiper06.webp" alt=""></div>
                        <div class="swiper-slide"><img src="./img/cmn/swiper07.webp" alt=""></div>
                        <div class="swiper-slide"><img src="./img/cmn/swiper08.webp" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cont2">
            <div class="swiper-doeco2" data-aos="fade-right">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="./img/cmn/swiper01.webp" alt=""></div>
                        <div class="swiper-slide"><img src="./img/cmn/swiper02.webp" alt=""></div>
                        <div class="swiper-slide"><img src="./img/cmn/swiper03.webp" alt=""></div>
                        <div class="swiper-slide"><img src="./img/cmn/swiper04.webp" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="cont-wrap" data-aos="fade-down">
                <dl class="top-feature-dl">
                    <dt>DB Record Increase Per Month</dt>
                    <dd>60,000,000</dd>
                </dl>
                <p>金融システムに求められる日々の取引記録を積み上げると、月間で数千万レコード。<br>
                大規模なデータベースシステムにも対応し、高速かつ正確な処理を実現するからこそ、お客様から高い評価を受けてきました。</p>
            </div>
        </div>
    </section>
    <!-- //Top Feature Section -->
    <!-- Top Service Section -->
    <section class="top-service">
        <div class="top-service-cont wrap">
            <p class="subttl" data-aos="fade-down">Service</p>
            <h2 class="headttl" data-aos="fade-down">ワンストップで事業を成功に導く<br>FleGrowthの提供サービス</h2>
            <ul class="service-list">
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
                        <p class="service-list-subttl">DX Support / Web Development</p>
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
        </div>
    </section>
    <!-- //Top Service Section -->
    <!-- Top Recruit Section -->
    <section class="top-recruit">
        <div class="top-recruit-cont">
            <p class="subttl wrap" data-aos="fade-down">Career</p>
            <h2 class="headttl wrap" data-aos="fade-down">採用情報</h2>
            <p class="text-slider">
                <span>FleGrowth Member Work Style</span>
                <span>FleGrowth Member Work Style</span>
            </p>
            <ul class="card-list wrap">
                <li><a href="/recruit/interview01/">
                    <p class="card-list-index">01. Tokyo</p>
                    <p class="card-list-index">Sales</p>
                    <p class="card-list-comment">やってみたいと思うことに挑戦できることが、FleGrowthで働く魅力</p>
                </a></li>
                <li><a href="/recruit/interview02/">
                    <p class="card-list-index">02. Tokyo</p>
                    <p class="card-list-index">Bridge SE</p>
                    <p class="card-list-comment">海外の開発拠点との「架け橋」になる面白さ</p>
                </a></li>
                <li><a href="/recruit/interview03/">
                    <p class="card-list-index">03. Tokyo</p>
                    <p class="card-list-index">Data Scientist</p>
                    <p class="card-list-comment">新しいことへ挑戦しやすい会社だな、と感じています</p>
                </a></li>
            </ul>
        </div>
        <p class="top-recruit-dsc">
        私たちは、海外子会社のエンジニアとも連携しながら、最先端の技術を駆使して、クライアントのニーズに応えるサービスを構築・提供しています。また、私たちは柔軟性の高い働き方を実現しており、社員一人ひとりが、自分らしい働き方ができる環境を整備しています。<br>
        そして、成長意欲の高い人材が集まることで、新しいアイデアを生み出すことができます。<br>
        当社でのキャリアアップは、あなた次第。あなたの能力を最大限に引き出す環境を整えています。当社で世の中の人々に役立つサービスを提供しながら、あなた自身のチャレンジを糧に成長していきませんか？<br>
        あなたからのご応募をお待ちしています。
        </p>
        <p class="top-recruit-kwd">
            <svg xmlns="http://www.w3.org/2000/svg" width="26.341" height="24.786" viewBox="0 0 26.341 24.786">
                <path d="M9.149-11.846C6.847-7.576,2.67,3.842.624,12.29L8.3,11.268A154.169,154.169,0,0,1,13.667-12.5Zm13.213,0c-2.3,4.27-6.479,15.688-8.439,24.136l7.587-1.021A164.4,164.4,0,0,1,26.965-12.5Z" transform="translate(-0.624 12.496)" fill="#fff"/>
            </svg>
            「チャレンジ」で可能性を最大化できる環境で働く
            <svg xmlns="http://www.w3.org/2000/svg" width="26.341" height="24.786" viewBox="0 0 26.341 24.786">
                <path d="M9.149-11.846C6.847-7.576,2.67,3.842.624,12.29L8.3,11.268A154.169,154.169,0,0,1,13.667-12.5Zm13.213,0c-2.3,4.27-6.479,15.688-8.439,24.136l7.587-1.021A164.4,164.4,0,0,1,26.965-12.5Z" transform="translate(-0.624 12.496)" fill="#fff"/>
            </svg>
        </p>
        <div class="top-recruit-join">
            <a href="/recruit/">
                <p class="top-recruit-join-cap">Join Our Team!</p>
                <h2>採用情報</h2>
                <p class="top-recruit-join-txt">スピード感を持って挑戦し、共に成長していきたいメンバーを求めています。<br>私たちは成長の源泉でもあるチャレンジマインドや、フラットで挑戦しやすい環境を大切にしています。</p>
            </a>
        </div>
    </section>
    <!-- //Top Recruit Section -->
    <!-- Top News Section -->
    <section class="top-news wrap">
        <div class="top-news-ttl">
            <p class="subttl">NEWS</p>
            <h2 class="headttl">お知らせ</h2>
            <a href="/news/">View All</a>
        </div>
        <div class="top-news-cont">
            <ul class="top-news-list">
            <?php 
            $args = array(
            'posts_per_page' => 5,
            );
            $my_query = new WP_Query( $args ); 
            ?>
            <?php if ( $my_query->have_posts() ) : ?>
            <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
            
                <li><a href="<?php the_permalink(); ?>">
                    <span><?php the_time('Y.m.d'); ?></span>
                    <p><?php the_title(); ?></p>
                </a></li>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
            </ul>
        </div>
    </section>
    <!-- //Top News Section -->
</main>
<!-- //main -->
<!-- footer -->
<footer id="footer">
<?php include $doc_root .'/inc/footer.php'; ?>
</footer>
<!-- //fotter -->
</body>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
<?php
$pagetitle = '会社概要';
$description = '会社概要に関するページ。確かな技術力と豊富な実績の基で、信頼性の高いサービス・ソリューションを創造いたします。';
include '../inc/vars.php';
include $doc_root .'/inc/head.php';
?>
</head>
<body>
<?php include $doc_root .'/inc/cmn-func.php'; ?>
<!-- header -->
<?php include $doc_root .'/inc/header.php';?>

<!-- //header -->
<!-- main -->
<main id="main">
    <!-- Head -->
    <section class="section-head" style="padding-bottom: 200px;">
        <ul class="breadcrumb">
            <li><a href="/">TOP</a></li>
            <li class="current">会社概要</li>
        </ul>
        <h1 class="section-head-ttl wrap">会社概要</h1>
        <p class="section-head-subttl wrap">Bringing More Fun And Accessibility To Finance Through The Power Of IT</p>
        <p class="section-head-msg wrap">ITで金融をもっと楽しく、もっと身近に</p>
        <p class="section-head-catch">Create<br>Highly Reliable Services<br>and Solutions</p>
    </section>
    <!-- //Head -->
    <!-- svg line -->
    <div class="svgline-topright">
        <div class="svgline">
            <img src="<?= $host_url; ?>/img/mv/line1.svg" alt="">
            <img src="<?= $host_url; ?>/img/mv/line2.svg" alt="">
            <img src="<?= $host_url; ?>/img/mv/line3.svg" alt="">
            <img src="<?= $host_url; ?>/img/mv/line4.svg" alt="">
            <img src="<?= $host_url; ?>/img/mv/line5.svg" alt="">
        </div>
    </div>
    <!-- //svg line -->
    <!-- About Logo -->
    <section class="company-logo wrap">
        <p class="subttl" data-aos="fade-down">About Logo</p>
        <h2 class="headttl" data-aos="fade-down">ロゴへの想い</h2>
        <div class="logo-msg">
            <div class="logo-msg-symbol">
                <img src="<?= $host_url; ?>/img/cmn/logo_v.svg" alt="FleGrowth">
            </div>
            <div class="logo-msg-text">
                <p>認め合い、成長する</p>
            </div>
        </div>
        <p class="logo-msg-bottom">社名FleGrowthの基である「Flexibility＝柔軟性」と「Growth＝成長」それぞれの頭文字をベースに、円形は「繋がり」を、中央の柔らかな曲線は「成長・発展」を表しています。<br>
        「多様な人材が集う当社は、それぞれの価値観を認め合いながら、ひとつの目標に向かって成長していく」<br>
        コーポレートロゴには、そんな想いが込められています。</p>
    </section>
    <!-- //About Logo -->
    <!-- Top Message -->
    <section class="top-message" id="top-msg">
        <p class="subttl wrap" data-aos="fade-down">Message</p>
        <h2 class="headttl wrap" data-aos="fade-down">トップメッセージ</h2>
        <div class="top-photo wrap-left" data-aos="fade-up">
            <h3>ITで金融をもっと楽しく、<br>もっと身近に</h3>
            <img src="<?= $host_url; ?>/img/company/top-photo.webp" alt="写真：代表取締役社長">
        </div>
        <div class="top-msg-detail wrap">
            <p>
            「楽しい」は好奇心を刺激する大切なエレメント。<br>
            「貯蓄から投資へ」というスローガンが生まれてから20年以上の時が経ちますが、浸透には遠く<br>
            「金融は難しい」「投資は怖い」という思いを抱き、距離を置く人たちはまだまだ多いと思います。<br>
            私たちのミッションは、そんな思いを抱く人々と金融をＩＴの力で繋ぐこと。<br>
            金融システムに求められる高可用性、高セキュリティー、高パフォーマンスの実現は当然のものとして、<br>
            それに「楽しい」をプラスしたシステムを創造し、世の中に提供することです。<br>
            それを実現する為には、まず自分たちが「楽しむ」ことから始めなければなりません。<br>
            まず自分たちが「面白い」と思えるものを創り上げなければなりません。<br>
            私たちは寄せ集めの集団です。日本、中国、ベトナム三か国の多国籍チームです。<br>
            そんな多様性を活かし、働く人たちの個性が輝く会社でなければなりません。<br>
            まだまだ発展途上の私たちですが、そんな会社の形を目指しています。<br>
            既成概念にとらわれない発想の柔軟性=Flexibilityと
            挑戦と変化を恐れない心の柔軟性を大切にし、<br>
            新しい価値を創造し（Create・New・Value）<br>
            お客様と自分たち、関わる全ての人々の成長と発展=Growthに貢献する会社。<br>
            これが私たち株式会社FleGrowthです。<br>
            </p>
            <!-- <div class="top-msg-sign-container">
                <p class="top-msg-sign">代表取締役社長</p>
                <img class="top-msg-sign2" src="/img/company/sign.svg" alt="森島 玲浩">
            </div> -->
            <p class="top-msg-sign">代表取締役社長　森島 玲浩</p>
        </div>
    </section>
    <!-- //Top Message -->
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
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#153364" />
        </g>
        </svg>
    </div>
    <!--Waves end-->
    <!-- Mission -->
    <div class="mission" id="mvv">
        <img src="<?= $host_url; ?>/img/company/mvv.svg" alt="MVV" class="pc-image">
        <img src="<?= $host_url; ?>/img/company/mvv_sp.svg" alt="MVV" class="sp-image">
    </div>
    <!-- //Mission -->
    <!--Waves Container-->
    <div class="wave">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 200 40" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave2" d="M-160,48c30,0,58,18,88,18s58-18,88-18,58,18,88,18,58-18,88-18,58,18,88,18V26H-160Z" />
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave2" x="48" y="-2" fill="#154A7D" fill-opacity="0.7" />
            <use xlink:href="#gentle-wave2" x="48" y="-5" fill="#154A7D" fill-opacity="0.5" />
            <use xlink:href="#gentle-wave2" x="48" y="-7" fill="#154A7D" fill-opacity="0.3" />
            <use xlink:href="#gentle-wave2" x="48" y="-9" fill="#154A7D" />
        </g>
        </svg>
    </div>
    <!--Waves end-->
    <!-- Company Info -->
    <section class="cominfo wrap" id="com-info">
        <div class="cominfo-wrap"><!-- jp -->
            <div class="cominfo-head">
                <p class="subttl" data-aos="fade-down">Company</p>
                <h2 class="headttl" data-aos="fade-down">企業情報</h2>
            </div>
            <div class="cominfo-data">
                <dl>
                    <dt>会社名</dt>
                        <dd>株式会社FleGrowth  (FleGrowth Co.,Ltd)</dd>
                    <dt>本社所在地</dt>
                        <dd>〒150-6028　東京都渋谷区恵比寿4-20-3　恵比寿ガーデンプレイスタワー28階</dd>
                    <dt>連絡先</dt>
                        <dd><a href="https://flegrowth.co.jp/contact/form/" style="text-decoration:underline;">お問合せはこちら</a></dd>
                    <dt>取締役社長</dt>
                        <dd>森島　玲浩</dd>
                    <dt>設立年月日</dt>
                        <dd>2013年4月1日</dd>
                    <dt>資本金</dt>
                        <dd>1億8300万円 （2023年3月31日現在）</dd>
                    <dt>従業員数<br><span class="mini">（海外子会社含む）</span></dt>
                        <dd>187名 （2024年3月31日現在）</dd>
                    <dt>事業内容</dt>
                        <dd>金融に関するシステムの開発・販売・賃貸および運用保守業務、システム導入に関するコンサルティング、情報処理サービス業務および情報提供サービス、金融に関するシステムのコンサルティング、これらに関連する広告・宣伝・マーケティング・販売代理、および広告代理業</dd>
                </dl>
                <div class="gmap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6484.832897388824!2d139.713177!3d35.64211!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b15d77d1725%3A0xb5bcd9d507694b0e!2z5oG15q-U5a-_44Ks44O844OH44Oz44OX44Os44Kk44K544K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1681277938724!5m2!1sja!2sjp" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div><!-- //jp -->
        <div class="cominfo-wrap"><!-- offshore -->
            <div class="cominfo-head">
                <p class="subttl" data-aos="fade-down">Hub Office</p>
                <h2 class="headttl" data-aos="fade-down">国内拠点</h2>
            </div>
            <div class="cominfo-data">
                <h3>国内拠点</h3>
                <dl>
                    <dt>拠点</dt>
                        <dd>仙台オフィス</dd>
                    <dt>所在地</dt>
                        <dd>〒980-0811　宮城県仙台市青葉区一番町１丁目９−１　仙台トラストタワー19階</dd>
                    <dt>連絡先</dt>
                    <dd><a href="https://flegrowth.co.jp/contact/form/" style="text-decoration:underline;">お問合せはこちら</a></dd>
                </dl>
                <div class="gmap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3132.9893269172167!2d140.87407771533165!3d38.25655357967459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8a281663a81f25%3A0x1dfb7c6729c7c763!2z5LuZ5Y-w44OI44Op44K544OI44K_44Ov44O8!5e0!3m2!1sja!2s!4v1620714613756!5m2!1sja!2s" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div><!-- //offshore -->
        <div class="cominfo-wrap"><!-- offshore -->
            <div class="cominfo-head">
                <p class="subttl" data-aos="fade-down">Offshore</p>
                <h2 class="headttl" data-aos="fade-down">海外拠点</h2>
            </div>
            <div class="cominfo-data">
                <h3>ベトナム</h3>
                <dl>
                    <dt>会社名</dt>
                        <dd>Nextop Co., Ltd</dd>
                    <dt>所在地</dt>
                        <dd>Level 12, 70 Building, Keangnam Landmark Tower, Me Tri Ward,<br>
                        Nam Tu Liem Dist, Ha Noi, Viet Nam.</dd>
                    <dt>連絡先</dt>
                        <dd>TEL: +84 24 8587 4050　FAX: +84 24 3762 1120</dd>
                    <dt>代表</dt>
                        <dd>Thang Tran Dai</dd>
                    <dt>設立年月日</dt>
                        <dd>2010年10月26日</dd>
                    <dt>資本金</dt>
                        <dd>950,000,000 VND</dd>
                    <dt>事業内容</dt>
                        <dd>金融に関するシステム開発、ウェブサービス開発、受託開発、サーバ運用監視、ウェブサイト構築、オンラインゲーム開発</dd>
                </dl>
                <div class="gmap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29795.196906372727!2d105.76637480330876!3d21.016690676312173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc96a87d4bfd7c901!2sNextop.Asia!5e0!3m2!1sja!2sjp!4v1573522124240!5m2!1sja!2sjp" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <h3>中国</h3>
                <dl>
                    <dt>会社名</dt>
                        <dd>耐科斯托普軟件(大連)有限公司　(Nextop Software(Dalian) Co.,Ltd.)</dd>
                    <dt>所在地</dt>
                        <dd>大連市高新園区火炬路3号納米大夏A1702室</dd>
                    <dt>連絡先</dt>
                        <dd>TEL: 0411-39570586　FAX: 0411-39570586</dd>
                    <dt>代表</dt>
                        <dd>王昕宇</dd>
                    <dt>設立年月日</dt>
                        <dd>2015年8月26日</dd>
                    <dt>資本金</dt>
                        <dd>日本円200万円</dd>
                    <dt>事業内容</dt>
                        <dd>金融に関するシステム開発、モバイルアプリ開発、システム受託開発、システム運用保守、サーバ運用監視、BPO関連業務等</dd>
                </dl>
                <div class="gmap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1141.5475903540746!2d121.52610954324226!3d38.8596365467783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7d0f549f327a970a!2z57SN57Gz5aSn5buI!5e0!3m2!1sja!2sjp!4v1573522278804!5m2!1sja!2sjp" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div><!-- //offshore -->
    </section>
    <!-- //Company Info -->
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

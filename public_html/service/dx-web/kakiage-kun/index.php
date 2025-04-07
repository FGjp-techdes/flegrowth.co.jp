<!DOCTYPE html>
<html lang="ja">
<head>
<?php
$pagetitle = '書きあげクン';
$description = '革新的なAI文字起こしソリューション『書きあげクン』。大量の音声ファイルを短時間で高精度にテキスト化し、議事録要約機能で要点を自動整理。業務効率化と生産性向上をサポートします。';
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
<main id="main" class="kakiage">
    <!-- Head -->
    <section class="section-head ">
    <!-- <section class="section-head bk-changer-before bk-change-bk"> -->
        <ul class="breadcrumb">
            <li><a href="/">TOP</a></li>
            <li><a href="/service/">サービス</a></li>
            <li><a href="/service/dx-web/">DX支援・Web制作</a></li>
            <li class="current">書きあげクン</li>
        </ul>
        <p class="section-head-cate wrap">KAKIAGE KUN</p>
        <h1 class="section-head-ttl wrap"><img src="/img/service/kakiage_logo.svg" alt="書きあげクン" style="width: 75vw; max-width:400px"></h1>
        <!-- <p class="section-head-msg wrap">（説明文あれば挿入）</p> -->
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
        <li><a href="#kakiage01">「書きあげクン」革新的なAI文字起こしソリューション</a></li>
        <li><a href="#kakiage02">お悩みを書きあげクンで解決</a></li>
        <li><a href="#kakiage03">書きあげクンが選ばれる理由</a></li>
        <li><a href="#kakiage04">主な機能</a></li>
        <li><a href="#kakiage05">活用事例</a></li>
        <li><a href="#kakiage06">よくある質問</a></li>
    </ul>
    <!-- //list menu -->

    <section class="kakiage-about sec-bk marker" id="kakiage01">
        <img src="/img/service/kakiage-icon01.svg" alt="" class="bg-icon">
        <h2 class="headttl subttl wrap" data-aos="fade-down">
            <span>「書きあげクン」</span><br>
            <span>革新的なAI文字起こしソリューション</span>
        </h2>
        <div class="kakiage-about-cont wrap" data-aos="fade-down">
            <h3><span>「大量の音声ファイルを、一斉に、正確に。」</span></h3>
            <p><span>業務効率を最大化する短期間の文字起こしソリューション、それが「書きあげクン」です。</span></p>
            <p><span>独自AI技術を活用した高速文字起こしと、大規模プロジェクトを支える安心のサポート体制で、お客様のニーズに応えます。</span></p>
        </div>
        <div class="kakiage-about-cont wrap" data-aos="fade-down">
            <h3><span>「どんな会議も、一瞬で要点整理。」</span></h3>
            <p><span>「書きあげクン」は、会議の種類や内容に応じて自動的に要点を抽出し、わかりやすい議事録にまとめる『議事録要約機能』を搭載。</span></p>
            <p><span>複雑な会話でも、重要なポイントを逃さず整理することで、時間を節約し、業務の質を向上させます。</span></p>
        </div>
    </section>

    <!-- Sales -->
    <section class="service-subpage wrap" id="kakiage02">
        <div data-aos="fade-down">
            <h2 class="subttl headttl" data-aos="fade-down">お悩みを書きあげクンで解決</h2>
            <!-- <a class="link-view">View Detail</a> -->
        </div>

        <div class="kakiage-solution" data-aos="fade-right" style="margin-bottom: 120px;">
            <div class="kakiage-solution-content">
                <div class="kakiage-solution-question">
                    <h3 class="fukidashi-right">
                        短期間で大量の文字起こしをしたいけど、<br>どう進めればいい？
                    </h3>
                </div>

                <div class="kakiage-solution-image">
                    <img src="/img/service/kakiage-icon-solution01.svg" alt="短期間で大量の文字起こしをしたいけど、どう進めればいい？">
                </div>
            </div>

            <img src="/img/service/kakiage-arrow.svg" alt="▼" class="kakiage-solution-arrow-btm">

            <p class="kakiage-solution-answer">
                独自の<b>並列処理技術</b>を用いることで、<br>
                大量の音声データを<b>短時間</b>で処理可能です。
            </p>
        </div>

        <div class="kakiage-solution" data-aos="fade-left">
            <div class="kakiage-solution-content part2">
                <div class="kakiage-solution-image">
                    <img src="/img/service/kakiage-icon-solution02.svg" alt="複数の議事録フォーマットが存在して、作成どうしよう？">
                </div>
                <div class="kakiage-solution-question">
                    <h3 class="fukidashi-left">
                        複数の議事録フォーマットが存在して、<br>作成どうしよう？
                    </h3>
                </div>
            </div>

            <img src="/img/service/kakiage-arrow.svg" alt="▼" class="kakiage-solution-arrow-btm">

            <p class="kakiage-solution-answer">
                書きあげクンのプロンプトノウハウにより、<br>
                <b>迅速で正確</b>なアウトプットが得られます。<br>
            </p>
            <span class="kakiage-solution-small">
                ※プロンプトは、AIシステムへの指示や質問です。<br>
                ユーザーの意図を伝え、AIから望む応答を引き出すための入力として機能します。
            </span>
        </div>
    </section>
    <!-- //Sales -->

    <section class="kakiage-sec kakiage-reason wrap" id="kakiage03">
        <!-- <p class="subttl" data-aos="fade-down">Number of FleGrowth</p> -->
        <h2 class="headttl subttl" data-aos="fade-down">書きあげクンが選ばれる理由</h2>
        <div class="rec-num-item-wrap">
            <div class="rec-num-item-col3" data-aos="flip-up">
                <span><img class="kakiage-icon" src="/img/service/kakiage-reason01.webp" alt=""></span>
                <h3>圧倒的な処理スピード</h3>
                <div class="kakiage-reason-description">
                    <p>
                        「書きあげクン」は、<b>1日で数千件のファイル処理</b>が可能な高速性を誇ります。
                        <b>短期間</b>で完了させることができます。
                    </p>
                    <div class="kakiage-reason-img"></div>
                </div>
            </div><!-- rec-num-item -->

            <div class="rec-num-item-col3" data-aos="flip-up">
                <span><img class="kakiage-icon" src="/img/service/kakiage-reason02.webp" alt=""></span>
                <h3>「AIサポートデスク」<br>とのシームレスな連携</h3>
                <div class="kakiage-reason-description">
                    <p>弊社サービス「AIサポートデスク」との連携が可能で、<b>生成AI</b>を活用した<b>効率的な業務支援</b>を実現します。</p>
                    <div class="kakiage-reason-img">
                        <a href="https://aisupportdesk.jp/" class="kakiage-reason-description-aisupport"><img src="/img/service/kakiage-icon-aisupportdesk.png" alt="AIサポートデスク"></a>
                    </div>
                </div>
            </div><!-- rec-num-item -->

            <div class="rec-num-item-col3" data-aos="flip-up">
                <span><img class="kakiage-icon" src="/img/service/kakiage-reason03.webp" alt=""></span>
                <h3>データセキュリティ</h3>
                <div class="kakiage-reason-description">
                    <p>
                        <b>ISO/IEC 27001認証</b>を取得し、<br>
                        <b>情報セキュリティ管理体制</b>を強化。<br>
                        お客様の<b>データを厳重に保護</b>し、安心してサービスをご利用いただけます。
                    </p>
                    <div class="kakiage-reason-img">
                        <img src="/img/service/kakiage-icon-iso.jpg" alt="ISO/IEC 27001認証">
                    </div>
                </div>
            </div><!-- rec-num-item -->
        </div>
    </section>

    <section class="kakiage-sec kakiage-function wrap" id="kakiage04">
        <!-- <p class="subttl" data-aos="fade-down">Number of FleGrowth</p> -->
        <h2 class="headttl subttl" data-aos="fade-down">主な機能</h2>
        <!-- <p>（テキストあれば挿入）</p> -->
        <div class="rec-num-item-wrap">
            <div class="rec-num-item-col1" data-aos="fade-up" id="rule">
                <!-- <h3>サービス活用例</h3> -->
                <ul class="fleg-rule-list">
                    <li class="fleg-rule-list-li">
                        <span><img class="kakiage-icon" src="/img/service/kakiage-function01.svg" alt=""></span>
                        <h4>高速処理</h4>
                        <ul class="kakiage-function-description">
                            <li>サーバーの並列処理技術で圧倒的な処理スピードを実現</li>
                            <li>同時処理により作業時間を大幅に短縮し、数分で完了</li>
                            <li>大規模プロジェクトにも迅速かつ効率的に対応</li>
                        </ul>
                    </li>
                    <li class="fleg-rule-list-li">
                        <span><img class="kakiage-icon" src="/img/service/kakiage-function02.svg" alt=""></span>
                        <h4>多様な音声ファイル対応/録音機能</h4>
                        <ul class="kakiage-function-description">
                            <li>多様な音声形式に対応し、特殊フォーマットも柔軟に処理</li>
                            <li>録音機能搭載で、その場で記録・文字起こしが可能</li>
                            <li>事前準備不要でスムーズな業務フローを実現</li>
                        </ul>
                    </li>
                    <li class="fleg-rule-list-li">
                        <span><img class="kakiage-icon" src="/img/service/kakiage-function03.svg" alt=""></span>
                        <h4>会議の種類に応じた議事録要約機能</h4>
                        <ul class="kakiage-function-description">
                            <li>議事録要約機能で会議の要点を自動整理</li>
                            <li>会議内容に応じたフォーマットで簡潔に情報を把握</li>
                            <li>議事録作成の手間を削減し、業務効率を向上</li>
                        </ul>
                    </li>
                    <li class="fleg-rule-list-li">
                        <span><img class="kakiage-icon" src="/img/service/kakiage-function04.svg" alt=""></span>
                        <h4>AIサポートデスクとの連携</h4>
                        <ul class="kakiage-function-description">
                            <li>生成AI搭載のAIサポートデスクとシームレスに連携</li>
                            <li>文字起こしデータを活用し、迅速かつ的確な回答を提供</li>
                            <li>業務の効率化と質の向上を実現</li>
                        </ul>
                    </li>
                </ul>
            </div><!-- rec-num-item -->
        </div>
    </section>

    <!-- Sales -->
    <section class="service-subpage sec-wh kakiage-usage" id="kakiage05">
        <div class="wrap" data-aos="fade-down">
            <h2 class="subttl headttl" data-aos="fade-down">活用事例</h2>
            <!-- <a class="link-view">View Detail</a> -->
        </div>

        <div class="cont1" id="dx">
            <div class="cont-wrap kakiage-usage-text" data-aos="fade-down">
                <h2 class="headttl" data-aos="fade-down">
                    役員会議事録作成の効率化と正確性向上！
                </h2>
                <img src="/img/service/kakiage-arrow.svg" alt="▼" class="kakiage-solution-arrow-btm">
                <p class="kakiage-usage-description">独自の<b>並列処理技術</b>を用いることで、大量の音声データを<b>短時間</b>で処理可能です。</p>
            </div>
            <span class="img-mask1" style="justify-content:end;" data-aos="fade-left">
                <img src="/img/service/kakiage-image-usage01.webp" alt="イメージ画像">
            </span>
        </div>
        <div class="cont2" id="web">
            <span class="img-mask2" data-aos="fade-right">
                <img src="/img/service/kakiage-image-usage02.webp" alt="イメージ画像">
            </span>
            <div class="cont-wrap kakiage-usage-text" data-aos="fade-down">
                <h2 class="headttl" data-aos="fade-down">
                    複数の議事録フォーマットが存在して、作成どうしよう？
                </h2>
                <img src="/img/service/kakiage-arrow.svg" alt="▼" class="kakiage-solution-arrow-btm">
                <p class="kakiage-usage-description">
                    書きあげクンのプロンプトノウハウにより、<br>
                    <b>迅速で正確</b>なアウトプットが得られます。<br>
                </p>
                <span>
                    ※プロンプトは、AIシステムへの指示や質問です。<br>
                    ユーザーの意図を伝え、AIから望む応答を引き出すための入力として機能します。
                </span>
            </div>
        </div>
    </section>
    <!-- //Sales -->

    <section class="kakiage-sec wrap kakiage-faq" id="kakiage06">
        <!-- <p class="subttl" data-aos="fade-down">Number of FleGrowth</p> -->
        <h2 class="headttl subttl" data-aos="fade-down">よくある質問</h2>
        <div class="rec-num-item-wrap">
            <div class="rec-num-item-col1" data-aos="flip-up">
                <h3>Q.外部データの文字起こしは可能ですか？</h3>
                <p>
                    はい、<b>アップロード機能</b>を使うことによって可能でございます。<br>
                    現在利用可能な<b>音声ファイル形式</b>は下記となります。<br>
                    <b>MP3, WAV, M4A, AAC, MP4, MOV, WMV</b>
                </p>
            </div><!-- rec-num-item -->

            <div class="rec-num-item-col1" data-aos="flip-up">
                <h3>Q.サポート体制はどうなっていますか？</h3>
                <p>
                    導入から運用まで、充実したサポート体制を整えております。<br>
                    お客様の課題や活用フェーズに応じた最適なサポートサービスを、弊社のスタッフがご案内いたします。
                    </p>
            </div><!-- rec-num-item -->

            <div class="rec-num-item-col1" data-aos="flip-up">
                <h3>Q.セキュリティ対策はとられていますか？</h3>
                <p>
                    弊社は<b>ISO/IEC 27001認証</b>を取得しており、<b>厳格な情報セキュリティ管理体制</b>を整えています。データはすべて暗号化され、<b>安全なサーバー</b>で管理されますので、安心してご利用いただけます。
                </p>
            </div><!-- rec-num-item -->
        </div>
    </section>

    <!-- Bottom Link Section -->
    <section class="bottom-link top-spacer">
        <ul class="btm-link">
            <li class="btm-link-contact">
                <!-- <p class="subttl">Contact</p> -->
                <h3 class="headttl">導入検討中の方へ</h3>
                <p class="btm-link-desc">業務効率化と正確性を両立する革新的なAI文字起こしソリューション「書きあげクン」を、ぜひご検討ください。<br>
                ご不明な点はお気軽にお問い合わせください。利用用途やお困ごとに応じて最適なご提案をいたします。</p>
                <div class="kakiage_message_btn">
                    <a href="/contact/form/">お問合せ</a>
                </div>
            </li>
        </ul>
    </section>
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
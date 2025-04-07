<!DOCTYPE html>
<html lang="ja">
<head>
<?php
$pagetitle = '情報セキュリティ基本方針';
$description = '情報セキュリティ基本方針に関するページ。確かな技術力と豊富な実績の基で、信頼性の高いサービス・ソリューションを創造いたします。';
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
            <li class="current">情報セキュリティ基本方針</li>
        </ul>
        <h1 class="section-head-ttl wrap">情報セキュリティ基本方針</h1>
        <p class="section-head-subttl wrap">Information Security Policy</p>
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
            <p class="text-right">令和２年３月１６日<br>株式会社FleGrowth</p>
            <h2 class="big-ttl">情報セキュリティ基本方針</h2>
            <p>当社は、金融システム開発・コンサルティングを中核としてお客様のニーズに応えてきま した。今後も、お客様にご満足いただける製品・サービスを提供するために、高度情報化社 会における情報資産を事故・災害・犯罪などの脅威から守り、お客様ならびに社会の信頼に 応えるべく、情報セキュリティ基本方針を定め、当社の情報セキュリティに対する取り組み の指針といたします。</p>
            
            <p>
                <strong>１．社内体制および情報セキュリティポリシーの整備</strong><br>
						当社は、セキュリティの維持及び改善のために必要な管理体制を整備し、必要な情報セ 
						キュリティ対策を社内の正式な規則として定めます。<br><br>

						<strong>２．リーダーシップにおける責任および継続的改善</strong><br>
						当社の経営者は、本方針の遵守により、当社及びお客様の情報資産が適切に管理される 
						よう主導します。<br><br>

						<strong>３．法令、契約上の要求事項の遵守</strong><br>
						当社の従業員は、事業活動で利用する情報資産に関連する法令、規制、規範及びお客様 
						との契約上のセキュリティ要求事項を遵守します。<br><br>

						<strong>４．従業員の取組み</strong><br>
						当社の従業員は、情報セキュリティの維持及び改善のために必要とされる知識、技術を 
						習得し、情報セキュリティへの取り組みを確かなものにします。<br><br>

						<strong>５．違反及び事故への対応</strong><br>
						当社は、情報セキュリティに関わる法令、規制、規範及びお客様との契約に関わる違反 
						及び情報セキュリティ事故への対応のための体制を整備し、違反及び事故の影響を低減し 
						ます。<br><br>

						本規程の改廃は、取締役会の決議による。 <br>
						本規程は、平成３０年１１月０１日より施行する。<br>
						令和２年３月１６日改訂
            </p>
            
            <script> 
                function secretaddress() {
                    var ma = String.fromCharCode(115-3,111+3,113-8,98+20,118-21,86+13,148-27,45+19,125-23,77+31,130-29,92+11,141-27,99+12,138-19,86+30,120-16,43+3,118-19,100+11,74-28,78+28,112-0);
                    var mt = String.fromCharCode(112-3,94+3,148-43,62+46,170-54,86+25,109-51);
                    document.write('<a href="'+ mt + ma + '">' + ma + '</a>');
                }
            </script>
            <p class="margin-top50" id="info-add">
                【個人情報の取扱いに関するお問合せ先】<br>
                株式会社FleGrowth<br>
                個人情報保護相談窓口<br>
                03-6736-9870<br>
                受付時間　月曜日～金曜日　9：00～18：00<br>
                E-mail: <script> secretaddress(); </script>
            </p>
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

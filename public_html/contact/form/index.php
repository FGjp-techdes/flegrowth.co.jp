<?php
// =================== Mail Form =================== //
//セッションを開始
session_start();
 
//セッションIDを更新して変更（セッションハイジャック対策）
//session_regenerate_id( TRUE ); //TRUE を指定するとセッションが消える可能性あり！！！
session_regenerate_id();

//エスケープ処理やデータチェックを行う関数のファイルの読み込み
require './libs/functions.php';

//reCAPTCHA ウィジェットを表示する場合は以下の2行と API 読み込み（133行目）のコメントアウトを外す
//require './libs/recaptchavars.php'; //reCAPTCHA サイトキーを記述したファイルの読み込み
//$siteKey = V3_SITEKEY; // reCAPTCHA サイトキー

//NULL 合体演算子を使ってセッション変数を初期化（PHP7.0以降）
$name = $_SESSION[ 'name' ] ?? NULL;
$company = $_SESSION[ 'company' ] ?? NULL;
$division = $_SESSION[ 'division' ] ?? NULL;
$email = $_SESSION[ 'email' ] ?? NULL;
$email_check = $_SESSION[ 'email_check' ] ?? NULL;
$tel = $_SESSION[ 'tel' ] ??  NULL;
$subject = $_SESSION[ 'subject' ] ?? NULL;
$body = $_SESSION[ 'body' ] ?? NULL;
$error = $_SESSION[ 'error' ] ?? NULL;

//個々のエラーを NULL で初期化（PHP7.0以降）
$error_name = $error[ 'name' ] ?? NULL;
$error_company = $error[ 'company' ] ?? NULL;
$error_division = $error[ 'division' ] ?? NULL;
$error_email = $error[ 'email' ] ?? NULL;
$error_email_check = $error[ 'email_check' ] ?? NULL;
$error_tel = $error[ 'tel' ] ?? NULL;
$error_subject = $error[ 'subject' ] ?? NULL;
$error_body = $error[ 'body' ] ?? NULL;

//CSRF対策のトークンを生成
if ( !isset( $_SESSION[ 'ticket' ] ) ) {
  //セッション変数にトークンを代入（PHP7.0以降）
  $_SESSION[ 'ticket' ] = bin2hex(random_bytes(32));
}
//トークンを変数に代入（隠しフィールドに挿入する値）
$ticket = $_SESSION[ 'ticket' ];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php
$pagetitle = 'お問合せ';
$description = '株式会社FleGrowthについてのお問合せはこちらから';
include $_SERVER['DOCUMENT_ROOT'] .'/inc/vars.php';
include $doc_root .'/inc/head.php';
?>
</head>
<body id="page-form">
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
            <li class="current">お問合せ</li>
        </ul>
        <h1 class="section-head-ttl wrap">お問合せ</h1>
        <p class="section-head-subttl wrap">Contact Us</p>
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
            <div class="form-step"><img src="/img/contact/form1.svg" alt="フォーム入力"></div>
            <p>下記のフォームに必要事項をご入力いただき、<a href="/privacypolicy/" target="_blank">「個人情報保護方針」</a>をご確認の上、「送信する」ボタンを押してください。<br>
            内容によっては、ご連絡までお時間がかかるものがございますので、あらかじめご了承ください。</p>
            <form id="form" class="validationForm" method="post" action="confirm.php" novalidate>
                <div class="form-group">
                    <label for="name">氏名<span class="mst">必須</span>
                      <span class="error-php"><?php echo h( $error_name ); ?></span>
                    </label>
                    <input type="text" class="required maxlength form-control" data-maxlength="30" id="name" name="name" placeholder="氏名" data-error-required="氏名は必須です。" value="<?php echo h($name); ?>">
                </div>
                <div class="form-group">
                    <label for="company">会社名
                      <span class="error-php"><?php echo h( $error_company ); ?></span>
                    </label>
                    <input type="text" class="maxlength form-control" data-maxlength="30" id="company" name="company" placeholder="会社名" data-error-pattern="会社名の入力に問題があります"  value="<?php echo h($company); ?>">
                </div>
                <div class="form-group">
                    <label for="division">部署名
                      <span class="error-php"><?php echo h( $error_division ); ?></span>
                    </label>
                    <input type="text" class="maxlength form-control" data-maxlength="30" id="division" name="division" placeholder="会社名" data-error-pattern="会社名の入力に問題があります"  value="<?php echo h($division); ?>">
                </div>
                <div class="form-group">
                    <label for="email">メールアドレス<span class="mst">必須</span>
                        <span class="error-php"><?php echo h( $error_email ); ?></span>
                    </label>
                    <input type="email" class="required pattern form-control" data-pattern="email" id="email" name="email" placeholder="Email アドレス" data-error-required="Email アドレスは必須です。"  data-error-pattern="Email の形式が正しくないようですのでご確認ください" value="<?php echo h($email); ?>">
                </div>
                <div class="form-group">
                    <label for="email_check">メールアドレス [確認]<span class="mst">必須</span>
                        <span class="error-php"><?php echo h( $error_email_check ); ?></span>
                    </label>
                    <input type="email" class="form-control equal-to required" data-equal-to="email" data-error-equal-to="メールアドレスが異なります" id="email_check" name="email_check" placeholder="Email アドレス（確認用 必須）" value="<?php echo h($email_check); ?>">
                </div>
                <div class="form-group">
                    <label for="tel">電話番号
                        <span class="error-php"><?php echo h( $error_tel ); ?></span>
                    </label>
                    <input type="tel" class="pattern form-control" data-pattern="tel" id="tel" name="tel" placeholder="お電話番号" data-error-pattern="電話番号の形式が正しくないようですのでご確認ください"  value="<?php echo h($tel); ?>">
                </div>
                <div class="form-group">
                    <label for="subject">件名<span class="mst">必須</span>
                        <span class="error-php"><?php echo h( $error_subject ); ?></span> 
                    </label>
                    <input type="text" class="required maxlength form-control" data-maxlength="100" id="subject" name="subject" placeholder="件名" value="<?php echo h($subject); ?>">
                </div>
                <div class="form-group">
                    <label for="body">お問合せ内容<span class="mst">必須</span>
                        <span class="error-php"><?php echo h( $error_body ); ?></span>
                    </label>
                    <textarea class="required maxlength showCount form-control" data-maxlength="1000" id="body" name="body" placeholder="お問合せ内容（1000文字まで）をお書きください" rows="3"><?php echo h($body); ?></textarea>
                </div>
                <div class="form-btn-wrap">
                    <input type="hidden" name="ticket" value="<?php echo h($ticket); ?>">
                    <button name="submitted" type="submit" class="btn-submit">確認画面へ</button>
                </div>
            </form>
            <!-- reCAPTCHA Wedget -->
            <!--<script src="https://www.google.com/recaptcha/api.js?render=<?php /* echo $siteKey; */ ?>"></script>-->
            <script src="/js/formValidation.js"></script> 
            <!-- //contents -->
        </div>
        <span class="overhang-spacer"></span>
    </section>
    <!-- //Overhang layout -->
    <!-- Bottom Link Section -->
<?php $btm_link="onlyCareer"; include $doc_root .'/inc/btm-link.php'; ?>
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

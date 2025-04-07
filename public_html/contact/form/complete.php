<?php
//セッションを開始
session_start(); 
//エスケープ処理やデータをチェックする関数を記述したファイルの読み込み
require './libs/functions.php'; 
//メールアドレス等を記述したファイルの読み込み
require './libs/mailvars.php'; 

//reCAPTCHA サイトキーを記述したファイルの読み込み
require './libs/recaptchavars.php';
// reCAPTCHA サイトキー
$siteKey = V3_SITEKEY;
// reCAPTCHA シークレットキー
$secretKey = V3_SECRETKEY;

//POSTされたデータをチェック
$_POST = checkInput( $_POST );

//固定トークンを確認（CSRF対策）
if ( isset( $_POST[ 'ticket' ], $_SESSION[ 'ticket' ] ) ) {
  $ticket = $_POST[ 'ticket' ];
  if ( $ticket !== $_SESSION[ 'ticket' ] ) {
    //トークンが一致しない場合は処理を中止
    die( 'Access denied' );
  }
} else {
  //トークンが存在しない場合（入力ページにリダイレクト）
  //die( 'Access Denied（直接このページにはアクセスできません）' ); //処理を中止する場合
  $dirname = dirname( $_SERVER[ 'SCRIPT_NAME' ] );
  $dirname = $dirname == DIRECTORY_SEPARATOR ? '' : $dirname;
  //サーバー変数 $_SERVER['HTTPS'] が取得出来ない環境用（オプション）
  if(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) and $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
    $_SERVER[ 'HTTPS' ] = 'on';
  }
  $url = ( empty( $_SERVER[ 'HTTPS' ] ) ? 'http://' : 'https://' ) . $_SERVER[ 'SERVER_NAME' ] . $dirname . '/index.php';
  header( 'HTTP/1.1 303 See Other' );
  header( 'location: ' . $url );
  exit;
}

//reCAPTCHA トークン
$token = filter_input(INPUT_POST, 'g-recaptcha-response');
//reCAPTCHA アクション名
$action = filter_input(INPUT_POST, 'action');
//reCAPTCHA の検証を通過したかどうかの真偽値
$rcv3_result = false;

// reCAPTCHA のトークンとアクション名が取得できていれば
if ( $token && $action ) {
 
  //cURL セッションを初期化（API のレスポンスの取得）
  $ch = curl_init();
  // curl_setopt() により転送時のオプションを設定
  //URL の指定
  curl_setopt( $ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify" );
  //HTTP POST メソッドを使う
  curl_setopt( $ch, CURLOPT_POST, true );
  //API パラメータの指定
  curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( array(
    'secret' => $secretKey,
    'response' => $token
  ) ) );
  //curl_execの返り値を文字列にする
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
  //転送を実行してレスポンスを $api_response に格納
  $api_response = curl_exec( $ch );
  //セッションを終了
  curl_close( $ch );
 
  //レスポンスの $json（JSON形式）をデコード
  $rc_result = json_decode( $api_response );
 
  //レスポンスの値を判定
  if ( $rc_result->success && $rc_result->action === $action && $rc_result->score >= 0.5 ) {
    //success が true でアクション名が一致し、スコアが 0.5 以上の場合は合格
    $rcv3_result = true;
  } else {
    // 上記以外の場合は 不合格
    $rcv3_result = false;
  }
}
 
//メールの送信結果の初期値を false に
$result = false;
 
//reCAPTCHA の検証結果が合格の場合はメール送信処理を実行
if ( $rcv3_result ) {

  //お問合せ日時を日本時間に
  date_default_timezone_set('Asia/Tokyo'); 

  //変数にエスケープ処理したセッション変数の値を代入
  $name = h( $_SESSION[ 'name' ] );
  $company = h( $_SESSION[ 'company' ] ) ;
  $division = h( $_SESSION[ 'division' ] ) ;
  $email = h( $_SESSION[ 'email' ] ) ;
  $tel =  h( $_SESSION[ 'tel' ] ) ;
  $subject = "お問合せ：" .h( $_SESSION[ 'subject' ] );
  $body = h( $_SESSION[ 'body' ] );
  
  //メール本文の組み立て
  $mail_body = 'コンタクトページからのお問合せ' . "\n\n";
  $mail_body .=  date("Y年m月d日 H時i分") . "\n\n"; 
  $mail_body .=  "お名前： " .$name . "\n";
  $mail_body .=  "会社名： " .$company . "\n";
  $mail_body .=  "部署名： " .$division . "\n";
  $mail_body .=  "Email： " . $email . "\n"  ;
  $mail_body .=  "お電話番号： " . $tel . "\n\n" ;
  $mail_body .=  "＜お問合せ内容＞" . "\n" . $body;
    
  //-------- sendmail（mb_send_mail）を使ったメールの送信処理------------
  
  //メールの宛先（名前<メールアドレス> の形式）。値は mailvars.php に記載
  $mailTo = mb_encode_mimeheader(MAIL_TO_NAME) ."<" . MAIL_TO. ">";
  
  //Return-Pathに指定するメールアドレス
  $returnMail = MAIL_RETURN_PATH; //
  //mbstringの日本語設定
  mb_language( 'ja' );
  mb_internal_encoding( 'UTF-8' );
  
  // 送信者情報（From ヘッダー）の設定
  $header = "From: " . mb_encode_mimeheader($name) ."<" . $email. ">\n";
  // $header .= "Cc: " . mb_encode_mimeheader(MAIL_CC_NAME) ."<" . MAIL_CC.">\n";
  // $header .= "Bcc: <" . MAIL_BCC.">";
  
  //メールの送信（結果を変数 $result に代入）
  if ( ini_get( 'safe_mode' ) ) {
    //セーフモードがOnの場合は第5引数が使えない
    $result = mb_send_mail( $mailTo, $subject, $mail_body, $header );
  } else {
    $result = mb_send_mail( $mailTo, $subject, $mail_body, $header, '-f' . $returnMail );
  }
}

//メール送信の結果判定
if ( $result ) {
  //成功した場合はセッションを破棄
  $_SESSION = array(); //空の配列を代入し、すべてのセッション変数を消去 
  session_destroy(); //セッションを破棄
} else {
  //送信失敗時（もしあれば）
}
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
            <div class="contact_finish">
              <div class="form-step"><img src="/img/contact/form3.svg" alt="送信完了"></div>
              <?php if ( $result ): ?>
              <h2 class="headttl">送信完了</h2>
              <p>お問合せいただきありがとうございます。</p>
              <p>送信完了いたしました。</p>
              <p>内容によっては、ご連絡までお時間がかかるものがございますので、あらかじめご了承ください。</p>
              <?php else: ?>
              <p>申し訳ございませんが、送信に失敗しました。</p>
              <p>しばらくしてもう一度お試しになるか、<a href="mailto:info@flegrowth.co.jp">メール</a>にてご連絡ください。</p>
              <p>ご迷惑をおかけして誠に申し訳ございません。</p>
              <?php endif; ?>
                  <div class="form-btn-wrap">
                      <a href="/" class="btn-submit">トップページへ</a>
                  </div>
            </div>
            <!-- //contents -->

<!-- reCAPTCHA
<?php if (isset($rc_result )): ?>
====reCAPTCHA API Response====
<?php var_dump($rc_result ); ?>
<?php endif; ?>
reCAPTCHA -->

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

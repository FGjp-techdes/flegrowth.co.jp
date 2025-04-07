<?php
//セッションを開始
session_start();
//エスケープ処理やデータチェックを行う関数のファイルの読み込み
require './libs/functions.php';

//reCAPTCHA サイトキーを記述したファイルの読み込み
require './libs/recaptchavars.php';
// reCAPTCHA サイトキー
$siteKey = V3_SITEKEY;

//POSTされたデータをチェック
$_POST = checkInput( $_POST );
//固定トークンを確認（CSRF対策）
if ( isset( $_POST[ 'ticket' ], $_SESSION[ 'ticket' ] ) ) {
  $ticket = $_POST[ 'ticket' ];
  if ( $ticket !== $_SESSION[ 'ticket' ] ) {
    //トークンが一致しない場合は処理を中止
    die( 'Access Denied!' );
  }
} else {
  //トークンが存在しない場合は処理を中止（直接このページにアクセスするとエラーになる）
  die( 'Access Denied（直接このページにはアクセスできません）' );
}
 
//POSTされたデータを初期化して前後にあるホワイトスペースを削除
$name = trim( filter_input(INPUT_POST, 'name') );
$company = trim( filter_input(INPUT_POST, 'company') );
$division = trim( filter_input(INPUT_POST, 'division') );
$email = trim( filter_input(INPUT_POST, 'email') );
$email_check = trim( filter_input(INPUT_POST, 'email_check') );
$tel = trim( filter_input(INPUT_POST, 'tel') );
$subject = trim( filter_input(INPUT_POST, 'subject'));
$body = trim( filter_input(INPUT_POST, 'body') );
 
//エラーメッセージを保存する配列の初期化
$error = array();
 
//値の検証（入力内容が条件を満たさない場合はエラーメッセージを配列 $error に設定）
if ( $name == '' ) {
  $error[ 'name' ] = '*お名前は必須項目です。';
  //制御文字でないことと文字数をチェック
} else if ( preg_match( '/\A[[:^cntrl:]]{1,30}\z/u', $name ) == 0 ) {
  $error[ 'name' ] = '*お名前は30文字以内でお願いします。';
}
if ( $company != '' && preg_match( '/\A[[:^cntrl:]]{1,30}\z/u', $company ) == 0 ) {
  $error[ 'company' ] = '*会社名は30文字以内でお願いします。';
}
if ( $division != '' && preg_match( '/\A[[:^cntrl:]]{1,30}\z/u', $division ) == 0 ) {
  $error[ 'division' ] = '*部署名は30文字以内でお願いします。';
}
if ( $email == '' ) {
  $error[ 'email' ] = '*メールアドレスは必須です。';
} else { //メールアドレスを正規表現でチェック
  $pattern = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/uiD';
  if ( !preg_match( $pattern, $email ) ) {
    $error[ 'email' ] = '*メールアドレスの形式が正しくありません。';
  }
}
if ( $email_check == '' ) {
  $error[ 'email_check' ] = '*確認用メールアドレスは必須です。';
} else { //メールアドレスを正規表現でチェック
  if ( $email_check !== $email ) {
    $error[ 'email_check' ] = '*メールアドレスが一致しません。';
  }
}
if ( $tel != '' && preg_match( '/\A\(?\d{2,5}\)?[-(\.\s]{0,2}\d{1,4}[-)\.\s]{0,2}\d{3,4}\z/u', $tel ) == 0 ) {
  $error[ 'tel' ] = '*電話番号の形式が正しくありません。';
}
if ( $subject == '' ) {
  $error[ 'subject' ] = '*件名は必須項目です。';
  //制御文字でないことと文字数をチェック
} else if ( preg_match( '/\A[[:^cntrl:]]{1,100}\z/u', $subject ) == 0 ) {
  $error[ 'subject' ] = '*件名は100文字以内でお願いします。';
}
if ( $body == '' ) {
  $error[ 'body' ] = '*内容は必須項目です。';
  //制御文字（タブ、復帰、改行を除く）でないことと文字数をチェック
} else if ( preg_match( '/\A[\r\n\t[:^cntrl:]]{1,1050}\z/u', $body ) == 0 ) {
  $error[ 'body' ] = '*内容は1000文字以内でお願いします。';
}
 
//POSTされたデータとエラーの配列をセッション変数に保存
$_SESSION[ 'name' ] = $name;
$_SESSION[ 'company' ] = $company;
$_SESSION[ 'division' ] = $division;
$_SESSION[ 'email' ] = $email;
$_SESSION[ 'email_check' ] = $email_check;
$_SESSION[ 'tel' ] = $tel;
$_SESSION[ 'subject' ] = $subject;
$_SESSION[ 'body' ] = $body;
$_SESSION[ 'error' ] = $error;
 
//チェックの結果にエラーがある場合は入力フォームに戻す
if ( count( $error ) > 0 ) {
  //エラーがある場合
  $dirname = dirname( $_SERVER[ 'SCRIPT_NAME' ] );
  $dirname = $dirname == DIRECTORY_SEPARATOR ? '' : $dirname;
  //サーバー変数 $_SERVER['HTTPS'] が取得出来ない環境用
  if(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) and $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
    $_SERVER[ 'HTTPS' ] = 'on';
  }
  //入力画面（index.php）の URL 
  $url = ( empty( $_SERVER[ 'HTTPS' ] ) ? 'http://' : 'https://' ) . $_SERVER[ 'SERVER_NAME' ] . $dev_port . $dirname . '/';
  header( 'HTTP/1.1 303 See Other' );
  header( 'location: ' . $url );
  exit;
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
            <div class="form-step"><img src="/img/contact/form2.svg" alt="確認"></div>
            <p>以下のお問合せ内容でよろしければ「送信する」ボタンをクリックしてください。<br>
            内容を変更したい場合は、「戻る」ボタンをクリックして入力画面にお戻りください。</p>

                <div class="form-group">
                    <label for="name">氏名<span class="mst">必須</span>
                    </label>
                    <?php echo h($name); ?>
                </div>
                <div class="form-group">
                    <label for="company">会社名
                    </label>
                    <?php echo h($company); ?>
                </div>
                <div class="form-group">
                    <label for="division">部署名
                    </label>
                    <?php echo h($division); ?>
                </div>
                <div class="form-group">
                    <label for="email">メールアドレス<span class="mst">必須</span>
                    </label>
                    <?php echo h($email); ?>
                </div>
                <div class="form-group">
                    <label for="tel">電話番号
                    </label>
                    <?php echo h($tel); ?>
                </div>
                <div class="form-group">
                    <label for="subject">件名<span class="mst">必須</span>
                    </label>
                    <?php echo h($subject); ?>
                </div>
                <div class="form-group">
                    <label for="body">お問合せ内容<span class="mst">必須</span>
                    </label>
                    <?php echo nl2br(h($body)); ?>
                </div>
                <div class="form-btn-wrap">
                <form action="index.php" method="post" class="confirm">
                    <button type="submit" class="btn-submit-gr">戻る</button>
                </form>
                <form action="complete.php" method="post" id="complete" class="confirm">
                    <input type="hidden" name="ticket" value="<?php echo h($ticket); ?>">
                    <button type="submit" class="btn-submit">送信する</button>
                </form>
                </div>
                <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $siteKey; ?>"></script>
                <script>
                //reCAPTCHA v3
                //id 属性に complete を指定した form 要素を取得
                const myForm = document.getElementById('complete');
                //上記で取得したフォーム要素に submit イベントハンドラを設定
                myForm.addEventListener('submit', (e) => {
                  //デフォルトの動作（送信）を停止
                  e.preventDefault();
                  const action_name = 'contact'; //アクション名
                  //トークンを取得
                  grecaptcha.ready(function() {
                    grecaptcha.execute('<?php echo $siteKey; ?>', {action: action_name}).then(function(token) {
                    const token_input = document.createElement('input'); //input 要素を生成
                    token_input.type = 'hidden';
                    token_input.name = 'g-recaptcha-response';
                    token_input.value = token; //トークンを値に設定
                    myForm.appendChild(token_input);  //フォームに input 要素を追加
                    const action_input = document.createElement('input'); //input 要素を生成
                    action_input.type = 'hidden';
                    action_input.name = 'action';
                    action_input.value = action_name;  //アクション名を値に設定
                    myForm.appendChild(action_input);  //フォームに input 要素を追加
                    myForm.submit();  //フォームを送信
                    });
                  });
                });
                </script>
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

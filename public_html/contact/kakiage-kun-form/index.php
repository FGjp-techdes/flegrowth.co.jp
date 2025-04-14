<?php
//セッションを開始
session_start();
session_regenerate_id();

//エスケープ処理やデータチェックを行う関数のファイルの読み込み
require './libs/functions.php';
require './libs/Form.php';

//NULL 合体演算子を使ってセッション変数を初期化
$name = $_SESSION[ 'name' ] ?? NULL;
$company = $_SESSION[ 'company' ] ?? NULL;
$email = $_SESSION[ 'email' ] ?? NULL;
$email_check = $_SESSION[ 'email_check' ] ?? NULL;
$tel = $_SESSION[ 'tel' ] ?? NULL;
$subject = $_SESSION[ 'subject' ] ?? NULL;
$body = $_SESSION[ 'body' ] ?? NULL;
$error = $_SESSION[ 'error' ] ?? NULL;

//個々のエラーを初期化
$error_name = $error[ 'name' ] ?? NULL;
$error_company = $error[ 'company' ] ?? NULL;
$error_email = $error[ 'email' ] ?? NULL;
$error_email_check = $error[ 'email_check' ] ?? NULL;
$error_tel = $error[ 'tel' ] ?? NULL;
$error_subject = $error[ 'subject' ] ?? NULL;
$error_body = $error[ 'body' ] ?? NULL;

//CSRF対策のトークンを生成
if ( !isset( $_SESSION[ 'ticket' ] ) ) {
  $_SESSION[ 'ticket' ] = bin2hex(random_bytes(32));
}
$ticket = $_SESSION[ 'ticket' ];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php
$pagetitle = '書きあげクン お問合せ';
$description = '書きあげクンについてのお問合せはこちらから';
require_once '../../inc/vars.php';
include $doc_root .'/inc/head.php';

?>
</head>
<body id="page-form">
<?php include($doc_root .'/inc/cmn-func.php'); ?>
<!-- header -->
<?php include($doc_root .'/inc/header.php'); ?>
<!-- //header -->
<!-- main -->
<main id="main" class="kakiage-kun-form">
    <!-- Head -->
    <section class="section-head bk-changer-before bk-change-bk">
        <ul class="breadcrumb">
            <li><a href="<?= $host_url; ?>/">TOP</a></li>
            <li><a href="<?= $host_url; ?>/service/">サービス</a></li>
            <li><a href="<?= $host_url; ?>/service/dx-web/">DX支援・Web制作</a></li>
            <li><a href="<?= $host_url; ?>/service/dx-web/kakiage-kun/">書きあげクン</a></li>
            <li class="current">無料トライアル お申込みフォーム</li>
        </ul>
        <h1 class="section-head-ttl wrap">書きあげクン無料トライアル<br>申し込みフォーム</h1>
        <p class="section-head-subttl wrap">Kakiage-kun Trial</p>
    </section>
    <!-- Overhang layout -->
    <section class="overhang-wrap sec-bk">
        <span class="overhang-spacer"></span>
        <div class="overhang wrap-min">
            <!-- 説明セクション -->
            <div class="kakiage-description">
                <h2 class="kakiage-description__title">トライアルでできること</h2>
                
                <div class="kakiage-description__section">
                    <h3 class="kakiage-description__subtitle">提供条件</h3>
                    <ul class="kakiage-description__list">
                        <li>
                            <span class="kakiage-description__label">記録・文字起こし上限</span>
                            <span class="kakiage-description__emphasis">8時間</span>
                            <span class="kakiage-description__unit"></span>
                        </li>
                        <li>
                            <span class="kakiage-description__label">トライアル期間</span>
                            <span class="kakiage-description__emphasis">10日間</span>
                            <span class="kakiage-description__unit"></span>
                        </li>
                        <li>
                            <span class="kakiage-description__label">記録の保管期限</span>
                            <span style="margin-bottom: 10px; font-size: 1.2em; line-height: 1.4;">トライアル終了後<br><span style="font-weight: bold; color: #333; font-size: 1.4em;">1か月</span>まで</span>
                            <small>※本契約しない場合、データは完全消去されます</small>
                        </li>
                    </ul>
                </div>

                <div class="kakiage-description__section">
                    <h3 class="kakiage-description__subtitle">スタートまでの流れ</h3>
                    <ol class="kakiage-description__ordered-list">
                        <li>フォームよりトライアルの申し込み</li>
                        <li>営業から連絡し、ヒアリングさせて頂きます</li>
                        <li>トライアルスタート</li>
                    </ol>
                </div>

                <div class="kakiage-description__section">
                    <h3 class="kakiage-description__subtitle">精度をよくするために</h3>
                    <p class="kakiage-description__text">弊社推奨のマイクの貸出しを使うことによって、精度がよくなります。</p>
                </div>
            </div>
            <!-- 既存のフォーム部分 -->
            <h2 class="kakiage-description__title">トライアルのお申込み</h2>
            <div class="form-step"><img src="<?= $host_url; ?>/img/contact/form1.svg" alt="フォーム入力"></div>
            <p>書きあげクン無料トライアルへの申し込みは下記フォームよりお願いいたします。<br>
            内容を確認の上、担当者よりご連絡させていただきます。</p>
            <?php
            $form = new Form('form');

            $form->addInput('company', '会社名', [
                'required' => true,
                'maxlength' => 100,
                'placeholder' => '会社名'
            ])
            ->addInput('division', '部署名', [
                'maxlength' => 50,
                'placeholder' => '部署名'
            ])
            ->addInput('address', '住所', [
                'required' => true,
                'maxlength' => 200,
                'placeholder' => '住所'
            ])
            ->addInput('name', '担当者氏名', [
                'required' => true,
                'maxlength' => 30,
                'placeholder' => '担当者氏名'
            ])
            ->addInput('email', 'メールアドレス', [
                'type' => 'email',
                'required' => true,
                'pattern' => 'email',
                'placeholder' => 'メールアドレス'
            ])
            ->addInput('website', '企業ホームページ', [
                'type' => 'url',
                'placeholder' => 'https://'
            ])
            ->addInput('tel', '電話番号', [
                'type' => 'tel',
                'required' => true,
                'pattern' => 'tel',
                'placeholder' => '電話番号'
            ])
            ->addInput('trial_date', 'トライアル開始希望日', [
                'type' => 'date',
                'placeholder' => '開始希望日を選択してください'
            ])
            ->addTextarea('implementation_period', '導入予定時期', [
                'placeholder' => '満足いただけた場合、トライアルから導入予定時期を教えてください。',
                'rows' => 2
            ])
            ->addCheckbox('need_mic', 'マイク必要の有無', [
                'required' => false,
                'label_text' => '必要'
            ])
            ->addInput('monthly_hours', '月間予測利用時間', [
                'type' => 'number',
                'placeholder' => '予測利用時間'
            ])
            ->addInput('user_count', '利用予定ユーザー数', [
                'type' => 'number',
                'placeholder' => '予定ユーザー数'
            ])
            ->addCheckbox('agree_terms', '<span class="terms-label"><a href="'. $host_url .'/service/dx-web/kakiage-kun/terms/" target="_blank">トライアル利用規約</a>と<a href="'. $host_url .'/privacypolicy/" target="_blank">プライバシーポリシー</a>に同意する</span>', [
                'required' => true,
                'wrapper_class' => 'terms-container'
            ]);

            $form->display();
            ?>
            <script src="<?= $host_url; ?>/js/formValidation.js"></script>
        </div>
        <span class="overhang-spacer"></span>
    </section>
</main>
<!-- footer -->
<footer id="footer">
<?php include $doc_root .'/inc/footer.php'; ?>
</footer>
</body>
</html>
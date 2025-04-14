<?php
session_start();

// 必要なファイルの読み込み
require './libs/functions.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// セッションデータの取得
$company = isset($_SESSION['company']) ? $_SESSION['company'] : '';
$division = isset($_SESSION['division']) ? $_SESSION['division'] : '';
$address = isset($_SESSION['address']) ? $_SESSION['address'] : '';
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$website = isset($_SESSION['website']) ? $_SESSION['website'] : '';
$tel = isset($_SESSION['tel']) ? $_SESSION['tel'] : '';
$trial_date = isset($_SESSION['trial_date']) ? $_SESSION['trial_date'] : '';
$implementation_period = isset($_SESSION['implementation_period']) ? $_SESSION['implementation_period'] : '';
$need_mic = isset($_SESSION['need_mic']) ? $_SESSION['need_mic'] : '';
$monthly_hours = isset($_SESSION['monthly_hours']) ? $_SESSION['monthly_hours'] : '';
$user_count = isset($_SESSION['user_count']) ? $_SESSION['user_count'] : '';

// マイク必要の有無の文字列を事前に設定
$need_mic_text = $need_mic ? '必要' : '不要';

// 空の値の場合のデフォルト値を設定
$monthly_hours_display = empty($monthly_hours) ? '-' : $monthly_hours . '時間';
$user_count_display = empty($user_count) ? '-' : $user_count . '名';

// メール本文の作成
$body = <<<EOT
かき上げクンお問い合わせフォームより以下の内容で申し込みがありました。

【会社名】
{$company}

【部署名】
{$division}

【住所】
{$address}

【担当者氏名】
{$name}

【メールアドレス】
{$email}

【企業ホームページ】
{$website}

【電話番号】
{$tel}

【トライアル開始希望日】
{$trial_date}

【導入予定時期】
{$implementation_period}

【マイク必要の有無】
{$need_mic_text}

【月間予測利用時間】
{$monthly_hours_display}

【利用予定ユーザー数】
{$user_count_display}


◇トライアル終了後について
トライアル終了前に、継続利用に関するご連絡を致します。ご継続いただける場合は、その旨いただければと存じます。トライアル期間中に作成されたデータは、お手続き完了後もそのままご利用いただけます。
弊社の書きあげクンが、お客様のお役に立てることを心より願っております。
何かご不明な点がございましたら、お気軽にお問い合わせください。

-----------------------------------------------------------------------
株式会社FleGrowth
〒150-6028　東京都渋谷区恵比寿4-20-3　恵比寿ガーデンプレイスタワー28階
TEL: 03-6736-9870
URL: https://flegrowth.co.jp/
EOT;

try {
    $mail = new PHPMailer(true);
    
    // デバッグ出力を有効化
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    
    // エラー出力をキャプチャするための設定
    ob_start();
    
    // SMTPの設定
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'kakiagekun-contact@flegrowth.co.jp';
    $mail->Password = 'nvyl vodu bnke vbha';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587; //SSLの場合 465
    $mail->CharSet = 'UTF-8';

    // 管理者宛てのメール送信
    $mail->setFrom($email, $name);
    $mail->addAddress('kakiagekun-contact@flegrowth.co.jp');
    $mail->addReplyTo($email, $name);
    $mail->Subject = '書きあげクントライアルお申し込みがありました';
    $mail->Body = $body;
    $result_admin = $mail->send();

    // メールオブジェクトをクリア
    $mail->clearAddresses();
    $mail->clearReplyTos();

    // ユーザー宛ての自動返信メール
    $mail->setFrom('kakiagekun-contact@flegrowth.co.jp', '株式会社FleGrowth');
    $mail->addAddress($email, $name);
    $mail->Subject = '書きあげクントライアルお申し込みありがとうございます';
    $mail->Body = $body;
    $result_user = $mail->send();

    // 両方のメールが成功した場合のみ true
    $result = $result_admin && $result_user;
    
    // デバッグ出力を取得
    $debug_output = ob_get_clean();
    
} catch (Exception $e) {
    $result = false;
    $error_details = [
        'message' => $e->getMessage(),
        'debug_output' => isset($debug_output) ? $debug_output : '',
        'mailer_error' => $mail->ErrorInfo
    ];
    error_log("メール送信エラーの詳細: " . print_r($error_details, true));
    
    // 画面にエラー詳細を表示（開発時のみ使用することを推奨）
    echo "<pre>";
    print_r($error_details);
    echo "</pre>";
}

// セッションデータのクリア
$_SESSION = array();
session_destroy();

// 送信完了画面の表示
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php 
$pagetitle = 'かき上げクン お問合せ - 送信完了';
$description = 'かき上げクンについてのお問合せ - 送信完了画面';
require_once '../../inc/vars.php';
include($doc_root.'/inc/head.php');
?>
</head>
<body id="page-form">
<?php include($doc_root.'/inc/cmn-func.php'); ?>
<!-- header -->
<?php include($doc_root.'/inc/header.php'); ?>
<!-- //header -->
<!-- main -->
<main id="main">
    <section class="section-head bk-changer-before bk-change-bk">
        <ul class="breadcrumb">
            <li><a href="<?= $host_url; ?>/">TOP</a></li>
            <li><a href="<?= $host_url; ?>/kakiage-kun/">かき上げクン</a></li>
            <li class="current">お問合せ 送信完了</li>
        </ul>
        <h1 class="section-head-ttl wrap">かき上げクン お問合せ</h1>
        <p class="section-head-subttl wrap">Contact Us</p>
    </section>
    <section class="overhang-wrap sec-bk">
        <span class="overhang-spacer"></span>
        <div class="overhang wrap-min">
            <div class="form-step"><img src="<?= $host_url; ?>/img/contact/form3.svg" alt="送信完了"></div>
            <?php if ($result): ?>
            <h2>送信が完了しました</h2>
            <p>お問い合わせありがとうございます。<br>
            内容を確認の上、担当者より順次ご連絡させていただきます。</p>
            <?php else: ?>
            <h2>送信に失敗しました</h2>
            <p>申し訳ございませんが、時間をおいて再度お試しください。</p>
            <?php endif; ?>
            <div class="form-btn-wrap">
                <a href="<?= $host_url; ?>/kakiage-kun/" class="btn-back">かき上げクントップへ戻る</a>
            </div>
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
<?php
//セッションを開始
session_start();

//エスケープ処理やデータチェックを行う関数のファイルの読み込み
require './libs/functions.php';

//POSTされたデータを変数に代入
$company = isset($_POST['company']) ? $_POST['company'] : NULL;
$division = isset($_POST['division']) ? $_POST['division'] : NULL;
$address = isset($_POST['address']) ? $_POST['address'] : NULL;
$name = isset($_POST['name']) ? $_POST['name'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$website = isset($_POST['website']) ? $_POST['website'] : NULL;
$tel = isset($_POST['tel']) ? $_POST['tel'] : NULL;
$trial_date = isset($_POST['trial_date']) ? $_POST['trial_date'] : NULL;
$implementation_period = isset($_POST['implementation_period']) ? $_POST['implementation_period'] : NULL;
$need_mic = isset($_POST['need_mic']) ? $_POST['need_mic'] : NULL;
$monthly_hours = isset($_POST['monthly_hours']) ? $_POST['monthly_hours'] : NULL;
$user_count = isset($_POST['user_count']) ? $_POST['user_count'] : NULL;
$agree_terms = isset($_POST['agree_terms']) ? $_POST['agree_terms'] : NULL;
$token = isset($_POST['ticket']) ? $_POST['ticket'] : NULL;

//CSRF対策
if ( $token != $_SESSION['ticket'] ) {
  //トークンが一致しない場合は処理を中止
  die('不正なアクセスが行われました');
}

//POSTされたデータをチェック
$error = validation($_POST);

//エラーが無ければセッションに保存
if ( empty($error) ) {
    $_SESSION['company'] = $company;
    $_SESSION['division'] = $division;
    $_SESSION['address'] = $address;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['website'] = $website;
    $_SESSION['tel'] = $tel;
    $_SESSION['trial_date'] = $trial_date;
    $_SESSION['implementation_period'] = $implementation_period;
    $_SESSION['need_mic'] = $need_mic;
    $_SESSION['monthly_hours'] = $monthly_hours;
    $_SESSION['user_count'] = $user_count;
    $_SESSION['agree_terms'] = $agree_terms;
} else {
    //エラーがあれば保存しない
    $_SESSION['error'] = $error;
}

//エラーが無ければ確認画面を表示
if ( empty($error) ) {
    $mode = 'confirm';
} else {
    //エラーがあれば入力画面に戻す
    header('Location: ./');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php 
$pagetitle = 'かき上げクン お問合せ - 確認';
$description = 'かき上げクンについてのお問合せ - 確認画面';
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
    <!-- Head -->
    <section class="section-head bk-changer-before bk-change-bk">
        <ul class="breadcrumb">
            <li><a href="<?= $host_url; ?>/">TOP</a></li>
            <li><a href="<?= $host_url; ?>/kakiage-kun/">かき上げクン</a></li>
            <li class="current">お問合せ 確認</li>
        </ul>
        <h1 class="section-head-ttl wrap">かき上げクン お問合せ</h1>
        <p class="section-head-subttl wrap">Contact Us</p>
    </section>
    <!-- Overhang layout -->
    <section class="overhang-wrap sec-bk">
        <span class="overhang-spacer"></span>
        <div class="overhang wrap-min">
            <!-- contents -->
            <div class="form-step"><img src="<?= $host_url; ?>/img/contact/form2.svg" alt="入力内容の確認"></div>
            <p>入力内容をご確認ください。</p>
            <form action="send.php" method="post">
                <div class="form-group">
                    <label>会社名</label>
                    <p><?php echo h($company); ?></p>
                </div>
                <div class="form-group">
                    <label>部署名</label>
                    <p><?php echo h($division); ?></p>
                </div>
                <div class="form-group">
                    <label>住所</label>
                    <p><?php echo h($address); ?></p>
                </div>
                <div class="form-group">
                    <label>担当者氏名</label>
                    <p><?php echo h($name); ?></p>
                </div>
                <div class="form-group">
                    <label>メールアドレス</label>
                    <p><?php echo h($email); ?></p>
                </div>
                <div class="form-group">
                    <label>企業ホームページ</label>
                    <p><?php echo h($website); ?></p>
                </div>
                <div class="form-group">
                    <label>電話番号</label>
                    <p><?php echo h($tel); ?></p>
                </div>
                <div class="form-group">
                    <label>トライアル開始希望日</label>
                    <p><?php echo h($trial_date); ?></p>
                </div>
                <div class="form-group">
                    <label>導入予定時期</label>
                    <p><?php echo nl2br(h($implementation_period)); ?></p>
                </div>
                <div class="form-group">
                    <label>マイク必要の有無</label>
                    <p><?php echo $need_mic ? '必要' : '不要'; ?></p>
                </div>
                <div class="form-group">
                    <label>月間予測利用時間</label>
                    <p><?php echo empty($monthly_hours) ? '-' : h($monthly_hours) . '時間'; ?></p>
                </div>
                <div class="form-group">
                    <label>利用予定ユーザー数</label>
                    <p><?php echo empty($user_count) ? '-' : h($user_count) . '名'; ?></p>
                </div>
                <div class="form-btn-wrap">
                    <button type="button" class="btn-back btn-submit-gr" onclick="history.back()">修正する</button>
                    <button type="submit" class="btn-submit">送信する</button>
                </div>
            </form>
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
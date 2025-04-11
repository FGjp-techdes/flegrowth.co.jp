<?php
// ローカル環境かどうかの判定
$is_local = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;

// ベースパスの設定
$base_path = $is_local ? '/flegrowth.co.jp/public_html' : '';

// ドキュメントルートのパス
$doc_root = $_SERVER['DOCUMENT_ROOT'] . $base_path;

// サーバーが $_SERVER['HTTPS'] の値を返さない場合の対策
if(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) and $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
    $_SERVER['HTTPS'] = 'on';
}

// プロトコルの設定
$protocol = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://');

// ホストの設定
$host = $_SERVER['HTTP_HOST'];

// URIの取得と正規化
$request_uri = $_SERVER['REQUEST_URI'];
if ($is_local) {
    // ローカル環境では base_path を request_uri から除去
    $request_uri = str_replace($base_path, '', $request_uri);
}

// 各URLの組み立て
$host_url = $protocol . $host . $base_path;
$ogp_url = $protocol . $host . ($is_local ? $base_path : '') . $request_uri;

// サイト名
$site_name = "株式会社FleGrowth";

// TITLE
if (isset($is_home)) {
    $title = $pagetitle;
} else {
    $title = $pagetitle."|".$site_name;
}

?>
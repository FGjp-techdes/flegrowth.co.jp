<?php
//ドキュメントルートのパス
$doc_root = $_SERVER['DOCUMENT_ROOT'] . "/flegrowth.co.jp/public_html";

//サーバーが $_SERVER['HTTPS'] の値を返さない場合の対策
if(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) and $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
  $_SERVER['HTTPS'] = 'on';
}

//Home の URL の組み立て（例 http://exmaple.com または https://exmaple.com）
$host_url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://'). $_SERVER['HTTP_HOST'];

//URIの取得
$request_uri = $_SERVER['REQUEST_URI'];

//サイト名
$site_name = "株式会社FleGrowth";

//TITILE
if (isset($is_home)) {
  $title = $pagetitle;
}else{
  $title = $pagetitle."|".$site_name;
}

//OGP URL
$ogp_url = $host_url.$request_uri;


?>
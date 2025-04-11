<?php
/**
 * XSS対策：エスケープ処理
 * 
 * @param string $str 対象の文字列
 * @return string 処理された文字列
 */
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/**
 * CSRF対策
 * @param void
 * @return string $csrf_token
 */
function setToken() {
    $csrf_token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $csrf_token;
    return $csrf_token;
}

/**
 * 入力値のバリデーション
 * 
 * @param array $data POSTされたデータ
 * @return array $error エラーメッセージ
 */
function validation($data) {
    $error = array();

    // 会社名のチェック
    if ( empty($data['company']) ) {
        $error['company'] = "会社名は必須です。";
    } elseif ( 100 < mb_strlen($data['company']) ) {
        $error['company'] = "会社名は100文字以内で入力してください。";
    }

    // 住所のチェック
    if ( empty($data['address']) ) {
        $error['address'] = "住所は必須です。";
    } elseif ( 200 < mb_strlen($data['address']) ) {
        $error['address'] = "住所は200文字以内で入力してください。";
    }

    // 担当者氏名のチェック
    if ( empty($data['name']) ) {
        $error['name'] = "担当者氏名は必須です。";
    } elseif ( 30 < mb_strlen($data['name']) ) {
        $error['name'] = "担当者氏名は30文字以内で入力してください。";
    }

    // メールアドレスのチェック
    if ( empty($data['email']) ) {
        $error['email'] = "メールアドレスは必須です。";
    } elseif ( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data['email']) ) {
        $error['email'] = "メールアドレスの形式が正しくありません。";
    }

    // 電話番号のチェック
    if ( empty($data['tel']) ) {
        $error['tel'] = "電話番号は必須です。";
    } else {
        // ハイフンを除去して数字のみにする
        $tel_numbers_only = str_replace('-', '', $data['tel']);
        if ( !preg_match('/^[0-9]{8,}$/', $tel_numbers_only) ) {
            // 数字8文字以上
            $error['tel'] = "電話番号の形式が正しくありません。";
        }
    }

    // 利用規約同意のチェック
    if ( empty($data['agree_terms']) ) {
        $error['agree_terms'] = "利用規約への同意が必要です。";
    }

    return $error;
} 
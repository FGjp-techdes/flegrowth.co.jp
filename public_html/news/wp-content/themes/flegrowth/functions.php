<?php

// the_excerpt() の出力文字数調整
function new_excerpt_mblength($length) {
    return 50; //抜粋する文字数を50文字に設定
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');


/* ---------- 「投稿」の表記変更 ---------- */
function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = 'お知らせ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
}
function Change_objectlabel() {
    global $wp_post_types;
    $name = 'お知らせ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );


/* ---------- 投稿の「カテゴリー」と「タグ」の非表示 ---------- */
function my_unregister_taxonomies() {
    global $wp_taxonomies;
    // 「カテゴリー」の非表示
    if (!empty($wp_taxonomies['category']->object_type)) {
        foreach ($wp_taxonomies['category']->object_type as $i => $object_type) {
            if ($object_type == 'post') {
                unset($wp_taxonomies['category']->object_type[$i]);
            }
        }
    }
    // 「タグ」の非表示
    if (!empty($wp_taxonomies['post_tag']->object_type)) {
        foreach ($wp_taxonomies['post_tag']->object_type as $i => $object_type) {
            if ($object_type == 'post') {
                unset($wp_taxonomies['post_tag']->object_type[$i]);
            }
        }
    }
    return true;
}
add_action('init', 'my_unregister_taxonomies');





?>
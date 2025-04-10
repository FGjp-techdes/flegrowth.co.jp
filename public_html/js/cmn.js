console.log('cmn.js');

// Loading =======================================
window.onload = function() {
    const spinner = document.getElementById('loading');
    const fn = function(){
        spinner.classList.add('loaded');
    }
    setInterval(fn,1); //test用 Default 500
}

// Cursor =======================================
//マウスストーカー用のdivを取得
const stalker = document.getElementById('stalker');
const stalkeroutline = document.getElementById('stalker-outline'); 

//aタグにホバー中かどうかの判別フラグ
let hovFlag = false;

//マウスに追従させる処理 （リンクに吸い付いてる時は除外する）
document.addEventListener('mousemove', function (e) {
    if (!hovFlag) {
    stalker.style.transform = 'translate(' + e.clientX + 'px, ' + e.clientY + 'px)';
    stalkeroutline.style.transform = 'translate(' + e.clientX + 'px, ' + e.clientY + 'px)';
    }
});

//リンクへ吸い付く処理
const linkElem = document.querySelectorAll('a:not(.no_stick_)');
for (let i = 0; i < linkElem.length; i++) {
    //マウスホバー時
    linkElem[i].addEventListener('mouseover', function (e) {
        hovFlag = true;

        //マウスストーカーにクラスをつける
        stalker.classList.add('hov_');
        stalkeroutline.classList.add('hov_');

        //マウスストーカーの位置をリンクの中心に固定
        let rect = e.target.getBoundingClientRect();
        let posX = rect.left + (rect.width / 2);
        let posY = rect.top + (rect.height / 2);

        stalker.style.transform = 'translate(' + posX + 'px, ' + posY + 'px)';
        stalkeroutline.style.transform = 'translate(' + posX + 'px, ' + posY + 'px)';

    });
    //マウスホバー解除時
    linkElem[i].addEventListener('mouseout', function (e) {
        hovFlag = false;
        stalker.classList.remove('hov_');
        stalkeroutline.classList.remove('hov_');
    });
}
// ハンバーガーメニュー =======================================
var humbs = document.getElementsByClassName("h-humb");
for (var i = 0; i < humbs.length; i++) {
humbs[i].addEventListener("click", function() {
    this.classList.toggle("active");
    document.querySelector('.mob-menu').classList.toggle("active");
});
}

// ヘッダー高さ変更 ===================================================
// headerの高さを取得
var header = document.querySelector("#header");
var headerH = header.getBoundingClientRect().height;

// スクロール途中からヘッダーの高さを変化させるための設定を関数でまとめる
function FixedAnime() {
    // ページのスクロール位置を取得
    var scroll = window.pageYOffset || document.documentElement.scrollTop;
    if (scroll >= headerH+700) { // ヘッダー高さ+α
        header.classList.add("followingHeader"); // #headerにfollowingHeaderというクラス名を付与
    } else {
        header.classList.remove("followingHeader"); // followingHeaderというクラス名を除去
    }
}

// 画面をスクロールをしたら動かしたい場合の記述
window.addEventListener("scroll", function() {
    FixedAnime(); // スクロール途中からヘッダーの高さを変化させる関数を呼ぶ
});

// ページが読み込まれたらすぐに動かしたい場合の記述
window.addEventListener("load", function() {
    FixedAnime(); // スクロール途中からヘッダーの高さを変化させる関数を呼ぶ
});


// background changer =======================================
// for sec-bk    bk-changer ,   bk-changer-before,   bk-changer-after
window.addEventListener("load", function() {
    var ScrnOffset = document.querySelector(".bk-changer").offsetTop - ( window.innerHeight / 2 ) ;
    var ScrnOffsetEnd = document.querySelector(".bk-changer-after").offsetTop - ( window.innerHeight / 2 )  ;
    var winH = window.innerHeight;
    var BkChanger = document.querySelector(".bk-changer");
    var BkChangerBefore = document.querySelector(".bk-changer-before");
    var BkChangerAfter = document.querySelector(".bk-changer-after");

    window.addEventListener("scroll", function() {
        // if (window.pageYOffset > ScrnOffset - winH) {
        if (window.pageYOffset > ScrnOffset && window.pageYOffset < ScrnOffsetEnd ) {
            BkChanger.classList.add("bk-change");
            BkChangerBefore.classList.add("bk-change");
            BkChangerAfter.classList.add("bk-change");
        } else {
            BkChanger.classList.remove("bk-change");
            BkChangerBefore.classList.remove("bk-change");
            BkChangerAfter.classList.remove("bk-change");
        }
    });
});


// Swiper =======================================
//TopPage用
const swiper = new Swiper(".swiper", {
    autoplay: {
        delay: 0,
      },
    speed: 8000,
    loop: true, 
    slidesPerView: 'auto',
    spaceBetween: -85,
    freeMode: true,
    freeModeSticky: true,
    touchRatio: .03,
    grabCursor: true
});




// AOS =======================================
AOS.init();
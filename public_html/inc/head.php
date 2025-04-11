    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:site_name" content="<?php echo $site_name; ?>">
    <meta property="og:url" content="<?php echo $ogp_url; ?>">
    <meta property="og:image" content="/img/cmn/ogp.webp">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" type="image/png" href="/img/cmn/favicon.ico">
    <link rel="apple-touch-icon" href="/img/cmn/apple-touch-icon.png" sizes="180x180">
    <link rel="stylesheet" href="<?= $host_url; ?>/css/style.css?<?php echo filemtime($doc_root .'/css/style.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&family=Noto+Sans+JP:wght@400;500;700&family=Questrial&display=swap">
    <script defer src="<?= $host_url; ?>/js/cmn.js?<?php echo filemtime($doc_root .'/js/cmn.js'); ?>"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5HSH9KN');</script>
    <!-- End Google Tag Manager -->
    <!-- Swiper -->
    <link rel="stylesheet" href="<?= $host_url; ?>/css/swiper-bundle.min.css">
    <script src="<?= $host_url; ?>/js/swiper-bundle.min.js"></script>
    <!-- aos.js -->
    <link href="<?= $host_url; ?>/css/aos.css" rel="stylesheet">
    <script src="<?= $host_url; ?>/js/aos.js"></script>
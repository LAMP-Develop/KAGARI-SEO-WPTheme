<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-79537153-12"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-79537153-12');
</script> -->
<?php endif; ?>
</head>
<body>
<!-- ヘッダー -->
<header id="header" class="sticky-top shadow-sm">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
<div class="container">
<!-- ロゴ -->
<a class="navbar-brand d-flex mr-4" href="<?php echo $home; ?>">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/logo_seo.svg" alt="KAGARI SEO">
</a>
<button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon">
<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10 15H32" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10 27H32" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
</button>
<div class="collapse navbar-collapse py-md-0 py-4" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item"><a class="nav-link text-dark" href="<?php echo $home; ?>/product/">機能紹介</a></li>
<li class="nav-item"><a class="nav-link text-dark" href="<?php echo $home; ?>/price/">料金プラン</a></li>
<li class="nav-item"><a class="nav-link text-dark" href="http://lamp-inc.sakura.ne.jp/kagari_re/master/works/" target="_blank">導入事例</a></li>
<li class="nav-item"><a class="nav-link text-dark" href="http://lamp-inc.sakura.ne.jp/kagari_re/master/seminar/" target="_blank">セミナー情報</a></li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ヘルプ</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
<a class="dropdown-item" href="http://lamp-inc.sakura.ne.jp/kagari_re/master/faq/" target="_blank">よくあるご質問</a>
<a class="dropdown-item" href="http://lamp-inc.sakura.ne.jp/kagari_re/master/contact/" target="_blank">お問い合わせ</a>
</div>
</li>
</ul>
<ul class="navbar-nav ml-auto mt-md-0 mt-3">
<li class="nav-item mr-md-4">
<a class="nav-link text-primary" href="https://analysis.kagari.ai/login" target="_blank">ログイン</a>
</li>
<li class="nav-item">
<a class="btn btn-sm btn-primary" href="<?php echo $home; ?>/contact/"><i class="fab fa-google mr-2"></i>無料トライアル</a>
</li>
</ul>
</div>
</div>
</nav>
</header>
<!-- メインコンテンツ -->
<main>

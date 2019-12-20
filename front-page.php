<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="mv" class="cta jumbotron position-relative overflow-hidden">
<div class="container">
<div class="row">
<div class="col-lg-7 mb-4 mb-lg-0">
<p class="font-weight-bold mb-2 h5 text-dark">162社・50,000ページ以上で利用中</p>
<h1 class="text-dark font-weight-bold mb-4">ページのSEO流入に特化した<br class="d-none d-md-block">アクセス解析ツール</h1>
<a class="btn btn-primary" href="#" role="button"><i class="fab fa-google mr-2"></i>今すぐ無料トライアル</a>
</div>
<div class="col-lg-5 img pt-lg-5 pt-xl-0">
<img class="img" src="<?php echo $wp_url; ?>/lib/images/mv.png" srcset="<?php echo $wp_url; ?>/lib/images/mv.png 1x, <?php echo $wp_url; ?>/lib/images/mv@2x.png 2x" alt="レポート画像">
</div>
</div>
</div>
</section>
<section class="sec sec-bg-gray">
<div class="container">
<h2 class="font-size-lg text-dark text-center font-weight-bold mb-md-5 mb-4">ページが多いサイトのSEO分析を効率化します</h2>
<div class="row justify-content-center">
<div class="row col-xl-10 px-0">
<div class="col-md mb-md-0 mb-3">
<div class="card h-100 border-0 shadow-sm position-relative">
<div class="card-body">
<div class="text-center mt-3 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_tools.svg" alt="Google Analytics">
</div>
<h3 class="card-title font-weight-bold text-center h5 text-dark">アクセスデータと<br>SEOを1画面で</h3>
<p>Google AnalyticsとSearch Consoleのデータを1つのツールで確認できます。</p>
<div class="text-center">
<a href="<?php echo $home; ?>/product/" class="stretched-link">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
</div>
<div class="col-md mb-md-0 mb-3">
<div class="card h-100 border-0 shadow-sm position-relative">
<div class="card-body">
<div class="text-center mt-3 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_kagariseo.svg" alt="AI">
</div>
<h3 class="card-title font-weight-bold text-center h5 text-dark">検索キーワードや<br>順位を確認</h3>
<p>検索キーワードや検索順位をページごとに確認して、検索からの流入を分析できます。</p>
<div class="text-center">
<a href="<?php echo $home; ?>/product/" class="stretched-link">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
</div>
<div class="col-md">
<div class="card h-100 border-0 shadow-sm position-relative">
<div class="card-body">
<div class="text-center mt-3 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_pages.svg" alt="レポート">
</div>
<h3 class="card-title font-weight-bold text-center h5 text-dark">ページ数の多い<br>サイトに最適</h3>
<p>オウンドメディアやECサイトなど、ページの多いサイトのSEO分析に最適です。</p>
<div class="text-center">
<a href="<?php echo $home; ?>/product/" class="stretched-link">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="sec sec-bg-dark">
<div class="container">
<h2 class="font-size-lg text-white text-center font-weight-bold mb-md-5 mb-4">SEOを改善して事業の課題を解決しましょう</h2>
<div class="row mx-0">
<div class="col-md-6 col-lg-4 p-1 p-md-2">
<div class="d-flex justify-content-start align-items-stretch bg-white rounded-lg p-md-4 p-3 h-100">
<div class="mr-3">
<i data-feather="clock" class="feather-card"></i>
</div>
<div class="txt">
<p class="font-weight-bold mb-2 h5 text-dark">業務を効率化</p>
<p class="m-0">複数のツール（Google AnalyticsとSearch Console）を行き来することなく解析することができます。</p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 p-1 p-md-2">
<div class="d-flex justify-content-start align-items-stretch bg-white rounded-lg p-md-4 p-3 h-100">
<div class="mr-3">
<i data-feather="database" class="feather-card"></i>
</div>
<div class="txt">
<p class="font-weight-bold mb-2 h5 text-dark">SEOデータの蓄積・活用</p>
<p class="m-0">Search Consoleのアクセスデータを蓄積して比較することで、今後の施策や指標の策定に活用できます。</p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 p-1 p-md-2">
<div class="d-flex justify-content-start align-items-stretch bg-white rounded-lg p-md-4 p-3 h-100">
<div class="mr-3">
<i data-feather="dollar-sign" class="feather-card"></i>
</div>
<div class="txt">
<p class="font-weight-bold mb-2 h5 text-dark">費用対効果の改善</p>
<p class="m-0">見つかりにくい課題を発見し、目的の効果が出ているかを確認することができます。</p>
</div>
</div>
</div>
</div>

</div>
</section>
<!-- <section class="sec sec-bg-gray">
<div class="container">
<h2 class="font-size-lg text-dark text-center font-weight-bold mb-md-5 mb-4">業種・業態を問わず様々なお客様に<br class="d-sm-block d-none">ご利用いただいています</h2>
<?php get_template_part('works'); ?>
<div class="mt-4 text-center">
<a class="btn btn-outline-primary" href="<?php echo $home; ?>/works/" role="button">すべての事例をみる<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
<div class="d-md-flex d-none justify-content-between align-items-center mt-5">
<?php for ($i=1; $i<=8; $i++): ?>
<div class="col-md col-3 text-center mx-md-3 mx-2">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/slide_logo0<?php echo $i; ?>.png" alt="導入実績<?php echo $i; ?>">
</div>
<?php endfor; ?>
</div>
</section> -->
<section class="sec sec-bg-gray">
<div class="container">
<h2 class="font-size-lg text-dark text-center font-weight-bold mb-md-5 mb-4">セミナー情報</h2>
<ul class="list-group">
<?php
$arg = [
  'posts_per_page' => 5,
  'orderby' => 'date',
  'order' => 'DESC',
  'category_name' => 'seminar'
];
$posts = get_posts($arg);
foreach ($posts as $post):
setup_postdata($post);
$t = get_the_title();
$time = get_field('seminar_time', get_the_ID());
$p = get_field('seminar_url', get_the_ID()); ?>
<li class="list-group-item rounded-0">
<a class="row mx-0" href="<?php echo $p; ?>" class="text-decoration-none" target="_blank" rel="nofollow">
<time class="px-md-3 px-0 col-md-2" datetime="<?php the_time('Y-m-d'); ?>" class="d-block text-secondary mb-1"><?php echo $time; ?></time>
<p class="px-md-3 px-0 col-md-10 m-0 text-dark"><?php echo $t; ?></p>
</a>
</li>
<?php endforeach; wp_reset_postdata(); ?>
</ul>
<div class="text-center mt-5">
<a href="<?php echo $home; ?>/seminar/" class="btn btn-outline-primary">すべてのセミナーを見る<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</section>
<section class="sec sec-bg-orange">
<div class="container">
<h2 class="font-size-lg text-white text-center font-weight-bold mb-md-5 mb-4">さらにWEBサイトを<br class="d-sm-none d-block">改善したい方に</h2>
<div class="card overflow-hidden sec-bg-gray border-0 shadow mb-4 position-relative">
<div class="row no-gutters">
<div class="col-md-5 bg-white p-md-2 p-lg-4 position-static">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/logo_report.svg" alt="KAGARI Report">
</div>
<div class="card-title">
<h3 class="text-dark font-weight-bold">WEBサイトのアクセス解析<br class="d-xl-block d-none">レポートをAIが自動作成</h3>
</div>
<p class="card-text">時間と手間のかかる解析レポートを自動で作成。Google Analyticsと連携してすぐに使えます。</p>
<div class="mt-4">
<a href="https://report.kagari.ai" target="_blank" class="stretched-link">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
<div class="col-md-7 d-flex justify-content-center align-items-end text-center px-3">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/ui_preview_report.png" srcset="<?php echo $wp_url; ?>/lib/images/ui_preview_report.png 1x, <?php echo $wp_url; ?>/lib/images/ui_preview_report@2x.png 2x" alt="KAGARI SEO">
</div>
</div>
</div>
<div class="card overflow-hidden sec-bg-gray border-0 shadow position-relative">
<div class="row no-gutters">
<div class="col-md-5 bg-white p-md-2 p-lg-4 position-static">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/logo_consulting.svg" alt="KAGARI Marketing">
</div>
<div class="card-title">
<h3 class="text-dark font-weight-bold">KAGARIのデータを活用した<br class="d-xl-block d-none">コンテンツマーケティング</h3>
</div>
<p class="card-text">KAGARIの解析データに基づいて、貴社の成長に合わせた最適なプランニングやコンテンツ制作を行います。</p>
<div class="mt-4">
<a href="https://marketing.kagari.ai" target="_blank" class="stretched-link">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
<div class="col-md-7 d-flex justify-content-center align-items-end text-center px-3 py-3">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/ui_preview_consulting.svg" alt="KAGARI Marketing">
</div>
</div>
</div>
</div>
</section>
<?php get_template_part('cta'); ?>
<?php get_footer();

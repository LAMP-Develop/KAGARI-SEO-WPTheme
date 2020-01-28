<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec sec-bg-gray-3">
<div class="container">
<h2 class="h5 text-center text-dark font-weight-bold mb-4"><?php the_title(); ?></h2>
<h2 class="font-size-lg text-center text-dark font-weight-bold mb-md-5 mb-4">SEO分析を効率化するための機能が揃っています</h2>
<div class="card mb-4 overflow-hidden sec-bg-gray border-0 shadow">
<div class="row no-gutters align-items-stretch">
<div class="col-lg-7 bg-white p-md-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_query.svg" alt="検索クエリと順位">
</div>
<div class="card-title">
<h3 class="text-dark font-weight-bold">ページの検索クエリと検索順位を可視化</h3>
</div>
<p class="card-text m-0">ページごとに検索エンジン経由で流入したキーワードとその順位、ヒット数をリストで表示します。大量のページの情報を一覧表示できるので、ECサイトやメディアサイトの分析に最適です。</p>
</div>
</div>
<div class="col-lg-5 align-self-end">
<img class="w-100" src="<?php echo $wp_url; ?>/lib/images/function02.png" srcset="<?php echo $wp_url; ?>/lib/images/function02.png 1x, <?php echo $wp_url; ?>/lib/images/function02@2x.png 2x" alt="Google Analyticsと連携するだけ">
</div>
</div>
</div>
<div class="card mb-4 overflow-hidden sec-bg-gray border-0 shadow">
<div class="row no-gutters align-items-stretch">
<div class="col-lg-7 bg-white p-md-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_gasc.svg" alt="1画面で比較">
</div>
<div class="card-title">
<h3 class="text-dark font-weight-bold">アクセスデータとSEO状況を1画面で分析</h3>
</div>
<p class="card-text m-0">Google AnalyticsとSearch Consoleのデータを1つの画面で確認できます。複数のウインドウを行き来することなく効率的にSEO分析を行えます。。</p>
</div>
</div>
<div class="col-lg-5 align-self-end text-right">
<img class="" src="<?php echo $wp_url; ?>/lib/images/function01.png" srcset="<?php echo $wp_url; ?>/lib/images/function01.png 1x, <?php echo $wp_url; ?>/lib/images/function01@2x.png 2x" alt="Google Analyticsと連携するだけ">
</div>
</div>
</div>
<div class="card overflow-hidden sec-bg-gray border-0 shadow">
<div class="row no-gutters align-items-stretch">
<div class="col-lg-7 bg-white p-md-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_excelpdf.svg" alt="エクスポート">
</div>
<div class="card-title">
<h3 class="text-dark font-weight-bold">エクスポートで解析レポートを自動作成</h3>
</div>
<p class="card-text m-0">ページ毎のSEO分析結果をExcelで出力できます。アクセス解析結果を含めた解析レポートをPDF形式で自動作成することもできます。</p>
</div>
</div>
<div class="col-lg-5 align-self-end">
<img class="w-100" src="<?php echo $wp_url; ?>/lib/images/function03.png" srcset="<?php echo $wp_url; ?>/lib/images/function03.png 1x, <?php echo $wp_url; ?>/lib/images/function03@2x.png 2x" alt="そのまま使えるレポートが自動で完成">
</div>
</div>
</div>
<div class="row mx-0 mt-5">
<div class="col-md-6 col-lg-4 p-1 p-md-2">
<div class="d-flex justify-content-start align-items-stretch bg-white rounded-lg p-md-4 p-3 h-100">
<div class="mr-3">
<i data-feather="file-text" class="feather-card"></i>
</div>
<div class="txt">
<p class="font-weight-bold mb-2 h5 text-dark">ExcelやCSVでエクスポート</p>
<p class="m-0">データを表計算ソフトで扱える形式で書き出すことができます。</p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 p-1 p-md-2">
<div class="d-flex justify-content-start align-items-stretch bg-white rounded-lg p-md-4 p-3 h-100">
<div class="mr-3">
<i data-feather="database" class="feather-card"></i>
</div>
<div class="txt">
<p class="font-weight-bold mb-2 h5 text-dark">SEOデータを蓄積</p>
<p class="m-0">Search Consoleでさかのぼれない過去16ヶ月以上のデータを蓄積できます。</p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 p-1 p-md-2">
<div class="d-flex justify-content-start align-items-stretch bg-white rounded-lg p-md-4 p-3 h-100">
<div class="mr-3">
<i data-feather="wind" class="feather-card"></i>
</div>
<div class="txt">
<p class="font-weight-bold mb-2 h5 text-dark">登録してすぐに使える</p>
<p class="m-0">登録後すぐにデータが反映されるので、待たずにご利用いただけます。</p>
</div>
</div>
</div>
</div>
</div>
</section>

<section id="sample-pdf" class="sec sec-bg-gray overflow-hidden">
<div class="container">
<h2 class="font-size-lg text-dark text-center font-weight-bold mb-3">サイトのアクセス解析レポートを自動で作成できます</h2>
<p class="text-center mb-md-5 mb-4">SEO分析機能に加えて、アクセス解析レポート作成ツール「KAGARI Report」の全機能をご利用いただけます。<br class="d-none d-md-block">レポートには検索分析が追加されます。</p>
<div class="row">
<div class="col-lg order-2 order-lg-1">
<div id="sample-btn" class="mx-0">
<div class="service-card bg-white rounded-lg px-3 py-1 mb-2 active">
<span class="opacity-item text-center opacity-bg-blue d-inline-block mr-2">
<i class="fas fa-list-alt opacity-color-blue"></i>
</span>
<p class="font-weight-bold h6 text-dark my-3 mr-2 d-inline-block">サマリー</p>
<p class="text-left m-0 d-none d-md-inline-block">サイト全体の状態を知る</p>
</div>
<div class="service-card bg-white rounded-lg px-3 py-1 mb-2">
<span class="opacity-item text-center opacity-bg-yellow d-inline-block mr-2">
<i class="fas fa-users opacity-color-yellow"></i>
</span>
<p class="font-weight-bold h6 text-dark my-3 mr-2 d-inline-block">ユーザー属性</p>
<p class="text-left m-0 d-none d-md-inline-block">サイトの訪問者の属性を知る</p>
</div>
<div class="service-card bg-white rounded-lg px-3 py-1 mb-2">
<span class="opacity-item text-center opacity-bg-purple-2 d-inline-block mr-2">
<i class="fas fa-share-alt opacity-color-purple-2"></i>
</span>
<p class="font-weight-bold h6 text-dark my-3 mr-2 d-inline-block">流入元</p>
<p class="text-left m-0 d-none d-md-inline-block">ユーザーが訪れた経路を知る</p>
</div>
<div class="service-card bg-white rounded-lg px-3 py-1 mb-2">
<span class="opacity-item text-center opacity-bg-green d-inline-block mr-2">
<i class="fas fa-pager opacity-color-green"></i>
</span>
<p class="font-weight-bold h6 text-dark my-3 mr-2 d-inline-block">ユーザー行動</p>
<p class="text-left m-0 d-none d-md-inline-block">ページごとのアクセス状況を知る</p>
</div>
<div class="service-card bg-white rounded-lg px-3 py-1 mb-2">
<span class="opacity-item text-center opacity-bg-red d-inline-block mr-2">
<i class="fas fa-flag opacity-color-red"></i>
</span>
<p class="font-weight-bold h6 text-dark my-3 mr-2 d-inline-block">コンバージョン</p>
<p class="text-left m-0 d-none d-md-inline-block">目標の達成度合いを知る</p>
</div>
<div class="service-card bg-white rounded-lg px-3 py-1 mb-2">
<span class="opacity-item text-center opacity-bg-purple d-inline-block mr-2">
<i class="fas fa-ad opacity-color-purple"></i>
</span>
<p class="font-weight-bold h6 text-dark my-3 mr-2 d-inline-block">広告</p>
<p class="text-left m-0 d-none d-md-inline-block">リスティング広告の状況を知る</p>
</div>
<div class="service-card bg-white rounded-lg d-flex align-items-center px-3 py-1 mb-2">
<span class="opacity-item text-center opacity-bg-green mr-2">
<i class="fas fa-search opacity-color-green"></i>
</span>
<p class="font-weight-bold h6 text-dark my-3 mr-2">検索</p>
<p class="text-left m-0 d-none d-md-block">サイトの検索キーワードを知る</p>
<div class="sec-bg-orange text-white ml-auto px-2 py-1 rounded-lg m-0 d-block">SEOプランのみ</div>
</div>
</div>
<div id="sample-txt" class="tab-content">
<p class="my-4 tab-pane active">サイト全体のアクセス状況をまとめたページです。訪問者数の変化を示したグラフや、基本的な指標の数値を確認できます。</p>
<p class="my-4 tab-pane">サイトの訪問者の属性です。性別や利用デバイスの割合、年齢層、アクセス元の地域などを確認できます。</p>
<p class="my-4 tab-pane">訪問者がサイトに訪れた経路です。検索や他のサイトからのリンクなどの経路の割合を確認できます。SNSと他のサイトからのリンクはその内訳の上位を確認できます。</p>
<p class="my-4 tab-pane">サイト内のページごとのアクセス状況です。ページごとのページビュー数や直帰率などから、人気のあるページを確認できます。</p>
<p class="my-4 tab-pane">サイト全体とページごとのコンバージョンの状況です。設定した目標に達成できているかを流入元ごとに確認できます。</p>
<p class="my-4 tab-pane">リスティング広告の状況です。サイト全体の広告費用や検索語句ごとの広告効果を確認できます。</p>
<p class="my-4 tab-pane">サイト全体の検索キーワードの状況です。キーワードごとのクリック数や表示回数、平均掲載順位などを確認できます。</p>
</div>
<div class="px-2 mt-3 mt-md-0">
<a href="https://kagari.ai/report-demo/pdf/kagari-reports.pdf" target="_blank" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-down mr-2"></i>サンプルをダウンロード<small>(PDF)</small></a>
</div>
</div>
<div class="col-lg order-1 order-lg-2">
<div id="sample" class="tab-content text-center mb-3">
<img class="img-fluid shadow tab-pane active" src="<?php echo $wp_url; ?>/lib/images/sample01.png" srcset="<?php echo $wp_url; ?>/lib/images/sample01.png 1x, <?php echo $wp_url; ?>/lib/images/sample01@2x.png 2x" alt="サマリー">
<img class="img-fluid shadow tab-pane" src="<?php echo $wp_url; ?>/lib/images/sample02.png" srcset="<?php echo $wp_url; ?>/lib/images/sample02.png 1x, <?php echo $wp_url; ?>/lib/images/sample02@2x.png 2x" alt="ユーザー属性">
<img class="img-fluid shadow tab-pane" src="<?php echo $wp_url; ?>/lib/images/sample03.png" srcset="<?php echo $wp_url; ?>/lib/images/sample03.png 1x, <?php echo $wp_url; ?>/lib/images/sample03@2x.png 2x" alt="流入元分析">
<img class="img-fluid shadow tab-pane" src="<?php echo $wp_url; ?>/lib/images/sample04.png" srcset="<?php echo $wp_url; ?>/lib/images/sample04.png 1x, <?php echo $wp_url; ?>/lib/images/sample04@2x.png 2x" alt="ユーザー行動分析">
<img class="img-fluid shadow tab-pane" src="<?php echo $wp_url; ?>/lib/images/sample05.png" srcset="<?php echo $wp_url; ?>/lib/images/sample05.png 1x, <?php echo $wp_url; ?>/lib/images/sample05@2x.png 2x" alt="コンバージョン分析">
<img class="img-fluid shadow tab-pane" src="<?php echo $wp_url; ?>/lib/images/sample06.png" srcset="<?php echo $wp_url; ?>/lib/images/sample06.png 1x, <?php echo $wp_url; ?>/lib/images/sample06@2x.png 2x" alt="広告分析">
<img class="img-fluid shadow tab-pane" src="<?php echo $wp_url; ?>/lib/images/sample07.png" srcset="<?php echo $wp_url; ?>/lib/images/sample07.png 1x, <?php echo $wp_url; ?>/lib/images/sample07@2x.png 2x" alt="検索分析">
</div>
</div>
</div>
</section>
<section class="sec sec-bg-gray-3 py-5">
<div class="container">
<div class="card overflow-hidden sec-bg-gray border-0 shadow position-relative">
<div class="row no-gutters">
<div class="col-lg-5 bg-white p-md-2 p-lg-4 position-static">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/logo_report.svg" alt="KAGARI Report">
</div>
<div class="card-title">
<h3 class="text-dark font-weight-bold">アクセス解析レポートの<br class="d-xl-block d-none">自動作成・送信ツール</h3>
</div>
<p class="card-text">報告用のアクセス解析レポートが自動作成・自動送信できるWEB担当者向け業務効率化ツールです。</p>
<div class="mt-4">
<a href="https://report.kagari.ai/" target="_blank" class="stretched-link">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
<div class="col-lg-7 d-flex justify-content-center align-items-end text-center px-3">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/ui_preview_report.png" srcset="<?php echo $wp_url; ?>/lib/images/ui_preview_report.png 1x, <?php echo $wp_url; ?>/lib/images/ui_preview_report@2x.png 2x" alt="KAGARI SEO">
</div>
</div>
</div>
</div>
</section>
<?php get_template_part('cta'); ?>
<?php get_footer();

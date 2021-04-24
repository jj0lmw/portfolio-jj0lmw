<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta property="og:locale" content="ja_JP" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:title" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:url" content="<?php home_url(); ?>" />
<meta property="og:image" content="<?php echo get_template_directory(); ?>/assets/img/ogp.png">
<meta name="twitter:card" content="summary_large_image" />
<link rel="stylesheet" href="<?php echo get_template_directory(); ?>/src/css/style.css">
<?php wp_head(); ?>
</head>

<body>
<header>
	<a href="<?php home_url(); ?>"><img src="<?php echo get_template_directory(); ?>/assets/img/logo.png" alt="<?php bloginfo('name'); ?>"></a>

	<nav>
		<ul>
			<li>
				<a href="/page1/"><span>ページ1</span></a>
			</li>
		</ul>
	</nav>
</header>
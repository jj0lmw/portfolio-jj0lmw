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
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/ogp.png">
<meta name="twitter:card" content="summary_large_image" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/css/reset.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/css/style.css">
<?php wp_head(); ?>
</head>

<body id="top">
<header class="header_wrap">
	<div class="header_area">
		<h1 class="logo">
			<a href="<?php home_url(); ?>">
				<span>jj0lmw</span>
			</a>
		</h1>

		<nav class="menu">
			<ul>
				<li>
					<a class="menu_link" href="#about"><span>私について</span></a>
					<a class="menu_link" href="#skill"><span>スキル</span></a>
					<a class="menu_link" href="#character"><span>人柄</span></a>
				</li>
			</ul>
		</nav>
	</div>
</header>
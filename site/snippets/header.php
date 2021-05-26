<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
  <link rel="shortcut icon" href="<?php echo url('assets/images/favicon.ico') ?>" type="image/x-icon">
  <link rel="icon" href="<?php echo url('assets/images/favicon.ico') ?>" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,300italic,300,700,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,300italic,300,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <?php echo css('assets/styles/styles.css') ?>
</head>

<body class="<?php echo $page->isHomePage() ? "frontpage" : $page->uid() ?>">
	<div id="cover">
		<div class="wrapper">
			<header>
				<div id="logo">
					<a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" alt="Logo" width="40px" /></a>
				</div>
				<div id="intro">
				<?php if ($page->isHomePage()): ?>
					<aside class="resume"><?php echo kirbytext($site->resume()); ?></aside>
				<?php else: ?>
					<div class="sitename">
						<a href="<?php echo url() ?>"><?php echo html($site->title()); ?><span><?php echo html($site->tagline()); ?></span></a>
					</div>	
				<?php endif; ?>
				</div>
				<?php snippet('menu'); ?>
			</header>
		</div>
	</div>
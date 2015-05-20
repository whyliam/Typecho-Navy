<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="<?php $this->options->charset(); ?>" />
	<meta name="viewport" content="width=device-width,user-scalable=no">
  <?php if ($this->is('index')): ?><title><?php $this->options->title(); ?></title>
	<?php else: ?>
	<title><?php $this->archiveTitle('.', '', ' - '); ?><?php $this->options->title(); ?></title>
	<?php endif; ?>
	<!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://cdn.staticfile.org/normalize/3.0.1/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <script type="text/javascript" src="http://cdn.staticfile.org/jquery/1.11.0/jquery.min.js"></script>
  <?php $this->header("generator=&template=&"); ?>
</head>
<body>
<div class="body404">
<div class="info404">
<header id="header404" class="clearfix">
  <div class="site-name404">
    <i>404</i>
  </div>
</header>
<section>
  <div class="title404"><p>每一个平凡的日常<br/>都是连续发生中的奇迹</p></div>
  <a class="index404" rel="nofollow" href="<?php $this->options->siteUrl(); ?>">返回首页</a>
</section>
<footer id="footer404">
	&copy; <?php echo date('Y'); ?> <?php $this->options->title(); ?>.</span>
</footer>
</div>
</div>
<?php $this->footer(); ?>
</body>
</html>
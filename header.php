<!DOCTYPE HTML>
<html lang="zh-CN">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php $this->options->charset(); ?>" />
	<meta name="viewport" content="width=device-width,user-scalable=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
	<!--[if lt IE 9]>
    <script type="text/javascript" src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="<?php $this->options->themeUrl('/img/favicon.ico'); ?>">

    <!-- google cerfication -->
    <meta name="google-site-verification" content="ByVfaP_E3b9ZYRUGhNAUFSQKL8mJQwUehpQwoxJ5n-c" />

    <link rel="stylesheet" href="http://cdn.staticfile.org/normalize/3.0.1/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.min.css'); ?>">
    <script type="text/javascript" src="http://cdn.staticfile.org/jquery/1.11.0/jquery.min.js"></script>
    <?php $this->header("generator=&template=&"); ?>
</head>
<body>
<div class="move-block">
<header id="header" class="clearfix">
    <div class="container">
        <div class="col-group">
            <div class="site-name ">
                <?php if ($this->is('index')): ?>                    
                        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                            <?php $this->options->title() ?>
                        </a>
                    <h1><?php $this->options->title() ?></h1>
                <?php else:?>
                    <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                        <?php $this->options->title() ?>
                    </a>
                <?php endif; ?>
        	    <p class="description"><?php $this->options->description() ?></p>
            </div>
            <div>
                <nav id="nav-menu" class="clearfix">
                    <ul>
                    <li><a class="<?php if($this->is('index')): ?>current<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>"><?php _e('博客'); ?></a></li>
                
                    <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
                    <?php $lp = 0; ?>
                    <?php while ($category->next()): ?>

                        <?php if(($category->levels) == 0): ?>
                            <?php if ($lp == 1): ?>
                                </ul>
                            <?php endif; ?>
                            <?php if ($lp != 0): ?>
                                </li>
                            <?php endif; ?>
                            <?php $lp = 2; ?> 
                            <li><a <?php if($this->is('category', $category->slug) || ($this->category == $category->slug) ): ?> class="current"<?php endif; ?> href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a>
            
                        <?php endif; ?>

                        <?php if(($category->levels) == 1): ?>
                            <?php if ($lp == 2): ?>
                            <ul>
                            <?php endif; ?>
                        
                            <li><a <?php if($this->is('category', $category->slug) || ($this->category == $category->slug) ): ?> class="current"<?php endif; ?> href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a>
                            </li>

                            <?php $lp = 1; ?>
                        <?php endif; ?>

                        
                    <?php endwhile; ?>
                    <?php if ($lp == 1): ?>
                        </ul>
                    <?php endif; ?>
                    <?php if ($lp != 0): ?>
                        </li>
                    <?php endif; ?>

                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
					<?php while($pages->next()): ?>
					   <li><a <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
					<?php endwhile; ?>

                    </ul>
				</nav>
            </div>
        </div>
    </div>
</header>
<div class="side-click icon-arrow-down"></div>
<div id="body">
    <div class="container">
        <div class="col-group">

<div id="secondary">
<div class="sidebar">
    <section class="widget">
        <form id="search" method="post" action="./">
            <input type="text" name="s" class="text" placeholder="搜索..." />
            <button type="submit" class="submit icon-search">搜索</button>
        </form>
    </section>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('分类'); ?></h3>
        <ul class="widget-list widget-list2">
            <?php Typecho_Widget::widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while($category->next()): ?>
            <li><h3><a href="<?php $category->permalink(); ?>"><?php echo str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", $category->levels); $category->name(); ?></a></h3></li>
            <?php endwhile; ?>
        </ul>

	</section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<div class="widget-title"><?php _e('最新文章'); ?></div>
        <ul class="widget-list widget-list2">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><h3><a href="{permalink}">{title}</a></h3></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>
    
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<div class="widget-title"><?php _e('归档'); ?></div>
        <ul class="widget-list widget-list2">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><h3><a href="{permalink}">{date}</a></h3></li>'); ?>
        </ul>
	</section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
	<section class="widget">
		<div class="widget-title"><?php _e('其它'); ?></div>
        <ul class="widget-list widget-list2">
            <?php if($this->user->hasLogin()): ?>
                <li class="last"><h3><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></h3></li>
                <li><h3><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></h3></li>
            <?php else: ?>
                <li class="last"><h3><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></h3></li>
            <?php endif; ?>
            <li><h3><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></h3></li>
            <li><h3><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></h3></li>
            <li><h3><a href="http://www.typecho.org">Typecho</a></h3></li>
        </ul>
	</section>
    <?php endif; ?>
    
    <section class="widget">
		<div class="widget-title"><?php _e('友情链接'); ?></div>
    		<ul class="widget-list widget-list2 frind-links">
                <li><a href="http://www.naaln.com">Why·Liam·Home</a></li>
                <li><a href="http://photo.naaln.com">Why·Liam·Photo</a></li>
            </ul>
    </section>
    
    </div>
</div>
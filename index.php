<?php
/**
 * 简单的响应式模板<br>技术支持：<a href="http://xiu.160.me">ClayMore</a><br/>原作者:<a href="http://pagecho.com">cho</a>
 * 
 * @package Navy
 * @author cho
 * @version 1.0
 * @link http://pagecho.com
 */
 $this->need('header.php');
 ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<?php while($this->next()): ?>
			<article class="post">				
				<date class="post-meta">
					<?php $this->date('F j, Y'); ?>
				</date>
				<header>
					<h2 class="post-title">
						<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
					</h2>
				</heaer>
				<div class="post-content">
					<?php $this->excerpt(240, '...<p class="more"><a href="'.$this->permalink.'">- 阅读剩余部分 -</a></p>');; ?>
				</div>
			</article>
		<?php endwhile; ?>
		<?php $this->pageNav('&laquo; Previous','Next &raquo;',10,'...');?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>

		</div>
    </div>
</div>
<footer id="footer">
	<div class="container">
		&copy; <?php echo date('Y'); ?> <a rel="nofollow" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
	</div>
</footer>
</div>
<div class="site-search">
<script type="text/javascript" src="<?php $this->options->themeUrl('index.js'); ?>"></script>
<script type="text/javascript">
　　if (window!=top){top.location.href = window.location.href;}
</script>
</div>
<p class="link-back2top"><a href="#" title="Back to top">Back to top</a></p>

<script>
$(".link-back2top").hide();
$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $(".link-back2top").fadeIn();
    } else {
        $(".link-back2top").fadeOut();
    }
});
$(".link-back2top a").click(function() {
    $("body,html").animate({
        scrollTop: 0
    },
    800);
    return false;
});
</script>
<?php $this->footer(); ?>
</body>
</html>

<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<a href = "http://www.zivers.com/">网站首页</a>
			| <a href = "http://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank">版权协议</a>
			| <a href = "http://mail.zivers.com/" target="_blank">登录邮箱</a> 
			| <a href = "http://www.zivers.com/sitemap.html" target="_blank">网站地图</a> 
			| <a href = "http://www.zivers.com/about/">关于本站</a> 
			| <?php do_action( 'twentytwelve_credits' );?>
			| <?php $current_user = wp_get_current_user();
				if ( 0 == $current_user->ID ) {
					echo "<a href='http://www.zivers.com/wp-login.php'>登录</a>";
				} else {
					echo "<a href='http://www.zivers.com/wp-login.php?action=logout'>登出</a>";
				}
			?>
			<a href="javascript:scroll(0,0)" style="float: right">返回顶部</a>
			<!-- <a href="url" target="_blank"><img src="https://www.zivers.com/" width=80px height=40px align="right" alt="" title=""/></a> -->
			<br />
			Copyright © 2011 - 2016 <a href = "http://www.zivers.com">ZIVERS.COM</a> All Rights Reserved

			</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!--<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69245959-1', 'auto');
  ga('send', 'pageview');

</script>-->

<?php wp_footer(); ?>
</body>
</html>

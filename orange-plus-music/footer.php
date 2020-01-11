			
		</div>
		<!-- /container -->

		<!-- footer -->
		<footer role="contentinfo">
			<?php get_template_part('wave'); ?>
			<div class="footer-blue"></div>
			<p>&copy;<?php echo date('Y');?> Yutaka Ishimatsu</p>
		</footer>
		<!-- /footer -->

		<!-- jquery -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<!-- slider -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
		<script type="text/javascript">
			$('.wrap_slider').slick({
				autoplay: true,centerMode: true,centerPadding: '0px',slidesToShow: 1,arrows: true,autoplaySpeed: 2500,speed: 500,
	  			prevArrow: '<button type="button" class="slick-prev">Previous</button>',
	  			nextArrow: '<button type="button" class="slick-next">Next</button>'
			});
		</script>		
		<!-- loading -->
		<script type="text/javascript">
			$(window).load(function () {
				$('#loftloader-wrapper').delay(600).fadeOut(400);
			});

			$(function(){setTimeout('stopload()',10000);});
			function stopload(){
				$('#loftloader-wrapper').delay(600).fadeOut(400);
			}
		</script>
		<!-- menu top -->
		<script type="text/javascript">
		$(function(){
			var state = false;
			$('.menu-trigger').on('click',function(){
				if(state == false) {$(this).toggleClass('active');$('.g-nav').slideToggle(400);state = true;
			} else {
				$(this).toggleClass('active');$('.g-nav').slideToggle(400);state = false;
			}
			});
		});
		</script>
		<script type="text/javascript">
			$(function() {
			    $('html,body').animate({ scrollTop: 0 }, '1');
			});
		</script>
		<!-- menu work -->
		<script type="text/javascript">
		$(function(){
			var state_two = false;
			$('.menu-trigger-work').on('click',function(){
				if(state_two == false) {$(this).toggleClass('active');$('.g-nav-work').slideToggle(400);state_two = true;
			} else {
				$(this).toggleClass('active');$('.g-nav-work').slideToggle(400);state_two = false;
			}
			});
		});
		</script>		
		<!-- scroll nav -->
		<script type="text/javascript">
			$(function() {var $win = $(window),$header = $('header'),animationClass = 'is-animation';
		    $win.on('load scroll', function() {var value = $(this).scrollTop();if ( value > 40 ) {$header.addClass(animationClass);} else {$header.removeClass(animationClass);}});});
		</script>
		<!-- twitter -->
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>		
		<!-- Yahoo Tag anager -->
		<script type="text/javascript">
		(function () {
			var tagjs = document.createElement("script");
			var s = document.getElementsByTagName("script")[0];
			tagjs.async = true;
			tagjs.src = "//s.yjtag.jp/tag.js#site=G7L3lFM";
			s.parentNode.insertBefore(tagjs, s);
		}());
		</script>
		<noscript>
			<iframe src="//b.yjtag.jp/iframe?c=G7L3lFM" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
		</noscript>
		<!-- /Yahoo Tag Manager -->		
		<?php wp_footer(); ?>
	</body>
</html>
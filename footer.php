			</div> 	<!-- end #main-area -->
		
		<footer id="main_footer" class="clearfix">
			<p id="copyright"><span style="font-size:22px;">Contact Us</span><br />Great Wall Club Inc (US)<br /><a href="mailto: info@gmic-sv.com" title="Email Us" target="_blank">info@gmic-sv.com</a><br /><a href="http://www.facebook.com/theGMIC" target="_blank">www.facebook.com/theGMIC</a><br /><a href="http://www.twitter.com/theGMIC" target="_blank">Twitter: @theGMIC</a><br />565 Clyde Ave, Suite 600, Mountain View, CA, 94043<br />Copyright © GMIC SV - All rights reserved.</p>
		</footer> <!-- end #main_footer -->
	</div> <!-- end #container -->
<div id="bg">
	<img src="http://www.gmic-sv.com/wp-content/themes/gmicsv/images/bg-web3.jpg" alt="">
</div>

	<?php wp_footer(); ?>
<script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.carouFredSel-5.6.1-packed.js"></script>
<script type="text/javascript" language="javascript">
			$(function() {

				//	Fuild layout example 2, centering the items
				$("#foo3").carouFredSel({
					auto		:  {
						play: true,
						delay: 2000,
					},
					height: 70,
					width: '100%',
					scroll: 2,
				});
				
				//	Scrolled by user interaction
				$('#foo2').carouFredSel({
					pagination	: {
						container		: "#pager2",
						anchorBuilder	: function( nr, item ) {
							var title = item.find( "h2.agenda_title" ).text();
							return "<span>" + title + "</span>";
						}
					},
					auto: false,
				});
				
				$("#foo1").carouFredSel({
					auto		: true,
					auto : {pauseDuration   : 5000},
					scroll      : {
						duration        : 900},
					width: '100%',
				});
				
				//if (navigator.platform.match(/iP(od|hone|ad)/i)) {
				//    $(window).scroll(function() {
				//        $('#fixed-div').css({
				//            position : 'absolute',
				//            top      : ($(window).height() + $(document).scrollTop() - 110) + 'px'
				//        });
				//    });
				//}

				//back to top button
				var pxShow = 300;//height on which the button will show
				var fadeInTime = 1000;//how slow/fast you want the button to show
				var fadeOutTime = 1000;//how slow/fast you want the button to hide
				var scrollSpeed = 300;//how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'
				jQuery(window).scroll(function(){
					if(jQuery(window).scrollTop() >= pxShow){
						jQuery("#backtotop").fadeIn(fadeInTime);
					}else{
						jQuery("#backtotop").fadeOut(fadeOutTime);
					}
				});
				 
				jQuery('#backtotop a').click(function(){
					jQuery('html, body').animate({scrollTop:0}, scrollSpeed); 
					return false; 
				}); 

			});
		</script>
		<!--<img class="title-tab" src="<?php echo get_template_directory_uri(); ?>/images/sponsors-tab.png" />
<div class="image_carousel">	
	<ul id="foo3">
	  <li style="width: 111px;"><img src="http://www.gmic-sv.com/wp-content/themes/gmic-sv/images/top-sponsor-tab.jpg" width="97" height="59" style="padding:0; border: none;" />
	  <li style="width: 161px;"><a target="_blank" href="http://www.tencent.com/en-us/index.shtml"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/09/tencent-logo.jpg" width="135" style="border: 1px solid #7b6596; padding: 9px 5px 10px 5px;" /></a></li>
	  <li style="width: 161px;"><a target="_blank" href="http://english.sina.com/index.html"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/09/sina-logo.jpg" width="135" style="border: 1px solid #7b6596; padding: 9px 5px 10px 5px;" /></a></li>
	  <li style="width: 161px;"><a href="http://www.gmic-sv.com/uc-web/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/08/ucweb.png" width="135" style="border: 1px solid #7b6596; padding: 9px 5px 10px 5px;" /></a></li>
	  <li style="width: 111px;"><img src="http://www.gmic-sv.com/wp-content/themes/gmic-sv/images/platinum-sponsor-tab.jpg" width="97" height="59" style="padding:0; border: none;" /></li>
	  <li style="width: 139px;"><a href="http://www.gmic-sv.com/tapjoy/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/08/tapjoy_logo_small.png" height="57" style="border: 1px solid #547bed; padding: 0;" /></a></li> 
	  <li style="width: 139px;"><a href="#"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/08/wondershare.png" height="57" style="border: 1px solid #547bed; padding: 0;" /></a></li> 
	  <li style="width: 139px;"><a href="http://www.google.com/ads/admob/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/08/AdMob-Logo.png" width="113" style="border: 1px solid #547bed; padding: 0;" /></a></li> 
	  <li style="width: 111px;"><img src="http://www.gmic-sv.com/wp-content/themes/gmic-sv/images/gold-sponsor-tab.jpg" width="97" height="59" style="padding:0; border: none;" /></li>
	  <li style="width: 139px;"><a href="http://www.gmic-sv.com/northern-light-venture-capital/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/09/northernlight.jpg" height="57" style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.gmic-sv.com/domob/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/09/domob2.png" height="57" style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.yolu.com/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/10/yolu1.jpg" width="123" style="border: 1px solid #eba706; padding: 2px 0 2px 0;" /></a></li>	  
	  <li style="width: 139px;"><a href="http://thebitcellar.com/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/10/bitcellas.jpg" width="123" style="border: 1px solid #eba706; padding: 6px 0 8px 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.startmeapp.com/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/10/SMA.png" width="123" style="border: 1px solid #eba706; padding: 6px 0 6px 0;" /></a></li>
	  <li style="width: 111px;"><img src="http://www.gmic-sv.com/wp-content/themes/gmic-sv/images/strategic-partner-tab.jpg" width="97" height="59" style="padding:0; border: none;" /></li>
	  <li style="width: 121px;"><a href="http://www.mobileroadie.com/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/strategic-partner-mobileroadie1.jpg" width="92" style="border: 1px solid #6ba46a;" /></a></li>
	  <li style="width: 121px;"><a href="http://www.btrax.com/"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/btrax_h_logo-2.1.png" width="92" style="border: 1px solid #6ba46a;" /></a></li>
	  <li style="width: 121px;"><a href="http://www.gmic-sv.com/engage-digital"><img src="http://www.gmic-sv.com/wp-content/uploads/2012/07/app-conference1.jpg" width="92" style="border: 1px solid #6ba46a;" /></a></li>
	</ul>
	<div class="clearfix"></div>
	<div class="pagination" id="foo3_pag"></div>
</div>-->
<div id="backtotop">
   <a href="#">&uarr; TOP</a>
</div>
</body>
</html>
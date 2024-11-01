<script>
	<!--

					(function($) {
						$.fn.extend({
							 
									smoothslides<?php echo esc_html($Rich_Web_VSlider_ID); ?>: function(options) {
										var defaults = {
											effectDuration: <?php echo  esc_js($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SS_ED*1000);?>,
									transitionDuration: <?php echo  esc_js($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SS_PT);?>,
									autoPlay: '<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SS_AP=='on'){echo 'true';}else{echo 'false';}?>',
									effect: '<?php echo  esc_js($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SS_Eff);?>',
									effectEasing: 'ease-in-out',
									nextText: ' ►',
									prevText: '◄ ',
									captions: '<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SS_TShow=='on'){echo 'true';}else{echo 'false';}?>',
									navigation: '<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SS_NShow=='on'){echo 'true';}else{echo 'false';}?>',
									pagination: '<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SS_PagShow=='on'){echo 'true';}else{echo 'false';}?>',
									matchImageSize: 'false'
								}
								var options = $.extend(defaults, options),
									that = this,
									uniqueId = $(this).attr('id'),
									fullTime= options.effectDuration + options.transitionDuration,
									maxWidth = $(this).find('img').width()
								if (options.transitionDuration >= options.effectDuration) { console.log("Make sure effectDuration is greater than transitionDuration"); }
								var y=false;
								
								

								$('#'+uniqueId).removeClass('smoothslides<?php echo esc_html($Rich_Web_VSlider_ID); ?>').addClass('smoothslides<?php echo esc_html($Rich_Web_VSlider_ID); ?>-on');
								function fadeOutLast() {
									if (document.all && !window.atob)
									{
										$('#'+uniqueId).find('.ss-slide:last').animate({ 'opacity':'0' })
									}
									else
									{
										$('#'+uniqueId).find('.ss-slide:last').css({ 'transition':'all '+options.transitionDuration+'ms', 'opacity':'0' });
									}
								}
								that.crossFade = function() {
									fadeOutLast();
									setTimeout(function(){
										$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>", that)).css({ 'opacity':'1', 'transform':'none' });
										$(that).find('.ss-slide:last').css({ 'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'', 'transform':'scale(1)  rotate(0deg)' });
									}, options.transitionDuration);
								}
								that.zoomOut = function() {
									fadeOutLast();
									$(this).find('.ss-slide:eq(-2)').css({ 'transition':'none', 'transform':'scale(1.2) rotate(1.5deg)' });
									setTimeout(function(){
										$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>", that)).css({ 'opacity':'1', 'transform':'none' });
										$(that).find('.ss-slide:last').css({ 'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'', 'transform':'scale(1)  rotate(0deg)' });
									}, options.transitionDuration);
								}
								that.zoomIn = function() {
									fadeOutLast();
									$(this).find('.ss-slide:eq(-2)').css({ 'transition':'none', 'transform':'scale(1.1) rotate(-1.5deg)' });
									setTimeout(function(){
										$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>", that)).css({ 'opacity':'1', 'transform':'none' });
										$(that).find('.ss-slide:last').css({ 'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'', 'transform':'scale(1.3) rotate(0deg)'});
									}, options.transitionDuration);
								}
								that.panLeft = function() {
									$(this).find('.ss-slide:eq(-2)').css({ 'transition':'none', 'transform':'scale(1.3) translateX(10%)' });
									fadeOutLast();
									setTimeout(function(){
										$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>", that)).css({ 'opacity':'1', 'transform':'none' });
										$(that).find('.ss-slide:last').css({ 'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'', 'transform':'scale(1.3) translateX(0%)' });
									}, options.transitionDuration);
								}
								that.panRight = function() {
									fadeOutLast();
									$(this).find('.ss-slide:eq(-2)').css({ 'transition':'none', 'transform':'scale(1.3) translateX(-10%)' });
									setTimeout(function(){
										$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>", that)).css({ 'opacity':'1', 'transform':'none' });
										$(that).find('.ss-slide:last').css({ 'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'', 'transform':'scale(1.3) translateX(0%)' });
									}, options.transitionDuration);
								}
								that.panUp = function() {
									fadeOutLast();
									$(this).find('.ss-slide:eq(-2)').css({ 'transition':'none', 'transform':'scale(1.3) translateY(10%)' });
									setTimeout(function(){
										$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>", that)).css({ 'opacity':'1', 'transform':'none' });
										$(that).find('.ss-slide:last').css({ 'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'', 'transform':'scale(1.3) translateY(0%)' });
									}, options.transitionDuration);
								}
								that.panDown = function() {
									fadeOutLast();
									$(this).find('.ss-slide:eq(-2)').css({ 'transition':'none', 'transform':'scale(1.3) translateY(-10%)' });
									setTimeout(function(){
										$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>", that)).css({ 'opacity':'1', 'transform':'none' });
										$(that).find('.ss-slide:last').css({ 'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'', 'transform':'scale(1.3) translateY(0%)' });
									}, options.transitionDuration);
								}
								that.diagTopLeftToBottomRight = function() {
									fadeOutLast();
									$(this).find('.ss-slide:eq(-2)').css({ 'transition':'none', 'transform':'scale(1.3) translateY(-10%) translateX(-10%)' });
									setTimeout(function(){
										$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>", that)).css({ 'opacity':'1', 'transform':'none' });
										$(that).find('.ss-slide:last').css({ 'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'', 'transform':'scale(1.3) translateY(0%) translateX(0%)' });
									}, options.transitionDuration);
								}
								that.diagBottomRightToTopLeft= function() {
									fadeOutLast();
									$(this).find('.ss-slide:eq(-2)').css({ 'transition':'none', 'transform':'scale(1.3) translateY(10%) translateX(10%)' });
									setTimeout(function(){
										$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>", that)).css({ 'opacity':'1', 'transform':'none' });
										$(that).find('.ss-slide:last').css({ 'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'', 'transform':'scale(1.3) translateY(0%) translateX(0%)' });
									}, options.transitionDuration);
								}
								that.diagTopRightToBottomLeft = function() {
									fadeOutLast();
									$(this).find('.ss-slide:eq(-2)').css({ 'transition':'none', 'transform':'scale(1.3) translateY(-10%) translateX(10%)' });
									setTimeout(function(){
										$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>", that)).css({ 'opacity':'1', 'transform':'none' });
										$(that).find('.ss-slide:last').css({ 'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'', 'transform':'scale(1.3) translateY(0%) translateX(0%)' });
									}, options.transitionDuration);
								}
								that.diagBottomLeftToTopRight = function() {
									fadeOutLast();
									$(this).find('.ss-slide:eq(-2)').css({ 'transition':'none', 'transform':'scale(1.3) translateY(10%) translateX(-10%)' });
									setTimeout(function(){
										$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>", that)).css({ 'opacity':'1', 'transform':'none' });
										$(that).find('.ss-slide:last').css({ 'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'', 'transform':'scale(1.3) translateY(0%) translateX(0%)' });
									}, options.transitionDuration);
								}
								if(options.matchImageSize == 'true') { $('#'+uniqueId).css('maxWidth',maxWidth); $('#'+uniqueId+' img').css('maxWidth','100%');}
								else { $('#'+uniqueId+' img').css('width','100%'); }
								$(this).children().each(function(){ $(this).wrap('<div class="ss-slide"></div>'); });
								$('#'+ uniqueId +' .ss-slide').each(function() { $(this).prependTo('#'+uniqueId); });
								$('#'+uniqueId+' .ss-slide:first').css('position','relative');
								if(options.autoPlay == 'true') { $(".ss-slide:first", this).appendTo(this) }

								$(this).wrapInner("<div class='ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>'></div>")
								$(".ss-slide",this).each(function(){ $(this).css({ transition: 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'' }); });
								function captionUpdate() 
								{
									var nextCaption = $('#'+uniqueId).find('.ss-slide:eq(-2) img').prop('alt');
									if (!nextCaption) { $('#'+uniqueId).find(".ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>").css('opacity','0'); }
									else { $('#'+uniqueId).find(".ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>").css('opacity','1').html(nextCaption); }
								}
								function captionUpdateBack()
								{
									var nextCaption = $('#'+uniqueId).find('.ss-slide:eq(-1) img').prop('alt');
									if (!nextCaption) { $('#'+uniqueId).find(".ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>").css('opacity','0'); }
									else { $('#'+uniqueId).find(".ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>").css('opacity','1').html(nextCaption); }
								}
								if (options.captions == 'true')
								{
									$(that).append("<div class='ss-caption-wrap<?php echo esc_html($Rich_Web_VSlider_ID); ?>'><div class='ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>'></div></div>");
									if (options.autoPlay == 'true') { captionUpdate(); }
									else
									{
										var nextCaption = $('#'+uniqueId).find('.ss-slide:last img').prop('alt');
										if (!nextCaption) { $('#'+uniqueId).find(".ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>").css('opacity','0'); } 
										else { $('#'+uniqueId).find(".ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>").css('opacity','1').html(nextCaption); }
									}
								}
								if (options.navigation == 'true')
								{
									$(that).append('<a href="#" class="ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?> ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>-on">' + options.prevText + '</a><a href="#" class="ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?> ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>-on">' + options.nextText + '</a>');
								}
								if (options.pagination == 'true')
								{
									$(that).append('<div class="ss-paginate-wrap<?php echo esc_html($Rich_Web_VSlider_ID); ?>"><div class="ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>"></div></div>');
									$(".ss-slide",that).each(function() { $('.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>', that).append('<a href="#" onclick="Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>_Clos()"></a>'); });
									if (options.autoPlay == "true")
									{
										$('.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?> a:last', that).addClass("ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current");
									}
									else
									{
										$('.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?> a:first', that).addClass("ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current");
									}
								}
								function paginationUpdate()
								{
									
									var total = $(that).find('.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?> a').length;
									var current = $(that).find('a.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current').index();
									var next = current + 1;
									if (next >= total) 
									{
										$(that).find('a.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current').removeClass();
										$(that).find('.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?> a:eq(0)').addClass('ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current');
									}
									else
									{
										$(that).find('a.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current').removeClass();
										$(that).find('.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?> a:eq('+ next +')').addClass('ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current');
									}
								}
								function paginationUpdateBack()
								{
									
									var total = $(that).find('.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?> a').length;
									var current = $(that).find('a.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current').index();
									var next = current - 1;
									if (next <= -2) 
									{
										$(that).find('a.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current').removeClass();
										$(that).find('.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?> a:eq('+total+')').addClass('ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current');
									}
									else
									{
										$(that).find('a.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current').removeClass();
										$(that).find('.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?> a:eq('+ next +')').addClass('ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current');
									}
								}
								var autoPlay = function ()
								{
									if(y){
										return;
									}
									if (document.all && !window.atob){ that.crossFade(); }
									else { effectArray = options.effect.split(','); var effect = effectArray[Math.floor(Math.random() * effectArray.length)]; that[effect](); }
									captionUpdate();
									paginationUpdate();
								}
								if (options.autoPlay == 'true') { autoPlay(); var playInterval = setInterval(autoPlay, fullTime); }
								// $('.ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>, .ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>, .ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>', that).mouseover(function() { clearInterval(playInterval); }).mouseout(function() { playInterval = setInterval(autoPlay, fullTime); });
								$('#'+uniqueId).on('click', '.ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>-on', function(event) {
									$('.ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>-on', that).removeClass('ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>-on');
									$(that).find('.ss-slide:last').css({ 'transition':'all '+options.transitionDuration+'ms', 'opacity':'0' });
									captionUpdate();
									paginationUpdate();
									setTimeout(function(){
										$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>", that)).css({ 'opacity':'1', 'transform':'none' });
										$(that).find('.ss-slide:last').css({ 'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'', 'transform':'scale(1)  rotate(0deg)' });
										$('.ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>', that).addClass('ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>-on');
									}, options.transitionDuration);
									event.preventDefault();
								});
								$('#'+uniqueId).on('click', '.ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>-on', function(event) {
									$('.ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>-on', that).removeClass('ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>-on');
									$('#'+uniqueId).find(".ss-slide:first").css({ 'transition':'none', 'opacity':'0'}).appendTo('#'+uniqueId+' .ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>');
									$('#'+uniqueId).find('.ss-slide:last').css('opacity');
									$('#'+uniqueId).find('.ss-slide:last').css({'transition':'all '+options.transitionDuration+'ms', 'opacity':'1' });
									captionUpdateBack();
									paginationUpdateBack();
									setTimeout(function(){$('.ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>').addClass('ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>-on');}, options.transitionDuration);
									event.preventDefault();
								});
								$('#'+uniqueId).on('click', '.ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>, .ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>', function(event){ event.preventDefault(); });
								$('#'+uniqueId).on('click', '.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?> a', function(event) {
									var dotClicked = $(this).index(); // 0 indexed
									var currentDot = $('#'+uniqueId+' .ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current').index(); // 0 indexed
									if (dotClicked < currentDot) 
									{
										var iterate = (currentDot - dotClicked);
										for (var i = 0; i < iterate; i++) { $('#'+uniqueId).find('.ss-slide:first').appendTo('#'+uniqueId+' .ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>'); }
									}
									else if (dotClicked > currentDot)
									{
										var iterate = (dotClicked - currentDot);
										for (var i = 0; i < iterate; i++) { $('#'+uniqueId).find('.ss-slide:last').prependTo('#'+uniqueId+' .ss-slide-stage<?php echo esc_html($Rich_Web_VSlider_ID); ?>'); }
									}
									$('#'+uniqueId).find('.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current').removeClass();
									$('#'+uniqueId).find('.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?> a:eq('+dotClicked+')').addClass('ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current');
									var nextCaption = $('#'+uniqueId).find('.ss-slide:eq(-1) img').prop('alt');
									if (!nextCaption) { $('#'+uniqueId).find(".ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>").css('opacity','0'); }
									else { $('#'+uniqueId).find(".ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>").css('opacity','1').html(nextCaption); }
									event.preventDefault();
								});
								$(".Rich_Web_VSldier_PlayIcon<?php echo esc_html($Rich_Web_VSlider_ID); ?> span, .ss-slide img").click(function(){

									y=true;

								})
								$(".ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?> a, .Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>_Close").click(function(){

									y=false;

								})
							}
						});
					})(jQuery);
	//-->

				</script>
				<script type="text/javascript">
					jQuery(window).ready( function() {
						jQuery('#myslideshow1<?php echo esc_html($Rich_Web_VSlider_ID); ?>').smoothslides<?php echo esc_html($Rich_Web_VSlider_ID); ?>();
					});
				</script>
				<script>
					function Rich_Web_VSlider_Open_Video<?php echo esc_html($Rich_Web_VSlider_ID); ?>(Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>)
					{
						
						jQuery('.Rich_Web_VSldier_PlayIcon<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('display','none');
						jQuery('.Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css({'transform':'translateX(0px)','-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)','-moz-transform': 'translateX(0px)','-webkit-transform': 'translateX(0px)'});

						 var video_link = Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>;
						 if(video_link.indexOf("mp4") >= 0 === true){
						 	var iframe_body = jQuery('.Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>').find('.Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>_Iframe').contents().find('body');
								jQuery(iframe_body).html('<video id="videoId" controls  controlsList="nodownload" loop style="height:100%; width:100%; position:absolute;left: 0;right: 0;margin: auto;top: 0;bottom: 0;outline:none" name="media"><source src="'+Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>+'" type="video/mp4"></video>');
						 }
						 else{
						 	jQuery('.Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>_Iframe').attr('src',Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>);
						 }
					}
					function Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>_Clos()
					{
						var RW_VS_SS_W=jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').width();
						jQuery('.Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css({'transform':'translateX(-12000px)','-ms-transform': 'translateX(-12000px)', '-o-transform': 'translateX(-12000px)','-moz-transform': 'translateX(-12000px)','-webkit-transform': 'translateX(-12000px)'});
						jQuery('.Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>_Iframe').attr('src','');
						jQuery('.Rich_Web_VSldier_PlayIcon<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('display','inline');
					}
					function Rich_Web_VSlider_Play_Video<?php echo esc_html($Rich_Web_VSlider_ID); ?>()
					{
						var Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>;
						jQuery('.ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?> a').each(function(){
							if(jQuery(this).hasClass('ss-paginate<?php echo esc_html($Rich_Web_VSlider_ID); ?>-current'))
							{
								Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>=jQuery('.Rich_Web_VSldier_SS_Img_<?php echo esc_html($Rich_Web_VSlider_ID); ?>'+jQuery(this).index()).attr('id');
							}
						})
						Rich_Web_VSlider_Open_Video<?php echo esc_html($Rich_Web_VSlider_ID); ?>(Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>);
					}
				</script>
				<script>
					jQuery(document).ready(function(){
						var SLWidthSC = jQuery('.SLWidthSC<?php echo esc_html($Rich_Web_VSlider_ID); ?>').val();
						var SLHeightSC = jQuery('.SLHeightSC<?php echo esc_html($Rich_Web_VSlider_ID); ?>').val();
						var SLTitFSSC = jQuery('.SLTitFSSC<?php echo esc_html($Rich_Web_VSlider_ID); ?>').val();
						var SLIcSSC = jQuery('.SLIcSSC<?php echo esc_html($Rich_Web_VSlider_ID); ?>').val();
						function resp<?php echo esc_html($Rich_Web_VSlider_ID); ?>(){
							jQuery("#RW_Load_Slick_Navigation<?php echo esc_html($Rich_Web_VSlider_ID); ?>").css("max-height",Math.floor(SLHeightSC/SLWidthSC*jQuery("#RW_Load_Slick_Navigation<?php echo esc_html($Rich_Web_VSlider_ID); ?>").width()));
							jQuery('.Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>_Iframe').css('width','100%');
							jQuery('.Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('width','100%');
							jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('height',Math.floor(SLHeightSC/SLWidthSC*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').width()));
							jQuery('.Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>_Iframe').css('height','100%');
							jQuery('.Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('height','100%');
							jQuery('.Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>_Close').css('width',Math.floor(50*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').width()/(jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').width()+150)));
							jQuery('.Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>_Close').css('height',Math.floor(100*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').width()/(jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').width()+150)));
							jQuery('.Rich_Web_VSldier_PlayIcon<?php echo esc_html($Rich_Web_VSlider_ID); ?> span').css('width',Math.floor(80*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()/(jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()+250)));
							jQuery('.Rich_Web_VSldier_PlayIcon<?php echo esc_html($Rich_Web_VSlider_ID); ?> span').css('height',Math.floor(50*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()/(jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()+250)));
							jQuery('.Rich_Web_VSldier_PlayIcon<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('height',Math.floor(50*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()/(jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()+250)));
							jQuery('.Rich_Web_VSldier_PlayIcon<?php echo esc_html($Rich_Web_VSlider_ID); ?> span').css('line-height',jQuery('.Rich_Web_VSldier_PlayIcon<?php echo esc_html($Rich_Web_VSlider_ID); ?> span').height()+'px');
							jQuery('.Rich_Web_VSldier_PlayIcon<?php echo esc_html($Rich_Web_VSlider_ID); ?> span').css('font-size',Math.floor(jQuery('.Rich_Web_VSldier_PlayIcon<?php echo esc_html($Rich_Web_VSlider_ID); ?> span').height()/2)+'px');
							if(parseInt(jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('width'))<=450)
							{
								jQuery('a.ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>').addClass('clickPrNext');
								jQuery('a.ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>').addClass('clickPrNext');
								jQuery('.ss-caption-wrap<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('padding','0px');
								jQuery('a.ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('font-size',Math.floor(SLIcSSC*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()/1000));
								jQuery('a.ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('font-size',Math.floor(SLIcSSC*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()/1000));
								jQuery('a.ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('width',Math.floor(3*SLIcSSC*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()/1000));
								jQuery('a.ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('height',Math.floor(3*SLIcSSC*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()/1000));
								jQuery('a.ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('width',Math.floor(3*SLIcSSC*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()/1000));
								jQuery('a.ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('height',Math.floor(3*SLIcSSC*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()/1000));
								jQuery('a.ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('line-height',Math.floor(3*SLIcSSC*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()/1000)+'px');
								jQuery('a.ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('line-height',Math.floor(3*SLIcSSC*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()/1000)+'px');
								jQuery('.ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('padding','0px');
								jQuery('.ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('min-height','0px');
								jQuery('.ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('font-size',Math.floor(SLTitFSSC*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()/450));
								jQuery('.ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('line-height',Math.floor(SLTitFSSC*jQuery('.center<?php echo esc_html($Rich_Web_VSlider_ID); ?>').parent().parent().width()/450+2)+'px');
							}
							else
							{
								jQuery('a.ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>').removeClass('clickPrNext');
								jQuery('a.ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>').removeClass('clickPrNext');
								jQuery('.ss-caption-wrap<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('padding','5px');
								jQuery('a.ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('width',3*SLIcSSC+'px');
								jQuery('a.ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('height',3*SLIcSSC+'px');
								jQuery('a.ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('width',3*SLIcSSC+'px');
								jQuery('a.ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('height',3*SLIcSSC+'px');
								jQuery('a.ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('line-height',3*SLIcSSC+'px');
								jQuery('a.ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('line-height',3*SLIcSSC+'px');
								jQuery('a.ss-prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('font-size',SLIcSSC+'px');
								jQuery('a.ss-next<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('font-size',SLIcSSC+'px');
								jQuery('.ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('padding-top',SLIcSSC+'px');
								jQuery('.ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('min-height',3*SLIcSSC+'px');
								jQuery('.ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('font-size',SLTitFSSC+'px');
								jQuery('.ss-caption<?php echo esc_html($Rich_Web_VSlider_ID); ?>').css('line-height',SLTitFSSC+'px');
							}
						}
						jQuery(window).ready(function(){ resp<?php echo esc_html($Rich_Web_VSlider_ID); ?>(); })
						jQuery(window).resize(function(){ resp<?php echo esc_html($Rich_Web_VSlider_ID); ?>(); })
						var array_slicSl<?php echo esc_html($Rich_Web_VSlider_ID); ?>=[];
						jQuery(".Rich_Web_VSldier_SS_Img_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").each(function(){
							if( jQuery(this).attr("src") != "" ) {
								array_slicSl<?php echo esc_html($Rich_Web_VSlider_ID); ?>.push(jQuery(this).attr("src"));
							}
						})
						var y_slickSl<?php echo esc_html($Rich_Web_VSlider_ID); ?>=0;
						for(i=0;i<array_slicSl<?php echo esc_html($Rich_Web_VSlider_ID); ?>.length;i++){
							jQuery("<img class='Rich_Web_VSldier_SS_Img_<?php echo esc_html($Rich_Web_VSlider_ID); ?>' />").attr('src', array_slicSl<?php echo esc_html($Rich_Web_VSlider_ID); ?>[i]).on("load",function(){
								y_slickSl<?php echo esc_html($Rich_Web_VSlider_ID); ?>++;
								if(y_slickSl<?php echo esc_html($Rich_Web_VSlider_ID); ?> == array_slicSl<?php echo esc_html($Rich_Web_VSlider_ID); ?>.length){
									jQuery("#demo<?php echo esc_html($Rich_Web_VSlider_ID); ?>").fadeIn(1000);
									jQuery("#RW_Load_Slick_Navigation<?php echo esc_html($Rich_Web_VSlider_ID); ?>").remove();
								}
							})
						}
					})
				</script>
<script type="text/javascript">
					var count_y = 0;
					var clInt = false;
					var click = false;

					var rw_autoplay_OnOf<?php echo esc_html($Rich_Web_VSlider_ID); ?> = jQuery(".rw_autoplay_OnOf<?php echo esc_html($Rich_Web_VSlider_ID); ?>").val();
					var rw_autoplay<?php echo esc_html($Rich_Web_VSlider_ID); ?> = jQuery(".rw_autoplay<?php echo esc_html($Rich_Web_VSlider_ID); ?>").val();
					var count<?php echo esc_html($Rich_Web_VSlider_ID); ?> = 0;
					var arr_li<?php echo esc_html($Rich_Web_VSlider_ID); ?> = document.querySelectorAll("#RW_SV_Slider_<?php echo esc_html($Rich_Web_VSlider_ID); ?> li");
					var length<?php echo esc_html($Rich_Web_VSlider_ID); ?> = arr_li<?php echo esc_html($Rich_Web_VSlider_ID); ?>.length;
					var html = "";
					for(var i=0;i<length<?php echo esc_html($Rich_Web_VSlider_ID); ?>;i++){
						html += "<li class='nav<?php echo esc_html($Rich_Web_VSlider_ID); ?>'><a href='#' data-id='"+i+"'></a></li>";
					}

					document.querySelector(".RW_SV_Pagination_Wrap_<?php echo esc_html($Rich_Web_VSlider_ID); ?> ul").innerHTML = html;

					function navigation<?php echo esc_html($Rich_Web_VSlider_ID); ?>(){
						var navList<?php echo esc_html($Rich_Web_VSlider_ID); ?> = document.querySelectorAll(".RW_SV_Pagination_Wrap_<?php echo esc_html($Rich_Web_VSlider_ID); ?> ul li");
						for(var i=0;i<navList<?php echo esc_html($Rich_Web_VSlider_ID); ?>.length;i++){
							navList<?php echo esc_html($Rich_Web_VSlider_ID); ?>[i].classList.remove("active");
						}
						navList<?php echo esc_html($Rich_Web_VSlider_ID); ?>[count<?php echo esc_html($Rich_Web_VSlider_ID); ?>].classList.add("active");	
					}
					
					var left<?php echo esc_html($Rich_Web_VSlider_ID); ?> = 0;

					function changeVideo<?php echo esc_html($Rich_Web_VSlider_ID); ?>(){
						left<?php echo esc_html($Rich_Web_VSlider_ID); ?> = -count<?php echo esc_html($Rich_Web_VSlider_ID); ?>*amaz_content_width<?php echo esc_html($Rich_Web_VSlider_ID); ?>;
						document.querySelector("#RW_SV_Slider_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").style.left = left<?php echo esc_html($Rich_Web_VSlider_ID); ?>+"px";
						navigation<?php echo esc_html($Rich_Web_VSlider_ID); ?>();
						document.querySelector(".countVideoes<?php echo esc_html($Rich_Web_VSlider_ID); ?>").innerHTML = (parseInt(count<?php echo esc_html($Rich_Web_VSlider_ID); ?>)+1) + " / " + length<?php echo esc_html($Rich_Web_VSlider_ID); ?>
					}

					var amaz_content_width<?php echo esc_html($Rich_Web_VSlider_ID); ?> = 0;
					function acw<?php echo esc_html($Rich_Web_VSlider_ID); ?>(){
						amaz_content_width<?php echo esc_html($Rich_Web_VSlider_ID); ?> = parseInt(jQuery(".RW_SV_NSV_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").width());
					}

					function resp<?php echo esc_html($Rich_Web_VSlider_ID); ?>(){
						var RW_SV_Inp_Width<?php echo esc_html($Rich_Web_VSlider_ID); ?> = parseInt(jQuery(".RW_SV_Inp_Width<?php echo esc_html($Rich_Web_VSlider_ID); ?>").val());
						var RW_SV_Inp_Height<?php echo esc_html($Rich_Web_VSlider_ID); ?> = parseInt(jQuery(".RW_SV_Inp_Height<?php echo esc_html($Rich_Web_VSlider_ID); ?>").val());
						jQuery("#RW_SV_Slider_<?php echo esc_html($Rich_Web_VSlider_ID); ?> li").css("width",jQuery(".RW_SV_NSV_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").width());
						jQuery(".RW_SV_NSV_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").css("height",RW_SV_Inp_Height<?php echo esc_html($Rich_Web_VSlider_ID); ?>/RW_SV_Inp_Width<?php echo esc_html($Rich_Web_VSlider_ID); ?>*jQuery(".RW_SV_NSV_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").width());
						acw<?php echo esc_html($Rich_Web_VSlider_ID); ?>();
						jQuery("#RW_SV_Slider_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").css("width",length<?php echo esc_html($Rich_Web_VSlider_ID); ?>*amaz_content_width<?php echo esc_html($Rich_Web_VSlider_ID); ?>+"px");
						navigation<?php echo esc_html($Rich_Web_VSlider_ID); ?>();
						changeVideo<?php echo esc_html($Rich_Web_VSlider_ID); ?>();
					}

					jQuery(window).on("resize",function(){
						if(count_y>0){
							resp<?php echo esc_html($Rich_Web_VSlider_ID); ?>();
						}
					})

					var intFunc = function(){
						next<?php echo esc_html($Rich_Web_VSlider_ID); ?>();
					}

					var interval = window.setInterval(intFunc,1000*rw_autoplay<?php echo esc_html($Rich_Web_VSlider_ID); ?>)

					if(rw_autoplay_OnOf<?php echo esc_html($Rich_Web_VSlider_ID); ?> == ""){
						window.clearInterval(interval);
					}

					jQuery(".RW_CONTENT_LEFT_RIGHT_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").mousemove(function(){
						clInt = true;
					});

					jQuery(".RW_CONTENT_LEFT_RIGHT_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").mouseout(function(){
						if(!click){
							clInt = false;
						}
					})
					
					function deleteVideo<?php echo esc_html($Rich_Web_VSlider_ID); ?>(){
						jQuery("#RW_SV_Slider_Wrap_<?php echo esc_html($Rich_Web_VSlider_ID); ?> ul li").each(function() {
							var test = jQuery(this).find(".RW_SV_Slider_Link").text();
							jQuery(this).find("iframe").attr("src","").css({'display' : 'none'});
							jQuery(this).css({'background-image' : 'url(' + test + ')'});
						});
						jQuery(".rvs-nv-play-video").show();
						jQuery(".countVideoes<?php echo esc_html($Rich_Web_VSlider_ID); ?>").show();
						jQuery(".RW_SV_Slider_Title_Div_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").show();
						jQuery(".RW_SV_Pagination_Wrap_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").show();
					}

					function next<?php echo esc_html($Rich_Web_VSlider_ID); ?>(){
						if(clInt){
							return;
						}
						clInt=true;
						count<?php echo esc_html($Rich_Web_VSlider_ID); ?>++;
						if(count<?php echo esc_html($Rich_Web_VSlider_ID); ?> == length<?php echo esc_html($Rich_Web_VSlider_ID); ?>){
							count<?php echo esc_html($Rich_Web_VSlider_ID); ?> = 0;
						}	
						changeVideo<?php echo esc_html($Rich_Web_VSlider_ID); ?>();
						deleteVideo<?php echo esc_html($Rich_Web_VSlider_ID); ?>();
						window.setTimeout(function(){
							clInt=false;
						},300)
					}

					function prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>(){
						if(clInt){
							return;
						}
						clInt=true;
						count<?php echo esc_html($Rich_Web_VSlider_ID); ?>--;
						if(count<?php echo esc_html($Rich_Web_VSlider_ID); ?> < 0){
							count<?php echo esc_html($Rich_Web_VSlider_ID); ?> = length<?php echo esc_html($Rich_Web_VSlider_ID); ?>-1;
						}
						changeVideo<?php echo esc_html($Rich_Web_VSlider_ID); ?>();
						deleteVideo<?php echo esc_html($Rich_Web_VSlider_ID); ?>();
						window.setTimeout(function(){
							clInt=false;
						},300)
					}

					jQuery(".RW_SV_Pagination_Wrap_<?php echo esc_html($Rich_Web_VSlider_ID); ?> ul li a").click(function(e){
						e.preventDefault();
						var data = event.target.dataset;
						var id=data.id;
						count<?php echo esc_html($Rich_Web_VSlider_ID); ?> = id;
						left<?php echo esc_html($Rich_Web_VSlider_ID); ?> = -count<?php echo esc_html($Rich_Web_VSlider_ID); ?>*amaz_content_width<?php echo esc_html($Rich_Web_VSlider_ID); ?>;
						changeVideo<?php echo esc_html($Rich_Web_VSlider_ID); ?>();
					})

					jQuery("#RW_SV_Next_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").click(function(){
						clInt=false;
						click = false;
						next<?php echo esc_html($Rich_Web_VSlider_ID); ?>();
						window.setTimeout(function(){
							clInt=true;
						},300)
					})

					jQuery("#RW_SV_Previous_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").click(function(){
						clInt=false;
						click = false;
						prev<?php echo esc_html($Rich_Web_VSlider_ID); ?>();
						window.setTimeout(function(){
							clInt=true;
						},300)
					})

					jQuery('.rvs-nv-play-video').click(function(e) {

						e=e||window.event;
						e.preventDefault();
						clInt = true;
						click = true;
						jQuery(this).hide();
						jQuery(".RW_SV_Slider_Title_Div_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").hide();
						jQuery(".RW_SV_Pagination_Wrap_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").hide();
						jQuery(".countVideoes<?php echo esc_html($Rich_Web_VSlider_ID); ?>").hide();
						jQuery(this).parent().css({'background-image' : 'none'});
						var href = jQuery(this).attr('href');
						jQuery(this).prev().css({'display' : 'block'}).attr("src",href+'?showinfo=1&autoplay=1&rel=0&amp');
					});

					var array_ass<?php echo esc_html($Rich_Web_VSlider_ID); ?>=[];
					jQuery(".rw_hidden_imgs<?php echo esc_html($Rich_Web_VSlider_ID); ?>").each(function(){
						if( jQuery(this).attr("src") != "" ) {
							array_ass<?php echo esc_html($Rich_Web_VSlider_ID); ?>.push(jQuery(this).attr("src"));
						}
					})

					var y_ass<?php echo esc_html($Rich_Web_VSlider_ID); ?>=0;
					for(i=0;i<array_ass<?php echo esc_html($Rich_Web_VSlider_ID); ?>.length;i++){
						jQuery("<img class='rw_hidden_imgs<?php echo esc_html($Rich_Web_VSlider_ID); ?>' />").attr('src', array_ass<?php echo esc_html($Rich_Web_VSlider_ID); ?>[i]).on("load",function(){
							y_ass<?php echo esc_html($Rich_Web_VSlider_ID); ?>++;
							if(y_ass<?php echo esc_html($Rich_Web_VSlider_ID); ?> == array_ass<?php echo esc_html($Rich_Web_VSlider_ID); ?>.length){
								jQuery(".RW_CONTENT_LEFT_RIGHT_<?php echo esc_html($Rich_Web_VSlider_ID); ?>").css({"height":"auto","opacity":"1"});
								jQuery("#RW_Load_ASS_Navigation<?php echo esc_html($Rich_Web_VSlider_ID); ?>").remove();
								resp<?php echo esc_html($Rich_Web_VSlider_ID); ?>();
								count_y++;
							}
						})
					}
				</script>
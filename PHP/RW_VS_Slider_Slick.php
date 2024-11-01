    <div id="RW_Load_Slick_Navigation<?php echo esc_html($Rich_Web_VSlider_ID); ?>" style="<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_SlickSl_Loading_Show == "on") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
		<div class="center_content<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
			<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_SlickSl_L_Show == "on") { ?>
				<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_SlickSl_L_T == "Type 1") { ?>
					<div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
						<div class="loader_Navigation1 loader_Navigation1<?php echo esc_html($Rich_Web_VSlider_ID); ?>" id="loader_Navigation1"></div>
						<div class="loader_Navigation2 loader_Navigation2<?php echo esc_html($Rich_Web_VSlider_ID); ?>" id="loader_Navigation2"></div>
						<div class="loader_Navigation3 loader_Navigation3<?php echo esc_html($Rich_Web_VSlider_ID); ?>" id="loader_Navigation3"></div>
						<div class="loader_Navigation4" id="loader_Navigation4"></div>
					</div>
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_SlickSl_L_T == "Type 2") { ?>
					<div class="overlay-loader<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
						<div class="loader<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
							<div></div>
							<div></div>
							<div></div>
							<div></div>
							<div></div>
							<div></div>
							<div></div>
						</div>
					</div>
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_SlickSl_L_T == "Type 3") { ?>
					<div class="windows8<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
						<div class="wBall" id="wBall_1">
							<div class="wInnerBall"></div>
						</div>
						<div class="wBall" id="wBall_2">
							<div class="wInnerBall"></div>
						</div>
						<div class="wBall" id="wBall_3">
							<div class="wInnerBall"></div>
						</div>
						<div class="wBall" id="wBall_4">
							<div class="wInnerBall"></div>
						</div>
						<div class="wBall" id="wBall_5">
							<div class="wInnerBall"></div>
						</div>
					</div>
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_SlickSl_L_T == "Type 4") { ?>
					<div class="cssload-thecube<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
						<div class="cssload-cube cssload-c1"></div>
						<div class="cssload-cube cssload-c2"></div>
						<div class="cssload-cube cssload-c4"></div>
						<div class="cssload-cube cssload-c3"></div>
					</div>
				<?php } ?>
			<?php } ?>
			<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_SlickSl_LT_Show == "on") { ?>
				<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_SlickSl_LT_T == "Type 1") { ?>
					 
					<div class="cssload-loader<?php echo esc_html($Rich_Web_VSlider_ID); ?>"><?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_SlickSl_LT);?></div>
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_SlickSl_LT_T == "Type 2") { ?>
					<div id="inTurnFadingTextG<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
						<?php foreach($text_array as $key=>$v){ ?>
							<div id="inTurnFadingTextG<?php echo esc_html($Rich_Web_VSlider_ID); ?>_<?php echo esc_attr($key + 1); ?>" class="inTurnFadingTextG<?php echo esc_html($Rich_Web_VSlider_ID); ?>"><?php echo esc_attr($v); ?></div>
						<?php } ?>
					</div>
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_SlickSl_LT_T == "Type 3") { ?>
					<div class="cssload-preloader<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
						<div class="cssload-preloader<?php echo esc_html($Rich_Web_VSlider_ID); ?>-box">
							<?php foreach($text_array as $key=>$v){ ?>
								<div><?php echo esc_attr($v); ?></div>
							<?php } ?>
						</div>
					</div>
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_SlickSl_LT_T == "Type 4") { ?>
					<div class="RW_Loader_Text_Navigation<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
						<?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_SlickSl_LT);?>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
	<section id="demo<?php echo esc_html($Rich_Web_VSlider_ID); ?>" style='margin:20px auto;display:none;'>
		<div class="center<?php echo esc_html($Rich_Web_VSlider_ID); ?>" style='max-width:100%;'>
			<div class="Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>" >
				<iframe  class="Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>_Iframe" src="" style='width:100%;height:100%;' frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<div class="Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>_Close" onclick="Rich_Web_VSldier_Src<?php echo esc_html($Rich_Web_VSlider_ID); ?>_Clos()">
					<span> < </span>
				</div>
			</div>
			<div class="Rich_Web_VSldier_PlayIcon<?php echo esc_html($Rich_Web_VSlider_ID); ?>" onclick="Rich_Web_VSlider_Play_Video<?php echo esc_html($Rich_Web_VSlider_ID); ?>()">
				<span> ►</span>
			</div>
			<div class="smoothslides<?php echo esc_html($Rich_Web_VSlider_ID); ?>" id="myslideshow1<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
				<?php for($i=0;$i<count($Rich_Web_VSlider_Videos);$i++) {
					if(strpos($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img, 'youtube') > 0)
					{
						$rest_vd_url = substr($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img, 0, -13);
						$link_vd_sl = $rest_vd_url.'maxresdefault.jpg';
						if (!@fopen("$link_vd_sl",'r')) { $link_vd_sl = $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img; }
					}
					else
					{
						$link_vd_sl = $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img;
					}
				?>
				<img src="<?php echo  esc_url($link_vd_sl);?>" alt="<?php echo wp_unslash(html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title));?>" onclick="Rich_Web_VSlider_Open_Video<?php echo esc_html($Rich_Web_VSlider_ID); ?>('<?php echo  esc_url($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Src);?>?rel=0&amp')" class="Rich_Web_VSldier_SS_Img_<?php echo esc_html($Rich_Web_VSlider_ID); ?><?php echo  esc_attr($i);?> Rich_Web_VSldier_SS_Img_<?php echo esc_html($Rich_Web_VSlider_ID); ?>" id="<?php echo  esc_url($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Src);?>?rel=0&amp"/>
				<?php } ?>
			</div>
		</div>
	</section>
	<input type='text' style='display:none;' class='SLWidthSC<?php echo esc_html($Rich_Web_VSlider_ID); ?>'  value='<?php echo  esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SS_W);?>'>
	<input type='text' style='display:none;' class='SLHeightSC<?php echo esc_html($Rich_Web_VSlider_ID); ?>' value='<?php echo  esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SS_H);?>'>
	<input type='text' style='display:none;' class='SLTitFSSC<?php echo esc_html($Rich_Web_VSlider_ID); ?>'  value='<?php echo  esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SS_TFS);?>'>
	<input type='text' style='display:none;' class='SLIcSSC<?php echo esc_html($Rich_Web_VSlider_ID); ?>'    value='<?php echo  esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SS_NS);?>'>
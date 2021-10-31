<?php 

	/*
	* *****************************************************
	*/
	add_shortcode('servises', 'servises_func');
	function servises_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 $tel = get_field('телефон', 'option');
											 $tel_str = str_replace(" ","", $tel);  
		 ?>
		 <?php  $tel = get_field('телефон', 'option');
						 $tel_str = str_replace(" ","", $tel);  
		 ?>
		 	<!-- start sTopCards-->
			<div class="sTopCards section" id="sTopCards">
				<div class="container">
					<div class="sTopCards__row row">
						<?php   if( have_rows('карточки') ):    while ( have_rows('карточки') ) : the_row();  ?>
							<?php   
								$image = get_sub_field("изображение");
								$size = 'medium';
								$sizeSm = 'full';
							?>
						<div class="sTopCards__col col-xl-6 wow  animate__fadeInUp">
							<div class="sTopCards__card-cont">
								<div class="sTopCards__bg-cont">
									<!-- picture-->
									<picture class="sTopCards__bg">  
										<?php 
											if( $image ) {
													echo wp_get_attachment_image( $image, $size );
											}
										?>
									</picture>
									<!-- /picture-->
								</div>
								<div class="sTopCards__txt">
									<h5><?php echo the_sub_field('название'); ?></h5>
									<p><?php echo the_sub_field('краткое_описание'); ?></p><a class="sTopCards__detail-link link-modal" href="#modal-case">
									<div class="txt">Подробнее</div>
									<svg class="icon icon-chevron-down ">
										<use xlink:href="<?php  echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#chevron-down"></use>
									</svg></a>
								</div>
								<div class="sTopCards__pic-cont d-none d-sm-block">
									<!-- picture-->
									<picture class="sTopCards__picture"> 
										<?php  
											if( $image ) {
													echo wp_get_attachment_image( $image, $sizeSm);
											}
										?>
									</picture>
									<!-- /picture-->
								</div>
								<div class="d-none for-model-content">
									<div class="modal-win__caption"> 
										<div class="modal-win__row row">
											<h5><?php echo the_sub_field('название'); ?></h5>
											<?php echo the_sub_field('полное_описание'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>

						<?php  endwhile;  else :  endif;    ?>
							 
						</div>
					</div>
				</div> 
			<!-- end sTopCards-->
		 <?php
    return ob_get_clean();

}
	/*
	* *****************************************************
	*/
	add_shortcode('about', 'about_func');
	function about_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 $tel = get_field('телефон', 'option');
											 $tel_str = str_replace(" ","", $tel);  
		 ?>
		 <?php  $tel = get_field('телефон', 'option');
						 $tel_str = str_replace(" ","", $tel);  
		 ?>
		 <?php   
				$image = get_field("фото");
				$size = 'full'; 
			?>
			<!-- start sAbout-->
			<section class="sAbout section" id="sAbout">
				<div class="sAbout__red-block">
				</div>
				<div class="sAbout__left-rain"><img loading="lazy" src="<?php  echo $get_template_directory_uri ?>/public/img/svg/sAbout-left-rain.svg" alt=""/>
				</div>
				<div class="sAbout__right-rain"><img loading="lazy" src="<?php  echo $get_template_directory_uri ?>/public/img/svg/sAbout-right-rain.svg" alt=""/>
				</div>
				<div class="container">
					<div class="sAbout__row row  wow  animate__fadeInUp">
						<div class="sAbout__descr-col col-lg-7">
							<div class="sAbout__txt-cont">
								<div class="sAbout__left-col-bg"><img loading="lazy" src="<?php  echo $get_template_directory_uri ?>/public/img/@2x/sAbout-left-col-bg.jpg" alt=""/>
							</div>
							<div class="sAbout__company-descr">
								<h2><?php echo the_field('заголовок_02'); ?></h2>
							</div>
							<?php echo the_field('текстовое_поле'); ?>
							<a class="sAbout__video-link" href="<?php echo the_field('видео'); ?>" data-fancybox="video"><span>Смотреть видео</span><span>о компании</span></a>
							</div>
						</div>
						<div class="sAbout__president-col col-lg-5">
							<div class="sAbout__right-col-content">
								<div class="sAbout__trapezoid-bg">
								</div>
								<div class="sAbout__pres-title">
									<h4><?php echo the_field('заголовок_обращения'); ?></h4>
									<p><?php echo the_field('имя'); ?></p>
								</div>
								<div class="sAbout__pres-descr">
									<p><?php echo the_field('текст__обращения'); ?></p>
								</div>
								<div class="sAbout__pres-portrait">
									<?php  
											if( $image ) {
													echo wp_get_attachment_image( $image, $size);
											}
										?>
								</div>
							</div>
						</div>
					</div>
					<div class="sAbout__convince-row row">
						<?php   if( have_rows('список') ):    while ( have_rows('список') ) : the_row();  ?>
						<div class="col-lg-4 col-sm-6  wow  animate__fadeInUp">
							<div class="sAbout__convince-txt"><?php echo the_sub_field('текст'); ?></div>
						</div>
						<?php  endwhile;  else :  endif;    ?>
					</div>
				</div>
			</section>
			<!-- end sAbout-->
		 
		 <?php
		 return ob_get_clean();
	
	}
	
	/*
	* *****************************************************
	*/
	add_shortcode('sCases', 'sCases_func');
	function sCases_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 $tel = get_field('телефон', 'option');
											 $tel_str = str_replace(" ","", $tel);  
		 ?>
		 <?php  $tel = get_field('телефон', 'option');
						 $tel_str = str_replace(" ","", $tel);  
		 ?>
		
		 
			<!-- start sCases-->
			<section class="sCases section" id="sCases">
				<div class="sCases__container container">
					<div class="sCases__header  wow  animate__fadeInUp">
						<h2><?php echo the_field('заголовок_03'); ?></h2>
						<a class="sCases__watch-all" href="#"><span>Смотреть все</span>
						<svg class="icon icon-chevron-right ">
							<use xlink:href="<?php  echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#chevron-right"></use>
						</svg></a>
						<div class="sCases__slider-nav">
							<div class="sCases__prev cases-prev-js">
								<svg class="icon icon-arrow-left ">
									<use xlink:href="<?php  echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#arrow-left"></use>
								</svg>
							</div>
							<div class="sCases__next cases-next-js">
								<svg class="icon icon-arrow-right ">
									<use xlink:href="<?php  echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#arrow-right"></use>
								</svg>
							</div>
						</div>
					</div>
					<div class="sCases__slider  wow  animate__fadeInUp">
						<div class="swiper-container cases-slider-js">
							<div class="swiper-wrapper">
								<?php   if( have_rows('блоки_03') ):    while ( have_rows('блоки_03') ) : the_row();  ?>
									<?php   
										$image = get_sub_field("фон");  
										$image2 = get_sub_field("лого");
										$image3 = get_sub_field("лого");
										$image4 = get_sub_field("слайдер");
										$size = 'large';
										$sizeMd = 'card-image';
										$sizeSm = 'full';
									?>
								<div class="swiper-slide">
									<a href="#modal-case" class="d-block text-white link-modal sCases__slide-content">
										<div class="sCases__bg">
											<?php 
													if( !empty( $image ) ): ?>
													<img  class="swiper-lazy" src="#" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>
										 
										</div>
										<div class="sCases__inner">
											<div class="sCases__top-line">
												<div class="sCases__logoes-cont">
													<?php 	foreach ($image2 as $image2) {
																		// var_dump($images7)
																		?>
													<div class="sCases__logo">
														<?php 
													if( !empty( $image2 ) ): ?>
													<img  class="swiper-lazy" src="#" data-src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
											<?php endif; ?>
												 
													</div>
													<?php 	}  ?>
												</div>
												<div class="sCases__headline"><?php echo the_sub_field('заголовок'); ?></div>
											</div>
											<div class="sCases__lower-txt">
												<div class="sCases__top-content">
													<div class="sCases__title"><?php echo the_sub_field('текст'); ?></div>
													<div class="sCases__list"><?php echo the_sub_field('список'); ?></div>
												</div>
												<div class="sCases__footer">
													<div class="sCases__date"><span>Период проведения:</span><span><?php echo the_sub_field('дата'); ?></span>
													</div>
													<div class="sCases__role"><span>Роль:</span><span><?php echo the_sub_field('роль'); ?></span>
													</div>
												</div>
											</div>
										</div>
										<div class="d-none for-model-content">
										<div class="modal-win__caption">
											<div class="sCases__logoes-cont">
													<?php 	foreach ($image3 as $image3) {
																		// var_dump($images7)
																		?>
													<div class="sCases__logo">
														<?php 
													if( !empty( $image3 ) ): ?>
													<img  class="swiper-lazy" src="#" data-src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" />
												<?php endif; ?>
												 
													</div>
													<?php 	}  ?>
											</div>
											<div class="modal-win__row row">
												<div class="modal-win__col col-auto">Название мероприятия: </div>
												<div class="col"><?php echo the_sub_field('заголовок'); ?></div>
											</div>
											<div class="modal-win__row row">
												<div class="modal-win__col col-auto">Дата проведения:</div>
												<div class="col-lg"><?php echo the_sub_field('дата'); ?></div>
											</div>
											<div class="modal-win__row row">
												<div class="modal-win__col col-auto">Заказчик: </div>
												<div class="col-lg"><?php echo the_sub_field('заказчик'); ?></div>
											</div>
											<div class="modal-win__row row">
												<div class="modal-win__col col-auto">Роль: </div>
												<div class="col-lg"><?php echo the_sub_field('роль'); ?></div>
											</div>
											<div class="modal-win__row row">
												<div class="modal-win__col col-auto">Описание : </div>
												<div class="col-lg"><?php echo the_sub_field('описание'); ?> </div>
											</div>
													<?php  if( !empty( $image4 ) ): ?> 
											<div class="modal-win__slider modal-win__slider--js swiper-container">
												<div class="swiper-button-hand swiper-button-hand-prev swiper-button-prev"> </div>
												<div class="swiper-button-hand swiper-button-hand-next swiper-button-next"> </div>
												<div class="swiper-wrapper">
													<?php 	foreach ($image4 as $image4) {
																		// var_dump($images7)
																		?>
													 
														<?php 
													if( !empty( $image4 ) ): ?> 
														<div class="modal-win__slide swiper-slide">
																<img class="swiper-lazy" src="#" data-src="<?php echo esc_url($image4['url']); ?>" alt="<?php echo esc_attr($image4['alt']); ?>"/>
														</div>
													<?php endif; ?>
												 
													 
													<?php 	}  ?> 
												</div>
											</div>
												<?php endif; ?> 
										</div>
									</div>
									</a>
								</div>
									<?php  endwhile;  else :  endif;    ?>
							</div>
						</div>
						<div class="sCases__pugin cases-pugin-js">
						</div>
					</div>
				</div>
			</section>
			<!-- end sCases-->
		 
		 <?php
		 return ob_get_clean();
	
	}

	
	
	/*
	* *****************************************************
	*/
	add_shortcode('sFormAlt', 'sFormAlt_func');
	function sFormAlt_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 $tel = get_field('телефон', 'option');
											 $tel_str = str_replace(" ","", $tel);  
		 ?>
		 <?php  $tel = get_field('телефон', 'option');
						 $tel_str = str_replace(" ","", $tel);  
		 ?>
		 <?php   
								$image = get_field("фотка_04");
								$size =  'full';
							?>
		 
			<!-- start sFormAlt-->
			<div class="sFormAlt section" id="sFormAlt">
				<div class="sFormAlt__bg"><img loading="lazy" src="<?php  echo $get_template_directory_uri ?>/public/img/svg/sForm-rain.svg" alt=""/>
				</div>
				<div class="sFormAlt__container container  wow  animate__fadeInUp">
					<div class="form-wrap">
						
						<div class="form-wrap__man d-none d-md-block">
								<?php 
									if( $image ) {
											echo wp_get_attachment_image( $image, $size );
									}
								?>
						</div>
						<div class="form-wrap__form-content">
							<div class="form-wrap__bg"><img loading="lazy" src="<?php  echo $get_template_directory_uri ?>/public/img/svg/form-rain-inner.svg" alt=""/>
							</div>
							<div class="form-wrap__txt-block">
								<?php echo the_field('текст_04'); ?>
							</div>
							
							<div class="form-wrap__inputs-block">
									<?php echo do_shortcode( '[contact-form-7 id="168" title="Форма"]' ); ?>
									<div class="form-wrap__polite"><span>
											Согласен на обработку
											</span><a href="<?php echo the_field('ссылка_04'); ?>" target="_blank">персональных данных</a>
									</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- end sFormAlt-->
		 
		 <?php
		 return ob_get_clean();
	
	}
	/*
	* *****************************************************
	*/
	add_shortcode('sTeam', 'sTeam_func');
	function sTeam_func()
	{
		 global $get_template_directory_uri, $delay;
		 ob_start();
		 $tel = get_field('телефон', 'option');
											 $tel_str = str_replace(" ","", $tel);  
		 ?>
		 <?php  $tel = get_field('телефон', 'option');
						 $tel_str = str_replace(" ","", $tel);  
		 ?>
		 <?php   
								$image = get_field("фотка_04");
								$size =  'full';
							?>
		 
				<!-- start sTeam-->
			<section class="sTeam section" id="sTeam">
				<div class="sTeam__container container">
					<div class="section-title  wow  animate__fadeInUp">
							<h2><?php echo the_field('заголовок_05'); ?></h2>
					</div>
					<div class="sTeam__slider  wow  animate__fadeInUp">
						<div class="swiper-container partners-slider-js">
							<div class="swiper-wrapper">
								<?php   if( have_rows('блоки') ):    while ( have_rows('блоки') ) : the_row();  ?>
							<?php   
								$image = get_sub_field("лого");
								$image2 = get_sub_field("фон");
								$size = 'medium';
								$sizeSm = 'full';
							?>
								<div class="swiper-slide"><a href="" class="sTeam__inner-link" ><span class="sTeam__top-logo">
										<?php   if( !empty( $image ) ): ?>
													<img  class="swiper-lazy" src="<?php echo the_sub_field('ссылка'); ?>" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>	 
								</span><span class="sTeam__bg">
										<?php   if( !empty( $image2 ) ): ?>
													<img  class="swiper-lazy" src="#" data-src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
									<?php endif; ?>	
									</span></a>
								</div>
						 	<?php  endwhile;  else :  endif;    ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end sTeam-->
		 
		 <?php
		 return ob_get_clean();
	
	}

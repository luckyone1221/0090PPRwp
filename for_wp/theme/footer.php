<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mega
 */
global $get_template_directory_uri, $delay;
		 ob_start();
?>
		<footer class="footer block-with-lazy">
				<div class="container">
					<div class="footer__inner">
						<div class="row">
							<div class="col-md">
								<?php echo the_field('текст_в_подвале'); ?>
								<div class="footer__copy">© <?php echo date('Y'); ?>. <?php echo the_field('копирайт'); ?></div>
							</div>
							<div class="col-xxl-3 col-auto">
								<div class="soc">
								 
									<?php   if( have_rows('соц_сети') ):    while ( have_rows('соц_сети') ) : the_row();  ?>
								<a class="soc__item" href="<?php echo the_sub_field('ссылка'); ?>" target="_blank">
									<svg class="icon icon-<?php echo the_sub_field('название'); ?>">
										<use xlink:href="<?php  echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#<?php echo the_sub_field('название'); ?>"></use>
									</svg></a>
								<?php  endwhile;  else :  endif;    ?>
								</div>
							</div>
							<div class="col-sm-auto text-sm-right"><a class="mb-2" href="<?php echo the_field('политика_конфиденциальности'); ?>">Политика конфиденциальности</a><br/><a href="<?php echo the_field('пользовательское_соглашение'); ?>">Пользовательское соглашение</a></div>
						</div>
					</div>
				</div>
			</footer>
	</div>

	<div class="modal-win modal-win--lg" id="modal-case" style="display: none">
			<div class="row">
				<div class="modal-win__main-col col-md"></div>
				<div class="modal-win__col-aside col-md-auto">
					<div class="form-wrap">
						<div class="form-wrap__title-top">Есть вопросы или хотите организовать мероприятие?
							<div class="text-danger">Напишите нам!</div>
						</div>
						<?php echo do_shortcode( '[contact-form-7 id="168" title="Форма"]' ); ?>
							<div class="modal-win__polite text-white"> Согласен на обработку
								 <a class="text-white tdu" href="<?php echo the_field('ссылка_04'); ?>" target="_blank">персональных данных</a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- #modal-call-->
	 
		<!-- #modal-call-->
	<div class="d-none">
		<div class="form-wrap modal-win modal-form" id="modal-call">
			<div class="text-center">
				<div class="form-wrap__title form-wrap__title--js">
				</div>
				<p>Заполните форму и&nbsp;мы&nbsp;свяжемся с&nbsp;Вами в&nbsp;ближайшее время для уточнения деталей.</p>
			</div>
			<?php echo do_shortcode( '[contact-form-7 id="212" title="Форма в модальном окне"]' ); ?>
				<div class="form-wrap__polite">Отправив эту форму, я&nbsp;подтверждаю достоверность информации и&nbsp;согласие
					с&nbsp;условиями передачи данных.
				</div>
		</div>
		<!-- #modal-call-->
		<div class="form-wrap modal-win modal-form" id="modal-thanks">
			<div class="text-center">
				<div class="form-wrap__title">Спасибо за обращение!
				</div>
				<p>Мы&nbsp;свяжемся с&nbsp;Вами в&nbsp;ближайшее время для уточнения деталей.</p>
			</div>
		</div>
		<!-- #modal-thanks-->
	</div>

<?php wp_footer(); ?>
 
</body>
</html>

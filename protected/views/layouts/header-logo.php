<!-- Begin Логотип  ----------------------------------------------------------->
		<div class="block-logo">
			<div class="row">
				<!--h1>ГРОХОТА ВИБРАЦИОННЫЕ<p>ДЛЯ ТОНКОГО ГРОХОЧЕНИЯ</p></h1-->
				<!--h1><?php //echo Yii::t('main', 'ГРОХОТА ВИБРАЦИОННЫЕ <p>ДЛЯ ТОНКОГО ГРОХОЧЕНИЯ'); ?></h1-->
				<h1><?php

					switch (Yii::app()->controller->id) {
						case 'home':
							echo Yii::t('page', 'screen_home_h1');
							break;
						case 'single_deck_vibrating_screen':
							echo Yii::t('page', 'screen_single_h1');
							break;
						case 'double_deck_vibrating_screen':
							echo Yii::t('page', 'screen_double_h1');
							break;
						case 'dewatering_vibrating_screen':
							echo Yii::t('page', 'screen_dewatering_h1');
							break;
						case 'contact':
							echo Yii::t('page', 'screen_contact_h1');
							break;

					}

				?></h1>

				<div class="wrapper-mainmenu">


					<div class="mainmenu animatedParent">
					    	<div class="row">
						          <a href="single_deck_vibrating_screen " class="banner animated _slowest" data-effect-mouseenter="bounceIn"><div class="maxheight ">
						            <div class="ico mm-gvd1"><img src="/images/ico_mm_gvd1.png"></div><?php echo Yii::t('main', 'Односитный'); ?></div>
						          </a>
						          <a href="double_deck_vibrating_screen" class="banner animated _slowest" data-effect-mouseenter="bounceIn"><div class="maxheight">
						            <div class="ico mm-gvd2"><img src="/images/ico_mm_gvd2.png"></div><?php echo Yii::t('main', 'Двухситный'); ?></div>
						          </a>
						          <a href="dewatering_vibrating_screen" class="banner animated _slowest" data-effect-mouseenter="bounceIn"><div class="maxheight1">
						            <div class="ico mm-gvd1m"><img src="/images/ico_mm_gvd1m.png"></div><?php echo Yii::t('main', 'Обезвоживающий'); ?></div>
						          </a>
						          <a href="contact" class="banner animated _slowest" data-effect-mouseenter="bounceIn"><div class="maxheight1 ">
						            <div class="ico mm-contact"><img src="/images/ico_mm_contact.png"></div><?php echo Yii::t('main', 'Контакты'); ?></div>
						          </a>

					  	</div>
					</div>



					   <span class="mm-corn-lt"></span> <!-- левый верхний уголок -->
					   <span class="mm-corn-rt"></span> <!-- правый верхний -->
					   <span class="mm-corn-lb"></span> <!-- левый нижний -->
					   <span class="mm-corn-rb"></span> <!-- правый нижний -->



				</div>


			</div>
		</div>
<!-- end Логотип  ------------------------------------------------------------->
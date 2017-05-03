<!-- Begin Логотип  ----------------------------------------------------------->
		<div class="block-logo">
			<div class="row">
				<!--h1>ГРОХОТА ВИБРАЦИОННЫЕ<p>ДЛЯ ТОНКОГО ГРОХОЧЕНИЯ</p></h1-->
				<h1><?php echo Yii::t('main', 'ГРОХОТА ВИБРАЦИОННЫЕ <p>ДЛЯ ТОНКОГО ГРОХОЧЕНИЯ'); ?></h1>

				<div class="wrapper-mainmenu">


					<div class="mainmenu">
					    	<div class="row">
						          <a href="single_deck_vibrating_screen" class="banner "><div class="maxheight">
						            <div class="ico mm-gvd1"><img src="/images/ico_mm_gvd1.png"></div><?php echo Yii::t('main', 'Односитный'); ?></div>
						          </a>
						          <a href="double_deck_vibrating_screen" class="banner "><div class="maxheight">
						            <div class="ico mm-gvd2"><img src="/images/ico_mm_gvd2.png"></div><?php echo Yii::t('main', 'Двухситный'); ?></div>
						          </a>
						          <a href="dewatering_vibrating_screen" class="banner "><div class="maxheight1">
						            <div class="ico mm-gvd1m"><img src="/images/ico_mm_gvd1m.png"></div><?php echo Yii::t('main', 'Обезвоживающий'); ?></div>
						          </a>
						          <a href="contact" class="banner "><div class="maxheight1">
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
<div  id="language-selector" style="float:right; margin:5px;">
	<?php
	$this->widget('application.components.widgets.MultiLanguage');
	?>
</div>



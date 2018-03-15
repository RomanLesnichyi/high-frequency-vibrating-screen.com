<div class="navbar  navbar-fixed-bottom " role="navigation" >
	<div class="wrapper">
		<div class="row">
			<div class="navbar-header"> <!-- mini -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- a class="navbar-brand" href="#">TD PROMMASH</a-->
			</div>

			<div class="collapse navbar-collapse ">

				<ul class="nav navbar-nav menu-section">
<!--                    <li class="active">
						<a href="<?php /*echo Yii::app()->request->baseUrl; */?>/home" class="section">Главная</a>
					</li>-->
					<li class="<?php  if ( Yii::app()->controller->id == 'home' )  echo 'active'; ?>">
                        <a href="home" class="section"><?php echo Yii::t('main', 'Главная'); ?></a>
                    </li>

                    <li class="<?php  if ( Yii::app()->controller->id == 'single_deck_vibrating_screen' )  echo 'active'; ?>">
                        <a href="single_deck_vibrating_screen" class="section"><?php echo Yii::t('main', 'Грохот односитный'); ?></a>
                    </li>
                    <li class="<?php  if ( Yii::app()->controller->id == 'double_deck_vibrating_screen' )  echo 'active'; ?>">
                        <a href="double_deck_vibrating_screen" class="section"><?php echo Yii::t('main', 'Грохот двухситный'); ?></a>
                    </li>
                    <li class="<?php  if ( Yii::app()->controller->id == 'dewatering_vibrating_screen' )  echo 'active'; ?>">
                        <a href="dewatering_vibrating_screen" class="section"><?php echo Yii::t('main', 'Грохот обезвоживания'); ?></a>
                    </li>
                    <li class="<?php  if ( Yii::app()->controller->id == 'contact' )  echo 'active'; ?>">
                        <a href="contact" class="section"><?php echo Yii::t('main', 'Контакты'); ?></a>
                    </li>
                </ul>

				<?php 	$this->widget('application.components.widgets.MultiLanguage');	?>


			</div>



			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>




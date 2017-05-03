<?php ?>
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

			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav menu-section">
<!--                    <li class="active">
						<a href="<?php /*echo Yii::app()->request->baseUrl; */?>/home" class="section">Главная</a>
					</li>-->
					<li class="active"><a href="home" class="section"><?php echo Yii::t('main', 'Главная'); ?></a></li>

					<li><a href="single_deck_vibrating_screen" class="section"><?php echo Yii::t('main', 'Грохот односитный'); ?></a></li>
                    <li><a href="double_deck_vibrating_screen" class="section"><?php echo Yii::t('main', 'Грохот двухситный'); ?></a></li>
                    <li><a href="dewatering_vibrating_screen" class="section"><?php echo Yii::t('main', 'Грохот обезвожующий'); ?></a></li>
                    <li><a href="contact" class="section"><?php echo Yii::t('main', 'Контакты'); ?></a></li>
                </ul>



<!--				<ul class="nav navbar-nav navbar-right menu-lng">
                    <div class="titel"></div>
                    <li class="ru"><a href="../navbar/">RU</a></li>
                    <li class="ua active"><a href="../navbar-static-top/">UA</a></li>
                    <li class="us"><a href="../navbar/">US</a></li>
                </ul>-->

			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>
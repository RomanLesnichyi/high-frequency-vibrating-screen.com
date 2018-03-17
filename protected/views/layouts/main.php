<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="ru">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--meta http-equiv="Cache-control" content="no-cache">
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" /-->
    <meta name="yandex-verification" content="a206f8551d8435b8" />
	<!-- reset v2.0  -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->
	<!-- bootstrap  -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">

<!--	<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/RomanLesnichyi/templates.my/880762b8/css/lr_tools.css">-->
<!--	<link rel="stylesheet" type="text/css" href="http://templates.my/css/lr_tools.css">-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/vs_tools.css">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/vs_main.css">
	<?php 	Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . "/css/vs_responsive.css"); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/vs_fonts.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/royal_preloader.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/animations.css">


    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/royal_preloader.js"></script>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vs_functions.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="royal_preloader">
<?php include_once("analyticstracking.php") ?>
<!-- PRELOADER -->
<div id="royal_preloader"></div>

<div id="" class="container-body row" >

	<div id="header" class="">
        <?php require_once(  $this->getLayoutFile('header-logo') ); ?>
	</div><!-- #/header -->



    <div class="page">
        <div class=" content <?=Yii::app()->controller->id;?>">
            <?php echo $content; ?>
        </div>
    </div>


    <div class="clear"></div>

    <div id="footer" class="">
        <?php require_once(  $this->getLayoutFile('header-navbar') ); ?>
    </div><!-- #/footer -->

</div><!-- container-body  -->

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/css3-animate-it.js"></script>
</body>
</html>

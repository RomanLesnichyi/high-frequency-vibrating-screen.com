<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
    <meta http-equiv="Cache-control" content="no-cache">

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



	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vs_functions.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

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

</body>
</html>

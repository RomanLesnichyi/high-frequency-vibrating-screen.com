<?php

class Dewatering_vibrating_screenController extends Controller
{

    protected function beforeAction($action)
    {
        $this->pageTitle = $this->pageTitle = Yii::t('main', 'Грохот вибрационный высокочастотный') . ' - ' . Yii::t('page', 'screen_dewatering_pageTitle');
        Yii::app()->clientScript->registerMetaTag( Yii::t('page', 'screen_dewatering_metaDescription'), 'description');
        Yii::app()->clientScript->registerMetaTag( Yii::t('page', 'screen_dewatering_metaKeywords'), 'keywords');

        Yii::app()->getClientScript()->registerCssFile('/css/vs_home.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/css/vc_oborudovanie.css');
        Yii::app()->getClientScript()->registerCssFile('/css/'.Yii::app()->language.'/vs_multilanguage.css');
        MainHelpers::registerVideoJS();
        return parent::beforeAction($action);
    }


        public function actionIndex()
    {

        $this->render('index');

    }


}













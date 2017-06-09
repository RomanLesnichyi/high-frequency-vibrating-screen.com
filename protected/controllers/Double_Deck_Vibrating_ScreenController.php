<?php

class Double_deck_vibrating_screenController extends Controller
{

    protected function beforeAction($action)
    {
        $this->pageTitle = $this->pageTitle = Yii::t('main', 'Грохот вибрационный высокочастотный') . ' - ' . Yii::t('page', 'screen_double_pageTitle');
        Yii::app()->clientScript->registerMetaTag( Yii::t('page', 'screen_double_metaDescription'), 'description');
        Yii::app()->clientScript->registerMetaTag( Yii::t('page', 'screen_double_metaKeywords'), 'keywords');

        Yii::app()->getClientScript()->registerCssFile('/css/vs_home.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/css/vc_oborudovanie.css');
        MainHelpers::registerVideoJS();
        return parent::beforeAction($action);
    }


    public function actionIndex()
    {

        $this->render('index');

    }


}













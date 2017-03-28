<?php

class Single_Deck_Vibrating_ScreenController extends Controller
{
    protected function beforeAction($action)
    {
        $this->pageTitle = Yii::app()->name . ' - single_deck_vibrating_screen';
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










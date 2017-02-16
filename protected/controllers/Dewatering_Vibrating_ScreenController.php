<?php

class Dewatering_Vibrating_ScreenController extends Controller
{

    protected function beforeAction($action)
    {
        Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/css/vc_oborudovanie.css');

        return parent::beforeAction($action);
    }

    public function actionIndex()
    {

        $this->render('index');

    }


}













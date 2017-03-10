<?php


class HomeController extends Controller
{

        protected function beforeAction($action)
        {
            Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/css/vs_home.css');
            MainHelpers::registerVideoJS();
            return parent::beforeAction($action);
        }

        /**
         * Declares class-based actions.
         */
        public function actions()
        {
        }

        /**
         * This is the default 'index' action that is invoked
         * when an action is not explicitly requested by users.
         */
        public function actionIndex()
        {
            //$page = Pages::model()->findByAttributes(['name' => $this->uniqueid]);
            //$content = Content::model()->findAllByAttributes(['page_id' => $page->id]);
            //$content = array_chunk($content, ceil(count($content) / 2));
            //$this->render('index', ['content' => $content]);
            $this->render('index');

        }



        public function actionSingleDeckVibratingScreen()
        {
            $this->render('index');
        }

        public function actionDoubleDeckVibratingScreen()
        {
            $this->render('index');
        }

            public function actionDewateringVibratingScreen()
        {
            $this->render('index');
        }


}













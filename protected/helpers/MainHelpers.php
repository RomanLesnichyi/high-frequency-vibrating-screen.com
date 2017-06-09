<?php


class MainHelpers
{
	 public $test ='public var test helper';

      public function test() {
          echo 'function test helper';
      }


     public static function registerVideoJS ( ) {
         Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/extensions/video_player/video-js.min.css');
         Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/extensions/video_player/videojs-skin-colors.css');
         Yii::app()->clientScript->registerScriptFile('/extensions/video_player/videojs-ie8.min.js');
         Yii::app()->clientScript->registerScriptFile('/extensions/video_player/video.min.js');
      }







      // функция выделяет домен из url
      public static function getDomain($url)     {
            return parse_url($url, PHP_URL_HOST);
      }




      public static function model($className=__CLASS__)
      {
        return parent::model($className);
      }

}

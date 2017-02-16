<?php


class MyTest  extends CFormModel
{



      public function test() {
          echo 'class MyTest - function test';

      }


      public static function model($className=__CLASS__)
      {
        return parent::model($className);
      }

}

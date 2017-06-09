<?php

class ContactController extends Controller
{


        protected function beforeAction($action)
        {
            $this->pageTitle = $this->pageTitle = Yii::t('main', 'Грохот вибрационный высокочастотный') . ' - ' . Yii::t('page', 'screen_contact_pageTitle');
            Yii::app()->clientScript->registerMetaTag( Yii::t('page', 'screen_contact_metaDescription'), 'description');
            Yii::app()->clientScript->registerMetaTag( Yii::t('page', 'screen_contact_metaKeywords'), 'keywords');

            Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/vs_contact.css');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/vs_map.js");
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/framework/jquery.multifile.js");
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/vs_test.js");


            return parent::beforeAction($action);
        }

        protected function performAjaxValidation($model)
        {
            if(isset($_POST['ajax']) && $_POST['ajax']==='contact-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
        }


        public function actionIndex()
        {

          $modelFormContact = new FormContact();
          $this->performAjaxValidation($modelFormContact);

          if(isset($_POST['FormContact']))  {  //print_r ( $modelFormContact->load(Yii::$app->request->post() )  );
                //echo ' yes post ' ;
                $modelFormContact->attributes = Yii::app()->request->getPost('FormContact');
                //$modelFormContact->files_attachment = CUploadedFile::getInstancesByName('files_attachment');
                // $modelFormContact->file_attachment = CUploadedFile::getInstance($modelFormContact,'file_attachment');

              $lists_files = CUploadedFile::getInstancesByName('files_attachment');
              $modelFormContact->files_attachment = $lists_files;

                if ($modelFormContact->validate()) {// все вернро, тогда какие-то действия

                  //$this->render('confirm', ['model' => $modelFormContact]);
                  $modelFormContact->sendMail($modelFormContact);

                  Yii::app()->user->setFlash('success', Yii::t('main', 'Спасибо  за обращение к нам. Мы ответим Вам как можно скорее.') );
                  $this->refresh();

                  unset ($_POST['FormContact']);
                  $modelFormContact->unsetAttributes();
                }
                else {
                    //echo ' validate error ';render
                    //print_r( $modelFormContact->getErrors());
                    // $modelFormContact->addError('firstName','firstName Неправильное имя.');
                    $allErrors = $modelFormContact->getErrors();
                    Yii::app()->user->setFlash('danger', $allErrors);

                    $this->render('index', ['modelFormContact' => $modelFormContact]);

                }




          }

          else   {
                  //echo ' no post';
              $allErrors = $modelFormContact->getErrors();
              Yii::app()->user->setFlash('danger', $allErrors);
              $this->render('index', ['modelFormContact' => $modelFormContact]);
          }

      }







}









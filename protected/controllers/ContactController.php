<?php

class ContactController extends Controller
{


        protected function beforeAction($action)
        {


            Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/vs_contact.css');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/vs_map.js");



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

                  Yii::app()->user->setFlash('success', "Content successfuly created.");
                  Yii::app()->user->setFlash('ContactFormMessage', "Thank you for contacting us. We will respond to you as soon as possible.");
                  $this->refresh();

                  unset ($_POST['FormContact']);
                  $modelFormContact->unsetAttributes();
                }
                else {
                     //echo ' validate error ';render
                     //print_r( $modelFormContact->getErrors());
                     // $modelFormContact->addError('firstName','firstName Неправильное имя.');
                        $test = $modelFormContact->getErrors();
                      Yii::app()->user->setFlash('danger', 'danger!'.$test);
                      $this->render('index', ['modelFormContact' => $modelFormContact]);

                }




          }

          else   {
                  //echo ' no post';
              $test = $modelFormContact->getErrors();
              Yii::app()->user->setFlash('danger', 'danger!!'.$test);
              $this->render('index', ['modelFormContact' => $modelFormContact]);
          }

      }







}









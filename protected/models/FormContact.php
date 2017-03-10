<?php


class FormContact extends CFormModel
{

    public $email = '';
    public $messages = '';
    public $files_attachment;

    private $sendMail = 'roman.lesnichyi@gmail.com';


    public function rules()
    {
        return array(
            array('email,messages',  'required'),
            array('email', 'email',),
            array('email, messages, files_attachment', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'email' => 'e-mail ',
            'messages' => 'сообщение',
        );
    }

    public function sendMail($model)
    {
        $modelEmailMessage = new YiiMailMessage;
        $modelEmailMessage -> view = "tpl_mail_contact";
        $modelEmailMessage -> subject = 'Mail TD Prommash from < ' . $model->email . ' >';
        $params = array(
            'email' => $model->email,
            'messages' => $model->messages,
        );
        $modelEmailMessage->setBody($params, 'text/html');
        $modelEmailMessage->addTo('roman.lesnichyi@gmail.com');
        $modelEmailMessage->from = 'adm.duplays@gmail.com';


        $lists_files = $model->files_attachment;

        if (isset($model->files_attachment) && count($model->files_attachment) > 0) {
            foreach ($model->files_attachment as $list => $file_attachment) {


                $tmp_name    = $file_attachment->tempName;
                $filename    = $file_attachment->name;

                $new_name=Yii::getPathOfAlias('webroot').'/'.$filename;
                $files_delete[]= $new_name;
                move_uploaded_file($tmp_name, $new_name) ;

                $file_path = $new_name;

                $swiftAttachment = Swift_Attachment::fromPath($file_path);
                $modelEmailMessage->attach($swiftAttachment);


               }
        }









        Yii::app()->mail->send($modelEmailMessage);
        // нужно удалить врменый файл на сервере созданый скриптом
        /*
        foreach($files_delete as $file)
            if(file_exists($file)) {
                unlink($file);
            }*/

    }



    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}

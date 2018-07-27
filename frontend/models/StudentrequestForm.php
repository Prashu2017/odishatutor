<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class StudentrequestForm extends Model
{
    public $student_id;
    public $tutor_id;
    public $name;
    public $email;
    public $mobile;
    public $subject;
    public $message;
    public $time_prefence;
    


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['student_id','tutor_id','name', 'email', 'mobile', 'subject', 'message' ,'time_prefence'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            
        ];
    }

    /**
     * @inheritdoc
     */

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->message)
            ->send();
    }
}

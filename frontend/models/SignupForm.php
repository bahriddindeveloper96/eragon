<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $name;
    public $surname;
    public $fathers_name;
    public $phone;
    
    public $email;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            
            ['phone', 'trim'],
            ['phone', 'required'],
            ['phone', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['phone', 'string', 'min' => 2, 'max' => 255],

            ['name', 'trim'],
            ['name', 'required'],
            ['name', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['name', 'string', 'min' => 2, 'max' => 255],

            ['surname', 'trim'],
            ['surname', 'required'],
            ['surname', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['surname', 'string', 'min' => 2, 'max' => 255],

            ['fathers_name', 'trim'],
            ['fathers_name', 'required'],
            ['fathers_name', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['fathers_name', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        
        if (!$this->validate()) {
            return null;
        }
        
        // echo '<pre>';
        // var_dump($this->validate());die();
        // echo '</pre>';
        $user = new User();
        $user->username = $this->username;
        $user->name = $this->name;
        $user->surname = $this->surname;
        $user->fathers_name = $this->fathers_name;
        $user->phone = $this->phone;
        $user->email = $this->email;
       // $user->setPassword($this->password);
        $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);
        $user->auth_key = Yii::$app->security->generateRandomString();
        //$user->generateAuthKey();
        $user->generateEmailVerificationToken();
        // echo '<pre>';
        // var_dump($user->save());die();
        // echo '</pre';
        

        return $user->save();// && $this->sendEmail($user);
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}

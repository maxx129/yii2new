<?php

namespace frontend\models\forms;

use Yii;
use yii\base\Model;
use frontend\models\User;
/**
 * Description of SignupForm
 *
 * @author Max
 */
class SignupForm extends Model 
{
    public $username;
    public $email;
    public $password;
    
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => User::className()],
            ['username', 'string', 'min' => 2, 'max' => 255],
            
            ['email', 'trim'],
            ['email', 'email'],
            ['email', 'required'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => User::className()],
            
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }
    
    public function save() 
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->created_at = $time = time(); 
            $user->updated_at = $time;
            $user->auth_key = Yii::$app->security->generateRandomString();
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);         
            
            return $user->save();
        }
        return FALSE;
    }
}

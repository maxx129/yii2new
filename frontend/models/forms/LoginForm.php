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
class LoginForm extends Model 
{
    public $username;
    public $password;
    
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['password', 'required'],
        ];
    }
    
 
}

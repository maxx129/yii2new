<?php

namespace frontend\models;

use yii\base\Model;

/**
 * Description of Employee
 *
 * @author Max
 */
class Employee extends Model {
    
    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';
    
    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;
    
            
}

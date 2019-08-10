<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Employee;
use frontend\models\example\Animal;
use frontend\models\example\Human;

/**
 * Description of EmployeeController
 *
 * @author Max
 */
class EmployeeController extends Controller {
    
    public function actionIndex() {
        
        $employee1 = new Employee();
        
        $employee1->firstName = 'John';
        $employee1->lastName = 'Rambo';
        $employee1->middleName = 'Alex';
        $employee1->salary = 1000;
    }
    
    public function actionTest() {
        
        $human1  = new Human();
        $animal1 = new Animal();
        
        $human1->wolk();
        $animal1->wolk();
    }
	
	public function actionRegister() {
		
		return $this->render('register');
	}
	
	public function actionUpdate() {
		
		return $this->render('update');
	}
    
    
    
    
}

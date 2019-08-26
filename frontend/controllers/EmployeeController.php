<?php

namespace frontend\controllers;

use Yii;
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
		
            $model = new Employee;
            $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;
            
            //$formDate = Yii::$app->request->post();
            
            if($model->load(Yii::$app->request->post())) {
                               
                //var_dump($model);die;
                if($model->validate() && $model->save()) {
                    Yii::$app->session->setFlash('success', 'Registered!');
                }
            }
            
            return $this->render('register', [
                'model' => $model,
            ]);
	}
	
	public function actionUpdate() {
		
            $model = new Employee;
            $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;
            
            //$formDate = Yii::$app->request->post();
            
            if(Yii::$app->request->isPost) {
                $model->attributes = Yii::$app->request->post();
                //var_dump($model);die;
                if($model->validate() && $model->save()) {
                    Yii::$app->session->setFlash('success', 'Updated!');
                }
            }
            
            return $this->render('update', [
                'model' => $model,
            ]);
	}
    
    
    
    
}

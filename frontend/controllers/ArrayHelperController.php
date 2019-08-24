<?php

namespace frontend\controllers;

use yii\base\Controller;
use frontend\models\Employee;

/**
 * Description of HtmlHelperController
 *
 * @author Max
 */
class ArrayHelperController extends Controller{
    
    public function actionDemo() {
        
        $employees = Employee::find();
        return $this->render('demo', [
            'employees' => $employees,
        ]);
    }
}

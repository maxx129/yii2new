<?php

namespace frontend\controllers;

use yii\base\Controller;

/**
 * Description of HtmlHelperController
 *
 * @author Max
 */
class HtmlHelperController extends Controller{
    
    public function actionDemo() {
        
        return $this->render('demo');
    }
}

<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\forms\SearchForm;

class SearchController extends Controller
{
    public function actionIndex()
    {
        $model = new SearchForm();
        $result = null;
        
        if ($model->load(Yii::$app->request->post())) {
             $result = $model->search();
        }
		
        return $this->render('index', [
            'model' => $model,
            'result' => $result,
        ]);
    }

}

<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Book;

class BookshopController extends Controller
{
    public function actionIndex() {
                
        return $this->render('index');
    }
    
    public function actionCreate() {
        
        $book = new Book;
        
        if($book->load(Yii::$app->request->post()) && $book->save()) {
            Yii::$app->session->setFlash('success', 'Saved!');
        return $this->refresh();
        }
         
        return $this->render('create', [
            'book' => $book,
        ]);
    }

}



  
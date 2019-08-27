<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;
/**
 * Description of DaoController
 *
 * @author Max
 */
class DaoController extends Controller{
    
    public function actionIndex() {
        
        $db = new \yii\db\Connection([
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ]);
        
        $sql = 'SELECT * FROM city';
        $command = new \yii\db\Command([
            'db'  => $db,
            'sql' => $sql,
            
        ]);
        
        $arrayWithResults = $command->queryAll();
        
        ////////////////////////////////////////
        
        $array = Yii::$app->db->createCommand($sql)->queryAll();
        
        
        var_dump($arrayWithResults);
        echo '<hr>';
        var_dump($array);
        
        
        return $this->render('index');
    }
}

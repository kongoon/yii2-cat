<?php
//BmiController.php
namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\Bmi;

class BmiController extends Controller
{
    #index.php?r=bmi/cal
    /*
    *
    */
    public function actionCal()
    {
        $model = new Bmi();
        //$name = "Manop Kongoon";
        return $this->render('cal', [
            //'name' => $name,
            'model' => $model,
        ]);
    }
}

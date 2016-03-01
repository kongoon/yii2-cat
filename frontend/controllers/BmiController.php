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
        $bmi = null;
        if($model->load(Yii::$app->request->post())){
            $bmi = $model->weight/($model->high*$model->hight);
        }
        //$name = "Manop Kongoon";
        return $this->render('cal', [
            //'name' => $name,
            'model' => $model,
            'bmi' => $bmi,
        ]);
    }
}

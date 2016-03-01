<?php
namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\Post;
use yii\data\ActiveDataProvider;

class PostController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find(),
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC, //SORT_ASC
                ]
            ]
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }
    public function actionCreate()
    {
        $model = new Post();

        return $this->render('create', [
            'model' => $model,
        ]);
    }
}

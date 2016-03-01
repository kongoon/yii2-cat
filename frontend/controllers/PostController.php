<?php
namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\Post;
use yii\data\ActiveDataProvider;
use Yii;

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
        if($model->load(Yii::$app->request->post()))
        {
            $model->user_id = Yii::$app->user->getId();
            if($model->save())
            {
                return $this->redirect(['index']);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    protected function findModel($id)
    {
        $model = Post::findOne($id);

        return $model;
    }

}

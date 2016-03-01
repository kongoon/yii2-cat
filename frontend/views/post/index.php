<?php
use yii\grid\GridView;
use yii\helpers\Html;
?>
<h1>Post List</h1>
<?=Html::a('เพิ่มข้อมูล', ['create'], ['class' => 'btn btn-info'])?>
<?=GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'title',
        'created_at:datetime',
        'updated_at:datetime',
        //'user.username',
        [
            'attribute' => 'user_id',
            'value' => 'user.username',
        ],
        ['class' => 'yii\grid\ActionColumn']
    ]
])?>

<?php
use yii\grid\GridView;
?>
<h1>Post List</h1>
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

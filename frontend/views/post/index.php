<?php
use yii\grid\GridView;
?>
<h1>Post List</h1>
<?=GridView::widget([
    'dataProvider' => $dataProvider
])?>

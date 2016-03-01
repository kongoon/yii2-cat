<?php
use yii\widgets\DetailView;
use yii\helpers\HtmlPurifier;
use yii\helpers\Html;

$this->title = Html::encode($model->title);
 ?>
<h1><?=$this->title?></h1>
<?=HtmlPurifier::process($model->description)?>
<?=DetailView::widget([
    'model' => $model,
    'attributes' => [
        'title',
        'description:html',
        'user.username',
        'created_at:datetime',
        'updated_at:datetime'
    ]
])?>

<h1>Hello</h1>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin()?>
<?=$form->field($model, 'high')?>
<?=$form->field($model, 'weight')?>
<?=Html::submitButton('คำนวณ', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end()?>

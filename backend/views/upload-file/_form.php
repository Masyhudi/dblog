<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UploadedFile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uploaded-file-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model,'file')->fileInput(); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

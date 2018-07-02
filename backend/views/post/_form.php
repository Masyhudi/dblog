<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= ''//$form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= ''//$form->field($model, 'lead_photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(backend\models\Category::selectOptions(),['prompt'=>'--','style'=>'width:60%;']) ?>
    
    <?= $form->field($model, 'lead_text')->widget(CKEditor::className(), [
        'options' => ['rows' => 4],
        'preset' => 'basic'
    ]) ?>
    
    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>
    
    <?= ''//$form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= ''//$form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <?= ''//$form->field($model, 'created_at')->textInput() ?>

    <?= ''//$form->field($model, 'updated_at')->textInput() ?>

    <?= ''//$form->field($model, 'created_by')->textInput() ?>

    <?= ''//$form->field($model, 'updated_by')->textInput() ?>

    <?= ''//$form->field($model, 'category_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>        
        <?= Html::a('Upload File',['/upload-file/create'], ['class' => 'btn btn-default','target'=>'_blank']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

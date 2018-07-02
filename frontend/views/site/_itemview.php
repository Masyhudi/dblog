<?php

use yii\helpers\Html;
?>  
<div class="panel panel-default">
    <div class="panel-body">
        <h2 style="margin-top: 0px;"><?= $model->title; ?> </h2>
        <p><?= ($model->lead_text != NULL) ? $model->lead_text : 'no lead text'; ?></p>
        <a class="btn btn-default" href="<?= yii\helpers\Url::to(['/site/detail', 'id' => $model->id]) ?>" target="_blank">Go Detail &raquo;</a>
    </div>
</div>
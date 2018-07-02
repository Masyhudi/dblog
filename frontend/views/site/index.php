<?php

use yii;
use yii\widgets\ListView;

/* @var $this yii\web\View */

$this->title = 'Post List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-md-9" style="min-height: 600px;">
                <?php
                echo ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemView' => '_itemview',
                ]);
                ?>
            </div>
            <div class="col-md-3" >
                <div class="panel panel-success" style="width: 100%; margin-bottom: 20px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Category</h3>
                    </div>
                    <div class="panel-body">
                        <?= $category ?>
                    </div>
                </div>
                <div class="panel panel-success" style="width: 100%; margin-bottom: 20px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tags</h3>
                    </div>
                    <div class="panel-body">
                        ...
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

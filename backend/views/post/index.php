<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'title',
            //'slug',
            //'lead_photo',
            [
                'attribute'=>'lead_text',
                'format'=>'html'
            ],
            //'content:ntext',
            //'meta_description',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            //'category_id',
//            [
//                'label' => 'EditWCkeditor',
//                'format'=>'html',   
//                'value' => function ($model) {
//                    return Html::a('<i class="glyphicon glyphicon-pencil"></i>&nbsp;',['/post/update','id'=>$model->id]);
//                }
//            ],
//            [
//                'label' => 'EditNoCkeditor',
//                'format'=>'html',   
//                'value' => function ($model) {
//                    return Html::a('<i class="glyphicon glyphicon-edit"></i>&nbsp;',['/post/update-no-ckeditor','id'=>$model->id]);
//                }
//            ],
            [
                'format'=>'html',   
                'value' => function ($model) {
                    return Html::a('<i class="glyphicon glyphicon-eye-open"></i>&nbsp;',['/post/view','id'=>$model->id]);
                }
            ],
        ],
    ]);
    ?>
</div>

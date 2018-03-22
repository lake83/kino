<?php
use app\components\SiteHelper;
use yii\helpers\StringHelper;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $model \app\models\News */
?>

<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="<?=SiteHelper::resized_image($model->image, 340, 200)?>" alt="<?=$model->title?>" />
        <div class="caption">
            <h3><?=$model->title?></h3>
            <p><?=StringHelper::truncateWords(strip_tags($model->description), 15)?></p>
            <p><?=Html::a('Подробнее', ['/films/view', 'slug' => $model->slug], ['class' => 'btn btn-primary'])?></p>
        </div>
    </div>
</div>
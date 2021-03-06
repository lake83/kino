<?php
use app\components\SiteHelper;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model \app\models\Films */

$this->title = $model->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $model->seo_key]);
$this->registerMetaTag(['name' => 'description', 'content' => $model->seo_description]);
?>

<div class="row">
    <div class="col-sm-6 col-md-4">
        <img width="100%" src="<?=SiteHelper::resized_image($model->image, 340, 200)?>" alt="<?=$model->title?>" />
    </div>
    <div class="col-sm-6 col-md-8">
        <h1><?=$model->title?></h1>
        <span class="label label-info"><?=Yii::$app->formatter->asDate($model->created_at, 'php:d F Y')?></span>
        <hr />
        <?=$model->description?>
    </div>
</div>
<br />
<div class="row">
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'year',
        'country',
        'genre',
        'director'
    ]
]);?>
</div>
<?php

use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider \app\models\NewsSearch */

$this->title = 'Новости';

echo ListView::widget([
    'dataProvider' => $dataProvider,
    'layout' => "{items}\n<div class=\"clearfix\"></div>{pager}",
    'itemView' => '_news_item'
]);
?>
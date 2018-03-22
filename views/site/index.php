<?php

use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider \app\models\FilmsSearch */

$this->title = 'Афиша';

echo ListView::widget([
    'dataProvider' => $dataProvider,
    'layout' => "{items}\n<div class=\"clearfix\"></div>{pager}",
    'itemView' => '_film_item'
]);
?>
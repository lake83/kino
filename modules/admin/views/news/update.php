<?php

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = 'Редактирование новости: ' . $model->title;

echo $this->render('_form', ['model' => $model]) ?>
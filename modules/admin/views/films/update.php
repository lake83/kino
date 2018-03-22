<?php

/* @var $this yii\web\View */
/* @var $model app\models\Films */

$this->title = 'Редактирование фильма: ' . $model->title;

echo $this->render('_form', ['model' => $model]) ?>
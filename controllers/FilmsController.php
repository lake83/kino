<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Films;
use yii\web\NotFoundHttpException;

class FilmsController extends Controller
{
    /**
     * Страница фильма.
     *
     * @param string $slug алиас страницы
     * @return string
     * @throws NotFoundHttpException если не удалось
     */
    public function actionView($slug)
    {
        if (!$model = Films::findOne(['slug' => $slug])) {
            throw new NotFoundHttpException('Страница не найдена.');
        }
        return $this->render('view', ['model' => $model]);
    }
}
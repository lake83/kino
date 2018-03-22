<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\News;
use app\models\NewsSearch;
use yii\web\NotFoundHttpException;

class NewsController extends Controller
{
    /**
     * Страница новостей.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch;
        $searchModel->is_active = 1;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }
    
    /**
     * Страница новости.
     *
     * @param string $slug алиас страницы
     * @return string
     * @throws NotFoundHttpException если не удалось
     */
    public function actionView($slug)
    {
        if (!$model = News::findOne(['slug' => $slug])) {
            throw new NotFoundHttpException('Страница не найдена.');
        }
        return $this->render('view', ['model' => $model]);
    }
}
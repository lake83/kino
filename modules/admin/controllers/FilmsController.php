<?php

namespace app\modules\admin\controllers;

/**
 * FilmsController implements the CRUD actions for Films model.
 */
class FilmsController extends AdminController
{
    public $modelClass = 'app\models\Films';
    public $searchModelClass = 'app\models\FilmsSearch';
}
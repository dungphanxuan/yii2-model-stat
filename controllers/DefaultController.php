<?php

namespace backend\modules\chart\controllers;

use yii\web\Controller;

/**
 * Default controller for the `chart` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDemo()
    {
        return $this->render('demo');
    }
}
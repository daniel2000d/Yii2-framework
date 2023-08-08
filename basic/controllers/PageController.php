<?php

namespace app\controllers;

use yii\web\Controller;

class PageController extends Controller
{
    public function actionAbout()
    {
        $this->view->params['sharedVariable']='I am shared';
        return $this->render('about', [
            'a' => 1,
            'b' => 2
        ]);
    }

}
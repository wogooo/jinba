<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * UserController implements the CRUD actions for User model.
 */
class SiteController extends Controller
{
    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionMain()
    {
        $this->layout = false;
        return $this->render('main');
    }

    public function actionForm()
    {
        $this->layout = false;
        $csrfToken = Yii::$app->request->getCsrfToken();
        return $this->render('form',['csrfToken' => $csrfToken]);
    }
}

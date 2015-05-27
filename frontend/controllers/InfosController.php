<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Infos;

class InfosController extends Controller
{
    public function actionIndex()
    {
        $query = Infos::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $infos = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('infos', [
            'infos' => $infos,
            'pagination' => $pagination,
        ]);
    }
}
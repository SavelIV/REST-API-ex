<?php


namespace frontend\controllers;

use common\models\searchers\ProductSearch;
use Yii;
use yii\web\Controller;

class ProductsController extends Controller
{
    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel'  => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }
}
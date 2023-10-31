<?php


namespace backend\controllers;


use common\models\Product;
use common\models\searchers\ProductSearch;
use Yii;
use yii\web\Response;

class ProductsController extends DefaultController
{
    /**
     * @return string
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

    /**
     * @return string|Response
     */
    public function actionCreate()
    {
        $this->product = new Product();

        if ($this->product->load(Yii::$app->request->post())) {
            if ($this->product->save()) {
                Yii::$app->getSession()->setFlash('success', Yii::t('app', 'Продукт добавлен!'));
                return $this->redirect(['index']);
            } else {
                Yii::$app->getSession()->setFlash('danger', Yii::t('app', 'Произошла ошибка при добавлении продукта!'));
            }
        }

        return $this->render('create');
    }

    /**
     * @param $id integer
     * @return string|Response
     */
    public function actionUpdate($id)
    {
        if ($this->product->load(Yii::$app->request->post())) {
            if ($this->product->save()) {
                Yii::$app->getSession()->setFlash('success', Yii::t('app', 'Продукт обновлен!'));
                return $this->refresh();
            } else {
                Yii::$app->getSession()->setFlash('danger', Yii::t('app', 'Произошла ошибка при обновлении продукта!'));
            }
        }

        return $this->render('update');
    }

    /**
     * @param $id integer
     * @return Response
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        if ($this->product->delete()) {
            Yii::$app->getSession()->setFlash('success', Yii::t('app', 'Продукт удален!'));
            return $this->redirect(['index']);
        } else {
            Yii::$app->getSession()->setFlash('danger', Yii::t('app', 'Произошла ошибка при удалении продукта!'));
        }

        return $this->redirect(['update', 'id' => $this->product->product_id]);
    }

}
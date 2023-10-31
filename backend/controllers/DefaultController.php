<?php

namespace backend\controllers;

use common\models\Product;
use Yii;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;

class DefaultController extends Controller
{
    /* @var Product */
    public $product;

    /**
     * @inheritdoc
     * @throws NotFoundHttpException|yii\web\BadRequestHttpException
     * @throws ForbiddenHttpException
     */
    public function beforeAction($action)
    {
        if (!parent::beforeAction($action)) {
            return false;
        }

        if (!Yii::$app->user->identity) {
            throw new ForbiddenHttpException();
        }

        if ($productId = (int)Yii::$app->request->get('id')) {
            $this->product = Product::findOne($productId);
            if (!$this->product) {
                throw new NotFoundHttpException();
            }
        }

        return true;
    }

    /**
     * @inheritdoc
     */
    public function render($view, $params = [])
    {
        return parent::render($view, array_merge($params, [
            'product' => $this->product
        ]));
    }
}

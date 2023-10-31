<?php


namespace common\models\searchers;

use common\models\Product;
use yii\data\ActiveDataProvider;

class ProductSearch extends Product
{
    public function rules()
    {
        return [
            [['title', 'description', 'price'], 'safe']
        ];
    }

    public function search($params = [])
    {
        $query = Product::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere(['and',
            ['product.price' => $this->price],
            ['like', 'product.title', $this->title],
            ['like', 'product.description', $this->description]
        ]);

        return $dataProvider;
    }
}
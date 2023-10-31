<?php


namespace api\resources;


class Product extends \common\models\Product
{
    /**
     * @return string[]
     */
    public function fields()
    {
        return ['product_id', 'title', 'description', 'price'];
    }

    /**
     * @return string[]
     */
    public function extraFields()
    {
        return ['created_at', 'updated_at'];
    }
}
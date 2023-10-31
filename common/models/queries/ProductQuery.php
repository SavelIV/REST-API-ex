<?php

namespace common\models\queries;

use common\models\Product;
use yii\db\ActiveQuery;

/**
 * Defined methods:
 * @method Product|null one($db = null)
 * @method Product[]    all($db = null)
 */
class ProductQuery extends ActiveQuery
{
    /**
     * @return $this
     */
    public function sort()
    {
        return $this->orderBy([
            'product.title' => SORT_ASC
        ]);
    }
}
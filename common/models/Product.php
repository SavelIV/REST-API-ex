<?php

namespace common\models;

use common\models\queries\ProductQuery;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * Database fields:
 *
 * @property integer $product_id
 * @property string  $title
 * @property string  $description
 * @property integer $price
 * @property integer $created_at
 * @property integer $updated_at
 */
class Product extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255],
            [['description'], 'string'],
            [['price'], 'integer', 'min' => 0]
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'          => Yii::t('app', 'ID'),
            'title'       => Yii::t('app', 'Название'),
            'description' => Yii::t('app', 'Описание'),
            'price'       => Yii::t('app', 'Цена')
        ];
    }

    /**
     * @inheritdoc
     * @return ProductQuery
     */
    public static function find()
    {
        return new ProductQuery(get_called_class());
    }

}
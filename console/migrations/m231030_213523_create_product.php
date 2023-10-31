<?php

use yii\db\Migration;

class m231030_213523_create_product extends Migration
{
    public function safeUp()
    {
        $this->createTable('product', [
            'product_id'  => $this->primaryKey(),
            'title'       => $this->string()->notNull(),
            'description' => $this->string(),
            'price'       => $this->integer(),
            'created_at'  => $this->integer()->notNull(),
            'updated_at'  => $this->integer()->notNull(),
            'created_by'  => $this->integer()
        ]);

        $time = time();
        $this->batchInsert(
            'product',
            ['title', 'description', 'price', 'created_at', 'updated_at'],
            [
                ['Товар №1', 'Описание товара №1', '111', $time, $time],
                ['Товар №2', 'Описание товара №2', '222', $time, $time],
                ['Товар №3', 'Описание товара №3', '333', $time, $time],
                ['Товар №4', 'Описание товара №4', '444', $time, $time],
                ['Товар №5', 'Описание товара №5', '555', $time, $time],
                ['Товар №6', 'Описание товара №6', '666', $time, $time],
                ['Товар №7', 'Описание товара №7', '777', $time, $time],
                ['Товар №8', 'Описание товара №8', '888', $time, $time],
                ['Товар №9', 'Описание товара №9', '999', $time, $time]
            ]
        );

        $this->addForeignKey('fk-product-user', 'product', 'created_by', 'user', 'id', 'CASCADE', 'RESTRICT');
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-product-user', 'product');
        $this->dropTable('product');
    }
}

<?php

use yii\db\Migration;

class m231031_104530_insert_admin extends Migration
{
    public function safeUp()
    {
        $this->insert('user', [
            'username'      => 'admin',
            'email'         => 'admin@admin.local',
            'status'        => 10,
            'password_hash' => Yii::$app->security->generatePasswordHash('admin', 10),
            'auth_key'      => Yii::$app->security->generateRandomString(),
            'created_at'    => time(),
            'updated_at'    => time()
        ]);
    }

    public function safeDown()
    {

    }
}

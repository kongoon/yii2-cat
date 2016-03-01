<?php

use yii\db\Migration;

class m160301_034915_create_post extends Migration
{
    public function up()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    public function down()
    {
        $this->dropTable('post');
    }
}

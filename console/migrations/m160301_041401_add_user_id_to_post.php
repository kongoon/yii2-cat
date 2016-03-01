<?php

use yii\db\Migration;

class m160301_041401_add_user_id_to_post extends Migration
{
    public function up()
    {
        $this->addColumn('post', 'user_id', $this->integer()->notNull());
    }

    public function down()
    {
        $this->dropColumn('post', 'user_id');
    }
}

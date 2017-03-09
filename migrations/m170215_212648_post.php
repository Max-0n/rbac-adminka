<?php

use yii\db\Migration;

class m170215_212648_post extends Migration
{
    public function up()
    {
		$this->createTable('post',[
			'id' => $this->primaryKey(),
			'title' => $this->string(),
			'description' => $this->text(),
			'user_id' => $this->integer(),
		]);
    }

    public function down()
    {
	    //For delete table, uncomment that
	    //$this->dropTable('post');
        echo "m170215_212648_post cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

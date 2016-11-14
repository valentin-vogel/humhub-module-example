<?php

use yii\db\Migration;

/**
 * Class m160611_163319_initial
 */
class m160611_163319_initial extends Migration
{
    /**
     * @return void
     */
    public function up()
    {
        $this->createTable('humhub_module_example_base', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'user_id' => $this->integer(11)->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'created_by' => $this->integer(11),
            'updated_at' => $this->dateTime()->notNull(),
            'updated_by' => $this->integer(11)
        ]);
    }

    /**
     * @return bool
     */
    public function down()
    {
        echo "m160611_163319_initial cannot be reverted.\n";

        return false;
    }
}

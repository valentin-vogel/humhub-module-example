<?php

use yii\db\Migration;

/**
 * Class uninstall
 */
class uninstall extends Migration
{
    /**
     * @return bool|void
     */
    public function up()
    {
        $this->dropTable('humhub_module_example_base');
    }

    /**
     * @return bool
     */
    public function down()
    {
        echo "uninstall does not support migration down.\n";
        return false;
    }
}

<?php

use yii\db\Migration;

/**
 * Class m240410_090536_tom_project_table
 */
class m240410_090536_tom_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('tom_project', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('tom_project');
    }

}

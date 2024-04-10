<?php

use yii\db\Migration;

/**
 * Class m240410_090742_tom_task_table
 */
class m240410_090742_tom_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('tom_task', [
            'id' => $this->primaryKey(),
            'project_id' => $this->integer()->notNull(),
            'name' => $this->string(255)->notNull(),
            'start_date' => $this->datetime()->notNull(),
            'end_date' => $this->dateTime()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('tom_task');
    }
}

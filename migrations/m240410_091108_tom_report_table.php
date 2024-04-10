<?php

use app\seeder\DatabaseSeeder;
use yii\db\Migration;

/**
 * Class m240410_091108_tom_report_table
 */
class m240410_091108_tom_report_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('tom_report', [
            'id' => $this->primaryKey(),
            'task_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'percent_done' => $this->integer()->notNull(),
        ]);

        $seeder = new DatabaseSeeder();
        $seeder->seed();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('tom_report');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240410_091108_tom_report_table cannot be reverted.\n";

        return false;
    }
    */
}

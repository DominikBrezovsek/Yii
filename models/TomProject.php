<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tom_project".
 *
 * @property int $id
 * @property string|null $name
 */
class TomProject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tom_project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'default', 'value' => null],
            [['id'], 'integer'],
            [['name'], 'string'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    public function getProjects()
    {
        return $this->find()->all();
    }

    public function getCompletion($project_id)
    {
        $percent = TomProject::find()->join('INNER JOIN', 'tom_task', 'tom_project.id = tom_task.project_id')->join('INNER JOIN', 'tom_report', 'tom_task.id = tom_report.task_id')->where(['tom_project.id' => $project_id])->average('percent_done');
        $formatter = \Yii::$app->formatter;
        return $formatter->asDecimal($percent, 0);
    }

    public function getTasks($project_id) {
        return TomProject::find()->select('tom_report.name')->join('INNER JOIN', 'tom_task', 'tom_project.id = tom_task.project_id')->join('INNER JOIN', 'tom_report', 'tom_task.id = tom_report.task_id')->where(['tom_project.id' => $project_id])->all();
    }
}

<?php

namespace app\seeder;

use app\models\TomTask;

class TomTaskSeeder
{
    public function seed()
    {
        $naloga = [
            'Naloga 1',
            'Naloga 2',
            'Naloga 3',
        ];
        $i  = 1;
        foreach ($naloga as $n) {
            $TaskModel = new TomTask();
            $TaskModel->id = $i;
            $TaskModel->project_id = 1;
            $TaskModel->name = $n;
            $TaskModel->start_date = '2014-05-23 00:00:00';
            $TaskModel->end_date = '2014-05-23 00:00:00';
            $TaskModel->save();
            $i++;
        }

            $TaskModel = new TomTask();
            $TaskModel->id = 4;
            $TaskModel->project_id = 2;
            $TaskModel->name = $naloga[0];
            $TaskModel->start_date = '2014-05-23 00:00:00';
            $TaskModel->end_date = '2014-05-23 00:00:00';
            $TaskModel->save();

            $TaskModel = new TomTask();
            $TaskModel->id = 5;
            $TaskModel->project_id = 3;
            $TaskModel->name = $naloga[0];
            $TaskModel->start_date = '2014-05-23 00:00:00';
            $TaskModel->end_date = '2014-05-23 00:00:00';
            $TaskModel->save();
    }
}
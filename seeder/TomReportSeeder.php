<?php

namespace app\seeder;

use app\models\TomReport;

class TomReportSeeder
{

    public function seed()
    {
        $porocilo = [
            'Porocilo 1',
            'Porocilo 2',
            'Porocilo 3',
        ];

        $reportModel = new TomReport();
        $reportModel->id = 1;
        $reportModel->task_id = 1;
        $reportModel->name = $porocilo[0];
        $reportModel->percent_done = 100;
        $reportModel->save();

        $reportModel = new TomReport();
        $reportModel->id = 2;
        $reportModel->task_id = 2;
        $reportModel->name = $porocilo[1];
        $reportModel->percent_done = 20;
        $reportModel->save();

        $reportModel = new TomReport();
        $reportModel->id = 3;
        $reportModel->task_id = 2;
        $reportModel->name = $porocilo[2];
        $reportModel->percent_done = 30;
        $reportModel->save();

        $reportModel = new TomReport();
        $reportModel->id = 4;
        $reportModel->task_id = 5;
        $reportModel->name = $porocilo[0];
        $reportModel->percent_done = 100;
        $reportModel->save();

        $reportModel = new TomReport();
        $reportModel->id = 5;
        $reportModel->task_id = 4;
        $reportModel->name = $porocilo[0];
        $reportModel->percent_done = 100;
        $reportModel->save();

    }
}
<?php

namespace app\seeder;


class DatabaseSeeder
{
    public function seed()
    {
        $projectSeeder = new TomProjectSeeder();
        $projectSeeder->seed();

        $taskSeeder = new TomTaskSeeder();
        $taskSeeder->seed();

        $reportSeeder = new TomReportSeeder();
        $reportSeeder->seed();
    }

}
<?php

namespace app\seeder;


use app\models\TomProject;

class TomProjectSeeder
{

    public function seed()
    {

        $projects = [
            'Project 1',
            'Project 2',
            'Project 3',
        ];
        $i  = 1;
        foreach ($projects as $project) {
            $projectModel = new TomProject();
            $projectModel->id = $i;
            $projectModel->name = $project;
            $projectModel->save();
            $i++;
        }
    }


}
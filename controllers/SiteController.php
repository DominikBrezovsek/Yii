<?php

namespace app\controllers;

use app\models\TomReport;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\TomProject;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */

    public function actionIndex()
    {
        $model  = new TomProject();
        $progress = "Projekt ni izbran.";
        $tasks = "Izberi projekt za prikaz opravil.";
        return $this->render('index', ['nav' => $model->getProjects(), 'progress' => $progress, 'tasks' => $tasks]);
    }

        public function actionProject($id)
    {
        $model = new TomProject();
        return $this->render('index', ['nav' => $model->getProjects(), 'progress' => $model->getCompletion($id), 'tasks' => $model->getTasks($id)]);
    }





}

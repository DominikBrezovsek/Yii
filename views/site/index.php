<?php

/** @var yii\web\View $this */
/* @var $nav \app\models\TomProject[]|array|\yii\db\ActiveRecord[] */
/* @var $progress bool|int|mixed|null|string */

/* @var $tasks \app\models\TomProject[]|array|string|\yii\db\ActiveRecord[] */

use yii\helpers\Url;


$this->title = 'Testna naloga';
?>
<div class="site-index p-0">
    <div class="vw-100 row justify-content-evenly h-auto p-0 text-center">
        <div class="col bg-body-secondary custom-navbar w-50">
            <div class="flex-column">
                <div class="container">
                    <h1>Seznam projektov</h1>
                    <br>
                    <?php foreach ($nav as $item) : ?>
                        <a href="<?= Url::to(['site/project', 'id' => $item->id]) ?>"
                           class="nav-link"><?= $item->name ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col bg-danger align-content-center">
            <div class="container">
                <?php
                if (strlen($progress) < 4) {
                    echo '
                <div class="progress">
                     <div class="progress-bar" role="progressbar" style="width: ' . $progress . '%" aria-valuenow="' . $progress . '" aria-valuemin="0" aria-valuemax="100">' . $progress . '%</div>
                    </div>';
                } else {
                    echo '<p>' . $progress . '</p>';
                }
                ?>
            </div>
        </div>
        <div class="col second-navbar bg-warning">
            <h1>Seznam opravil</h1>

            <?php if (is_array($tasks)) : ?>
                <ul>
                    <?php foreach ($tasks

                    as $task) : ?>
                    <li>Ime naloge: <?= $task->name ?>
                        <?php endforeach; ?>
                </ul>
            <?php else : ?>
                <p><?= $tasks ?></p>
            <?php endif; ?>

        </div>
    </div>

</div>

<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
$language = Yii::$app->language = Yii::$app->session->get('language', 'sl-SI');
Yii::$app->params['languages'] = ['Slovenian' => 'sl-SI', 'English' => 'en-US'];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode(Yii::t('app', 'Title', [], $language)) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100 p-0 m-0">
<?php $this->beginBody() ?>

<main id="main" class="flex-shrink-0 h-auto p-0 m-0" role="main">
    <div class="container p-0 m-0">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted" >
            <div class="col-md-6 text-center text-md-start">Dominik Brezovšek, <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-center">
                <p><?= Yii::t('app', 'LanOptions', [],$language ) ?></p>
                <?php
                $languages = Yii::$app->params['languages'];
                foreach ($languages as $key => $lang) {
                    echo Html::a(Yii::t('app', $key, [], $language), Url::to(['site/lang', 'lang' => $lang]), ['class' => 'mx-1']);
                }
                ?>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

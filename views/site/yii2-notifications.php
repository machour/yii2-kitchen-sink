<?php

/* @var $this yii\web\View */

use app\models\Notification;
use machour\yii2\adminlte\widgets\Html;

$this->title = 'yii2-notifications';

Notification::notify(Notification::KEY_TEST_NOTICE, 3);

?>

<div class="row">
    <div class="col-md-6">
        <?php \machour\yii2\adminlte\widgets\Box::begin([
            'header' => [
                'title' => 'Yii 2 notifications',
                'icon' => Html::fa('warning'),
            ],
            'type' => 'info',
        ]); ?>
        Look at the bottom right !
        <?php \machour\yii2\adminlte\widgets\Box::footer(); ?>
        <?php foreach (['warning' => 'warning', 'error' => 'danger', 'success' => 'success', 'default' => 'default'] as $type => $css) : ?>
        <?= Html::a(ucfirst($type),
                ['site/yii2-notifications', 'type' => $type, 'key' => 'test_' . $type],
                ['class' => 'btn btn-' . $css]) ?>
        <?php endforeach ?>
        <?php \machour\yii2\adminlte\widgets\Box::end(); ?>
    </div>
</div>

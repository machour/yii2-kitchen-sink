<?php

/* @var $this yii\web\View */

use machour\yii2\adminlte\widgets\Html;

$this->title = 'Welcome to the Kitchen Sink';

?>

<div class="row">
    <div class="col-md-6">
        <?php \machour\yii2\adminlte\widgets\Box::begin([
            'header' => [
                'title' => 'What is this website ?',
                'icon' => Html::fa('question'),
            ],
            'type' => 'info',
        ]); ?>
        <p>
            This web is my Yii 2 kitchen sink, where I develop and show my Yii 2 extensions.
        </p>
        <p>
            It's based on the <a href="https://almsaeedstudio.com/preview">AdminLTE</a> free template,
            and uses <a href="https://github.com/machour/yii2-adminlte-widgets">machour/yii2-adminlte-widgets</a>
            on top of <a href="https://github.com/dmstr/yii2-adminlte-asset">dmstr/yii2-adminlte-assets</a>
            to ease Yii2 integration.
        </p>
        <p>
            This web site source code is available in this GitHub
            <a href="https://github.com/machour/yii2-kitchen-sink">repository</a>.
        </p>
        <?php \machour\yii2\adminlte\widgets\Box::end(); ?>
    </div>
</div>

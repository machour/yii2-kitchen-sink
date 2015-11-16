<?php

namespace app\models;

use Yii;
use machour\yii2\notifications\models\Notification as BaseNotification;

class Notification extends BaseNotification
{

    /**
     * A warning message notification
     */
    const KEY_TEST_WARNING = 'test_warning';
    /**
     * An error message notification
     */
    const KEY_TEST_ERROR = 'test_error';
    /**
     * A success message notification
     */
    const KEY_TEST_SUCCESS = 'test_success';
    /**
     * A notice message notification
     */
    const KEY_TEST_NOTICE = 'test_default';

    /**
     * @var array Holds all usable notifications
     */
    public static $keys = [
        self::KEY_TEST_WARNING,
        self::KEY_TEST_ERROR,
        self::KEY_TEST_SUCCESS,
        self::KEY_TEST_NOTICE,
    ];

    /**
     * @inheritdoc
     */
    public function getTitle()
    {
        switch ($this->key) {
            case self::KEY_TEST_WARNING:
                return Yii::t('app', 'Quota almost full');

            case self::KEY_TEST_ERROR:
                return Yii::t('app', 'Disk full');

            case self::KEY_TEST_SUCCESS:
                return Yii::t('app', 'It\'s a success!');

            case self::KEY_TEST_NOTICE:
                return Yii::t('app', 'Did you notice?');
        }
    }

    /**
     * @inheritdoc
     */
    public function getDescription()
    {
        switch ($this->key) {
            case self::KEY_TEST_WARNING:
                return Yii::t('app', 'You are using 89% of the total space');

            case self::KEY_TEST_ERROR:
                return Yii::t('app', 'You should buy more space immediately');

            case self::KEY_TEST_SUCCESS:
                return Yii::t('app', 'You did it man, we are proud of you!');

            case self::KEY_TEST_NOTICE:
                return Yii::t('app', 'What?');
        }
    }

    /**
     * @inheritdoc
     */
    public function getRoute()
    {
        return ['/site/index'];
    }

}
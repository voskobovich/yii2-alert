<?php

namespace voskobovich\alert\helpers;

use Yii;
use yii\base\Object;


/**
 * Class AlertHelper
 * @package voskobovich\alert\helpers
 */
class AlertHelper extends Object
{
    /**
     * @param $body
     */
    public static function success($body)
    {
        if (!empty(Yii::$app->session)) {
            Yii::$app->session->setFlash('success', $body);
        }
    }

    /**
     * @param $body
     */
    public static function error($body)
    {
        if (!empty(Yii::$app->session)) {
            Yii::$app->session->setFlash('danger', $body);
        }
    }

    /**
     * @param $body
     */
    public static function info($body)
    {
        if (!empty(Yii::$app->session)) {
            Yii::$app->session->setFlash('info', $body);
        }
    }

    /**
     * @param $body
     */
    public static function warning($body)
    {
        if (!empty(Yii::$app->session)) {
            Yii::$app->session->setFlash('warning', $body);
        }
    }

    /**
     * @param $body
     */
    public static function danger($body)
    {
        if (!empty(Yii::$app->session)) {
            Yii::$app->session->setFlash('danger', $body);
        }
    }
}
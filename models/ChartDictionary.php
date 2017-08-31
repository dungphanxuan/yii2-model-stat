<?php
/**
 * Created by PhpStorm.
 * User: dungphanxuan
 * Date: 6/9/2017
 * Time: 11:51 AM
 */

namespace dungphanxuan\chart\models;

use Yii;

abstract class ChartDictionary
{
    const TIMESTAMP = 1;
    const DATETIME = 2;
    const DATE = 3;

    public static function all()
    {
        return [
            self::TIMESTAMP => 'Timestamp',
            self::DATETIME  => 'Datetime',
            self::DATE      => 'Date',
        ];
    }

    public static function get($type)
    {
        $all = self::all();

        if (isset($all[$type])) {
            return $all[$type];
        }

        return 'Not set';
    }
}
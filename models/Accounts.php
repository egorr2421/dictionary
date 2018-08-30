<?php
/**
 * Created by PhpStorm.
 * User: Egor
 * Date: 27.08.2018
 * Time: 14:28
 */

namespace app\models;


use yii\db\ActiveRecord;

class Accounts extends ActiveRecord
{
    public static function tableName()
    {
        return '{{accounts}}';
    }
}
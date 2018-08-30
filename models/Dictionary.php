<?php
/**
 * Created by PhpStorm.
 * User: Egor
 * Date: 28.08.2018
 * Time: 23:48
 */

namespace app\models;


use yii\db\ActiveRecord;

class Dictionary extends ActiveRecord
{
    public static function tableName()
    {
        return '{{irregular_verbs}}';
    }
}
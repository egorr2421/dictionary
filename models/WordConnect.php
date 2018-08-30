<?php
/**
 * Created by PhpStorm.
 * User: Egor
 * Date: 29.08.2018
 * Time: 14:24
 */

namespace app\models;


use yii\db\ActiveRecord;

class WordConnect extends ActiveRecord
{
    public static function tableName()
    {
        return '{{word_connect}}';
    }


}
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
    public function rules()
    {
        return [
            ['infinitive','string', 'length' => [0, 40]],
            ['infinitive','required','message'=>'Wrong infinitive'],
            ['past_simple','string', 'length' => [0, 40]],
            ['past_simple','required','message'=>'Wrong past simple'],
            ['past_participle','string', 'length' => [0, 40]],
            ['past_participle','required','message'=>'Wrong past participle'],
            ['translation','string', 'length' => [0, 100]],
            ['translation','required','message'=>'Wrong translation'],
            ];
    }
}
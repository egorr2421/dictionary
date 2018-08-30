<?php
/**
 * Created by PhpStorm.
 * User: Egor
 * Date: 27.08.2018
 * Time: 23:46
 */

namespace app\models;


use yii\base\Model;

class WorkAccount extends Model
{
    public $login;
    public $pass;
    public $email;
    public $words = null;
    const SCENARIO_WORK = 'work';


    public function scenarios()
    {
        $scenarios = parent::scenarios ();
        $scenarios[self::SCENARIO_WORK] = ['login', 'pass','email'];
        return $scenarios;
    }
    public function rules()
    {
        return  [
            ['login', 'required' , 'message' => 'Wrong Login', 'on' => self::SCENARIO_WORK]
        ];

    }
    public function addWord(){
        $newCon = new WordConnect();
        $newCon->id_user = Accounts::find ()->where(['name'=>$this->login])->one ()->id;
        $newCon->id_word = $this->words;
        if(WordConnect::find ()->where(['id_word'=>$this->words,'id_user'=>$newCon->id_user])->one ()){
            return false;
        }
        $newCon->save();
        return true;
    }

    public function getWords(){
        $this->words=null;

        $idUser = Accounts::find ('id')->where(['name'=>$this->login ,'passwd' => $this->pass])->one()->id;
        $allWord = WordConnect::find ()->where(['id_user'=>$idUser])->all ();
        foreach($allWord as $word){
            $this->words[]=Dictionary::find ()->where(['id'=>$word->id_word])->one ()->toArray ();
        }
        return $this->words;
    }
}
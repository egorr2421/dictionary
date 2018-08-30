<?php
/**
 * Created by PhpStorm.
 * User: Egor
 * Date: 25.08.2018
 * Time: 13:12
 */

namespace app\models;
use Yii;
use yii\base\Model;

class Users extends Model
{
        public $login;
        public $pass;
        public  $email;


        const SCENARIO_LOGIN = 'login';
        const SCENARIO_REGISTER = 'register';


        public function scenarios()
        {
            $scenarios = parent::scenarios ();
            $scenarios[self::SCENARIO_LOGIN] = ['login', 'pass'];
            $scenarios[self::SCENARIO_REGISTER ] = ['login', 'pass','email'];
            return $scenarios;
        }

        public function rules()
        {
            return [
                ['login', 'required' , 'message'=>'Wrong Login', 'on' => self::SCENARIO_LOGIN ],
                [ 'pass', 'required' , 'message'=>'Wrong password', 'on' => self::SCENARIO_LOGIN ],

                [ 'login', 'required' , 'message'=>'Wrong Login', 'on' => self::SCENARIO_REGISTER ],
                [ 'pass', 'required' , 'message'=>'Wrong password', 'on' => self::SCENARIO_REGISTER ],
                [ 'email', 'required' , 'message'=>'Wrong E-mail', 'on' => self::SCENARIO_REGISTER ],
                [ 'email', 'email' , 'message'=>'Incorrect E-mail', 'on' => self::SCENARIO_REGISTER ],
            ];
        }
        public function  validateInDatabase(){
            if($this->scenario==self::SCENARIO_REGISTER) {
                if ((Accounts::find ()->where (['name' => $this->login])
                    ->orWhere (['Email' => $this->email])
                    ->one ())) {
                    $this->addError ('login', 'Incorrect login or Email');
                } else {
                    return true;
                }
            }
            if($this->scenario==self::SCENARIO_LOGIN){

                    if((Accounts::find ()->where(['name'=>$this->login ,'passwd' => $this->pass])->one())){
                     $this->email = Accounts::find ('Email')
                         ->where(['name'=>$this->login ,'passwd' => $this->pass])
                         ->one()->Email;
                        return true;
                    }else{
                        $this->addError ('login','Incorrect Pass or login');
                }
            }
            return false;
        }
        public function getPassAndLogin(){
            $ans = Accounts::find ()->one ()->attributes;
            return $ans;
        }
        public function register(){
//            $query = "INSERT INTO `accounts` (`name`,`passwd`,`Email`) VALUES ('$this->login' , '$this->pass' , '$this->email ' )";
//            \YII::$app->db->createCommand ($query)->execute();
            $newUser = new Accounts();
            $newUser->name= $this->login;
            $newUser->passwd=$this->pass;
            $newUser->Email=$this->email;
            $newUser->save ();

        }
}
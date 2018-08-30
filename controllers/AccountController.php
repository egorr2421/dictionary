<?php
/**
 * Created by PhpStorm.
 * User: Egor
 * Date: 27.08.2018
 * Time: 20:36
 */

namespace app\controllers;
use app\models\Users;
use app\models\WorkAccount;
use yii\web\Controller;

class AccountController extends Controller
{
    public function actionIndex()
    {
//        \Yii::$app->session->destroy ();
        $model = new WorkAccount();
        $model->scenario = WorkAccount::SCENARIO_WORK;
        $model->setAttributes(\Yii::$app->session->get ('user'));
//        debug ($model->getWords());
//        die();
        if(\Yii::$app->session->get('user')){
            return $this->render('account',['model'=>$model]);
        }else{
        return $this->redirect(\Yii::$app->urlManager->createUrl (['main/login']));

        }
    }
     public function  actionExit()
     {
         \Yii::$app->session->destroy ();
         return $this->redirect(\Yii::$app->urlManager->createUrl (['main/login']));
     }

}
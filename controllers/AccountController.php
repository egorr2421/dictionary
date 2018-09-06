<?php
/**
 * Created by PhpStorm.
 * User: Egor
 * Date: 27.08.2018
 * Time: 20:36
 */

namespace app\controllers;
use app\models\Dictionary;
use app\models\Users;
use app\models\WorkAccount;
use yii\web\Controller;

class AccountController extends Controller
{
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }
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
    public function actionAdmin()
    {
        if (\Yii::$app->session->get ('user')['login'] == 'admin'){
            $model = new Dictionary();
            $model->infinitive = \Yii::$app->request->post ('infinitive');
            $model->past_simple = \Yii::$app->request->post ('simple');
            $model->past_participle = \Yii::$app->request->post ('part');
            $model->translation = \Yii::$app->request->post ('translation');
            if($model->save()){
                return json_encode (['a' => 'ok']);
            }
        }
        return json_encode (['a' => $model->getFirstErrors ()]);
    }

    public function  actionExit()
     {
         \Yii::$app->session->destroy ();
         return $this->redirect(\Yii::$app->urlManager->createUrl (['main/login']));
     }

}
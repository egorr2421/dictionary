<?php
/**
 * Created by PhpStorm.
 * User: Egor
 * Date: 29.07.2018
 * Time: 19:04
 */

namespace app\controllers;
use app\models\Dictionary;
use app\models\WorkAccount;
use yii\helpers\Html;
use app\models\Users;
use yii\web\Controller;

class MainController extends Controller
{
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionDictionary()
    {
        if(\Yii::$app->request->isAjax) {
            if (\Yii::$app->session->get ('user') && \Yii::$app->request->isPost ) {
                $model = new WorkAccount();
                $model->login = \Yii::$app->session->get ('user')['login'];
                $model->words = \Yii::$app->request->post ('word');
                if ($model->addWord ()) {
                    return json_encode (['a' => 'succesful']);
                }
                return json_encode (['a' => 'false']);
            }elseif (\Yii::$app->request->isGet){


                  $result = Dictionary::find ()
                      ->orderBy ('infinitive')
                      ->limit (10)
                      ->offset (\Yii::$app->request->get ('offset'))
                      ->all ();
                    $number=0;
                  foreach ($result  as $key => $value){
                    $mas[]=$value->toArray();
                    $number++;
                  }

                return json_encode(['mas'=>$mas,'a'=>'succesful','number'=>$number]);
            }
        }
        return $this->render('dictionary',[
            'words' => Dictionary::find ()->orderBy ('infinitive')->limit (10)->offset (0) ->all (),
        ]);
    }

    public function actionLogin()
    {
        \Yii::$app->session->destroy ();
        if(\Yii::$app->request->isPost){
        $model = new \app\models\Users();
        $model->scenario= Users::SCENARIO_LOGIN;
        $model->login =  Html::encode (\Yii::$app->request->post('login'));
        $model->pass =  Html::encode (\Yii::$app->request->post('pass'));
                if($model->validate () && $model->validateInDatabase ()){
                    \Yii::$app->session->set('user',$model->toArray ());
                    return $this->redirect(\Yii::$app->urlManager->createUrl (['account/index']));
                }else{
                    return $this->render('login',[
                        'model' =>$model]);
                }
        }else{
            return $this->render('login');
        }
    }


    public function actionRegister()
    {
        \Yii::$app->session->destroy ();
        if(\Yii::$app->request->isPost) {
            $model = new \app\models\Users();
            $model->scenario = Users::SCENARIO_REGISTER;

            $model->login =  Html::encode (\Yii::$app->request->post ('login'));
            $model->pass  =  Html::encode (\Yii::$app->request->post ('pass'));
            $model->email =  Html::encode (\Yii::$app->request->post ('email'));

            if($model->validate () &&$model->validateInDatabase ()){
                $model->register();
                \Yii::$app->session->set('user',$model->toArray ());
                return $this->redirect(\Yii::$app->urlManager->createUrl (['account/index']));

            }else{
                return $this->render('register',[
                    'model' =>$model]);
            }
        }else{
            return $this->render('register');
        }
    }
}
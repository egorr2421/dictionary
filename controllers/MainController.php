<?php
/**
 * Created by PhpStorm.
 * User: Egor
 * Date: 29.07.2018
 * Time: 19:04
 */

namespace app\controllers;
use yii\web\Controller;

class MainController extends Controller
{
     public function actionIndex(){
         return "hello word";

     }
}
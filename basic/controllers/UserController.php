<?php

namespace app\controllers;

use yii\web\Controller;

class UserController
{
    public function actionIndex()
    {
//       $db= new Connection([
//            'dsn'=>'mysql:host=localhost;dbname=yii2_course',
//            'username'=>'root',
//            'password'=>"",
//            'charset'=>'utf8mb4',
////            'tablePrefix'=>""
//        ]);
        $db = \Yii::$app->db;
        $users = $db->createCommand("Select * FROM user")->queryAll();
        echo '<pre>';
        var_dump($users);
        echo '<pre>';
        return "List of users";
    }


    public function actionCreate()
    {
        return "User created";
    }

    public function actionUpdate()
    {
        return "User updated";
    }

    public function actionDelete()
    {
        return "User deleted";
    }
}
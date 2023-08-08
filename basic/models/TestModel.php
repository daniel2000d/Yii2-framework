<?php

namespace app\models;

use yii\base\Model;

class TestModel extends  Model
{
    public $name;
    public $surname;
    public $email;
    public $myAge;


    public function AttributeLabel()
    {
        return [
            'name' => 'Enter your name',
        'age' =>'your age'
    ];
}


    public function rules(){
        return [
            ['name','required']
        ];
    }
}
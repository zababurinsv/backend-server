<?php
/**
 * User: Sergey Zababurin
 * Date: 14.04.2019
 * Time: 15:00
 */
namespace backend\models;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}

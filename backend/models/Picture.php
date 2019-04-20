<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "picture".
 *
 * @property int $id
 * @property string $object
 * @property string $code
 * @property string $name
 * @property int $population
 */
class Picture extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'picture';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['object', 'code', 'name', 'population'], 'required'],
            [['population'], 'integer'],
            [['object', 'name'], 'string', 'max' => 45],
            [['code'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'object' => 'Object',
            'code' => 'Code',
            'name' => 'Name',
            'population' => 'Population',
        ];
    }
}

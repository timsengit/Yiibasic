<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $pathOfPic
 * @property string $adder
 * @property integer $addTime
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['addTime'], 'integer'],
            [['name', 'pathOfPic', 'adder'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'pathOfPic' => 'Path Of Pic',
            'adder' => 'Adder',
            'addTime' => 'Add Time',
        ];
    }
}

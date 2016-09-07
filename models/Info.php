<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property integer $id
 * @property string $title
 * @property string $info
 * @property string $adder
 * @property string $adderTime
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adderTime'], 'safe'],
            [['title', 'info', 'adder'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'info' => 'Info',
            'adder' => 'Adder',
            'adderTime' => 'Adder Time',
        ];
    }
}

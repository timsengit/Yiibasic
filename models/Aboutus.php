<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aboutus".
 *
 * @property integer $id
 * @property string $aboutus
 */
class Aboutus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aboutus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aboutus'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'aboutus' => 'Aboutus',
        ];
    }
}

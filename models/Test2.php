<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/9/1
 * Time: 23:32
 */
namespace app\models;

use yii\db\ActiveRecord;

class Test2 extends ActiveRecord
{

    public function rules()
    {
        return [
            ['id', 'integer'],
            ['title', 'string', 'length' => [0, 5]],
        ];
    }
}
